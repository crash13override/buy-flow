<nav id="main-nav">
    <div class="container">
        <div class="logo">
            <a href="/"><img src="/images/logo.svg" alt="Buy Flow"></a>
        </div>
        <div class="nav-wrap">
            <button class="nav-opener"><i class="icon-menu"></i></button>
            <ul class="nav">
                <li x-show="!loggedIn() && !userCheckLoading" class="jshidden">
                    <button @click.prevent.stop="fcl.signUp()" class="btn"><span class="inner">Connect Wallet</span></button>
                </li>
            </ul>
            <div class="user-menu" x-show="loggedIn() || userCheckLoading">
                <button class="menu-opener"><i class="icon-user"></i></button>
                <div class="menu-drop">
                    <dl class="user-info">
                        <dt x-show="showProfileName && name()">name</dt>
                        <dd x-show="showProfileName && name()" ><a x-bind:href="'https://find.xyz/'+name()" target="_blank" x-text="name()"></a></dd>
                        <dt>wallet ID</dt>
                        <dd @click.prevent.stop="copyAddress()" x-text="address()"></dd>
                        <dt>balance</dt>
                        <dd x-text="balance()+' Flow'"></dd>
                    </dl>
                    <ul class="sub-nav">
                        <li><a href="#moonpay-modal" @click="showMoonpay=true" data-modal >Top up wallet</a></li>
                        <li><a href="#" @click.prevent.default="logout()" class="link-logout">Logout <i class="icon-arrow-circle"></i></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</nav>
