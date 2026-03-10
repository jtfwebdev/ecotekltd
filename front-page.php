<?php

/*
Template Name: Homepage
*/

get_header(); ?>

<section class="relative w-full overflow-hidden min-h-screen">

    <div class="absolute inset-0 bg-cover bg-center hero-bg"
        style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/desktop-hero-image.jpg');">
    </div>

    <div class="absolute inset-0 bg-gradient-to-b 
            from-white/80 via-white/55 to-white">
    </div>

    <div class="relative z-10 flex items-center min-h-screen
                px-6 sm:px-10 md:px-20 lg:px-32 xl:px-40">

        <div class="max-w-2xl">

            <h1 class="hero-animate hero-delay-1 
           font-['Open Sans'] font-semibold tracking-tight 
           text-gray-950 
           text-4xl sm:text-5xl lg:text-6xl 
           leading-snug sm:leading-tight mb-6 max-w-[80%] sm:max-w-full">
                Reliable Heating & Plumbing<br class="hidden sm:block">
                You Can Trust
            </h1>

            <p class="hero-animate hero-delay-2 
          text-sm sm:text-base md:text-lg 
          text-gray-800 
          leading-6 sm:leading-7 md:leading-8 
          mb-8 sm:mb-10 
          max-w-[80%] sm:max-w-full">
                Professional boiler, gas and plumbing services across Lichfield and surrounding areas —
                keeping your home warm, safe and running smoothly.
            </p>

            <div
                class="hero-animate hero-delay-3 flex flex-col sm:flex-row gap-4 max-[640px]:w-2/3 max-[555px]:w-[80%]">
                <a href="#contact" class="inline-flex items-center justify-center 
           bg-[#6A687A] rounded-md 
           px-6 sm:px-12 md:px-16 
           py-3 sm:py-4 
           text-white font-semibold tracking-wide 
           hover:bg-gray-800 transition 
           w-full sm:w-auto text-center text-sm sm:text-base">
                    Contact us for a quote
                </a>
            </div>

        </div>
    </div>
</section>

<section id="about" class="relative bg-white py-24 overflow-hidden">
    <div class="relative mx-auto max-w-4xl px-6 text-center">
        <p class="text-base sm:text-lg leading-7 sm:leading-8 text-gray-800 mb-8">
            ECO-TEK is a trusted heating, plumbing and gas services company based near Lichfield, Staffordshire.
            We proudly serve homes and businesses within a 25-mile radius, delivering reliable workmanship and
            honest, professional service every time.
        </p>

        <p class="text-base sm:text-lg leading-7 sm:leading-8 text-gray-800 mb-6">
            Fully Gas Safe registered and comprehensively insured, ECO-TEK specialises in boiler installations,
            servicing and repairs, alongside all aspects of plumbing and gas work. Safety, efficiency and
            long-lasting solutions are at the heart of everything we do.
        </p>

        <p class="text-base sm:text-lg leading-7 sm:leading-8 text-gray-800 mb-8">
            We offer free, no-obligation quotes and are available for emergency callouts when you need us most.
            Whether it’s routine maintenance or an urgent repair, ECO-TEK is committed to keeping your home warm,
            safe and running smoothly.
        </p>

        <div class="flex flex-wrap justify-center items-center gap-8 mt-8">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logo-transparent.png" alt="EcoTek Logo"
                class="max-h-24 w-auto h-auto shrink">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gas-safe.png" alt="Gas Safe Logo"
                class="max-h-24 w-auto h-auto shrink">
        </div>
    </div>
</section>

<section id="services-mobile" class="lg:hidden relative bg-[#6A687A] pt-20 pb-24 overflow-hidden">

    <div class="relative z-10">

        <div class="mb-10 px-6">
            <h3 class="text-[#EA8C55] font-semibold text-xs tracking-widest mb-2">
                RELIABLE, COST-EFFECTIVE SOLUTIONS
            </h3>

            <h2 class="text-3xl font-bold text-white leading-tight mb-4">
                Our Plumbing & Heating Services
            </h2>

            <p class="text-gray-200 text-base leading-relaxed">
                Expert heating and plumbing services across Lichfield and surrounding areas.
                From boiler installations to emergency repairs, ECO-TEK delivers safe,
                efficient and dependable workmanship you can trust.
            </p>
        </div>

        <div class="space-y-8">

            <div class="block w-full bg-[#5A5869] overflow-visible shadow-lg">
                <div class="w-full h-80 overflow-hidden">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Boiler services.jpg"
                        class="w-full h-full object-cover">
                </div>
                <div class="px-6 py-6">
                    <h3 class="text-white text-lg font-semibold mb-2">
                        Boiler Services
                    </h3>

                    <div
                        class="card-extra max-h-0 opacity-0 overflow-hidden transition-all duration-500 text-white/90 mt-4">
                        <p>
                            Regular boiler servicing is essential to keep your heating system operating safely,
                            efficiently, and reliably.
                            At ECO-TEK, we recommend servicing your boiler at least once a year to ensure it is
                            performing at its best.
                            Routine maintenance helps maximise efficiency and significantly reduces the risk of
                            unexpected breakdowns.
                        </p>
                        <p class="mt-4 font-semibold">A boiler service includes:</p>
                        <ul class="list-disc pl-6 mt-2 space-y-2">
                            <li>Full safety inspection of the boiler and its controls</li>
                            <li>Checks for corrosion, leaks, and general wear</li>
                            <li>Testing of all major components</li>
                            <li>Gas pressure verification</li>
                            <li>Flue and emission safety testing</li>
                            <li>Cleaning of key internal parts where required</li>
                            <li>Completion of a full safety checklist</li>
                        </ul>
                        <p class="mt-4">
                            Regular servicing protects your home, extends boiler lifespan, and helps maintain
                            manufacturer warranties.
                        </p>
                    </div>

                    <button class="reveal-btn w-full mt-4 text-[#EA8C55] font-semibold text-center">
                        Learn More
                    </button>
                </div>
            </div>

            <div class="block w-full bg-[#5A5869] overflow-visible shadow-lg">
                <div class="w-full h-60 overflow-hidden">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image.jpg"
                        class="w-full h-full object-cover">
                </div>
                <div class="px-6 py-6">
                    <h3 class="text-white text-lg font-semibold mb-2">
                        Plumbing & Heating
                    </h3>

                    <div
                        class="card-extra max-h-0 opacity-0 overflow-hidden transition-all duration-500 text-white/90 mt-4 space-y-4">
                        <p>
                            Our experienced engineers provide reliable plumbing and heating solutions across Lichfield
                            and surrounding areas.
                            From small repairs to full installations, we deliver high-quality workmanship with minimal
                            disruption.
                        </p>

                        <div class="space-y-4">
                            <div class="accordion-item border-b border-white/20 pb-3">
                                <button
                                    class="accordion-toggle w-full flex justify-between items-center text-left font-semibold text-lg">
                                    <span>General Plumbing</span>
                                    <svg class="chevron w-5 h-5 transition-transform duration-300 text-[#EA8C55]"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div
                                    class="accordion-content mt-2 text-white/80 overflow-hidden transition-all duration-500 ease-in-out max-h-0">
                                    We handle leaking taps, burst pipes, toilet repairs, and general plumbing
                                    maintenance quickly and efficiently.
                                </div>
                            </div>

                            <div class="accordion-item border-b border-white/20 pb-3">
                                <button
                                    class="accordion-toggle w-full flex justify-between items-center text-left font-semibold text-lg">
                                    <span>Bathroom Installations</span>
                                    <svg class="chevron w-5 h-5 transition-transform duration-300 text-[#EA8C55]"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div
                                    class="accordion-content mt-2 text-white/80 overflow-hidden transition-all duration-500 ease-in-out max-h-0">
                                    Complete bathroom installations including pipework, fixtures, and system upgrades
                                    delivered to the highest standard.
                                </div>
                            </div>

                            <div class="accordion-item border-b border-white/20 pb-3">
                                <button
                                    class="accordion-toggle w-full flex justify-between items-center text-left font-semibold text-lg">
                                    <span>Central Heating Systems</span>
                                    <svg class="chevron w-5 h-5 transition-transform duration-300 text-[#EA8C55]"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div
                                    class="accordion-content mt-2 text-white/80 overflow-hidden transition-all duration-500 ease-in-out max-h-0">
                                    Installation, upgrades, and maintenance of radiators, pipework, and full central
                                    heating systems.
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="reveal-btn w-full mt-4 text-[#EA8C55] font-semibold text-center">
                        Learn More
                    </button>
                </div>
            </div>

            <div class="block w-full bg-[#5A5869] overflow-visible shadow-lg">
                <div class="w-full h-60 overflow-hidden">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Boiler repair.jpg"
                        class="w-full h-full object-cover">
                </div>

                <div class="px-6 py-6">
                    <h3 class="text-white text-lg font-semibold mb-2">
                        24/7 Emergency Plumbing & Heating Repairs
                    </h3>

                    <div
                        class="card-extra max-h-0 opacity-0 overflow-hidden transition-all duration-500 text-white/90 mt-4 space-y-4">

                        <p>
                            Heating or plumbing failures rarely happen at a convenient time. When your boiler stops
                            working or a leak threatens your home, you need fast, professional support you can rely on.
                            ECO-TEK provides rapid-response emergency plumbing and heating services across Lichfield and
                            the surrounding areas — 24 hours a day, 7 days a week.
                        </p>

                        <p>
                            Our fully qualified, Gas Safe registered engineers attend emergency call-outs promptly,
                            diagnosing issues efficiently and carrying out safe, effective repairs wherever possible
                            during the first visit. From complete boiler breakdowns to major leaks or heating system
                            failures, we work quickly to restore comfort and safety to your property.
                        </p>

                        <div class="space-y-4">

                            <div class="accordion-item border-b border-white/20 pb-3">
                                <button
                                    class="accordion-toggle w-full flex justify-between items-center text-left font-semibold text-lg">
                                    <span>I have a plumbing emergency – what should I do?</span>
                                    <svg class="chevron w-5 h-5 transition-transform duration-300 text-[#EA8C55]"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div
                                    class="accordion-content mt-2 text-white/80 overflow-hidden transition-all duration-500 ease-in-out max-h-0">
                                    If safe to do so, turn off your water supply at the stopcock to prevent further
                                    damage.
                                    Switch off electrical appliances near any flooding and avoid contact with standing
                                    water.
                                    Then contact ECO-TEK immediately — we will guide you through the next steps and
                                    dispatch an engineer as quickly as possible.
                                </div>
                            </div>

                            <div class="accordion-item border-b border-white/20 pb-3">
                                <button
                                    class="accordion-toggle w-full flex justify-between items-center text-left font-semibold text-lg">
                                    <span>I have a gas emergency – what should I do?</span>
                                    <svg class="chevron w-5 h-5 transition-transform duration-300 text-[#EA8C55]"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div
                                    class="accordion-content mt-2 text-white/80 overflow-hidden transition-all duration-500 ease-in-out max-h-0">
                                    If you smell gas or suspect a leak, immediately turn off the gas supply at the meter
                                    if it is safe to do so.
                                    Open windows and doors for ventilation, avoid using electrical switches, and do not
                                    use naked flames.
                                    Leave the property if necessary and contact the National Gas Emergency Service on
                                    0800 111 999, then call ECO-TEK for further assistance.
                                </div>
                            </div>

                            <div class="accordion-item border-b border-white/20 pb-3">
                                <button
                                    class="accordion-toggle w-full flex justify-between items-center text-left font-semibold text-lg">
                                    <span>What happens during an emergency call-out?</span>
                                    <svg class="chevron w-5 h-5 transition-transform duration-300 text-[#EA8C55]"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div
                                    class="accordion-content mt-2 text-white/80 overflow-hidden transition-all duration-500 ease-in-out max-h-0">
                                    Our engineer will assess the issue, make the system safe, and carry out immediate
                                    repairs where possible.
                                    If replacement parts are required, we will source them quickly and arrange a
                                    convenient follow-up visit.
                                    Clear communication and your safety remain our top priorities at every stage.
                                </div>
                            </div>

                        </div>
                    </div>

                    <button class="reveal-btn w-full mt-4 text-[#EA8C55] font-semibold text-center">
                        Learn More
                    </button>
                </div>
            </div>

            <div class="block w-full bg-[#5A5869] overflow-visible shadow-lg">
                <div class="w-full h-60 overflow-hidden">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/power flushing.jpg"
                        class="w-full h-full object-cover">
                </div>

                <div class="px-6 py-6">
                    <h3 class="text-white text-lg font-semibold mb-2">
                        Power Flushing
                    </h3>

                    <div
                        class="card-extra max-h-0 opacity-0 overflow-hidden transition-all duration-500 text-white/90 mt-4 space-y-4">

                        <p>
                            Over time, central heating systems collect sludge, rust, limescale and other debris from
                            everyday use.
                            This buildup restricts circulation, creates cold spots on radiators, and forces your boiler
                            to work harder than necessary.
                        </p>

                        <div class="space-y-4">

                            <div class="accordion-item border-b border-white/20 pb-3">
                                <button
                                    class="accordion-toggle w-full flex justify-between items-center text-left font-semibold text-lg">
                                    <span>What Is Power Flushing?</span>
                                    <svg class="chevron w-5 h-5 transition-transform duration-300 text-[#EA8C55]"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div
                                    class="accordion-content mt-2 text-white/80 overflow-hidden transition-all duration-500 ease-in-out max-h-0">
                                    A professional deep clean of your heating system using specialist equipment and
                                    cleaning solutions
                                    to remove sludge and contamination from radiators and pipework.
                                </div>
                            </div>

                            <div class="accordion-item border-b border-white/20 pb-3">
                                <button
                                    class="accordion-toggle w-full flex justify-between items-center text-left font-semibold text-lg">
                                    <span>Benefits of a Power Flush</span>
                                    <svg class="chevron w-5 h-5 transition-transform duration-300 text-[#EA8C55]"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div
                                    class="accordion-content mt-2 text-white/80 overflow-hidden transition-all duration-500 ease-in-out max-h-0">
                                    Radiators heat evenly from top to bottom, rooms warm up faster, and your system runs
                                    more efficiently —
                                    often reducing overall gas usage and helping extend the life of your boiler.
                                </div>
                            </div>

                            <div class="accordion-item border-b border-white/20 pb-3">
                                <button
                                    class="accordion-toggle w-full flex justify-between items-center text-left font-semibold text-lg">
                                    <span>When Is It Recommended?</span>
                                    <svg class="chevron w-5 h-5 transition-transform duration-300 text-[#EA8C55]"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div
                                    class="accordion-content mt-2 text-white/80 overflow-hidden transition-all duration-500 ease-in-out max-h-0">
                                    Power flushing is highly recommended before installing a new boiler to protect it
                                    from existing sludge
                                    and ensure peak performance from day one. Our qualified Gas Safe engineers can
                                    assess your system and
                                    advise if a flush is needed.
                                </div>
                            </div>

                        </div>
                    </div>

                    <button class="reveal-btn w-full mt-4 text-[#EA8C55] font-semibold text-center">
                        Learn More
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const revealButtons = document.querySelectorAll(".reveal-btn");

    revealButtons.forEach(btn => {
        btn.addEventListener("click", () => {
            const cardExtra = btn.previousElementSibling;

            if (cardExtra.style.maxHeight) {
                cardExtra.style.maxHeight = null;
                cardExtra.style.opacity = 0;
                btn.textContent = "Learn More";
            } else {
                cardExtra.style.maxHeight = cardExtra.scrollHeight + "px";
                cardExtra.style.opacity = 1;
                btn.textContent = "Show Less";
            }
        });
    });

    const toggles = document.querySelectorAll(".accordion-toggle");

    toggles.forEach(toggle => {
        toggle.addEventListener("click", () => {
            const content = toggle.nextElementSibling;
            const cardExtra = toggle.closest(".card-extra");

            const isOpen = content.style.maxHeight;

            const cardToggles = cardExtra.querySelectorAll(".accordion-toggle");
            cardToggles.forEach(t => {
                const c = t.nextElementSibling;
                c.style.maxHeight = null;
                c.style.opacity = 0;
                t.querySelector(".chevron").style.transform = "rotate(0deg)";
            });

            if (!isOpen) {
                content.style.maxHeight = content.scrollHeight + "px";
                content.style.opacity = 1;
                toggle.querySelector(".chevron").style.transform = "rotate(180deg)";
            }

            setTimeout(() => {
                cardExtra.style.maxHeight = cardExtra.scrollHeight + "px";
            }, 300);
        });
    });
});
</script>

<section id="services-desktop" class="hidden lg:block relative pt-32 pb-0 bg-[#6A687A] overflow-hidden">
    <svg class="absolute bottom-0 left-0 w-full h-24 bg-white" preserveAspectRatio="none" viewBox="0 0 1440 96"
        xmlns="http://www.w3.org/2000/svg">
        <path d="m0 96 80-5.3C160 85 320 75 480 64s320-21 480-21.3c160 .3 320 10.3 400 16l80 5.3V0H0v96Z"
            fill="#6A687A" />
    </svg>
    <div class="mx-auto max-w-7xl px-6 lg:px-16 mb-12">
        <h3 class="text-[#EA8C55] fade-in font-semibold text-sm tracking-widest ml-1 mb-2">RELIABLE, COST-EFFECTIVE
            SOLUTIONS
        </h3>
        <h2 class="font-['Open Sans'] text-5xl font-bold text-white fade-in tracking-tight">
            Our Plumbing & Heating Services
        </h2>
    </div>

    <div class="relative mx-auto max-w-7xl px-6 lg:px-16 grid grid-cols-1 lg:grid-cols-2 gap-16 pb-24 items-stretch">

        <div class="space-y-20 flex flex-col justify-center" id="services-text">
            <p class="text-lg text-gray-200 leading-relaxed">
                We provide expert heating and plumbing services across Lichfield and surrounding Staffordshire areas,
                backed by years of hands-on experience with systems of all shapes and sizes. From identifying faults to
                fast, effective repairs, ECO-TEK delivers a reliable service you can trust. Whether it’s a boiler
                installation, routine maintenance, or a full system overhaul, no job is too big or too small for our
                qualified team.
            </p>
            <p class="text-lg text-gray-200 leading-relaxed">
                Our engineers are available throughout Lichfield, Staffordshire, and nearby areas—offering
                round-the-clock support, even for urgent out-of-hours emergencies. With ECO-TEK, help is always within
                reach.
            </p>
            <p class="text-lg text-gray-200 leading-relaxed">
                Discover the ECO-TEK difference. Contact us today to schedule a consultation and see why homeowners and
                businesses across Staffordshire rely on us for dependable, professional results.
            </p>
        </div>

        <div class="flex gap-6 h-full">

            <div class="flex flex-col gap-6 flex-1 h-full">

                <a href="#" class="image-link group relative overflow-hidden rounded-lg flex-[0.8] cursor-pointer"
                    data-title="Boiler Installation, Repairs & Servicing" data-description='
   <p>
       Regular boiler servicing is essential to keep your heating system operating safely, efficiently, and reliably.
       At ECO-TEK, we recommend servicing your boiler at least once a year to ensure it is performing at its best.
       Routine maintenance helps maximise efficiency and significantly reduces the risk of unexpected breakdowns.
   </p>

   <p class="mt-4 font-semibold">
       A boiler service includes:
   </p>

   <ul class="list-disc pl-6 mt-2 space-y-2">
       <li>Full safety inspection of the boiler and its controls</li>
       <li>Checks for corrosion, leaks, and general wear</li>
       <li>Testing of all major components</li>
       <li>Gas pressure verification</li>
       <li>Flue and emission safety testing</li>
       <li>Cleaning of key internal parts where required</li>
       <li>Completion of a full safety checklist</li>
   </ul>

   <p class="mt-4">
       Regular servicing protects your home, extends boiler lifespan, and helps maintain manufacturer warranties.
   </p>
   '>

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Boiler services.jpg"
                        alt="Heating Service"
                        class="w-full h-full object-cover transition duration-500 ease-out group-hover:scale-105 group-hover:brightness-110">

                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/0 to-transparent"></div>

                    <span class="absolute bottom-4 right-4 text-white text-lg font-semibold">
                        Boiler Services
                    </span>
                </a>

                <a href="#" class="image-link group relative overflow-hidden rounded-lg flex-[1.4] cursor-pointer"
                    data-title="Professional Plumbing & Heating Services" data-description='
                            <p>
                                Our experienced engineers provide reliable plumbing and heating solutions across Lichfield and the surrounding areas. 
                                From small repairs to full installations, we deliver high-quality workmanship with minimal disruption.
                            </p>

                            <div class="mt-6 space-y-4">

                                <div class="accordion-item border-b border-white/20 pb-3">
                                    <button class="accordion-toggle w-full flex justify-between items-center text-left font-semibold text-lg">
                                        <span>General Plumbing</span>
                                        <svg class="chevron w-5 h-5 transition-transform duration-300 text-[#EA8C55]"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </button>
                                    <div class="accordion-content mt-2 text-white/80 overflow-hidden transition-all duration-500 ease-in-out max-h-0">
                                        We handle leaking taps, burst pipes, toilet repairs, and general plumbing maintenance quickly and efficiently.
                                    </div>
                                </div>

                                <div class="accordion-item border-b border-white/20 pb-3">
                                    <button class="accordion-toggle w-full flex justify-between items-center text-left font-semibold text-lg">
                                        <span>Bathroom Installations</span>
                                        <svg class="chevron w-5 h-5 transition-transform duration-300 text-[#EA8C55]"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </button>
                                    <div class="accordion-content mt-2 text-white/80 overflow-hidden transition-all duration-500 ease-in-out max-h-0">
                                        Complete bathroom installations including pipework, fixtures, and system upgrades delivered to the highest standard.
                                    </div>
                                </div>

                                <div class="accordion-item border-b border-white/20 pb-3">
                                    <button class="accordion-toggle w-full flex justify-between items-center text-left font-semibold text-lg">
                                        <span>Central Heating Systems</span>
                                        <svg class="chevron w-5 h-5 transition-transform duration-300 text-[#EA8C55]"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </button>
                                    <div class="accordion-content mt-2 text-white/80 overflow-hidden transition-all duration-500 ease-in-out max-h-0">
                                        Installation, upgrades, and maintenance of radiators, pipework, and full central heating systems.
                                    </div>
                                </div>

                            </div>
                            '>

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image.jpg"
                        alt="Plumbing Service"
                        class="w-full h-full object-cover transition duration-500 ease-out group-hover:scale-105 group-hover:brightness-110">

                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/0 to-transparent"></div>

                    <span class="absolute bottom-4 right-4 text-white text-lg font-semibold text-right">
                        Plumbing and Heating Services
                    </span>
                </a>

            </div>

            <div class="flex flex-col gap-6 flex-1 h-full">

                <a href="#" class="image-link group relative overflow-hidden rounded-lg flex-[1.4] cursor-pointer"
                    data-title="24/7 Emergency Plumbing & Heating Repairs" data-description='
                            <p>
                                Heating or plumbing failures rarely happen at a convenient time. When your boiler stops working or a leak threatens your home, you need fast, professional support you can rely on. ECO-TEK provides rapid-response emergency plumbing and heating services across Lichfield and the surrounding areas — 24 hours a day, 7 days a week.
                            </p>

                            <p class="mt-4">
                                Our fully qualified, Gas Safe registered engineers attend emergency call-outs promptly, diagnosing issues efficiently and carrying out safe, effective repairs wherever possible during the first visit. From complete boiler breakdowns to major leaks or heating system failures, we work quickly to restore comfort and safety to your property.
                            </p>

                            <div class="mt-6 space-y-4">

                                <div class="accordion-item border-b border-white/20 pb-3">
                                    <button class="accordion-toggle w-full flex justify-between items-center text-left font-semibold text-lg">
                                        <span>I have a plumbing emergency – what should I do?</span>
                                        <svg class="chevron w-5 h-5 transition-transform duration-300 text-[#EA8C55]"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </button>
                                    <div class="accordion-content mt-2 text-white/80 overflow-hidden transition-all duration-500 ease-in-out max-h-0">
                                        If safe to do so, turn off your water supply at the stopcock to prevent further damage. 
                                        Switch off electrical appliances near any flooding and avoid contact with standing water. 
                                        Then contact ECO-TEK immediately — we will guide you through the next steps and dispatch an engineer as quickly as possible.
                                    </div>
                                </div>

                                <div class="accordion-item border-b border-white/20 pb-3">
                                    <button class="accordion-toggle w-full flex justify-between items-center text-left font-semibold text-lg">
                                        <span>I have a gas emergency – what should I do?</span>
                                        <svg class="chevron w-5 h-5 transition-transform duration-300 text-[#EA8C55]"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </button>
                                    <div class="accordion-content mt-2 text-white/80 overflow-hidden transition-all duration-500 ease-in-out max-h-0">
                                        If you smell gas or suspect a leak, immediately turn off the gas supply at the meter if it is safe to do so. 
                                        Open windows and doors for ventilation, avoid using electrical switches, and do not use naked flames. 
                                        Leave the property if necessary and contact the National Gas Emergency Service on 0800 111 999, then call ECO-TEK for further assistance.
                                    </div>
                                </div>

                                <div class="accordion-item border-b border-white/20 pb-3">
                                    <button class="accordion-toggle w-full flex justify-between items-center text-left font-semibold text-lg">
                                        <span>What happens during an emergency call-out?</span>
                                        <svg class="chevron w-5 h-5 transition-transform duration-300 text-[#EA8C55]"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </button>
                                    <div class="accordion-content mt-2 text-white/80 overflow-hidden transition-all duration-500 ease-in-out max-h-0">
                                        Our engineer will assess the issue, make the system safe, and carry out immediate repairs where possible. 
                                        If replacement parts are required, we will source them quickly and arrange a convenient follow-up visit. 
                                        Clear communication and your safety remain our top priorities at every stage.
                                    </div>
                                </div>

                            </div>
                            '>

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Boiler repair.jpg"
                        alt="Gas Service"
                        class="w-full h-full object-cover transition duration-500 ease-out group-hover:scale-105 group-hover:brightness-110">

                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/0 to-transparent"></div>

                    <span class="absolute bottom-4 left-4 text-white text-lg font-semibold">
                        Emergency Repairs and Replacements
                    </span>
                </a>

                <a href="#" class="image-link group relative overflow-hidden rounded-lg flex-[0.8] cursor-pointer"
                    data-title="Professional Power Flushing Services" data-description='
                            <p>
                                Over time, central heating systems collect sludge, rust, limescale and other debris from everyday use. 
                                This buildup restricts circulation, creates cold spots on radiators, and forces your boiler to work harder than necessary.
                            </p>

                            <div class="mt-6 space-y-4">

                                <div class="accordion-item border-b border-white/20 pb-3">
                                    <button class="accordion-toggle w-full flex justify-between items-center text-left font-semibold text-lg">
                                        <span>What Is Power Flushing?</span>
                                        <svg class="chevron w-5 h-5 transition-transform duration-300 text-[#EA8C55]"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </button>
                                    <div class="accordion-content mt-2 text-white/80 overflow-hidden transition-all duration-500 ease-in-out max-h-0">
                                        A professional deep clean of your heating system using specialist equipment and cleaning solutions to remove sludge and contamination from radiators and pipework.
                                    </div>
                                </div>

                                <div class="accordion-item border-b border-white/20 pb-3">
                                    <button class="accordion-toggle w-full flex justify-between items-center text-left font-semibold text-lg">
                                        <span>Benefits of a Power Flush</span>
                                        <svg class="chevron w-5 h-5 transition-transform duration-300 text-[#EA8C55]"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </button>
                                    <div class="accordion-content mt-2 text-white/80 overflow-hidden transition-all duration-500 ease-in-out max-h-0">
                                        Radiators heat evenly from top to bottom, rooms warm up faster, and your system runs more efficiently — often reducing overall gas usage and helping extend the life of your boiler.
                                    </div>
                                </div>

                                <div class="accordion-item border-b border-white/20 pb-3">
                                    <button class="accordion-toggle w-full flex justify-between items-center text-left font-semibold text-lg">
                                        <span>When Is It Recommended?</span>
                                        <svg class="chevron w-5 h-5 transition-transform duration-300 text-[#EA8C55]"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </button>
                                    <div class="accordion-content mt-2 text-white/80 overflow-hidden transition-all duration-500 ease-in-out max-h-0">
                                        Power flushing is highly recommended before installing a new boiler to protect it from existing sludge and ensure peak performance from day one. Our qualified Gas Safe engineers can assess your system and advise if a flush is needed.
                                    </div>
                                </div>

                            </div>
                            '>

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/power flushing.jpg"
                        alt="Installation Service"
                        class="w-full h-full object-cover transition duration-500 ease-out group-hover:scale-105 group-hover:brightness-110">

                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/0 to-transparent"></div>

                    <span class="absolute bottom-4 left-4 text-white text-lg font-semibold">
                        Power Flushing
                    </span>
                </a>

            </div>

        </div>
    </div>

    <svg class="absolute top-0 left-0 w-full h-24 rotate-180 bg-white" preserveAspectRatio="none" viewBox="0 0 1440 96"
        xmlns="http://www.w3.org/2000/svg">
        <path d="m0 96 80-5.3C160 85 320 75 480 64s320-21 480-21.3c160 .3 320 10.3 400 16l80 5.3V0H0v96Z"
            fill="#6A687A" />
    </svg>

    <div id="lightbox-overlay"
        class="fixed inset-0 bg-gray-500 backdrop-blur-2xl bg-opacity-90 z-50 hidden transition-opacity duration-300">
        <button id="lightbox-close"
            class="absolute top-4 right-4 text-3xl font-bold z-50 text-[#EA8C55] hover:cursor-pointer">
            &times;
        </button>

        <div class="flex items-center h-full w-full px-16 gap-12">
            <div id="lightbox-image-slot" class="shrink-0"></div>

            <div id="lightbox-text"
                class="flex-1 text-white opacity-0 transition-opacity duration-300 max-h-[80vh] overflow-y-auto pr-6 ease-in-out">


                <h2 class="text-4xl font-bold mb-4"></h2>
                <p class="leading-relaxed">

                </p>
                <a href="#contact" id="lightbox-contact-btn"
                    class="inline-block mt-4 bg-[#EA8C55] text-white px-6 py-3 rounded-md font-semibold hover:bg-[#ea8c55c9] hover:cursor-pointer transition">
                    Get in Touch
                </a>
            </div>
        </div>

        <img id="lightbox-img" class="object-contain transition-all duration-500 fixed" />
    </div>

</section>

<section id="reviews" class="relative bg-white pt-24 w-full overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 lg:px-16 mb-12 flex flex-col lg:flex-row items-center gap-6">
        <div>
            <h2
                class="font-semibold text-5xl mb-2 bg-gradient-to-r from-gray-900 to-gray-500 bg-clip-text text-transparent">
                Our customers trust us</h2>
            <h4 class="font-light text-lg text-gray-600 max-w-xl">
                Read some of our customer reviews. We're always looking for opportunities
                to improve our services, so feel free to submit your experience with us.
            </h4>
        </div>

        <?php
        $args = array(
            'post_type' => 'review',
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'DESC',
        );
        $reviews = new WP_Query($args);

        $total_reviews = $reviews->found_posts;
        $sum_ratings = 0;

        if($reviews->have_posts()):
            while($reviews->have_posts()): $reviews->the_post();
                $sum_ratings += intval(get_post_meta(get_the_ID(), '_star_rating', true));
            endwhile;

            $average_rating = $total_reviews > 0 ? $sum_ratings / $total_reviews : 0;

            if($average_rating >= 4.5) {
                $rating_text = 'Excellent';
            } elseif($average_rating >= 3.5) {
                $rating_text = 'Good';
            } elseif($average_rating >= 2.5) {
                $rating_text = 'Average';
            } else {
                $rating_text = 'Poor';
            }
        ?>
        <div class="text-center flex-1 flex flex-col items-center justify-center lg:text-right">
            <div class="text-3xl font-bold"><?php echo esc_html($rating_text); ?></div>
            <div class="text-yellow-500 text-3xl mb-1">
                <?php 
                echo str_repeat('★', floor($average_rating));
                if($average_rating - floor($average_rating) >= 0.5) echo '⯪';
                echo str_repeat('☆', 5 - ceil($average_rating)); 
                ?>
            </div>
            <div class="text-gray-600 text-sm">
                Based on <span class="font-bold"><?php echo intval($total_reviews); ?> reviews</span>
            </div>
        </div>
        <?php
            wp_reset_postdata();
        endif;
        ?>
    </div>

    <div id="reviews-grid" class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-0">
        <?php
        $reviews = new WP_Query($args);
        if($reviews->have_posts()):
            while($reviews->have_posts()): $reviews->the_post();
                $name = get_post_meta(get_the_ID(), '_reviewer_name', true);
                $date = get_post_meta(get_the_ID(), '_review_date', true);
                $rating = get_post_meta(get_the_ID(), '_star_rating', true);
                $review_body = get_post_meta(get_the_ID(), '_review_body', true);

                $circle_color = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
                $initial = strtoupper(substr($name, 0, 1));
        ?>
        <article class="review-item break-inside-avoid border-b border-gray-200">
            <div class="review-card p-8 shadow-sm opacity-0 transition-opacity duration-700 ease-out">
                <div class="flex items-center mb-2">
                    <div class="flex-shrink-0 w-10 h-10 rounded-full flex items-center justify-center text-white font-bold mr-4"
                        style="background-color: <?php echo esc_attr($circle_color); ?>;">
                        <?php echo esc_html($initial); ?>
                    </div>
                    <div class="flex flex-col flex-1">
                        <h4 class="font-semibold text-gray-900 text-sm"><?php echo esc_html($name); ?></h4>
                        <span
                            class="text-sm text-gray-600 font-light"><?php echo date('d/m/Y', strtotime($date)); ?></span>
                    </div>
                </div>

                <div class="text-yellow-500 mb-4 text-3xl">
                    <?php echo str_repeat('★', intval($rating)) . str_repeat('☆', 5 - intval($rating)); ?>
                </div>

                <?php
                $max_length = 200;
                if (strlen($review_body) > $max_length):
                    $truncated_body = substr($review_body, 0, $max_length);
                ?>
                <p class="text-gray-700 review-text">
                    <?php echo esc_html($truncated_body); ?><span class="ellipsis">…</span><span class="full-text"
                        style="display:none;"><?php echo esc_html(substr($review_body, $max_length)); ?></span>
                </p>
                <button class="read-more text-blue-600 mt-2 inline-block font-semibold"
                    data-review-name="<?php echo esc_attr($name); ?>" data-review-date="<?php echo esc_attr($date); ?>"
                    data-review-rating="<?php echo esc_attr($rating); ?>"
                    data-review-body="<?php echo esc_attr($review_body); ?>">
                    Read more
                </button>
                <?php else: ?>
                <p class="text-gray-700"><?php echo esc_html($review_body); ?></p>
                <?php endif; ?>
            </div>
        </article>
        <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div>
    <div id="review-modal" class="flex fixed inset-0 hidden items-center justify-center z-50">
        <div id="review-modal-backdrop"
            class="absolute inset-0 bg-gray-500/40 backdrop-blur-md transition-opacity duration-300">
        </div>

        <div id="review-modal-content" class="relative bg-white max-w-lg w-full mx-4 p-6 rounded-xl shadow-lg overflow-y-auto max-h-[80vh]
              transform scale-95 opacity-0 transition-all duration-300">
            <button id="review-modal-close"
                class="absolute top-4 right-4 text-gray-500 hover:text-gray-900 text-xl font-bold">&times;</button>
            <h4 id="review-modal-name" class="font-semibold text-lg mb-2"></h4>
            <div id="review-modal-date" class="text-sm text-gray-500 mb-4"></div>
            <div id="review-modal-rating" class="text-yellow-500 text-2xl mb-4"></div>
            <p id="review-modal-body" class="text-gray-700"></p>
        </div>
    </div>
</section>

<section id="contact" class="relative bg-white py-24 fade-in">
    <div class="max-w-7xl mx-auto px-6 lg:px-16 grid grid-cols-1 lg:grid-cols-2 gap-16 items-stretch">

        <div class="space-y-8 flex flex-col fade-in">
            <h2
                class="font-['Open Sans'] text-5xl font-semibold bg-gradient-to-r from-gray-900 to-gray-500 bg-clip-text text-transparent">
                Get in touch
            </h2>
            <p class="text-gray-600 text-lg leading-relaxed">
                We're here to help. Send us a quick message and we'll get back to you as soon as possible.
            </p>

            <div class="flex flex-col gap-2">
                <a href="https://www.facebook.com/" target="_blank"
                    class="flex items-center gap-2 text-[#6A687A] hover:text-gray-600 transition ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 5.005 3.657 9.128 8.438 9.879v-6.987h-2.54v-2.892h2.54V9.845c0-2.507 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.772-1.63 1.562v1.875h2.773l-.443 2.892h-2.33v6.987C18.343 21.128 22 17.005 22 12z" />
                    </svg>
                    <span class="text-sm font-semibold">Find us on Facebook...</span>
                </a>

                <a href="https://www.instagram.com/" target="_blank"
                    class="flex items-center gap-2 text-[#6A687A] hover:text-gray-600 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M7.75 2h8.5A5.75 5.75 0 0122 7.75v8.5A5.75 5.75 0 0116.25 22h-8.5A5.75 5.75 0 012 16.25v-8.5A5.75 5.75 0 017.75 2zm0 1.5A4.25 4.25 0 003.5 7.75v8.5A4.25 4.25 0 007.75 20.5h8.5a4.25 4.25 0 004.25-4.25v-8.5A4.25 4.25 0 0016.25 3.5h-8.5zM12 7a5 5 0 110 10 5 5 0 010-10zm0 1.5a3.5 3.5 0 100 7 3.5 3.5 0 000-7zm4.75-.88a1.12 1.12 0 110 2.24 1.12 1.12 0 010-2.24z" />
                    </svg>
                    <span class="text-sm font-semibold">or on Instagram...</span>
                </a>

                <a href="https://wa.me/" target="_blank"
                    class="flex items-center gap-2 text-[#6A687A] hover:text-gray-600 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12.003 2C6.476 2 2 6.477 2 12.003c0 2.123.557 4.104 1.52 5.823L2 22l4.31-1.42A9.966 9.966 0 0012.003 22C17.529 22 22 17.523 22 12.003S17.529 2 12.003 2z" />
                    </svg>
                    <span class="text-sm font-semibold">or give us a call.</span>
                </a>
            </div>

            <form id="contact-form" class="space-y-6 flex-1 flex flex-col justify-between">

                <?php wp_nonce_field('contact_form_nonce', 'contact_nonce'); ?>

                <div class="space-y-4">
                    <input type="text" name="name" placeholder="Your Name" required
                        class="w-full px-4 py-3 border border-gray-300 rounded-md">

                    <input type="email" name="email" placeholder="Your Email" required
                        class="w-full px-4 py-3 border border-gray-300 rounded-md">

                    <input type="tel" name="phone" placeholder="Your Phone Number"
                        class="w-full px-4 py-3 border border-gray-300 rounded-md">

                    <textarea name="message" placeholder="Your Message" rows="5" required
                        class="w-full px-4 py-3 border border-gray-300 rounded-md"></textarea>
                </div>

                <button type="submit"
                    class="mt-4 bg-[#6A687A] text-white px-6 py-3 rounded-md font-semibold hover:cursor-pointer hover:bg-gray-800 transition">
                    Send Message
                </button>

            </form>
        </div>

        <div class="w-full rounded-lg overflow-hidden shadow-md fade-in">
            <iframe src="https://www.google.com/maps?q=Lichfield%2C%20UK&z=10&output=embed" width="100%" height="100%"
                class="w-full h-full contrast-110 brightness-90" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

    </div>
    <div id="success-popup"
        class="fixed inset-0 flex items-center justify-center bg-black/50 opacity-0 pointer-events-none transition-opacity duration-300 z-50">

        <div id="popup-box"
            class="bg-white rounded-xl shadow-2xl p-8 max-w-md w-full mx-4 transform scale-95 opacity-0 transition-all duration-300">

            <div class="flex justify-between items-start mb-4">
                <h3 class="text-xl font-semibold text-gray-800">Message Sent</h3>
                <button id="popup-close" class="text-gray-400 hover:text-gray-600 text-2xl leading-none">
                    &times;
                </button>
            </div>

            <p class="text-gray-600 leading-relaxed">
                Thank you for getting in touch. We’ll respond to your enquiry as soon as possible.
            </p>

            <button id="popup-ok"
                class="mt-6 w-full bg-[#6A687A] text-white py-3 rounded-md font-semibold hover:bg-gray-800 transition">
                Close
            </button>
        </div>
    </div>
</section>

<?php get_footer(); ?>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const faders = document.querySelectorAll('.fade-in');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.15,
        rootMargin: '0px 0px -60px 0px'
    });

    faders.forEach(el => observer.observe(el));

});
</script>