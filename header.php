<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="absolute top-0 left-0 w-full z-50 font-['Playfair_Display']">
        <div class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-12 py-4 sm:py-6">
            <div class="flex items-center justify-between">

                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logo-transparent.png"
                            alt="<?php bloginfo( 'name' ); ?>" class="h-14 sm:h-16 md:h-20 lg:h-24 w-auto">
                    </a>
                </div>

                <!-- Desktop Nav -->
                <nav class="hidden lg:block">
                    <ul
                        class="flex items-center space-x-8 text-[#6A687A] text-lg xl:text-xl font-medium tracking-tight">
                        <li><a href="<?php echo esc_url( home_url( '#about' ) ); ?>">ABOUT</a></li>
                        <li class="lg:hidden">
                            <a href="#services-mobile">SERVICES</a>
                        </li>
                        <li class="hidden lg:block">
                            <a href="#services-desktop">SERVICES</a>
                        </li>
                        <li><a href="<?php echo esc_url( home_url( '#reviews' ) ); ?>">REVIEWS</a></li>
                        <li><a href="<?php echo esc_url( home_url( '#news' ) ); ?>">NEWS</a></li>
                        <li>
                            <a href="<?php echo esc_url( home_url( '#contact' ) ); ?>"
                                class="border-2 border-[#6A687A] px-4 py-1.5 rounded-full hover:bg-[#6A687A] hover:text-white transition">
                                CONTACT US
                            </a>
                        </li>
                    </ul>
                </nav>

                <button id="menu-toggle" class="lg:hidden w-8 h-6 flex flex-col justify-between">
                    <span class="w-8 h-0.5 bg-[#6A687A] transition-all duration-300"></span>
                    <span class="w-8 h-0.5 bg-[#6A687A] transition-all duration-300"></span>
                    <span class="w-8 h-0.5 bg-[#6A687A] transition-all duration-300"></span>
                </button>
            </div>
        </div>
    </header>

    <!-- Overlay -->
    <div id="mobile-overlay"
        class="fixed inset-0 bg-black/40 backdrop-blur-md opacity-0 pointer-events-none transition-opacity duration-300 z-40">
    </div>

    <!-- Mobile Menu Panel -->
    <div id="mobile-menu" class="fixed top-0 right-0 h-full w-full max-w-sm bg-white shadow-2xl
           transform translate-x-full transition-transform duration-500 ease-[cubic-bezier(0.22,1,0.36,1)]
           z-50 p-10 flex flex-col">

        <!-- Close Button -->
        <button id="menu-close" class="absolute top-6 right-6 w-8 h-8 flex items-center justify-center">
            <span class="absolute w-6 h-0.5 bg-[#6A687A] rotate-45"></span>
            <span class="absolute w-6 h-0.5 bg-[#6A687A] -rotate-45"></span>
        </button>

        <nav class="mt-24">
            <ul class="flex flex-col space-y-8 text-[#6A687A] text-2xl font-medium">

                <li class="menu-item opacity-0 translate-y-6 transition-all duration-500">
                    <a href="<?php echo esc_url( home_url( '#about' ) ); ?>">ABOUT</a>
                </li>

                <li class="menu-item opacity-0 translate-y-6 transition-all duration-500">
                    <a href="<?php echo esc_url( home_url( '#services-mobile' ) ); ?>">SERVICES</a>
                </li>

                <li class="menu-item opacity-0 translate-y-6 transition-all duration-500">
                    <a href="<?php echo esc_url( home_url( '#reviews' ) ); ?>">REVIEWS</a>
                </li>

                <li class="menu-item opacity-0 translate-y-6 transition-all duration-500">
                    <a href="<?php echo esc_url( home_url( '#news' ) ); ?>">NEWS</a>
                </li>

                <li class="menu-item opacity-0 translate-y-6 transition-all duration-500">
                    <a href="<?php echo esc_url( home_url( '#contact' ) ); ?>"
                        class="inline-block border-2 border-[#6A687A] px-6 py-2 rounded-full hover:bg-[#6A687A] hover:text-white transition">
                        CONTACT US
                    </a>
                </li>

            </ul>
        </nav>
    </div>

    <script>
    const toggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('mobile-menu');
    const overlay = document.getElementById('mobile-overlay');
    const closeBtn = document.getElementById('menu-close');
    const body = document.body;
    const items = document.querySelectorAll('.menu-item');

    // Close menu when any mobile nav link is clicked
    const mobileLinks = document.querySelectorAll('#mobile-menu a');

    mobileLinks.forEach(link => {
        link.addEventListener('click', () => {
            closeMenu();
        });
    });

    function openMenu() {
        menu.classList.remove('translate-x-full');
        overlay.classList.remove('opacity-0', 'pointer-events-none');
        overlay.classList.add('opacity-100');
        body.classList.add('overflow-hidden');

        // Stagger animation
        items.forEach((item, index) => {
            setTimeout(() => {
                item.classList.remove('opacity-0', 'translate-y-6');
            }, 120 * index);
        });
    }

    function closeMenu() {
        menu.classList.add('translate-x-full');
        overlay.classList.add('opacity-0', 'pointer-events-none');
        overlay.classList.remove('opacity-100');
        body.classList.remove('overflow-hidden');

        // Reset animation state
        items.forEach(item => {
            item.classList.add('opacity-0', 'translate-y-6');
        });
    }

    toggle.addEventListener('click', openMenu);
    overlay.addEventListener('click', closeMenu);
    closeBtn.addEventListener('click', closeMenu);
    </script>