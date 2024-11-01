<footer class="main-footer">
    <div class="row justify-content-center">
        <div class="col-12 col-md text-center pt-3">
            <span class="brand-text font-weight-bold">{{ config('app.name') }}</span>
            <small class="d-block mb-3">© {{ date('Y') }}</small>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 text-center mb-3 mb-md-0">
            {{ __('message.footer_message') }}.
            <br>
            {{ __('message.copyright') }} © {{ date('Y') }} {{ config('app.name') }}™.
            <br>
            {{ __('message.all_rights_reserved') }}.
        </div>
        <div class="col-12 col-md-8 col-lg-6 d-none d-md-inline mt-3">
            <div class="row">
                <div class="col mb-0 text-center rounded-pill mx-2">
                    <img
                        src="https://cf.bstatic.com/static/img/tfl/group_logos/logo_booking/27c8d1832de6a3123b6ee45b59ae2f81b0d9d0d0.png">
                </div>
                <div class="col mb-0 text-center rounded-pill mx-2">
                    <img class="w-50"
                        src="https://cf.bstatic.com/static/img/tfl/group_logos/logo_priceline/f80e129541f2a952d470df2447373390f3dd4e44.png">
                </div>
                <div class="col mb-0 text-center rounded-pill mx-2">
                    <img class="w-50"
                        src="https://cf.bstatic.com/static/img/tfl/group_logos/logo_kayak/83ef7122074473a6566094e957ff834badb58ce6.png">
                </div>
                <div class="col mb-0 text-center rounded-pill mx-2">
                    <img class="w-50"
                        src="https://cf.bstatic.com/static/img/tfl/group_logos/logo_agoda/1c9191b6a3651bf030e41e99a153b64f449845ed.png">
                </div>
                <div class="col mb-0 text-center rounded-pill mx-2">
                    <img class="w-50"
                        src="https://cf.bstatic.com/static/img/tfl/group_logos/logo_opentable/a4b50503eda6c15773d6e61c238230eb42fb050d.png">
                </div>
            </div>
        </div>
    </div>
</footer>
