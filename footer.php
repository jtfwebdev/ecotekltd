<footer class="bg-[#6A687A] text-gray-200 py-16 w-full">
    <div class="container mx-auto px-6 lg:px-24 grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Logo & Description -->
        <div class="flex flex-col">
            <h3 class="text-2xl font-bold mb-4 text-white">ECO-TEK Ltd.</h3>
            <p class="text-gray-400">
                Keep up to date with our news and recent projects - find us on our social channels.
            </p>
            <div class="flex mt-4 space-x-4">
                <!-- Facebook -->
                <a href="https://www.facebook.com/profile.php?id=61571580005939&sk=about" target="_blank"
                    class="hover:text-white transition-colors">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M22.675 0H1.325C.593 0 0 .593 0 1.325v21.351C0 23.407.593 24 1.325 24h11.495v-9.294H9.692v-3.622h3.128V8.413c0-3.1 1.893-4.788 4.657-4.788 1.325 0 2.463.099 2.794.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.762v2.311h3.587l-.467 3.622h-3.12V24h6.116c.73 0 1.324-.593 1.324-1.324V1.325C24 .593 23.407 0 22.675 0z" />
                    </svg>
                </a>

                <!-- Google Reviews -->
                <a href="https://share.google/5VR7UfAJlWjnWQ7EH" target="_blank"
                    class="hover:text-white transition-colors">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 2C6.48 2 2 6.48 2 12c0 4.41 2.87 8.14 6.84 9.5-.03-.77-.06-1.93.01-2.76.06-.73.4-2.09.65-2.75.21-.57 1.35-3.65 1.35-3.65s-.35-.7-.35-1.73c0-1.62.94-2.83 2.11-2.83.99 0 1.47.74 1.47 1.63 0 .99-.63 2.48-.95 3.85-.27 1.15.57 2.08 1.69 2.08 2.03 0 3.6-2.14 3.6-5.23 0-2.72-1.95-4.63-4.75-4.63-3.24 0-5.16 2.42-5.16 4.92 0 .99.38 2.05.85 2.63a.34.34 0 01.08.33c-.09.37-.28 1.15-.32 1.31-.05.21-.16.25-.36.15-1.33-.61-2.16-2.56-2.16-4.12 0-3.36 2.44-6.44 7.05-6.44 3.7 0 6.57 2.64 6.57 6.17 0 3.68-2.31 6.64-5.53 6.64-1.08 0-2.1-.57-2.45-1.24l-.67 2.56c-.24.93-.89 2.09-1.33 2.79C9.48 21.86 10.71 22 12 22c5.52 0 10-4.48 10-10S17.52 2 12 2z" />
                    </svg>
                </a>
            </div>
        </div>

        <!-- Quick Links -->
        <div>
            <h4 class="text-xl font-semibold mb-4 text-white">Quick Links</h4>
            <ul class="space-y-2 flex gap-2">
                <li><a href="#about" class="hover:text-white transition-colors">About</a></li>
                <li class="flex">
                    <a href="#services-mobile" class="lg:hidden ...">Services</a>
                    <a href="#services-desktop" class="hidden lg:block ...">Services</a>
                </li>
                </li>
                <li><a href="#reviews" class="hover:text-white transition-colors">Reviews</a></li>
                <li><a href="#news" class="hover:text-white transition-colors">News</a></li>
                <li><a href="#contact" class="hover:text-white transition-colors">Contact</a></li>
            </ul>
        </div>

        <!-- Contact Info -->
        <div>
            <h4 class="text-xl font-semibold mb-4 text-white">Contact Us</h4>
            <p class="text-gray-400 mt-2">Email: <a href="mailto:hello@ecotekltd.co.uk?subject=ECOTEK%20enquiry"
                    class="hover:text-white">hello@ecotekltd.co.uk</a></p>
            <p class="text-gray-400">Phone: <a href="tel:+447580803838" class="hover:text-white">+44 7580 803838</a>
            </p>
        </div>
    </div>

    <div class="mt-12 border-t border-gray-200 pt-6 text-center text-white text-sm">
        &copy; <?php echo date('Y'); ?> ECO-TEK Ltd. All rights reserved.
    </div>
</footer>


<?php

wp_footer();

?>