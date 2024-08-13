<div class="carousel-wrapper1">
    <h1 class="our_ventures_text">Our Ventures</h1>
    <div class="owl-carousel ourventures owl-theme owl-custom-1">

        <div class="item carousel-item-1" onclick="openModal('Coz')">
            <img class="slider-img" src="{{ '/assets/img/our-ventures/Coz.png' }}"alt="Partner 1">
            <div class="slider-logo">
                <img src="{{ '/assets/img/our-ventures/Coz-logo.png' }}"alt="Partner 1">
            </div>
        </div>

        <div class="item carousel-item-1" onclick="openModal('Eyotic')">
            <img class="slider-img" src="{{ '/assets/img/our-ventures/Eyotic.png' }}" alt="Partner 2">
            <div class="slider-logo">
                <img src="{{ '/assets/img/our-ventures/Eyotic-logo.png' }}"alt="Partner 1">
            </div>
        </div>

        <div class="item carousel-item-1" onclick="openModal('Rai')">
            <img class="slider-img" src="{{ '/assets/img/our-ventures/Rai.png' }}"alt="Partner 3">
            <div class="slider-logo">
                <img src="{{ '/assets/img/our-ventures/Rai-logo.png' }}"alt="Partner 1">
            </div>
        </div>
        
        <div class="item carousel-item-1" onclick="openModal('Rootlytics')">
            <img class="slider-img" src="{{ '/assets/img/our-ventures/Rootlytics.png' }}" alt="Partner 4">
            <div class="slider-logo">
                <img src="{{ '/assets/img/our-ventures/Rootlytics-logo.png' }}"alt="Partner 1">
            </div>
        </div>

    </div>
</div>


    <!-- Modal Structure -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close-button" onclick="closeModal()">&times;</span>
            <div id="modal-body"></div>
        </div>
    </div>

    <script>
document.addEventListener("DOMContentLoaded", () => {
    const modalContentMap = {
        'Coz': {
            title: "Coz",
            description: "Saudi’s first carbon credits origination and offsetting platform",
            content:"We created COZ to address the critical need for carbon management solutions in industries that are essential yet significant contributors to the reduction of emissions. COZ is Saudi Arabia’s first carbon credits origination and offsetting platform, designed to transform the way businesses engage with carbon markets. By simplifying the process of carbon credit issuance for key clients in Renewable Energy, Waste Management, and Nature-Based Solutions, COZ supports projects that significantly reduce carbon footprints. In its first year of operation, COZ successfully engaged with these sectors to help them generate and manage carbon credits, aligning with Saudi Arabia’s ambitious environmental goals.",
            founded:"2023",
            stage:"Pre-seed",
            investors:"ROOTS Angel Network",
            url:"Coz.com",
            width:"18%"

        },
        'Eyotic': {
            title: "Eyotic",
            description: "Fit-for-purpose, and affordable industrial intelligence solution for sustainable excellence",
            content:"We established Eyotic in response to the inefficiencies and environmental challenges within the industrial sector. Eyotic is a tech-enabled platform that leverages Industry 4.0 technologies to enhance sustainability and operational efficiency in industries. By optimizing processes, reducing waste, and lowering energy consumption, Eyotic directly contributes to the National Industrial Strategy. During its inaugural year, Eyotic formed strategic partnerships with the Ministry of Industry and the Saudi Industrial Development Fund (SIDF), securing crucial support and alignment with government initiatives aimed at boosting industrial sustainability and innovation.",
            founded:"2023",
            stage:"Pre-seed",
            investors:"ROOTS Angel Network",
            url:"Eyotic.com",
            width:"24%"

        },
        'Rai': {
            title: "Rai",
            description: "Description for Rai. Customize this content as needed.",
            content:"",
            founded:"",
            stage:"",
            investors:"",
            url:"Rai.com",
            width:"18%"

        },
        'Rootlytics': {
            title: "Rootlytics",
            description: "Description for Rootlytics. Customize this content as needed.",
            content:"",
            founded:"",
            stage:"",
            investors:"",
            url:"Rootlytics.com",
            width:"32%"

        }
    };

    function openModal(contentKey) {
        const content = modalContentMap[contentKey];

        if (!content) return;

        document.getElementById('modal-body').innerHTML = `
            <h2 style='font-weight: bold;margin-bottom: 1rem;'>${content.title}</h2>
            <p style='color: #23074E;font-size: 32px;line-height: 36px;margin-bottom: 3rem;'>${content.description}</p>
            <p style='font-size: 22px;line-height: 36px;margin-bottom: 3rem;color: black;'>${content.content}</p>
            <div class='flex-container'>
                <div class='modal-flex'>
                    <h6 class="text-title-flex">Founded</h6>
                    <p class='text-desc-flex'>${content.founded}</p>
                </div>  
                <div class='modal-flex'>
                    <h6 class="text-title-flex">Stage</h6>
                    <p class='text-desc-flex'>${content.stage}</p>
                </div>    
                <div class='modal-flex'>
                    <h6 class="text-title-flex">Investors</h6>
                    <p class='text-desc-flex'>${content.investors}</p>
                </div>
            </div>
                <div class='flex-container'>
                <div class='modal-flex'>
                    <h6 style='border-bottom: 2px solid;width: ${content.width};margin-top: 3rem;' class="text-title-flex">
                        <a style="background: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjYiIGhlaWdodD0iMjYiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTkuOTggNC44MzZsOS45NzEuNC41MDMgMTAuMjgzIiBzdHJva2U9IiMwMDAiLz48cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZD0iTTUuMDAxIDE5LjI5N0wxOS4wNDEgNS41M2wuNi42MUw1LjYgMTkuOTA4bC0uNi0uNjF6IiBmaWxsPSIjMDAwIi8+PC9zdmc+) no-repeat 100% 0;padding: 0 34px 8px 0;">
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
