import * as fcl from "@onflow/fcl"
import * as t from "@onflow/types"

export async function getProfileScript(address) {
    if (address == null) return null

    return fcl
        .send([
            fcl.script`
import FungibleToken from 0xFungible
import FlowToken from 0xFlowToken
import FIND from 0xFind
import Profile from 0xFindProfile

pub struct AddressStatus {

  pub(set) var address: Address
  pub(set) var name: String?
  pub(set) var balance: UFix64
  init (_ address:Address) {
    self.address = address
    self.balance = 0.0
    self.name = nil
  }
}

// This script checks that the accounts are set up correctly for the marketplace tutorial.

pub fun main(address:Address) : AddressStatus {
    // get the accounts' public address objects
    let account = getAccount(address)
    let status = AddressStatus(address)

    if let vault = account.getCapability(/public/flowTokenBalance).borrow<&FlowToken.Vault{FungibleToken.Balance}>() {
       status.balance = vault.balance
    }


    let leaseCap = account.getCapability<&FIND.LeaseCollection{FIND.LeaseCollectionPublic}>(FIND.LeasePublicPath)

    //we do have leases
    if leaseCap.check() {
        let profile= Profile.find(address).asProfile()
        let leases = leaseCap.borrow()!.getLeaseInformation()
        var time : UFix64? = nil
        var name :String? = nil
        var profileName :String? = nil

        for lease in leases {

            //filter out all leases that are FREE or LOCKED since they are not actice
            if lease.status != "TAKEN" {
                continue
            }

            //if we have not set a findName in profile we find the one that has the least validUntil, first registerd
            if profile.findName == "" {
                if time == nil || lease.validUntil < time! {
                    time = lease.validUntil
                    name = lease.name
                }
            } else if profile.findName == lease.name {
                profileName = lease.name
            }
        }

        if(profileName != nil){
            status.name = profileName
        } else if(name != nil) {
            status.name = name
        }

    }


    return status

}
`,
            fcl.args([fcl.arg(address, t.Address)]),
        ])
        .then(fcl.decode);
}
