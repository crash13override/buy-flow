<x-guest-layout>
    <section class="tab-section"
             x-data="getStartedData()"
             x-init="initGetStarted($dispatch);"
             @hashchange.window="loadHashParams();"
    >
        <div class="container">
            <div class="tab-frame">
                <ul class="tabset">
                    <li><a x-bind:class="getActiveClass('blocto')" href="#blocto">SETUP A CRYPTO WALLET</a></li>
                    <li><a x-bind:class="getActiveClass('flow')" href="#flow">GET FLOW CURRENCY</a></li>
                </ul>
                <div class="tab-content">

                    @include('partials.setup-wallet')


                    @include('partials.buy-flow')
                </div>
            </div>
        </div>
    </section>

    @include('partials/powered-by')

</x-guest-layout>
