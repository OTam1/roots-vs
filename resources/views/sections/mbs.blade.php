<div class="responsive-container">
    <div class="content-wrapper">
        {{-- <div class="overlay"></div> --}}
        <div class="image-section">
            <img src="/assets/img/MBS-img.png" alt="Prince Mohammed bin Salman">
        </div>
        <div class="text-section" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
            <div class="text-content">
                <h1 class="mbs-text" id="test1">
                    @lang('home.mbs_desc')
                </h1>
                <p class="mbs-para">
                    @lang('home.mbs_name')
                </p>
            </div>
        </div>
    </div>
</div>