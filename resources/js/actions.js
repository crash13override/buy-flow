import {getProfileScript} from './flow/get-profile.script';
import { DateTime } from 'luxon'

import './classes/Helpers';

require('./bootstrap');


import * as fcl from "@onflow/fcl"
import * as t from "@onflow/types"


window.fcl = fcl;
window.t = t;
window.user = null;
window.profile = null;
window.dispatch = null;


window.initApp = function(dispatch){
    window.dispatch = dispatch;
    fcl.currentUser().subscribe(updateUser);
}

async function updateUser(user){
    window.user = user;

    if(user.addr) {
        window.dispatch('user-loaded', {user: user});
        await refreshProfile();
        window.getMoonpaySignature(user.addr);
    } else {
        window.dispatch('user-check-finish', {user: user});
    }
}

window.refreshProfile = async function(){
    await getProfileScript(window.user.addr).then(loadProfile);
}

window.loadProfile = function(data){
    window.profile = data;
    window.dispatch('profile-loaded', {profile: data});
    return data;
}

window.getAddressProfile = async function(address){
    await getProfileScript(address).then(loadAddressProfile);
}

window.loadAddressProfile = function(data){
    window.dispatch('address-profile-loaded', {profile: data});
    return data;
}

window.lookupAddress = async function(address){
    await getProfileScript(address).then(addressFound);
}

window.addressFound = function(data){
    window.dispatch('address-found', {profile: data});
    return data;
}




window.getMoonpaySignature = function(address) {
    if(address) {
        axios.post('/moonpay/sign', {
            address: address
        }).then(function (response) {
            window.dispatch('moonpay-signed', {signature: response.data});
        }).catch(function (error) {
            console.log(error);
        });
    }
}








window.parseDate = function(date){
    return DateTime.fromSeconds(parseFloat(date)).toLocaleString(DateTime.DATE_SHORT);
}
window.parseTime = function(date){
    return DateTime.fromSeconds(parseFloat(date)).toLocaleString(DateTime.TIME_SIMPLE);
}

window.parseDateTime = function(date){
    return window.parseDate(date) + ' ' + window.parseTime(date);
}


window.parseDateTimeString = function(date){
    let tempDate = DateTime.fromMillis(Date.parse(date)).toLocaleString(DateTime.DATE_SHORT);
    let tempTime = DateTime.fromMillis(Date.parse(date)).toLocaleString(DateTime.TIME_SIMPLE);

    return tempDate + ' ' + tempTime;
}

window.logout = function(){
    console.log('logout');
    fcl.unauthenticate();
    window.user = null;
    window.profile = null;
    window.dispatch('logged-out');
}

window.getDiffString = function(start, end){
    let startD = (!start) ? DateTime.now() : DateTime.fromSeconds(parseFloat(start));
    let endD = (!end) ? DateTime.now() : DateTime.fromSeconds(parseFloat(end));
    let diff = endD.diff(startD, ['hours', 'minutes', 'seconds']);
    return diff.hours+'h '+diff.minutes+'m '+Math.round(diff.seconds)+'s';
}

