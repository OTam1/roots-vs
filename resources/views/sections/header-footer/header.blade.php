<header id="site-header" class="main-header sticky-header-noshadow" data-sticky-header="true"
data-sticky-values-measured="false" data-sticky-options="{&quot;dynamicColors&quot; :true}">
<div class="lqd-head-sec-wrap lqd-hide-onstuck relative pr-40 pl-125 lg:pl-0 lg:pr-0 md:hidden">
    <div class="lqd-head-sec w-full flex items-stretch justify-between">
        <div class="col-auto lqd-head-col justify-start">
            <div class="module-logo navbar-brand-plain py-45"><a class="navbar-brand"
                    href=""><span class="navbar-brand-inner"><img
                            class="logo-light" width="52" height="23"
                            src="assets/img/Roots-Logo-Original.png" alt="Roots Ventures"> <img
                            class="logo-default" width="52" height="23"
                            src="assets/img/Roots-Logo-Original.png" alt="Roots Ventures"></span></a>
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
                        <li><a
                            @if (!request()->routeIs('home')) 
                            href="{{ route('home') }}" 
                        @endif
                        >Home <sup class="link-sup">01</sup></a></li>
                        <li><a href="#">Get To Know Us <sup
                                    class="link-sup">02</sup></a></li>
                        <li><a href="#">Why The Venutre Studio? <sup
                                    class="link-sup">03</sup></a></li>
                        <li><a
                        @if (!request()->routeIs('news')) 
                            href="{{ route('news') }}" 
                        @endif
                        >News <sup class="link-sup">04</sup></a></li>
                        <li><a href="#">Blogs <sup
                            class="link-sup">05</sup></a></li>
    
                    </ul>
                </div>
            </div>
            <div class="header-module module-button ml-25 module-button"><a
                    href="#contact-modal"
                    class="btn btn-solid btn-sm round border-thin leading-1/6em tracking-0 text-15 rounded-4 bg-black border-black text-white hover:bg-primary"
                    data-lity="#contact-modal"><span class="btn-txt" data-text="Send message">Send
                        message</span></a></div>
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
                                        href="#" rel="home"><span
                                            class="navbar-brand-inner"><img class="logo-light"
                                                src="assets/img/Roots-Logo-White.png"
                                                alt="Hub Theme"> <img class="logo-default"
                                                src="assets/img/Roots-Logo-Original.png"
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
                                        >Home</a></li>
                                        <li class="mb-15"><a class="flex hover:text-primary"
                                                href="#">Get To Know Us</a></li>
                                        <li class="mb-15"><a class="flex hover:text-primary"
                                                href="#">Why The Venutre Studio?</a></li>
                                        <li class="mb-15"><a class="flex hover:text-primary"
                                        @if (!request()->routeIs('news')) 
                                            href="{{ route('news') }}" 
                                        @endif
                                        >News</a></li>
                                        <li class="mb-15"><a class="flex hover:text-primary"
                                            href="#">Blogs</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="w-full flex flex-auto flex-col items-start justify-end px-15">
                                <div class="ld-fancy-heading">
                                    <p class="ld-fh-element text-black mb-1/5em"><a
                                            href="#" class="__cf_email__"
                                            >Info@roots.ventures</a>
                                    </p>
                                </div>
                                <div class="ld-fancy-heading">
                                    <p class="ld-fh-element mb-2em leading-1/5em text-14 text-black">
                                        Looking for collaboration for your next project? Do not hesitate to
                                        contact us to say hello.</p>
                                </div>
                                <ul class="social-icon social-icon-lg">
                                    <li><a href="https://twitter.com/roots_ventures" target="_blank"><svg class="w-20" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 509.64"><rect width="512" height="509.64" rx="115.61" ry="115.61"/><path fill="#fff" fill-rule="nonzero" d="M323.74 148.35h36.12l-78.91 90.2 92.83 122.73h-72.69l-56.93-74.43-65.15 74.43h-36.14l84.4-96.47-89.05-116.46h74.53l51.46 68.04 59.53-68.04zm-12.68 191.31h20.02l-129.2-170.82H180.4l130.66 170.82z"/></svg>
                                    </a></li>
                                    <li><a href="https://www.linkedin.com/company/roots-ventures-sa/?viewAsMember=true" target="_blank"><svg class="w-20" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                                    </a></li>
                                    <li><a href="https://wa.me/0554660495" target="_blank"><svg class="w-20" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
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
                    <ul class="reset-ul inline-nav flex -mr-10 -ml-10">
                        <li class="my-10"><a href="#" target="_blank"
                                data-lqd-interactive-color="true">En.</a></li>
                        <li class="my-10"><a href="#" target="_blank"
                                data-lqd-interactive-color="true">fr.</a></li>
                        <li class="my-10"><a href="#" target="_blank"
                                data-lqd-interactive-color="true">Ge.</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="flex flex-grow-1 items-center justify-center rotate-180">
            <div class="header-module-rotate py-10">
                <p class="font-medium" data-lqd-interactive-color="true"><a
                        href="#" class="__cf_email__"
                        data-cfemail="6704080913060413270f12054904080a">Info@roots.ventures</a></p>
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
            class="text-start navbar-brand" href=""><span
                class="navbar-brand-inner justify-start"><img class="logo-default" width="52"
                    height="23" src="assets/img/Roots-Logo-Original.png"
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
                >Home <sup
                            class="link-sup">01</sup></a></li>
                <li><a class="mt-0/75em" href="#">Get To Know Us <sup
                            class="link-sup">02</sup></a></li>
                <li><a class="mt-0/75em" href="#">Why The Venutre Studio?
                        <span class="submenu-expander absolute"></span> <sup class="link-sup">03</sup></a>
                </li>
                <li><a class="mt-0/75em"
                @if (!request()->routeIs('news')) 
                    href="{{ route('news') }}" 
                @endif
                >News <sup
                            class="link-sup">04</sup></a></li>
                <li><a class="mt-0/75em" href="#">Blogs <sup
                    class="link-sup">05</sup></a></li>
    
            </ul>
        </div>
    </div>
</div>
</header>