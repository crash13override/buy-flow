<div x-show="hasDapperWallet == 'yes'">

    <div class="option-row">
        <strong class="title">Did you complete the KYC process to <span class="highlight-txt">verify your identity</span> with Dapper?</strong>
        <ul class="btn-list">
            <li><button @click.prevent.stop="hasCompletedKyc = 'yes';" class="btn-o" x-bind:class="hasCompletedKyc == 'yes' ? 'active' : ''">Yes</button></li>
            <li><button @click.prevent.stop="hasCompletedKyc = 'no';" class="btn-o" x-bind:class="hasCompletedKyc == 'no' ? 'active' : ''">No</button></li>
        </ul>
    </div>


    <section class="timeline-section" x-show="hasCompletedKyc == 'no'">
        <strong class="timeline-title">Identity Verification Instructions</strong>
        <div class="timeline">
            <div class="timeline-heading">
                <span class="no">1</span>
                <h2>VERIFY YOUR <span class="highlight-txt">DAPPER WALLET</span> TO ENABLE THE <span class="highlight-txt">FLOW TOKEN</span></h2>
                <div class="btn-wrap">
                    <a href="https://accounts.meetdapper.com/payment" target="_blank" class="btn-o"><img src="/images/icon-dapper.png" alt="" width="38">Open Dapper Wallet</a>
                </div>
            </div>
            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/get-started-dapper/01-Identity-Check.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>Open Payment Methods tab</h3>
                        <p>Click on the <b>Start Identity Check</b> button to initiate the process.</p>
                    </div>
                </div>
            </div>
            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/get-started-dapper/02-Identity-Check.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>Complete Verification Process</h3>
                        <p>Upload the necessary documents and enter the details to complete the KYC process and unlock the FLOW wallet.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="option-row" x-show="hasCompletedKyc">
        <strong class="title" x-show="hasCompletedKyc == 'no'"><span class="highlight-txt">Well done!</span> We're now ready to add some <span class="highlight-txt">FLOW</span> in your wallet!</strong>
        <strong class="title">Have you ever bought any <span class="highlight-txt">crypto currency</span>?</strong>
        <ul class="btn-list">
            <li><button @click.prevent.stop="hasCrypto = 'yes'; cryptoWallet = null;" class="btn-o" x-bind:class="hasCrypto == 'yes' ? 'active' : ''">Yes</button></li>
            <li><button @click.prevent.stop="hasCrypto = 'no'; cryptoWallet = 'dapper';" class="btn-o" x-bind:class="hasCrypto == 'no' ? 'active' : ''">No</button></li>
        </ul>
    </div>
    <div class="option-row"  x-show="hasCrypto == 'yes'">
        <strong class="title">In which exchange or wallet do you store your crypto?</strong>
        <ul class="btn-list">
            <li><button @click.prevent.stop="cryptoWallet = 'metamask'" x-bind:class="cryptoWallet == 'metamask' ? 'active' : ''" class="btn-o"><img src="/images/icon-metamask.svg" alt="" width="37">MetaMask</button></li>
            <li><button @click.prevent.stop="cryptoWallet = 'kraken'" x-bind:class="cryptoWallet == 'kraken' ? 'active' : ''" class="btn-o"><img src="/images/icon-kraken.svg" alt="" width="40">Kraken</button></li>
            <li><button @click.prevent.stop="cryptoWallet = 'crypto'" x-bind:class="cryptoWallet == 'crypto' ? 'active' : ''" class="btn-o"><img src="/images/icon-crypto.svg" alt="" width="38">Crypto.com</button></li>
            <li><button @click.prevent.stop="cryptoWallet = 'binance'" x-bind:class="cryptoWallet == 'binance' ? 'active' : ''" class="btn-o"><img src="/images/icon-binance.svg" alt="" width="38">Binance</button></li>
            <li><button @click.prevent.stop="cryptoWallet = 'other'" x-bind:class="cryptoWallet == 'other' ? 'active' : ''" class="btn-o">Other</button></li>
        </ul>
    </div>



    <section class="timeline-section" x-show="cryptoWallet == 'metamask'">
        <strong class="timeline-title">MetaMask Instructions</strong>
        <div class="timeline">
            <div class="timeline-heading">
                <span class="no">1</span>
                <h2>USE UNISWAP TO CONVERT <span class="highlight-txt">ETH</span> TO <span class="highlight-txt">WFLOW</span></h2>
                <div class="btn-wrap">
                    <a href="https://app.uniswap.org/#/swap?inputCurrency=ETH&outputCurrency=0x5c147e74d63b1d31aa3fd78eb229b65161983b2b&chain=mainnet" target="_blank" class="btn-o btn-pink"><img src="/images/icon-uniswap.svg" alt="" width="38">Open Uniswap</a>
                </div>
            </div>
            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/a-img10.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>Connect your MetaMask wallet to Uniswap</h3>
                        <p>Once you have opened the Uniswap app click <b>Connect Wallet</b> and choose MetaMask.</p>
                    </div>
                </div>
            </div>
            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/a-img11.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>Convert ETH to WFLOW</h3>
                        <p>Enter the amount of ETH in the top input field that you’d like to convert to WFLOW (Wrapped Flow).</p>
                        <p>Then click the <b>Swap</b> button.</p>
                    </div>
                </div>
            </div>
            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/a-img12.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>Approve the transaction</h3>
                        <p>Approve the transaction and wait for it to be sealed. Once complete the WFLOW will appear in your MetaMask wallet.</p>
                    </div>
                </div>
            </div>

            <div class="timeline-heading">
                <span class="no">2</span>
                <h2>use blocto to teleport <span class="highlight-txt">WFLOW</span> TO <span class="highlight-txt">flow</span></h2>
                <div class="btn-wrap">
                    <a href="https://swap.blocto.app/#/teleport?inputCurrency=0x5c147e74D63B1D31AA3Fd78Eb229B65161983B2b&outputCurrency=0x1654653399040a61" target="_blank" class="btn-o"><img src="/images/icon-bloctoswap.svg" alt="" width="29">Open BloctoSwap Teleport</a>
                </div>
            </div>
            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/a-img13.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>Connect your FLOW wallet to BloctoSwap</h3>
                        <p>This will link your Blocto Wallet with Blocto Swap to enable you to Teleport currency.</p>
                        <p>Just click the <b>Confirm</b> button to complete the Flow sign in.</p>
                    </div>
                </div>
            </div>
            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/a-img14.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>Connect your MetaMask to BloctoSwap</h3>
                        <p>Click <b>Connect Wallets</b> and then select <b>Connect to Ethereum account</b> and choose <b>MetaMask</b>.
                        </p>
                    </div>
                </div>
            </div>
            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/a-img15.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>Teleport your WFLOW to FLOW</h3>
                        <p>Enter the amount of WFLOW you’d like to transfer from Metamask to your Blocto wallet and then then click the <b>Approve WFLOW</b> button</p>
                    </div>
                </div>
            </div>
            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/a-img16.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>Approve the transaction in MetaMask</h3>
                        <p>Give BloctoSwap permission to access the WFLOW  in your MetaMask wallet.</p>
                        <p>Now wait just a few minutes and you will then see your FLOW in your Blocto Wallet.</p>
                    </div>
                </div>
            </div>
            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/get-started-dapper/18-Deposit-FLOW.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>Get Dapper Flow Wallet Address</h3>
                        <p>Open the Flow account within your Dapper Wallet and click the <b>Deposit</b> button to open a popup window.</p>
                        <p>Here you will find your Flow wallet address that you can copy easily by clicking on the <b>Copy Wallet Address</b> button.</p>
                        <div class="btn-wrap">
                            <a href="https://accounts.meetdapper.com/wallet/flow" target="_blank" class="btn-o"><img src="/images/icon-dapper.png" alt="" width="40">Open Dapper Flow Wallet</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/get-started-dapper/20-Deposit-FLOW.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>Send FLOW from Blocto to Dapper</h3>
                        <p>You can easily send FLOW via the <a href="https://portto.com/download" target="_blank">Blocto mobile app</a> or you can use the <a href="https://port.onflow.org/transaction?hash=47851586d962335e3f7d9e5d11a4c527ee4b5fd1c3895e3ce1b9c2821f60b166&showcode=false" target="_blank">Flow Port</a> official website</p>
                        <p>Visit the <b>Send FLOW</b> page and enter the address copied on the previous step along with the amount of FLOW you want to transfer.</p>
                        <p>Finally click <b>Submit</b> and approve the transaction</p>
                        <div class="btn-wrap">
                            <a href="https://port.onflow.org/transaction?hash=47851586d962335e3f7d9e5d11a4c527ee4b5fd1c3895e3ce1b9c2821f60b166&showcode=false" target="_blank" class="btn-o"><img src="/images/logo-flow.svg" alt="" width="40">Open Flow Port</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="timeline-section" x-show="cryptoWallet == 'kraken'">
        <strong class="timeline-title">Kraken Instructions</strong>
        <div class="timeline">
            <div class="timeline-heading">
                <span class="no">1</span>
                <h2>SIGN IN TO KRAKEN TO BUY <span class="highlight-txt">FLOW</span></h2>
                <div class="btn-wrap">
                    <a href="https://www.kraken.com" target="_blank" class="btn-o"><img src="/images/icon-kraken.svg" alt="" width="38">Open Kraken</a>
                </div>
            </div>
            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/kraken-1.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>Login or Register with Kraken</h3>
                        <p>First step is to login or register to be able to use their <b>exchange platform</b>.</p>
                    </div>
                </div>
            </div>
            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/kraken-2.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>Buy FLOW token</h3>
                        <p>From the main navigation bar click <b>Buy Crypto</b></p>
                        <p>Then filter and select the <b>FLOW</b> token from the list.</p>
                    </div>
                </div>
            </div>
            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/kraken-3.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>Enter amount and approve</h3>
                        <p>Select the amount you would like to buy and the payment method to complete the purchase.</p>
                    </div>
                </div>
            </div>

            <div class="timeline-heading">
                <span class="no">2</span>
                <h2>Withdraw <span class="highlight-txt">FLOW</span> to the <span class="highlight-txt">Dapper Wallet</span></h2>
                <div class="btn-wrap">
                    <a href="https://www.kraken.com/u/funding/withdraw?asset=FLOW" target="_blank" class="btn-o"><img src="/images/icon-kraken.svg" alt="" width="29">Open Kraken Withdraw</a>
                </div>
            </div>

            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/get-started-dapper/18-Deposit-FLOW.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>Get Dapper Flow Wallet Address</h3>
                        <p>Open the Flow account within your Dapper Wallet and click the <b>Deposit</b> button to open a popup window.</p>
                        <p>Here you will find your Flow wallet address that you can copy easily by clicking on the <b>Copy Wallet Address</b> button.</p>
                        <div class="btn-wrap">
                            <a href="https://accounts.meetdapper.com/wallet/flow" target="_blank" class="btn-o"><img src="/images/icon-dapper.png" alt="" width="40">Open Dapper Flow Wallet</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/kraken-5.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>Add Blocto address to the withdrawl list</h3>
                        <p>Click <b>Add new withdrawl address</b> and then copy the address from the previous step along with a name and save it.
                        </p>
                    </div>
                </div>
            </div>
            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/kraken-4.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>Choose amount to withdraw</h3>
                        <p>Enter the amount of FLOW that you would like to withdraw from Kraken to Blocto and click the <b>Withdraw FLOW</b> button.</p>
                    </div>
                </div>
            </div>
            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/kraken-6.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>Approve transaction</h3>
                        <p>Check that the values are correct and click the <b>Withdraw FLOW</b> button</p>
                    </div>
                </div>
            </div>
            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/a-img31.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>View your FLOW balance</h3>
                        <p>After a few minutes (unless extra verification is needed) you can check your FLOW balance in your Blocto Wallet just by opening the user dropdown menu on the Flovatar website and you will see it underneath the wallet ID.</p>
                    </div>
                </div>
            </div>
            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/a-img32.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>Managing your FLOW with Flow Port</h3>
                        <p>To manage your FLOW head on over to <a href="https://port.onflow.org/" target="_blank">Flow Port</a> and login with your Blocto email address.</p>
                        <p>Now that you have your wallet ready you can also use it with many other <a href="https://www.flowverse.co/projects" target="_blank">projects</a> built on <a href="https://flow.com" target="_blank">Flow</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="timeline-section" x-show="cryptoWallet == 'crypto'">
        <strong class="timeline-title">Crypto.com Instructions</strong>
        <div class="timeline">
            <div class="timeline-heading">
                <span class="no">1</span>
                <h2>USE CRYPTO.COM MOBILE APP TO BUY <span class="highlight-txt">FLOW</span></h2>
                <div class="btn-wrap">
                    <a href="https://www.crypto.com" target="_blank" class="btn-o"><img src="/images/icon-crypto.svg" alt="" width="38">Open Crypto.com</a>
                </div>
                <br>
                <p>Please note:<br>
                    In some cases (especially if paying with bank transfer) you will need to wait up to 7 days to withdraw your FLOW tokens.</p>
            </div>
            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/crypto-1.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>Open or Install the mobile app</h3>
                        <p>First step is to open the mobile app and login or register to be able to use their <b>exchange platform</b>.</p>
                    </div>
                </div>
            </div>
            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/crypto-2.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>Buy FLOW token</h3>
                        <p>From the main navigation bar at the bottom click the Crypto.com logo icon and then <b>+ Buy</b></p>
                        <p>Then filter and select the <b>FLOW</b> token from the list.</p>
                    </div>
                </div>
            </div>
            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/crypto-3.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>Enter amount and approve</h3>
                        <p>Select the amount you would like to buy and the payment method to complete the purchase.</p>
                    </div>
                </div>
            </div>

            <div class="timeline-heading">
                <span class="no">2</span>
                <h2>Withdraw <span class="highlight-txt">FLOW</span> to the <span class="highlight-txt">Dapper Wallet</span></h2>
            </div>

            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/get-started-dapper/18-Deposit-FLOW.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>Get Dapper Flow Wallet Address</h3>
                        <p>Open the Flow account within your Dapper Wallet and click the <b>Deposit</b> button to open a popup window.</p>
                        <p>Here you will find your Flow wallet address that you can copy easily by clicking on the <b>Copy Wallet Address</b> button.</p>
                        <div class="btn-wrap">
                            <a href="https://accounts.meetdapper.com/wallet/flow" target="_blank" class="btn-o"><img src="/images/icon-dapper.png" alt="" width="40">Open Dapper Flow Wallet</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/crypto-4.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>Open your Crypto wallet for FLOW</h3>
                        <p>Click <b>Accounts</b> in the main navigation and then <b>Crypto Wallet</b> to open your FLOW wallet.</p>
                    </div>
                </div>
            </div>
            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/crypto-5.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>Open the Withdraw section</h3>
                        <p>Click <b>Transfer</b>, then <b>Withdraw</b> and finally <b>External wallet</b> in the main navigation.</p>
                        <p>At this point click the <b>+</b> on the top right and choose <b>Wallet address</b> to enter the Blocto address from the previous step and click <b>Continue</b>.</p>
                    </div>
                </div>
            </div>
            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/crypto-6.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>Enter amount and approve transaction</h3>
                        <p>Enter the amount of <b>FLOW</b> you would like to transfer, click the <b>Withdraw</b> button and finally <b>Continue</b> to complete the process.</p>
                    </div>
                </div>
            </div>
            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/get-started-dapper/22-Check-Flow-Balance.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>View your FLOW balance</h3>
                        <p>After a few minutes (unless extra verification is needed) you can check your FLOW balance in your Dapper Wallet and make sure the process run smoothly.</p>
                        <div class="btn-wrap">
                            <a href="https://accounts.meetdapper.com/wallet/flow" target="_blank" class="btn-o"><img src="/images/icon-dapper.png" alt="" width="40">Open Dapper Flow Wallet</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/a-img32.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>Managing your FLOW with Flow Port</h3>
                        <p>To manage your FLOW head on over to <a href="https://port.onflow.org/" target="_blank">Flow Port</a> and login with your Blocto email address.</p>
                        <p>Now that you have your wallet ready you can also use it with many other <a href="https://www.flowverse.co/projects" target="_blank">projects</a> built on <a href="https://flow.com" target="_blank">Flow</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="timeline-section" x-show="cryptoWallet == 'binance'">
        <strong class="timeline-title">Binance Instructions</strong>
        <div class="timeline">
            <div class="timeline-heading">
                <span class="no">1</span>
                <h2>SIGN IN TO BINANCE TO BUY <span class="highlight-txt">FLOW</span></h2>
                <div class="btn-wrap">
                    <a href="https://www.binance.com" target="_blank" class="btn-o"><img src="/images/icon-binance.svg" alt="" width="38">Open Binance</a>
                </div>
                <br>
                <p>Please note:<br>
                    In some cases (especially if paying with bank transfer) you will need to wait up to 7 days to withdraw your FLOW tokens.</p>
            </div>
            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/binance-1.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>Login or Register with Binance</h3>
                        <p>First step is to login or register to be able to use their <b>exchange platform</b>.</p>
                    </div>
                </div>
            </div>
            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/binance-2.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>Buy BUSD token</h3>
                        <p>From the main navigation bar click <b>Buy Crypto</b> and select your preferred payment method.</p>
                        <p>Then choose the <b>BUSD</b> token, enter the amount and complete the purchase.</p>
                    </div>
                </div>
            </div>
            <div class="media-a alt sm">
                <div class="img lg">
                    <img src="/images/binance-3.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>Convert BUSD to FLOW</h3>
                        <p>From the main navigation bar click <b>Trade</b> and then <b>Convert</b> .</p>
                        <p>Select <b>BUSD</b> in the first line and <b>FLOW</b> in the second line. Enter the amount you would like to convert and complete the exchange.</p>
                    </div>
                </div>
            </div>

            <div class="timeline-heading">
                <span class="no">2</span>
                <h2>Withdraw <span class="highlight-txt">FLOW</span> to the <span class="highlight-txt">Dapper Wallet</span></h2>
                <div class="btn-wrap">
                    <a href="https://www.binance.com/en/my/wallet/account/main/withdrawal/crypto/FLOW?origin=MBX" target="_blank" class="btn-o"><img src="/images/icon-binance.svg" alt="" width="29">Open Binance Withdraw</a>
                </div>
            </div>

            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/get-started-dapper/18-Deposit-FLOW.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>Get Dapper Flow Wallet Address</h3>
                        <p>Open the Flow account within your Dapper Wallet and click the <b>Deposit</b> button to open a popup window.</p>
                        <p>Here you will find your Flow wallet address that you can copy easily by clicking on the <b>Copy Wallet Address</b> button.</p>
                        <div class="btn-wrap">
                            <a href="https://accounts.meetdapper.com/wallet/flow" target="_blank" class="btn-o"><img src="/images/icon-dapper.png" alt="" width="40">Open Dapper Flow Wallet</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="media-a alt sm">
                <div class="img lg">
                    <img src="/images/binance-4.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>Enter details to withdraw</h3>
                        <p>Paste the <b>Blocto address</b> from the previous step, select the FLOW network, and enter the amount to complete the withdraw process.</p>
                    </div>
                </div>
            </div>
            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/get-started-dapper/22-Check-Flow-Balance.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>View your FLOW balance</h3>
                        <p>After a few minutes (unless extra verification is needed) you can check your FLOW balance in your Dapper Wallet and make sure the process run smoothly.</p>
                        <div class="btn-wrap">
                            <a href="https://accounts.meetdapper.com/wallet/flow" target="_blank" class="btn-o"><img src="/images/icon-dapper.png" alt="" width="40">Open Dapper Flow Wallet</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/a-img32.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>Managing your FLOW with Flow Port</h3>
                        <p>To manage your FLOW head on over to <a href="https://port.onflow.org/" target="_blank">Flow Port</a> and login with your Blocto email address.</p>
                        <p>Now that you have your wallet ready you can also use it with many other <a href="https://www.flowverse.co/projects" target="_blank">projects</a> built on <a href="https://flow.com" target="_blank">Flow</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section class="timeline-section" x-show="cryptoWallet == 'other'">
        <strong class="timeline-title">Other Exchanges Instructions</strong>
        <div class="timeline">
            <div class="timeline-heading">
                <span class="no">1</span>
                <h2>OTHER EXCHANGES TO BUY <span class="highlight-txt">FLOW</span></h2>
                <div class="btn-wrap">
                    <a href="https://www.flowverse.co/categories/exchange" target="_blank" class="btn-o">Open Flowverse</a>
                </div>
            </div>
            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/other-exchanges-1.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>Login or Register with any exchange</h3>
                        <p>First step is to login or register with any of the other exchanges listed in the <b>Flowverse page</b>.</p>
                    </div>
                </div>
            </div>
            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/kraken-3.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>Buy FLOW token</h3>
                        <p>Then proceed to buy the FLOW token from the exchange.</p>
                        <p>This process can vary depending on your selection, but should be intuitive enough.</p>
                    </div>
                </div>
            </div>

            <div class="timeline-heading">
                <span class="no">2</span>
                <h2>Withdraw <span class="highlight-txt">FLOW</span> to the <span class="highlight-txt">Blocto wallet</span></h2>
            </div>
            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/get-started-dapper/18-Deposit-FLOW.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>Get Dapper Flow Wallet Address</h3>
                        <p>Open the Flow account within your Dapper Wallet and click the <b>Deposit</b> button to open a popup window.</p>
                        <p>Here you will find your Flow wallet address that you can copy easily by clicking on the <b>Copy Wallet Address</b> button.</p>
                        <div class="btn-wrap">
                            <a href="https://accounts.meetdapper.com/wallet/flow" target="_blank" class="btn-o"><img src="/images/icon-dapper.png" alt="" width="40">Open Dapper Flow Wallet</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/kraken-4.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>Enter details to withdraw</h3>
                        <p>Paste the <b>Blocto address</b> from the previous step and enter the amount to complete the withdraw process.</p>
                    </div>
                </div>
            </div>

            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/get-started-dapper/22-Check-Flow-Balance.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>View your FLOW balance</h3>
                        <p>After a few minutes (unless extra verification is needed) you can check your FLOW balance in your Dapper Wallet and make sure the process run smoothly.</p>
                        <div class="btn-wrap">
                            <a href="https://accounts.meetdapper.com/wallet/flow" target="_blank" class="btn-o"><img src="/images/icon-dapper.png" alt="" width="40">Open Dapper Flow Wallet</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/a-img32.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>Managing your FLOW with Flow Port</h3>
                        <p>To manage your FLOW head on over to <a href="https://port.onflow.org/" target="_blank">Flow Port</a> and login with your Blocto email address.</p>
                        <p>Now that you have your wallet ready you can also use it with many other <a href="https://www.flowverse.co/projects" target="_blank">projects</a> built on <a href="https://flow.com" target="_blank">Flow</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="timeline-section" x-show="cryptoWallet == 'dapper'">
        <strong class="timeline-title">Dapper <> Blocto Token Swap</strong>
        <div class="timeline">
            <div class="timeline-heading">
                <span class="no">1</span>
                <h2>TRANSFORM <span class="highlight-txt">DAPPER CREDIT</span> TO <span class="highlight-txt">FLOW</span></h2>
                <div class="btn-wrap">
                    <a href="https://accounts.meetdapper.com/home" target="_blank" class="btn-o"><img src="/images/icon-dapper.png" alt="" width="38">Dapper Wallet</a>
                </div>
            </div>
            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/get-started-dapper/03-Add-USD-Funds.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>Check USD Dapper Credit</h3>
                        <p>Go visit your <b>Dapper Wallet</b> to see if you already have USD Dapper Credits available.</p>
                    </div>
                </div>
            </div>
            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/get-started-dapper/04-Add-USD-Funds.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>Deposit USD with Credit Card or Bank Wire</h3>
                        <p>In case you don't have sufficient USD Dapper Credits, you can add funds easily by paying with Credit Card or by bank wire.</p>
                        <p>Then click <b>Add Funds</b></p>
                    </div>
                </div>
            </div>
            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/get-started-dapper/06-Withdraw-USDC.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>Withdraw Dapper Balance</h3>
                        <p>Open the Dapper Balance details and then click <span class="highlight-txt">Withdraw</span> to initiate a USDC transfer process</p>
                    </div>
                </div>
            </div>

            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/get-started-dapper/07-Withdraw-USDC.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>Select USDC on Flow</h3>
                        <p>Make sure to choose the USDC on Flow option and to enter the amount you want to withdraw.</p>
                        <p>Then click <b>Connect Wallet</b></p>
                    </div>
                </div>
            </div>
            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/get-started-dapper/09-Withdraw-USDC.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>Connect or Create a Blocto Wallet</h3>
                        <p>Enter your email address in the popup that will appear to login or create a Blocto wallet that will received the USDC tokens.</p>
                        <p>You will automatically receive a 6 digit number via email to be used as a temporary password.</p>
                    </div>
                </div>
            </div>
            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/get-started-dapper/12-Withdraw-USDC.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>Withdraw USDC to Blocto</h3>
                        <p>Once you see your Blocto Wallet connected to Dapper, you are now ready to complete the withdraw process.</p>
                        <p>Click on <b>Withdraw Funds</b> to transfer the money</p>
                    </div>
                </div>
            </div>
            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/get-started-dapper/15-Swap-USDC-FLOW.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>Convert USDC to FLOW using Blocto Swap</h3>
                        <p>Enter the amount of USDC you want to transform to FLOW and then click the <span class="highlight-txt">SWAP</span> button</p>
                        <div class="btn-wrap">
                            <a href="https://swap.blocto.app/#/swap?inputCurrency=0xb19436aae4d94622&outputCurrency=0x1654653399040a61" target="_blank" class="btn-o"><img src="/images/ico-blocto.png" alt="" width="40">Open Blocto Swap</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/get-started-dapper/18-Deposit-FLOW.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>Get Dapper Flow Wallet Address</h3>
                        <p>Open the Flow account within your Dapper Wallet and click the <b>Deposit</b> button to open a popup window.</p>
                        <p>Here you will find your Flow wallet address that you can copy easily by clicking on the <b>Copy Wallet Address</b> button.</p>
                        <div class="btn-wrap">
                            <a href="https://accounts.meetdapper.com/wallet/flow" target="_blank" class="btn-o"><img src="/images/icon-dapper.png" alt="" width="40">Open Dapper Flow Wallet</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="media-a alt sm">
                <div class="img">
                    <img src="/images/get-started-dapper/20-Deposit-FLOW.png" alt="">
                </div>
                <div class="desc">
                    <div class="inner">
                        <h3>Send FLOW from Blocto to Dapper</h3>
                        <p>You can easily send FLOW via the <a href="https://portto.com/download" target="_blank">Blocto mobile app</a> or you can use the <a href="https://port.onflow.org/transaction?hash=47851586d962335e3f7d9e5d11a4c527ee4b5fd1c3895e3ce1b9c2821f60b166&showcode=false" target="_blank">Flow Port</a> official website</p>
                        <p>Visit the <b>Send FLOW</b> page and enter the address copied on the previous step along with the amount of FLOW you want to transfer.</p>
                        <p>Finally click <b>Submit</b> and approve the transaction</p>
                        <div class="btn-wrap">
                            <a href="https://port.onflow.org/transaction?hash=47851586d962335e3f7d9e5d11a4c527ee4b5fd1c3895e3ce1b9c2821f60b166&showcode=false" target="_blank" class="btn-o"><img src="/images/logo-flow.svg" alt="" width="40">Open Flow Port</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="media-a info-row">
            <div class="desc">
                <div class="inner">
                    <h3>All done!</h3>
                    <p>You are now able to see your FLOW credit in your Dapper account and you can go spend it on the crypto projects you like the most!</p>
                </div>
            </div>
        </div>
    </section>
</div>
