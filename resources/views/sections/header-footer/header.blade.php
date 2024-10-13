@if (request()->routeIs('home'))
    <style>
        .main-nav > li > a {
            color: white !important;
        }
    </style>
@endif

<header id="site-header" class="main-header sticky-header-noshadow" data-sticky-header="true"
data-sticky-values-measured="false" data-sticky-options="{&quot;dynamicColors&quot; :true}">
<div class="lqd-head-sec-wrap lqd-hide-onstuck relative pr-40 pl-125 lg:pl-0 lg:pr-0 md:hidden" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}" >
    <div class="lqd-head-sec w-full flex items-stretch justify-between">
        <div class="col-auto lqd-head-col justify-start">
            <div class="module-logo navbar-brand-plain py-20"><a class="navbar-brand"
                @if (!request()->routeIs('home')) 
                href="{{ route('home') }}" 
            @endif
            ><span class="navbar-brand-inner">
                @if (!request()->routeIs('home')) 
                <img class="logo-light" width="52" height="23" src="{{ asset('assets/img/Roots-Logo-Original.png') }}" alt="Roots Ventures">
                <img class="logo-default" width="52" height="23" src="{{ asset('assets/img/Roots-Logo-Original.png') }}" alt="Roots Ventures">
                @else
                <img class="logo-light" width="52" height="23" src="{{ asset('assets/img/Roots_Logo_White.png') }}" alt="Roots Ventures">
                <img class="logo-default" width="52" height="23" src="{{ asset('assets/img/Roots_Logo_White.png') }}" alt="Roots Ventures">
                @endif
            </span></a>
            </div>
        </div>
        <div class="col lqd-head-col justify-end">
            <div class="header-module module-primary-nav static flex-col items-end">
                <div class="navbar-collapse lqd-submenu-default-style inline-flex flex-col items-stretch h-auto"
                    id="main-header-collapse" aria-expanded="false" role="navigation">
                    <ul class="main-nav lqd-menu-counter-right main-nav-hover-default flex reset-ul flex-nowrap items-stretch justify-end text-16 link-medium link-black lg:text-14"
                        data-submenu-options="{&quot;toggleType&quot;: &quot;fade&quot;, &quot;handler&quot;: &quot;mouse-in-out&quot;}"
                        data-localscroll="true"
                        data-localscroll-options="{&quot;itemsSelector&quot;:&quot;> li > a&quot;, &quot;trackWindowScroll&quot;: true }">
                        <li><a class="flex hover:text-primary"
                            @if (!request()->routeIs('home')) 
                            href="{{ route('home') }}" 
                        @endif
                        >@lang('header.home') 
                        {{-- <sup class="link-sup">01</sup> --}}
                    </a></li>
                        <li><a class="flex hover:text-primary"
                            @if (!request()->routeIs('about')) 
                            href="{{ route('about') }}" 
                        @endif
                            >@lang('header.gtku')  
                            {{-- <sup class="link-sup">02</sup> --}}
                        </a></li>

                                     {{-- hidden --}}
                        {{-- <li><a href="#">Why The Venutre Studio?
                         <sup class="link-sup">03</sup>
                        </a></li> --}}
                        <li><a class="flex hover:text-primary"
                        @if (!request()->routeIs('news')) 
                            href="{{ route('news') }}" 
                        @endif
                        >@lang('header.news')  
                        {{-- <sup class="link-sup">04</sup> --}}
                        </a></li>


                               {{-- hidden --}}
                        <li><a  class="flex hover:text-primary"
                            @if (!request()->routeIs('blog')) 
                            href="{{ route('blog') }}" 
                            @endif
                            >@lang('header.blog')  
                            {{-- <sup class="link-sup">05</sup> --}}
                        </a></li>
                        @if (App::getLocale() === 'en')
                        <li>
                            <a class="flex hover:text-primary" href="{{ route('locale', 'ar') }}">العربية</a>
                        </li>
                    @else
                        <li>
                            <a class="flex hover:text-primary" href="{{ route('locale', 'en') }}">English</a>
                        </li>
                    @endif

                    </ul>
                </div>
            </div>
            <div class="header-module module-button ml-25 module-button"><a
                @if (!request()->routeIs('home'))
                href="{{route('home')}}#co-contactus"
                @else
                href="#co-contactus"
                @endif
                    class="btn btn-solid btn-sm round border-thin leading-1/6em tracking-0 text-15 rounded-4 bg-black border-black text-white hover:bg-primary"
                @if (!request()->routeIs('home'))
                @else
                data-lity="#contact-modal"
                @endif
                    ><span class="btn-txt" data-text="Send message">@lang('header.send_msg') </span></a></div>
        </div>
    </div>
</div>
<div class="lqd-stickybar-wrap lqd-stickybar-left link-black link-medium pt-15 pl-20 lg:hidden">
    <div class="lqd-stickybar w-full h-full relative vertical-lr overflow-visible flex justify-between">
        <div class="flex items-center justify-center">
            <div class="ld-module-sd header-module-rotate ld-module-sd-hover ld-module-sd-right py-10">
                <button
                    class="nav-trigger style-2 fill-none txt-right collapsed flex items-center justify-center transition-all"
                    type="button" data-lqd-interactive-color="true" data-ld-toggle="true"
                    data-bs-toggle="collapse" data-toggle-options="{ &quot;type&quot;: &quot;hover&quot;}"
                    data-bs-target="#header-sidedrawer" aria-expanded="false"
                    aria-controls="header-sidedrawer"><span class="bars"><span
                            class="bars-inner w-full h-full flex rounded-inherit flex-col"><span
                                class="bar relative bg-black transition-all"></span> <span
                                class="bar relative bg-black transition-all"></span> <span
                                class="bar relative bg-black transition-all"></span></span></span></button>
                <div class="ld-module-dropdown collapse" id="header-sidedrawer">
                    <div class="ld-sd-wrap">
                        <div class="w-full relative flex flex-wrap h-full justify-between -mr-15 -ml-15">
                            <div class="w-full flex flex-auto flex-col items-start justify-start px-15">
                                <div class="py-45 module-logo navbar-brand-plain"><a class="navbar-brand"
                                    @if (!request()->routeIs('home')) 
                                    href="{{ route('home') }}" 
                                @endif
                                rel="home"><span
                                            class="navbar-brand-inner"><img class="logo-light"
                                                src="{{ asset('assets/img/Roots-Logo-White.png') }}"
                                                alt="Hub Theme"> <img class="logo-default"
                                                src="{{ asset('assets/img/Roots-Logo-Original.pn') }}g"
                                                alt="Hub Theme"></span></a></div>
                            </div>
                            <div class="w-full flex flex-auto flex-col items-start justify-center px-15">
                                <div class="lqd-fancy-menu lqd-custom-menu lqd-menu-td-none leading-1/5em">
                                    <ul class="reset-ul" data-localscroll="true"
                                        data-localscroll-options="{&quot;itemsSelector&quot;:&quot;> li > a&quot;}">
                                        <li class="mb-15"><a class="flex hover:text-primary"
                                            @if (!request()->routeIs('home')) 
                                            href="{{ route('home') }}" 
                                        @endif
                                        >@lang('header.home') </a></li>
                                        <li class="mb-15"><a class="flex hover:text-primary"
                                        @if (!request()->routeIs('about')) 
                                        href="{{ route('about') }}" 
                                        @endif

                                        >@lang('header.gtku') </a></li>

                                              {{-- hidden --}}
                                        {{-- <li class="mb-15"><a class="flex hover:text-primary"
                                                href="#">Why The Venutre Studio?</a></li> --}}

                                        <li class="mb-15"><a class="flex hover:text-primary"
                                        @if (!request()->routeIs('news')) 
                                            href="{{ route('news') }}" 
                                        @endif
                                        >@lang('header.news') </a></li>

                                            {{-- hidden --}}
                                        <li class="mb-15"><a class="flex hover:text-primary"
                                            @if (!request()->routeIs('blog')) 
                                            href="{{ route('blog') }}" 
                                            @endif
                                            >@lang('header.blog')  </a>
                                        </li>

                                        @if (App::getLocale() === 'en')
                                        <li class="mb-15">
                                            <a class="flex hover:text-primary" href="{{ route('locale', 'ar') }}">Arabic</a>
                                        </li>
                                    @else
                                        <li class="mb-15">
                                            <a class="flex hover:text-primary" href="{{ route('locale', 'en') }}">English</a>
                                        </li>
                                    @endif
                                    
                                    </ul>
                                </div>
                            </div>
                            <div class="w-full flex flex-auto flex-col items-start justify-end px-15">
                                <div class="ld-fancy-heading">
                                    <p class="ld-fh-element text-black mb-1/5em"><a
                                            href="mailto:Engage@roots.ventures" class="__cf_email__"
                                            >Engage@roots.ventures</a>
                                    </p>
                                </div>
                                <div class="ld-fancy-heading">
                                    <p class="ld-fh-element mb-2em leading-1/5em text-14 text-black">
                                        @lang('header.lfc') </p>
                                </div>
                                <ul class="social-icon social-icon-lg">
                                    <li><a href="https://twitter.com/roots_ventures" target="_blank"><svg class="w-20" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 509.64"><rect width="512" height="509.64" rx="115.61" ry="115.61"/><path fill="#fff" fill-rule="nonzero" d="M323.74 148.35h36.12l-78.91 90.2 92.83 122.73h-72.69l-56.93-74.43-65.15 74.43h-36.14l84.4-96.47-89.05-116.46h74.53l51.46 68.04 59.53-68.04zm-12.68 191.31h20.02l-129.2-170.82H180.4l130.66 170.82z"/></svg>
                                    </a></li>
                                    <li><a href="https://www.linkedin.com/company/roots-ventures-sa/?viewAsMember=true" target="_blank"><svg class="w-20" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                                    </a></li>
                                    <li><a href="https://wa.me/0554660495" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 30 30">
    <path d="M 15 3 C 8.373 3 3 8.373 3 15 C 3 17.251208 3.6323415 19.350068 4.7109375 21.150391 L 3.1074219 27 L 9.0820312 25.431641 C 10.829354 26.425062 12.84649 27 15 27 C 21.627 27 27 21.627 27 15 C 27 8.373 21.627 3 15 3 z M 10.892578 9.4023438 C 11.087578 9.4023438 11.287937 9.4011562 11.460938 9.4101562 C 11.674938 9.4151563 11.907859 9.4308281 12.130859 9.9238281 C 12.395859 10.509828 12.972875 11.979906 13.046875 12.128906 C 13.120875 12.277906 13.173313 12.453437 13.070312 12.648438 C 12.972312 12.848437 12.921344 12.969484 12.777344 13.146484 C 12.628344 13.318484 12.465078 13.532109 12.330078 13.662109 C 12.181078 13.811109 12.027219 13.974484 12.199219 14.271484 C 12.371219 14.568484 12.968563 15.542125 13.851562 16.328125 C 14.986562 17.342125 15.944188 17.653734 16.242188 17.802734 C 16.540187 17.951734 16.712766 17.928516 16.884766 17.728516 C 17.061766 17.533516 17.628125 16.864406 17.828125 16.566406 C 18.023125 16.268406 18.222188 16.319969 18.492188 16.417969 C 18.766188 16.515969 20.227391 17.235766 20.525391 17.384766 C 20.823391 17.533766 21.01875 17.607516 21.09375 17.728516 C 21.17075 17.853516 21.170828 18.448578 20.923828 19.142578 C 20.676828 19.835578 19.463922 20.505734 18.919922 20.552734 C 18.370922 20.603734 17.858562 20.7995 15.351562 19.8125 C 12.327563 18.6215 10.420484 15.524219 10.271484 15.324219 C 10.122484 15.129219 9.0605469 13.713906 9.0605469 12.253906 C 9.0605469 10.788906 9.8286563 10.071437 10.097656 9.7734375 C 10.371656 9.4754375 10.692578 9.4023438 10.892578 9.4023438 z"></path>
</svg>
                                    </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lqd-module-backdrop"></div>
            </div>
        </div>
        <div class="flex flex-grow-1 items-center justify-center rotate-180">
            <div class="header-module-rotate py-10">
                <div class="lqd-fancy-menu lqd-menu-td-none">
                    {{-- <ul class="reset-ul inline-nav flex -mr-10 -ml-10">
                        <li class="my-10"><a href="{{ route('locale', 'en') }}"
                                data-lqd-interactive-color="true">En.</a></li>
                        <li class="my-10"><a href="{{ route('locale', 'ar') }}"
                                data-lqd-interactive-color="true">Ar.</a></li>
                    </ul> --}}
                </div>
            </div>
        </div>
        <div class="flex flex-grow-1 items-center justify-center">
            <div class="header-module-rotate py-10">
                <p class="font-medium" data-lqd-interactive-color="true">
                    {{-- <a
                        href="#" class="__cf_email__"
                        data-cfemail="6704080913060413270f12054904080a">Engage@roots.ventures</a> --}}
                        <ul class="social-icon social-icon-lg social-icon-main">
                            <li><a href="https://twitter.com/roots_ventures" target="_blank"><svg class="w-20" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 509.64"><rect fill="white" width="512" height="509.64" rx="115.61" ry="115.61"></rect><path fill="black" fill-rule="nonzero" d="M323.74 148.35h36.12l-78.91 90.2 92.83 122.73h-72.69l-56.93-74.43-65.15 74.43h-36.14l84.4-96.47-89.05-116.46h74.53l51.46 68.04 59.53-68.04zm-12.68 191.31h20.02l-129.2-170.82H180.4l130.66 170.82z"></path></svg>
                            </a></li>
                            <li><a href="https://www.linkedin.com/company/roots-ventures-sa/?viewAsMember=true" target="_blank"><svg class="w-20" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="white" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"></path></svg>
                            </a></li>
                            <li><a href="https://wa.me/0554660495" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"  width="24" height="24" viewBox="0 0 30 30">
    <path fill="white" d="M 15 3 C 8.373 3 3 8.373 3 15 C 3 17.251208 3.6323415 19.350068 4.7109375 21.150391 L 3.1074219 27 L 9.0820312 25.431641 C 10.829354 26.425062 12.84649 27 15 27 C 21.627 27 27 21.627 27 15 C 27 8.373 21.627 3 15 3 z M 10.892578 9.4023438 C 11.087578 9.4023438 11.287937 9.4011562 11.460938 9.4101562 C 11.674938 9.4151563 11.907859 9.4308281 12.130859 9.9238281 C 12.395859 10.509828 12.972875 11.979906 13.046875 12.128906 C 13.120875 12.277906 13.173313 12.453437 13.070312 12.648438 C 12.972312 12.848437 12.921344 12.969484 12.777344 13.146484 C 12.628344 13.318484 12.465078 13.532109 12.330078 13.662109 C 12.181078 13.811109 12.027219 13.974484 12.199219 14.271484 C 12.371219 14.568484 12.968563 15.542125 13.851562 16.328125 C 14.986562 17.342125 15.944188 17.653734 16.242188 17.802734 C 16.540187 17.951734 16.712766 17.928516 16.884766 17.728516 C 17.061766 17.533516 17.628125 16.864406 17.828125 16.566406 C 18.023125 16.268406 18.222188 16.319969 18.492188 16.417969 C 18.766188 16.515969 20.227391 17.235766 20.525391 17.384766 C 20.823391 17.533766 21.01875 17.607516 21.09375 17.728516 C 21.17075 17.853516 21.170828 18.448578 20.923828 19.142578 C 20.676828 19.835578 19.463922 20.505734 18.919922 20.552734 C 18.370922 20.603734 17.858562 20.7995 15.351562 19.8125 C 12.327563 18.6215 10.420484 15.524219 10.271484 15.324219 C 10.122484 15.129219 9.0605469 13.713906 9.0605469 12.253906 C 9.0605469 10.788906 9.8286563 10.071437 10.097656 9.7734375 C 10.371656 9.4754375 10.692578 9.4023438 10.892578 9.4023438 z"></path>
</svg>
                            </a></li>
                            <li><a href="mailto:Engage@roots.ventures" target="_blank"><svg viewBox="0 -3.5 32 32" class="w-20" width="24" height="24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>mail</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"> <g id="Icon-Set-Filled" sketch:type="MSLayerGroup" transform="translate(-414.000000, -261.000000)" fill="#ffffff"> <path d="M430,275.916 L426.684,273.167 L415.115,285.01 L444.591,285.01 L433.235,273.147 L430,275.916 L430,275.916 Z M434.89,271.89 L445.892,283.329 C445.955,283.107 446,282.877 446,282.634 L446,262.862 L434.89,271.89 L434.89,271.89 Z M414,262.816 L414,282.634 C414,282.877 414.045,283.107 414.108,283.329 L425.147,271.927 L414,262.816 L414,262.816 Z M445,261 L415,261 L430,273.019 L445,261 L445,261 Z" id="mail" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>
                            </a></li>
                        </ul>
                    </p>
            </div>
        </div>
        <div class="flex flex-grow-1 items-center justify-start rotate-180">
            <div class="lqd-active-row-light header-module-rotate py-10">
                <div class="lqd-scrl-indc lqd-scrl-indc-style-dot mx-auto flex whitespace-nowrap align-self-end"
                    data-lqd-scroll-indicator="true"><a href="#wrap"
                        data-localscroll="true" data-lqd-interactive-color="true"><span
                            class="lqd-scrl-indc-inner flex items-center"><span
                                class="lqd-scrl-indc-txt">scroll</span> <span
                                class="lqd-scrl-indc-line flex-grow-1 relative bg-black"><span
                                    class="lqd-scrl-indc-el inline-block absolute rounded-4"></span></span></span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="lqd-mobile-sec d-lg-flex relative">
    <div class="lqd-mobile-sec-inner navbar-header w-full flex items-stretch">
        <div class="lqd-mobile-modules-container"></div><button type="button"
            class="navbar-toggle collapsed nav-trigger style-mobile justify-end flex p-0 border-none rounded-full relative bg-transparent text-black items-center transition-all"
            data-ld-toggle="true" data-bs-toggle="collapse" data-bs-target="#lqd-mobile-sec-nav"
            aria-expanded="false"
            data-toggle-options="{ &quot;changeClassnames&quot;: {&quot;html&quot;: &quot;mobile-nav-activated&quot;}}"><span
                class="sr-only">Menu</span> <span class="bars"><span
                    class="bars-inner w-full h-full flex rounded-inherit flex-col"><span
                        class="bar bg-black transition-all"></span> <span
                        class="bar bg-black transition-all"></span> <span
                        class="bar bg-black transition-all"></span></span></span></button> <a
            class="text-start navbar-brand"
            @if (!request()->routeIs('home')) 
            href="{{ route('home') }}" 
            @endif
            ><span
                class="navbar-brand-inner justify-start"><img class="logo-default" width="52"
                    height="23" src="{{ asset('assets/img/Roots-Logo-Original.png') }}"
                    alt="Hub Theme"></span></a>
    </div>
    <div class="lqd-mobile-sec-nav w-full absolute z-10">
        <div class="mobile-navbar-collapse navbar-collapse collapse text-white" id="lqd-mobile-sec-nav"
            aria-expanded="false" role="navigation">
            <ul id="mobile-primary-nav" class="lqd-mobile-main-nav main-nav" data-localscroll="true"
                data-localscroll-options="{&quot;itemsSelector&quot;:&quot;> li > a&quot;, &quot;trackWindowScroll&quot;: true, &quot;includeParentAsOffset&quot;: true}">
                <li><a class="mt-0/75em"
                @if (!request()->routeIs('home')) 
                    href="{{ route('home') }}" 
                @endif
                >@lang('header.home')  <sup
                            class="link-sup">01</sup></a></li>
                <li><a class="mt-0/75em" 
                @if (!request()->routeIs('about')) 
                    href="{{ route('about') }}" 
                @endif
                >@lang('header.gtku')  <sup
                            class="link-sup">02</sup></a></li>
                            
                                    {{-- hidden --}}
                {{-- <li><a class="mt-0/75em" href="#">Why The Venutre Studio?
                        <span class="submenu-expander absolute"></span> <sup class="link-sup">03</sup></a>
                </li> --}}

                <li><a class="mt-0/75em"
                @if (!request()->routeIs('news')) 
                    href="{{ route('news') }}" 
                @endif
                >@lang('header.news')  <sup class="link-sup">04</sup></a></li>

                           {{-- hidden --}}
                <li><a class="mt-0/75em" 
                    @if (!request()->routeIs('blog')) 
                    href="{{ route('blog') }}" 
                    @endif>
                    @lang('header.blog')   <sup
                    class="link-sup">05</sup></a></li>

                    @if (App::getLocale() === 'en')
                    <li>
                        <a class="mt-0/75em" href="{{ route('locale', 'ar') }}">العربية</a>
                    </li>
                @else
                    <li>
                        <a class="mt-0/75em" href="{{ route('locale', 'en') }}">English</a>
                    </li>
                @endif

            </ul>
        </div>
    </div>
</div>
</header>