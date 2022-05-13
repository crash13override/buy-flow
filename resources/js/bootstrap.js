window._ = require('lodash');

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.signalR = require("@microsoft/signalr");
window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });



import {config} from "@onflow/fcl"

config()
    .put("flow.network", process.env.MIX_FLOW_NETWORK)
    .put("accessNode.api", process.env.MIX_ACCESS_NODE) // Configure FCL's Access Node
    .put("discovery.wallet", process.env.MIX_WALLET_DISCOVERY)
    .put("app.detail.title", "Buy Flow")
    .put("app.detail.icon", "https://buy-flow.com/images/logo.png")
    .put("service.OpenID.scopes", "email email_verified name zoneinfo")
    .put("0xProfile", process.env.MIX_CONTRACT_PROFILE) // Will let us use `0xProfile` in our Cadence
    .put("0xFungible", process.env.MIX_CONTRACT_FUNGIBLE) // Will let us use `0xFungible` in our Cadence
    .put("0xNonFungible", process.env.MIX_CONTRACT_NON_FUNGIBLE) // Will let us use `0xFungible` in our Cadence
    .put("0xFlowToken", process.env.MIX_CONTRACT_FLOW_TOKEN) // Will let us use `0xFlowToken` in our Cadence
    .put("0xFindProfile", process.env.MIX_CONTRACT_FIND) // Will let us use `0xFindProfile` in our Cadence
    .put("0xFind", process.env.MIX_CONTRACT_FIND) // Will let us use `0xFind` in our Cadence

