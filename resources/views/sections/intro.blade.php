<section class="intro-section " dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
    <video class="bg-video" autoplay muted loop playsinline>
        <source src="{{('/assets/video/intro_video.mp4')}}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="intro-content">
        <h1 class="intro_text">@lang('home.intro_title_p1') <span class="intro_highlight">
            <h2 class="ld-fh-element intro_highlight"
                data-text-rotator="true"><span  
                    class="txt-rotate-keywords"><span
                        class="txt-rotate-keyword"><span class="intro_highlight">@lang('home.intro_title_changable_1')</span> </span><span
                        class="txt-rotate-keyword"><span class="intro_highlight">@lang('home.intro_title_changable_2')</span> </span><span
                        class="txt-rotate-keyword"><span class="intro_highlight">@lang('home.intro_title_changable_3')</span></span><span
                        class="txt-rotate-keyword"><span class="intro_highlight">@lang('home.intro_title_changable_4')</span> </span></span></h2>
        </span> @lang('home.intro_title_p2')</h1>
        <p class="w-70percent ld-fh-element text-22 leading-1/5em mb-0/5em">@lang('home.intro_desc')</p>
    </div>
    <div class="scroll-mouse">
        <a href="#scrollto">
        <img src="{{('/assets/img/scroll-mouse.png')}}" alt="Scroll Mouse">
        </a>
    </div>
</section>
