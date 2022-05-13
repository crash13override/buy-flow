require('./actions');

import Alpine from 'alpinejs';
import persist from '@alpinejs/persist'

Alpine.plugin(persist);


Alpine.data('appData', () => ({
    user: null,
    profile: null,
    loading: false,
    waitingSeal: false,
    showMoonpay: false,
    jsLoaded: false,
    showProfileName: true,
    userCheckLoading: true,
    moonpaySignature: '',
    moonpayUrl(){
        return window.moonpayDomain + window.moonpayParams + '&apiKey=' + window.moonpayPublicKey + '&walletAddress=' + this.address() + '&signature=' + this.moonpaySignature;
    },
    address(){
        return this.user ? this.user.addr : null;
    },
    name(){
        return (this.profile && this.profile.name) ? this.profile.name : null;
    },
    loggedIn(){
        return this.user && this.profile && this.profile.balance ? true : false;
    },
    balance(){
        return this.profile ? new Intl.NumberFormat('en-US', {minimumFractionDigits: 2, maximumFractionDigits: 2, fractionDigits: 2}).format(parseFloat(this.profile.balance)) : 0;
    },
    getToasterClass(){
        return this.loading || this.waitingSeal ? 'active' : '';
    },
}));



Alpine.data('getStartedData', () => ({
    curTab: 'flow',
    hasCrypto: null,
    cryptoWallet: null,
    init() {
        this.loadHashParams();
    },
    getActiveClass(item){
        return (item == this.curTab) ? 'active' : '';
    },
    getTabClass(item){
        return (item == this.curTab) ? 'active' : 'hidden';
    },
    loadHashParams(){
        if(window.location.hash && window.location.hash != '#') {
            let hash = window.location.hash;
            hash = hash.replace('#', '');
            if(hash == 'blocto' || hash=='flow' ){
                window.scrollTo({top: 0, behavior: 'smooth'});
                this.curTab = hash;
                this.hasCrypto = null;
                this.cryptoWallet = null;
            }
        }
    }
}));


window.initGetStarted = function(dispatch){
    window.dispatch = dispatch;
}


window.Alpine = Alpine;

Alpine.start();
