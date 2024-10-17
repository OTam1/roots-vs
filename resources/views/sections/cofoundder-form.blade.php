<section id="co-contactus"
class="lqd-section lqd-modal-content flex items-center link-black bg-center bg-cover bg-norepeat py-80 sm:h-auto"
style="background-image: url();" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<div class="container flex items-center sm:p-0">
    <div class="row items-center content-center h-full">
        <div class="col col-12 col-md-6 mb-30">
            <div class="ld-fancy-heading">
                <h2 class="ld-fh-element text-70 mb-0/5em leading-1em text-medium">@lang('home.contact_title')
                </h2>
            </div>
            <div class="ld-fancy-heading">
                <p class="ld-fh-element mb-2/5em text-30 leading-1em">@lang('home.contact_desc')
                </p>
            </div>
        </div>
        <div class="col col-12 col-md-6 module-col">
            <div
                class="lqd-contact-form lqd-contact-form-inputs-underlined lqd-contact-form-button-lg lqd-contact-form-button-block py-45 px-65 -mb-50 md:p-0">
                <div role="form">
                    <div class="screen-reader-response">
                        <p role="status" aria-live="polite" aria-atomic="true"></p>
                    </div>
                    <form action="{{ route('contact.submit') }}" method="post" class="lqd-cf-form" novalidate="novalidate" data-status="init">
                        @csrf
                        <div class="row">
                            <div class="col col-md-6 col-12">
                                <p class="m-0 text-black-30 text-20">@lang('home.contact_fullname')</p>
                                <p><span class="lqd-form-control-wrap text"><input class="text-13 text-black border-black-10 font-bold bg-transparent" type="text" name="name" value="{{ old('name') }}" size="40" aria-required="true" aria-invalid="false" placeholder="@lang('home.contact_fullname')"></span></p>
                            </div>
                            <div class="col col-md-6 col-12">
                                <p class="m-0 text-black-30 text-20">@lang('home.contact_email')</p>
                                <p><span class="lqd-form-control-wrap email"><input class="text-13 text-black border-black-10 font-bold bg-transparent" type="email" name="email" value="{{ old('email') }}" size="40" aria-required="true" aria-invalid="false" placeholder="@lang('home.contact_email')"></span></p>
                            </div>
                            <div class="col col-md-6 col-12">
                                <p class="m-0 text-black-30 text-20">@lang('home.contact_mobile')</p>
                                <p><span class="lqd-form-control-wrap tel"><input class="text-13 text-black border-black-10 font-bold bg-transparent" type="phone" name="tel" value="{{ old('tel') }}" size="40" aria-invalid="true" placeholder="@lang('home.contact_mobile')"></span>
                                </p>
                            </div>
                            <div class="col col-md-6 col-12">
                                <p class="m-0 text-black-30 text-20">@lang('home.contact_linkedin')</p>
                                <p><span class="lqd-form-control-wrap text"><input class="text-13 text-black border-black-10 font-bold bg-transparent" type="text" name="project-name" value="{{ old('project-name') }}" size="40" aria-required="true" aria-invalid="false" placeholder="@lang('home.contact_linkedin')"></span>
                                </p>
                            </div>
                            <div class="col col-12">
                                <p class="m-0 text-black-30 text-20">@lang('home.contact_why')</p>
                                <p class=""><span class="lqd-form-control-wrap textarea">
                                        <textarea class="text-13 text-black border-black-10 font-bold bg-transparent" name="message" cols="10" rows="4" aria-required="true" aria-invalid="false" placeholder="@lang('home.contact_write')">{{ old('message') }}</textarea>
                                    </span></p>
                            </div>
                            <div class="col col-12"><span class="lqd-form-control-wrap acceptance"><span class="lqd-cf-form-control lqd-cf-acceptance"><span class="lqd-cf-list-item"><label><input type="checkbox" name="acceptance" value="1" aria-invalid="false"> <span class="lqd-cf-list-item-label">
                                @lang('home.contact_select')
                            </span></label></span></span></span></div>
                            <div class="col col-12"><input type="submit" value="@lang('home.contact_Send')" class="lqd-cf-form-control bg-primary text-white text-17 leading-1/5em font-medium">
                            </div>
                        </div>
                    </form>
                    <div class="lqd-cf-response-output"></div>
                </div>
            </div>
        </div>
        {{-- <div class="col col-12 col-md-3">
            <div class="ld-fancy-heading relative">
                <h6
                    class="ld-fh-element text-14 font-bold mb-1/25em tracking-0 inline-block relative">
                    @lang('home.careers')</h6>
            </div>
            <div class="ld-fancy-heading relative">
                <p
                    class="ld-fh-element text-16 leading-1/2em mb-0/75em inline-block relative text-black">
                    @lang('home.careers_desc')</p>
            </div>
            <div class="ld-fancy-heading relative">
                <p
                    class="ld-fh-element mb-0/5em inline-block relative font-bold leading-1/2em text-16 text-black">
                    <a href="cdn-cgi/l/email-protection.html" class="__cf_email__"
                        data-cfemail="086b697a6d6d7a7b48607d6a266b6765">Engage@roots.ventures</a>
                </p>
            </div>
        </div> --}}
        {{-- <div class="col col-12 col-md-3">
            <div class="ld-fancy-heading relative">
                <h6
                    class="ld-fh-element text-14 font-bold mb-1/25em tracking-0 inline-block relative">
                    @lang('home.feedbacks')</h6>
            </div>
            <div class="ld-fancy-heading relative">
                <p
                    class="ld-fh-element text-16 leading-1/2em mb-0/75em inline-block relative text-black">
                    @lang('home.feedbacks_desc')</p>
            </div>
            <div class="ld-fancy-heading relative">
                <p
                    class="ld-fh-element mb-0/5em inline-block relative font-bold leading-1/2em text-16 text-black">
                    <a href="cdn-cgi/l/email-protection.html" class="__cf_email__"
                        data-cfemail="cda4a3aba28da5b8afe3aea2a0">Engage@roots.ventures</a>
                </p>
            </div>
        </div> --}}
    </div>
</div>
</section>