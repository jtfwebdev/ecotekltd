<?php get_header(); ?>

<section class="relative h-screen w-full overflow-hidden">
    <div class="absolute inset-0 bg-cover bg-center"
        style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/desktop-hero-image.jpg');">
    </div>

    <div class="absolute inset-0 bg-gradient-to-b from-white/80 via-white/40 to-white/80"></div>

    <div class="relative z-10 flex h-full items-center justify-center">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logo-transparent.png" alt="ECO-TEK Logo"
            class="w-1/2 max-w-md" />
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

<section id="services" class="relative bg-gray-50 py-32 overflow-hidden">
    <h2 id="parallax-services" class="pointer-events-none absolute right-0 top-24 
               font-['Playfair_Display'] text-[10rem] md:text-[14rem] 
               font-semibold tracking-tighter text-gray-900/10 whitespace-nowrap">
        SERVICES
    </h2>

    <div class="relative mx-auto max-w-4xl px-6 text-center">

        <div class="bg-white shadow-lg rounded-lg p-8 mb-8 md:mb-0 text-left">
            <h4 class="font-['Playfair_Display'] text-2xl font-semibold text-gray-900 mb-4">
                Boiler Servicing & Repairs
            </h4>
            <p class="text-gray-700 leading-relaxed mb-4">
                Keep your home warm and safe with ECO-TEK’s expert boiler services. We provide:
            </p>
            <ul class="text-gray-700 leading-relaxed list-disc list-inside space-y-2">
                <li>Comprehensive annual boiler servicing to maintain efficiency</li>
                <li>Quick and reliable repairs for all makes and models</li>
                <li>Gas Safe registered engineers ensuring full safety compliance</li>
                <li>Emergency callouts to get your heating running again fast</li>
                <li>Free, no-obligation quotes so you know exactly what to expect</li>
            </ul>
        </div>
    </div>
</section>

<?php get_footer(); ?>