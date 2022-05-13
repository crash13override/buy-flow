

<div id="moonpay-modal" x-show="showMoonpay" class="modal-wrapper jshidden">
    <div class="modal-content">
        <div class="modal-inner">
            <button  @click.prevent.stop="showMoonpay=false" class="close-moonpay"><span class="icon-close"></span></button>
            <template x-if="address() && showMoonpay">
                <iframe x-bind:src="moonpayUrl()" class="w-full h-full rounded-xl"></iframe>
            </template>
        </div>
    </div>
</div>

