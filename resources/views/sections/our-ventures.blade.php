<div class="carousel-wrapper1">
    <h1 class="our_ventures_text">@lang('home.our_v_title')</h1>
    <div class="owl-carousel ourventures owl-theme owl-custom-1">

        <div class="item carousel-item-1 grayscale" data-modal-key="Coz" onclick="centerClickedItem(0, 'Coz')">
            <img class="slider-img" src="{{ '/assets/img/our-ventures/coz-bg.png' }}"alt="Partner 1">
            <div class="slider-logo">
                <img src="{{ '/assets/img/our-ventures/Coz-logo.png' }}"alt="Partner 1">
            </div>
        </div>

        <div class="item carousel-item-1 grayscale" data-modal-key="Eyotic" onclick="centerClickedItem(1, 'Eyotic')">
            <img class="slider-img" src="{{ '/assets/img/our-ventures/Eyotic-bg.png' }}" alt="Partner 2">
            <div class="slider-logo">
                <img src="{{ '/assets/img/our-ventures/Eyotic-logo.png' }}"alt="Partner 1">
            </div>
        </div>

        <div class="item carousel-item-1 grayscale" data-modal-key="Rai" onclick="centerClickedItem(2, 'Rai')">
            <img class="slider-img" src="{{ '/assets/img/our-ventures/Rai-bg.png' }}"alt="Partner 3">
            <div class="slider-logo">
                <img src="{{ '/assets/img/our-ventures/Rai-logo.png' }}"alt="Partner 1">
            </div>
        </div>
        
        <div class="item carousel-item-1 grayscale" data-modal-key="Rootlytics" onclick="centerClickedItem(3, 'Rootlytics')">
            <img class="slider-img" src="{{ '/assets/img/our-ventures/Rootlytics-bg.png' }}" alt="Partner 4">
            <div class="slider-logo">
                <img src="{{ '/assets/img/our-ventures/Rootlytics-logo.png' }}"alt="Partner 1">
            </div>
        </div>

        <div class="item carousel-item-1 grayscale" data-modal-key="Rai" onclick="centerClickedItem(4, 'Rai')">
            <img class="slider-img" src="{{ '/assets/img/our-ventures/Rai-bg.png' }}"alt="Partner 3">
            <div class="slider-logo">
                <img src="{{ '/assets/img/our-ventures/Rai-logo.png' }}"alt="Partner 1">
            </div>
        </div>

    </div>
</div>


    <!-- Modal Structure -->
    <div id="modal" class="modal" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
        <div class="modal-content">
            <span class="close-button" onclick="closeModal()">&times;</span>
            <div id="modal-body"></div>
        </div>
    </div>

    <script>
document.addEventListener("DOMContentLoaded", () => {
    const modalContentMap = {
        'Coz': {
            title: "{{ __('home.our_v_1') }}",
            description: "{{ __('home.our_v_title_1') }}", // Inject translation
            content:"{{ __('home.our_v_desc_1') }}",
            founded:"2023",
            stage:"{{ __('home.our_v_stage_1') }}",
            investors:"{{ __('home.our_v_investors_1') }}",
            url:"Coz.com",
            width:"18%"

        },
        'Eyotic': {
            title: "{{ __('home.our_v_2') }}",
            description: "{{ __('home.our_v_title_2') }}", // Inject translation
            content:"{{ __('home.our_v_desc_2') }}",
            founded:"2023",
            stage:"{{ __('home.our_v_stage_2') }}",
            investors:"{{ __('home.our_v_investors_2') }}",
            url:"Eyotic.com",
            width:"24%"

        },
        'Rai': {
            title: "{{ __('home.our_v_3') }}",
            description: "",
            content:"",
            founded:"",
            stage:"",
            investors:"",
            url:"Rai.com",
            width:"18%"

        },
        'Rootlytics': {
            title: "{{ __('home.our_v_4') }}",
            description: "",
            content:"",
            founded:"",
            stage:"",
            investors:"",
            url:"Rootlytics.com",
            width:"32%"

        },
        'Rai2': {
            title: "{{ __('home.our_v_3') }}",
            description: "",
            content:"",
            founded:"",
            stage:"",
            investors:"",
            url:"Rai.com",
            width:"18%"

        }

    };

    function openModal(contentKey) {
        const content = modalContentMap[contentKey];

        if (!content) return;

        document.getElementById('modal-body').innerHTML = `
            <h2 style='font-weight: bold;margin-bottom: 1rem;'>${content.title}</h2>
            <p style='color: #23074E;font-size: 24px;line-height: 36px;margin-bottom: 3rem;'>${content.description}</p>
            <p style='font-size: 16px;line-height: 36px;margin-bottom: 3rem;color: black;'>${content.content}</p>
            <div class='flex-container'>
                <div class='modal-flex'>
                    <h6 class="text-title-flex">{{ __('home.founded') }}</h6>
                    <p class='text-desc-flex'>${content.founded}</p>
                </div>  
                <div class='modal-flex'>
                    <h6 class="text-title-flex">{{ __('home.stage') }}</h6>
                    <p class='text-desc-flex'>${content.stage}</p>
                </div>    
                <div class='modal-flex'>
                    <h6 class="text-title-flex">{{ __('home.investors') }}</h6>
                    <p class='text-desc-flex'>${content.investors}</p>
                </div>
            </div>
                <div class='flex-container'>
                <div class='modal-flex'>
                    <h6 style='border-bottom: 2px solid;width: ${content.width};margin-top: 3rem;' class="text-title-flex">
                        <a href="${content.url}" style="color: black; background: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjYiIGhlaWdodD0iMjYiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTkuOTggNC44MzZsOS45NzEuNC41MDMgMTAuMjgzIiBzdHJva2U9IiMwMDAiLz48cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZD0iTTUuMDAxIDE5LjI5N0wxOS4wNDEgNS41M2wuNi42MUw1LjYgMTkuOTA4bC0uNi0uNjF6IiBmaWxsPSIjMDAwIi8+PC9zdmc+) no-repeat 100% 0;padding: 0 34px 8px 0;">
                        ${content.url}
                        </a>
                    </h6>
                </div>
                </div>
            </div>
        `;
        document.getElementById('modal').style.display = "block";
    }

    function closeModal() {
        document.getElementById('modal').style.display = "none";
    }

    // Close the modal when the user clicks anywhere outside of the modal content
    window.onclick = function(event) {
        if (event.target == document.getElementById('modal')) {
            closeModal();
        }
    };

    // Attach openModal and closeModal to window for global access
    window.openModal = openModal;
    window.closeModal = closeModal;
});

    </script>
