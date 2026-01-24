<?php get_header(); ?>

<section class="relative w-full overflow-hidden min-h-screen">
    <div class="absolute inset-0 bg-cover bg-center"
        style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/desktop-hero-image.jpg');">
    </div>

    <div class="absolute inset-0 bg-gradient-to-b from-white/80 via-white/40 to-white/80"></div>

    <div class="relative z-10 flex min-h-screen my-12 items-center px-40">
        <div class="max-w-2xl">
            <h1 class="font-['Open Sans'] font-semibold tracking-tight text-gray-950 text-6xl leading-tight mb-6">
                Reliable Heating & Plumbing<br>
                You Can Trust
            </h1>

            <p class="text-xl text-gray-850 leading-relaxed mb-10">
                Professional boiler, gas and plumbing services across Lichfield and surrounding areas —
                keeping your home warm, safe and running smoothly.
            </p>

            <div class="flex gap-4">
                <a href="#services"
                    class="inline-flex items-center justify-center rounded-md bg-[#6A687A] px-8 py-4 text-white font-semibold hover:bg-gray-800 transition">
                    Our Services
                </a>

                <a href="#contact"
                    class="inline-flex items-center justify-center rounded-md border border-[#6A687A] px-8 py-4 font-semibold text-[#6A687A] hover:bg-[#6A687A] hover:text-white transition">
                    Get a Free Quote
                </a>
            </div>
        </div>
    </div>
</section>

<section class="relative bg-white py-32 overflow-hidden">
    <h2 id="parallax-about" class="pointer-events-none absolute left-1/2 top-24 -translate-x-1/2 
               font-['Playfair_Display'] text-[10rem] md:text-[14rem] 
               font-semibold tracking-tighter text-gray-900/10 whitespace-nowrap">
        ABOUT
    </h2>

    <div class="relative mx-auto max-w-4xl px-6 text-center">
        <p class="text-lg leading-relaxed text-gray-700 mb-6">
            ECO-TEK is a trusted heating, plumbing and gas services company based near Lichfield, Staffordshire.
            We proudly serve homes and businesses within a 30-mile radius, delivering reliable workmanship and
            honest, professional service every time.
        </p>

        <p class="text-lg leading-relaxed text-gray-700 mb-6">
            Fully Gas Safe registered and comprehensively insured, ECO-TEK specialises in boiler installations,
            servicing and repairs, alongside all aspects of plumbing and gas work. Safety, efficiency and
            long-lasting solutions are at the heart of everything we do.
        </p>

        <p class="text-lg leading-relaxed text-gray-700">
            We offer free, no-obligation quotes and are available for emergency callouts when you need us most.
            Whether it’s routine maintenance or an urgent repair, ECO-TEK is committed to keeping your home warm,
            safe and running smoothly.
        </p>
    </div>
</section>

<section id="reviews" class="relative bg-white py-24 w-full overflow-hidden">
    <h2 class="font-['Playfair_Display'] text-6xl mx-12 mb-12 text-gray-750">See what our clients are
        saying about us...</h2>
    <div id="reviews-grid" class="w-full
                              grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3
                              gap-0">

        <article class="review-item break-inside-avoid border-b border-gray-200">
            <div class="review-card p-8 shadow-sm opacity-0 transition-opacity duration-700 ease-out">
                <h4 class="font-semibold text-gray-900 mb-1">Sarah M</h4>
                <span class="text-sm text-[#6A687A] font-semibold italic block mb-4">Lichfield</span>
                <p class="text-gray-700">
                    Fantastic service from start to finish. Our boiler was fixed quickly and everything was explained
                    clearly.
                </p>
            </div>
        </article>

        <article class="review-item break-inside-avoid border-b border-gray-200">
            <div class="review-card p-8 shadow-sm opacity-0 transition-opacity duration-700 ease-out">
                <h4 class="font-semibold text-gray-900 mb-1">James T</h4>
                <span class="text-sm text-[#6A687A] font-semibold italic block mb-4">Burntwood</span>
                <p class="text-gray-700">
                    Reliable, professional and very tidy. New boiler install completed perfectly.
                </p>
            </div>
        </article>

        <article class="review-item break-inside-avoid border-b border-gray-200">
            <div class="review-card p-8 shadow-sm opacity-0 transition-opacity duration-700 ease-out">
                <h4 class="font-semibold text-gray-900 mb-1">Emma R</h4>
                <span class="text-sm text-[#6A687A] font-semibold italic block mb-4">Tamworth</span>
                <p class="text-gray-700">
                    Emergency callout handled quickly and professionally. Honest pricing and great workmanship.
                </p>
            </div>
        </article>

        <article class="review-item break-inside-avoid border-b border-gray-200">
            <div class="review-card p-8 shadow-sm opacity-0 transition-opacity duration-700 ease-out">
                <h4 class="font-semibold text-gray-900 mb-1">Mark D</h4>
                <span class="text-sm text-[#6A687A] font-semibold italic block mb-4">Lichfield</span>
                <p class="text-gray-700">
                    Great communication and really knowledgeable. Will definitely use ECO-TEK again.
                </p>
            </div>
        </article>

        <article class="review-item break-inside-avoid border-b border-gray-200">
            <div class="review-card p-8 shadow-sm opacity-0 transition-opacity duration-700 ease-out">
                <h4 class="font-semibold text-gray-900 mb-1">Lisa B</h4>
                <span class="text-sm text-[#6A687A] font-semibold italic block mb-4">Sutton Coldfield</span>
                <p class="text-gray-700">
                    Very professional, arrived on time and cleaned up afterwards. Highly recommended.
                </p>
            </div>
        </article>

        <article class="review-item break-inside-avoid border-b border-gray-200">
            <div class="review-card p-8 shadow-sm opacity-0 transition-opacity duration-700 ease-out">
                <h4 class="font-semibold text-gray-900 mb-1">Tom H</h4>
                <span class="text-sm text-[#6A687A] font-semibold italic block mb-4">Rugeley</span>
                <p class="text-gray-700">
                    Excellent boiler service and very friendly engineers. Everything explained clearly.
                </p>
            </div>
        </article>

        <article class="review-item break-inside-avoid border-b border-gray-200">
            <div class="review-card p-8 shadow-sm opacity-0 transition-opacity duration-700 ease-out">
                <h4 class="font-semibold text-gray-900 mb-1">Charlotte W</h4>
                <span class="text-sm text-[#6A687A] font-semibold italic block mb-4">Tamworth</span>
                <p class="text-gray-700">
                    Emergency repair sorted quickly, highly responsive and reasonably priced. Fantastic service!
                </p>
            </div>
        </article>

        <article class="review-item break-inside-avoid border-b border-gray-200">
            <div class="review-card p-8 shadow-sm opacity-0 transition-opacity duration-700 ease-out">
                <h4 class="font-semibold text-gray-900 mb-1">Andrew K</h4>
                <span class="text-sm text-[#6A687A] font-semibold italic block mb-4">Lichfield</span>
                <p class="text-gray-700">
                    Polite, professional, and reliable. Boiler serviced perfectly, highly recommend ECO-TEK.
                </p>
            </div>
        </article>

        <article class="review-item break-inside-avoid">
            <div class="review-card p-8 shadow-sm opacity-0 transition-opacity duration-700 ease-out">
                <h4 class="font-semibold text-gray-900 mb-1">Sophie T</h4>
                <span class="text-sm text-[#6A687A] font-semibold italic block mb-4">Burntwood</span>
                <p class="text-gray-700">
                    Very impressed with the speed and quality of the work. Would definitely use again.
                </p>
            </div>
        </article>

    </div>
</section>

<section id="services" class="relative bg-[#6A687A] py-32">
    <div class="relative mx-auto max-w-7xl px-6 lg:px-16 grid grid-cols-1 lg:grid-cols-2 gap-16">

        <div class="space-y-6" id="services-text">
            <h2 class="font-['Playfair_Display'] text-5xl font-semibold text-white">
                Solid Solutions for All Plumbing & Heating Needs
            </h2>

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

            <p class="text-lg text-gray-200 leading-relaxed">
                At ECO-TEK, we focus on clear communication and customer satisfaction. We take the time to explain our
                findings and provide practical, easy-to-understand advice tailored to your property. Whether it’s an
                urgent repair or planned maintenance, our professional approach ensures your heating and plumbing
                systems run smoothly and efficiently.
            </p>

            <p class="text-lg text-gray-200 leading-relaxed">
                Choose ECO-TEK for friendly, honest service that prioritises your comfort and safety.
            </p>
        </div>

        <div class="flex gap-4 h-full items-end">

            <div class="flex w-full gap-4 h-2/3">

                <a href="#" class="image-link block relative overflow-hidden rounded-lg flex-1 h-full cursor-pointer">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/boiler.jpg"
                        alt="Heating Service"
                        class="w-full h-full object-cover hover:scale-105 hover:brightness-110 transition duration-500">
                </a>

                <div class="flex flex-col gap-4 flex-1 h-full">
                    <a href="#" class="image-link block relative overflow-hidden rounded-lg flex-1 cursor-pointer">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pipe-repair.jpg"
                            alt="Plumbing Service"
                            class="w-full h-full object-cover hover:scale-105 hover:brightness-110 transition duration-500">
                    </a>
                    <a href="#" class="image-link block relative overflow-hidden rounded-lg flex-1 cursor-pointer">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pipework.jpg"
                            alt="Gas Service"
                            class="w-full h-full object-cover hover:scale-105 hover:brightness-110 transition duration-500">
                    </a>
                </div>
            </div>

        </div>
    </div>

    <div id="lightbox-overlay"
        class="fixed inset-0 bg-black bg-opacity-90 flex items-center justify-center z-50 hidden">
        <button id="lightbox-close" class="absolute top-4 right-4 text-white text-3xl font-bold z-50">&times;</button>
        <img id="lightbox-img" class="object-contain max-w-screen max-h-screen transition-all duration-500">
    </div>
</section>

<section id="contact" class="relative bg-white py-32">
    <div class="max-w-7xl mx-auto px-6 lg:px-16 grid grid-cols-1 lg:grid-cols-2 gap-16 items-stretch">

        <div class="space-y-8 flex flex-col">
            <h2 class="font-['Playfair_Display'] text-5xl font-semibold text-gray-900">
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
                            d="M12.003 2C6.476 2 2 6.477 2 12.003c0 2.123.557 4.104 1.52 5.823L2 22l4.31-1.42A9.966 9.966 0 0012.003 22C17.529 22 22 17.523 22 12.003S17.529 2 12.003 2zm.013 17.27c-1.79 0-3.457-.586-4.82-1.57l-.344-.25-2.56.845.86-2.497-.257-.395a7.946 7.946 0 01-1.28-4.475c0-4.41 3.588-8 8-8s8 3.59 8 8-3.588 8-8 8zm4.707-5.337c-.237-.118-1.406-.694-1.622-.77-.216-.075-.374-.118-.53.118-.156.236-.607.77-.744.927-.137.157-.274.176-.51.059-.237-.118-1-0.37-1.9-1.17-.703-.627-1.18-1.396-1.318-1.632-.137-.236-.015-.363.104-.48.107-.107.237-.275.356-.412.118-.137.157-.236.237-.394.08-.157.04-.295-.02-.413-.061-.118-.53-1.28-.727-1.747-.192-.456-.388-.394-.53-.402-.137-.008-.295-.01-.45-.01-.157 0-.412.06-.63.295s-.826.81-.826 1.972c0 1.16.845 2.283.963 2.44.118.157 1.662 2.52 4.03 3.527.564.243 1.003.388 1.345.496.566.178 1.082.153 1.49.093.454-.067 1.406-.574 1.603-1.127.197-.552.197-1.025.137-1.127-.056-.102-.203-.157-.44-.275z" />
                    </svg>
                    <span class="text-sm font-semibold">or give us a call.</span>
                </a>
            </div>

            <form action="#" method="POST" class="space-y-6 flex-1 flex flex-col justify-between">
                <div class="space-y-4">
                    <input type="text" name="name" placeholder="Your Name"
                        class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-400">
                    <input type="email" name="email" placeholder="Your Email"
                        class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-400">
                    <input type="tel" name="phone" placeholder="Your Phone Number"
                        class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-400">
                    <textarea name="message" placeholder="Your Message" rows="5"
                        class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-400"></textarea>
                </div>
                <button type="submit"
                    class="mt-4 bg-[#6A687A] text-white px-6 py-3 rounded-md font-semibold hover:bg-gray-800 transition">
                    Send Message
                </button>
            </form>
        </div>

        <div class="w-full rounded-lg overflow-hidden shadow-md">
            <iframe src="https://www.google.com/maps?q=Staffordshire%2C%20UK&z=9&output=embed" width="100%"
                height="100%" class="w-full h-full contrast-110 brightness-90" style="border:0;" allowfullscreen=""
                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </div>
</section>



<?php get_footer(); ?>