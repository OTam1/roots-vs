<section id="blog" class="lqd-section blog py-60 pt-120" data-section-luminosity="light" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-lg-12">
                <div class="flex flex-col mb-40 text-center md:text-start">
                    <div class="ld-fancy-heading">
                        <h2 class="ld-fh-element mb-0/5em">@lang('news.news_title')</h2>
                    </div>
                    <div class="ld-fancy-heading">
                        <!-- <p class="ld-fh-element mb-0/5em">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
                    </div>
                </div>
            </div>
            <div class="col col-lg-12"></div>
            @foreach($news as $item)

            <div class="col col-12 col-md-6 col-lg-4 px-15 mb-30">
                <article id="post-3441" class="lqd-lp lqd-lp lqd-lp-style-20 lqd-lp-hover-img-zoom relative">
                    <div class="lqd-lp-img relative mb-1em overflow-hidden">
                        <figure class="mb-0 relative">
                            <img width="700" height="450"
                            @if(app()->getLocale() == 'ar')
                            src="{{ asset('image_ar/' .  $item->image_ar) }}" 
                            @else
                            src="{{ asset('images/' .  $item->image) }}" 
                            @endif
                            class="w-full" alt="Latest news in the office">
                        </figure>
                    </div>
                    <div class="lqd-lp-meta mb-1/5em">
                        <ul class="lqd-lp-cat reset-ul inline-nav lqd-lp-cat-solid">
                            <li class="mb-0/5em">
                                <a href="#">
                                    @if(app()->getLocale() == 'ar')
                                    {{ $item->writer_ar }}
                                @else
                                    {{ $item->writer }}
                                @endif    
                                </a>
                            </li>
                        </ul>
                    </div>
                    <header class="lqd-lp-header mb-0/85em">
                        <h5 class="lqd-lp-title text-22 m-0">
                            @if(app()->getLocale() == 'ar')
                                {{ $item->title_ar }}
                            @else
                                {{ $item->title }}
                            @endif
                        </h5>
                    </header>
                    <div class="lqd-lp-excerpt mb-1em">
                        @if(app()->getLocale() == 'ar')
                            {{ $item->excerpt_ar }}
                        @else
                            {{ $item->excerpt }}
                        @endif
                    </div>
                    <!-- <a href="{{ route('detailed-news', $item->id) }}" class="lqd-lp-overlay-link lqd-overlay z-index-2"></a> -->
                    <a target="_blank"
                    @if(app()->getLocale() == 'ar')
                    href="{{ $item->link_ar }}"
                    @else
                    href="{{ $item->link }}"
                    @endif
                    class="lqd-lp-overlay-link lqd-overlay z-index-2"></a>
                </article>
            </div>
        
        @endforeach
        


        </div>
    </div>
</section>
