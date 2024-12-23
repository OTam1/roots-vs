<footer id="site-footer" class="main-footer relative pb-20 bg-red-500 text-white" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
    <section class="lqd-section module-top" data-section-luminosity="dark">
        <div class="container">
            <div class="row items-center">
                <div class="col col-12 hidden sm:block">
                    {{-- <div class="lqd-imggrp-single mb-35">
                        <div class="lqd-imggrp-img-container">
                            <figure><img src="{{ asset('assets/img/Roots-Logo-White.png') }}"
                                    alt="hub logo"></figure>
                        </div>
                    </div> --}}
                </div>

                <div class="col col-12 col-md-5 col-lg-6 sm:hidden">
                    <div class="lqd-imggrp-single pt-160 md:pt-0">
                        <div class="mr-60 ml-60 lqd-imggrp-img-container mb-0">
                            <figure><img src="{{ asset('assets/img/Roots-Logo-White.png') }}"
                                    alt="hub logo"></figure>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-md-5 col-lg-6">
                    <div class="ld-fancy-heading">
                        <h2 class="ld-fh-element leading-1em mb-0/5em text-65 text-white"
                            data-text-rotator="true"><span>@lang('footer.welove')</span> <span
                                class="txt-rotate-keywords"><span
                                    class="txt-rotate-keyword active"><span>@lang('footer.partner')</span> </span><span
                                    class="txt-rotate-keyword"><span>@lang('footer.build')</span> </span><span
                                    class="txt-rotate-keyword"><span>@lang('footer.talk')</span></span></span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="lqd-section module-bottom pt-50" data-section-luminosity="dark">
        <div class="container">
            <div class="row">
                <div class="col col-12 col-md-6">
                    <div class="ld-fancy-heading">
                        <p class="ld-fh-element text-22 leading-1/5em mb-0/5em"><span>@lang('footer.looking')<br> @lang('footer.send') @lang('footer.for') <br></span> <span class="text-white"><span
                                    class="text-white underline"><a href="mailto:Engage@roots.ventures"
                                        class="__cf_email__"
                                        data-cfemail="157c7b737a55797c64607c7138617d707870663b767a78" style="
                                        text-decoration: underline;
                                        font-weight: bold;
                                    ">Engage@roots.ventures</a></span>
                            </span>
                            {{-- <br>@lang('footer.for') --}}
                        </p>
                    </div>
                </div>
                <div class="col col-6 col-sm-6 col-md-3 col-lg-3">
                    <div class="ld-fancy-heading">
                        <h3 class="ld-fh-element text-14 leading-1/5em text-white mb-1/5em">@lang('footer.menu')</h3>
                    </div>
                    <div class="link-14 link-white lqd-fancy-menu lqd-custom-menu lqd-menu-td-none">
                        <ul class="reset-ul">
                            <li class="mb-10"><a class="leading-1/8em"
                                @if (!request()->routeIs('home')) 
                                href="{{ route('home') }}" 
                            @endif        
                                >@lang('footer.home')</a></li>
                            <li class="mb-10"><a class="leading-1/8em"
                                @if (!request()->routeIs('about')) 
                                href="{{ route('about') }}" 
                            @endif    
                                >@lang('footer.gtku')</a></li>
                            {{-- <li class="mb-10"><a class="leading-1/8em"
                                    href="#">Why The Venutre Studio?</a></li> --}}
                            <li class="mb-10"><a class="leading-1/8em"
                                @if (!request()->routeIs('news')) 
                                href="{{ route('news') }}" 
                            @endif    
                                >@lang('footer.news')</a></li>
                                <li class="mb-10"><a class="leading-1/8em"
                                    @if (!request()->routeIs('blog')) 
                                    href="{{ route('blog') }}" 
                                @endif    
                                    >@lang('footer.blog')</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="ld-fancy-heading">
                        <h3 class="ld-fh-element text-14 leading-1/5em text-white mb-1/5em">@lang('footer.find_us')</h3>
                    </div>
                    <div class="ld-fancy-heading">
                        <p class="ld-fh-element text-14 mb-1/5em">@lang('footer.malqa')<br>@lang('footer.saudi')</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>

{{-- <footer id="site-footer" class="main-footer relative pb-20 bg-red-500 text-white">
    <section class="lqd-section module-top" data-section-luminosity="dark">
        <div class="container">
            <div class="row items-center">
                <div class="col col-12 hidden sm:block">
                    <div class="lqd-imggrp-single mb-35">
                        <div class="lqd-imggrp-img-container">
                            <figure><img src="{{ asset('assets/img/Roots-Logo-White.png') }}"
                                    alt="hub logo"></figure>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-md-5 col-lg-4">
                    <div class="ld-fancy-heading">
                        <h2 class="ld-fh-element leading-1em mb-0/5em text-65 text-white"
                            data-text-rotator="true"><span>We'd love to</span> <span
                                class="txt-rotate-keywords"><span
                                    class="txt-rotate-keyword active"><span>partner</span> </span><span
                                    class="txt-rotate-keyword"><span>build</span> </span><span
                                    class="txt-rotate-keyword"><span>talk</span></span></span></h2>
                    </div>
                </div>
                <div class="col col-sm-1 col-lg-1 offset-lg-1 xs:hidden sm:hidden lg:block">
                    <div class="lqd-imggrp-single">
                        <div class="lqd-imggrp-img-container mb-0">
                            <figure><img src="{{ asset('assets/images/demo/asymmetric-agency/shape-hand.svg') }}"
                                    alt="hand icon"></figure>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-md-6">
                    <div class="ld-fancy-heading">
                        <p class="ld-fh-element text-24 leading-1/5em mb-0/5em"><span>Looking for
                                collaboration? Send an email to</span> <span class="text-white"><span
                                    class="text-white underline"><a href="mailto:Engage@roots.ventures"
                                        class="__cf_email__"
                                        data-cfemail="157c7b737a55797c64607c7138617d707870663b767a78" style="
                                        text-decoration: underline;
                                    ">Engage@roots.ventures</a></span>
                            </span>to for vailable for enquires and collaborations,</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="lqd-section module-bottom pt-50" data-section-luminosity="dark">
        <div class="container">
            <div class="row">
                <div class="col col-12 col-md-5 col-lg-6 sm:hidden">
                    <div class="lqd-imggrp-single pt-160 md:pt-0">
                        <div class="lqd-imggrp-img-container mb-0">
                            <figure><img src="{{ asset('assets/img/Roots-Logo-White.png') }}"
                                    alt="hub logo"></figure>
                        </div>
                    </div>
                </div>
                <div class="col col-6 col-sm-6 col-md-3 col-lg-3">
                    <div class="ld-fancy-heading">
                        <h3 class="ld-fh-element text-14 leading-1/5em text-white mb-1/5em">Menu</h3>
                    </div>
                    <div class="link-14 link-white lqd-fancy-menu lqd-custom-menu lqd-menu-td-none">
                        <ul class="reset-ul">
                            <li class="mb-10"><a class="leading-1/8em"
                                    href="#">Home</a></li>
                            <li class="mb-10"><a class="leading-1/8em"
                                    href="#">Get To Know Us</a></li>
                            <li class="mb-10"><a class="leading-1/8em"
                                    href="#">Why The Venutre Studio?</a></li>
                            <li class="mb-10"><a class="leading-1/8em"
                                    href="#">Media Center</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="ld-fancy-heading">
                        <h3 class="ld-fh-element text-14 leading-1/5em text-white mb-1/5em">Find us</h3>
                    </div>
                    <div class="ld-fancy-heading">
                        <p class="ld-fh-element text-14 mb-1/5em">290 Maryam Springs<br>Saudi Arabia, Riyadh</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer> --}}