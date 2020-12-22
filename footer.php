<?php
// ACF FIELDS 
$location = get_field('location', 'options') ? get_field('location', 'options') : 'Ataka Freezone, Adabia, Suez, Egypt.';
$email = get_field('email', 'options') ? get_field('email', 'options') : 'intercot@intercoteg.com';
$certificate = get_field('certificate', 'options') ? get_field('certificate', 'options') : 'Certificates Iso: 9001 – 2015';
$phone_display = get_field('phone_display', 'options') ? get_field('phone_display', 'options') : '+201094993034';
$phone = get_field('phone', 'options') ? get_field('phone', 'options') : '00201094993034';
$phone_display_2 = get_field('phone_display_2', 'options') ? get_field('phone_display_2', 'options') : '+201000666480';
$phone_2 = get_field('phone_2', 'options') ? get_field('phone_2', 'options') : '00201000666480';
$phone_display_3 = get_field('phone_display_3', 'options') ? get_field('phone_display_3', 'options') : '+20623230274';
$phone_3 = get_field('phone_3', 'options') ? get_field('phone_3', 'options') : '0020623230274';
$facebook = get_field('facebook', 'options') ? get_field('facebook', 'options') : '#';
$instagram = get_field('instagram', 'options') ? get_field('instagram', 'options') : '#';
$col1_title = get_field('col1_title', 'options') ? get_field('col1_title', 'options') : 'About Intercot';
$col1_caption = get_field('col1_caption', 'options') ? get_field('col1_caption', 'options') : 'We are Intercot Home Collection, Textile Industrial Company based on Suez Freezone Area, Ataka, Suez, Egypt.';
$col2_title = get_field('col2_title', 'options') ? get_field('col2_title', 'options') : 'Contact Us';
$col3_title = get_field('col3_title', 'options') ? get_field('col3_title', 'options') : 'Products';

?>

<footer class="bg-gray-900 text-gray-600 py-12 text-sm">
    <!-- START container -->
    <div class="container mx-auto px-4">
        <!-- START grid grid-cols-4 -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- START footer card  -->
            <div>
                <span class=" mb-4 block text-white font-semibold text-xl "><?php echo $col1_title ?></span>
                <p class="text-gray-600"><?php echo $col1_caption ?></p>
                <img class="bg-white p-1 mt-4 rounded rounded-sm" src="<?php echo get_template_directory_uri() ?>/assets/img/iso.jpg" alt="">
            </div>
            <!-- END Footer Card  -->
            <!-- START footer card  -->
            <div>
                <span class=" mb-4 block text-white font-semibold text-xl"><?php echo $col2_title ?></span>
                <ul>
                    <li class="flex items-center mb-2">
                        <span class=" w-4 h-4 mr-2 inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </span> <span><?php echo $location ?></span>
                    </li>
                    <li class="flex items-center  mb-2">
                        <span class=" w-4 h-4 mr-2 inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </span> <span><?php echo $email ?></span>
                    </li>
                    <li class="flex items-center  mb-2">
                        <span class=" w-4 h-4 mr-2 inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            </svg>
                        </span> <span>
                            <a class="hover:text-main" href="tel:<?php echo $phone ?>"><?php echo $phone_display ?></a> |
                            <a class="hover:text-main" href="tel:<?php echo $phone_2 ?>"><?php echo $phone_display_2 ?></a>
                        </span>
                    </li>
                    <li class="flex items-center  mb-2">
                        <span class=" w-4 h-4 mr-2 inline-block">
                            <svg class="" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>

                        </span> <span>
                            <a class="hover:text-main" href="tel:<?php echo $phone_3 ?>"><?php echo $phone_display_2 ?></a>
                        </span>
                    </li>
                    <li class="flex items-center  mb-2">
                        <span class=" w-4 h-4 mr-2 inline-block">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
                            </svg>
                        </span>
                        <span><?php echo $certificate ?></span>
                    </li>
                </ul>

            </div>
            <!-- END Footer Card  -->
            <!-- START footer card  -->
            <div>
                <span class=" mb-4 block text-white font-semibold text-xl "><?php echo $col3_title ?></span>
                <ul>
                    <?php if (have_rows('links', 'option')) : ?>
                        <?php while (have_rows('links', 'option')) : the_row();
                            //ACF Fields
                            $page_link = get_sub_field('page_link') ? get_sub_field('page_link') : '#';
                            $page_title = get_sub_field('page_title') ? get_sub_field('page_title') : 'Home';
                        ?>
                            <li>
                                <a href="" class="text-white hover:text-secondary"><?php echo $page_title ?></a>
                            </li>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>

            </div>
            <!-- END Footer Card  -->
            <!-- START footer card  -->


        </div>



    </div>
    <!-- END Footer Card  -->
    </div>
    <!-- END grid grid-cols-4 -->
    </div>
    <!-- END container -->
</footer>
<div class="bg-black text-white py-1">
    <div class="container mx-auto">
        <div class="flex justify-between">
            <div>
                <small>
                    © 2020 INTERCOT HOME COLLECTION.
                </small>
            </div>
            <div class="inline-flex sm:ml-auto sm:mt-2 mt-0 justify-center items-center sm:justify-start">
                <span class="text-sm text-main mr-2"> Follow Us On </span>
                <a href="<?php echo $facebook ?>" class="text-white">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="h-4" viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                </a>
                <a href="<?php echo $instagram ?>" class="ml-3 text-white">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="h-4" viewBox="0 0 24 24">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>

</html>