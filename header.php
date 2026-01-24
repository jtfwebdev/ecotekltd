<!DOCTYPE html>
<html <?php language_attributes(); ?>>

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
        <div class="mx-auto max-w-7xl py-6 px-4">
            <div class="flex items-center justify-between">

                <div class="flex-shrink-0">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logo-transparent.png"
                            alt="<?php bloginfo( 'name' ); ?>" class="h-24 w-auto">
                    </a>
                </div>

                <nav>
                    <ul class="flex items-center space-x-8 text-black text-2xl font-medium tracking-tighter">
                        <li>
                            <a href="<?php echo esc_url( home_url( '/about' ) ); ?>"
                                class="hover:opacity-55 transition">
                                ABOUT
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url( home_url( '/services' ) ); ?>"
                                class="hover:opacity-55 transition">
                                SERVICES
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url( home_url( '/news' ) ); ?>" class="hover:opacity-55 transition">
                                REVIEWS
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url( home_url( '/news' ) ); ?>" class="hover:opacity-55 transition">
                                NEWS
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"
                                class="border-2 border-[#6A687A] px-4 py-1.5 rounded-full hover:bg-black hover:text-white transition">
                                CONTACT US
                            </a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>
    </header>