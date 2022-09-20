<div class="tab" x-bind:class="getTabClass('flow')" id="get-flow-currency">
    <div class="heading">
        <h1>First let's find out what your <span class="highlight-txt">level of experience</span> is with using crypto</h1>
    </div>
    <div class="option-row">
        <strong class="title">What Flow Wallet do you currently use?</strong>
        <ul class="btn-list">
            <li><button @click.prevent.stop="hasDapperWallet = 'yes'; cryptoWallet = null; hasCrypto = null;" class="btn-o" x-bind:class="hasDapperWallet == 'yes' ? 'active' : ''"><img src="/images/icon-dapper.png" alt="" width="37">Dapper Wallet</button></li>
            <li><button @click.prevent.stop="hasDapperWallet = 'no'; cryptoWallet = null; hasCrypto == null;" class="btn-o" x-bind:class="hasDapperWallet == 'no' ? 'active' : ''"><img src="/images/ico-blocto.png" alt="" width="37">Blocto Wallet</button></li>
        </ul>
    </div>


    @include('partials.buy-flow-dapper')
    @include('partials.buy-flow-blocto')

    <div class="blocto-cta" x-show="cryptoWallet">
        <h2>Congratulations, you did it!<br> Now that the hard part is done, let's have some fun and create your very own Flovatar in the Builder!</h2>
        <div class="btn-wrap">
            <a href="https://flovatar.com/builder" class="btn-plain">Open the Builder</a>
        </div>
    </div>
</div>
