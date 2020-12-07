<?php get_header();
if (!is_front_page()) : ?>

    <section class="relative">
        <div class="z-30 bg-black w-full h-full absolute opacity-75 ">
        </div>
        <img loading="lazy" class="object-cover w-full h-full absolute z-20" src="<?php echo get_template_directory_uri() ?>/assets/img/bedx.jpg" alt="">
        <div class="container mx-auto py-24 flex justify-center">
            <div class="relative text-center z-40 bg-white shadow-xl py-4 lg:py-8 px-8 lg:px-32 transform translate-y-32 lg:translate-y-40 rounded">
                <h1 class="text-3xl lg:text-4xl"><?php the_title(); ?></h1>
                <div class="breadcrumb text-sm lg:text-base text-gray-600">
                    <?php get_breadcrumb(); ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>


<?php if (have_posts()) : ?>
    <?php /* Start the Loop */ ?>
    <?php while (have_posts()) : the_post(); ?>

        <section class="py-32" x-data="{ selectedImage: '<?php echo get_template_directory_uri() ?>/assets/img/x1.jpg' }">
            <div class="container mx-auto">

                <div class=" gap-6 grid lg:grid-cols-2 ">
                    <div class="flex flex-col-reverse sm:flex-row-reverse lg:flex-row justify-between px-5">
                        <div class="sm:pl-5 md:pl-4 lg:pl-0 lg:pr-2 xl:pr-3 flex flex-row sm:flex-col">

                            <div class="w-28 sm:w-32 lg:w-24 xl:w-28 relative pb-5 mr-3 sm:pr-0">
                                <div class="bg-v-pink border border-grey relative h-28 rounded flex items-center justify-center">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/x1.jpg" @click="selectedImage = $event.target.src" alt="">

                                </div>
                            </div>

                            <div class="w-28 sm:w-32 lg:w-24 xl:w-28 relative pb-5 mr-3 sm:pr-0">
                                <div class="bg-v-pink border border-grey relative h-28 rounded flex items-center justify-center">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/x2.jpg" @click="selectedImage = $event.target.src" alt="">

                                </div>
                            </div>

                            <div class="w-28 sm:w-32 lg:w-24 xl:w-28 relative pb-5 mr-3 sm:pr-0">
                                <div class="bg-v-pink border border-grey relative h-28 rounded flex items-center justify-center">

                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/x3.jpg" @click="selectedImage = $event.target.src" alt="">
                                </div>
                            </div>

                        </div>
                        <div class="w-full sm:w-96 lg:w-80 xl:w-90 relative pb-5 sm:pb-0">
                            <div class="bg-v-pink border border-grey relative h-80 sm:h-94 xl:h-96 rounded flex items-center justify-center">

                                <img class="w-full" :src="selectedImage" src="<?php echo get_template_directory_uri() ?>/assets/img/x1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="pt-12 sm:pt-16 lg:pt-0 px-5">
                        <h2 class="text-sm title-font text-gray-500 tracking-widest">products </h2>
                        <h1 class="text-gray-900 text-3xl title-font font-medium ">Gbna Shield</h1>
                        <div class="flex my-2 justify-between">
                            <!-- <span class="title-font font-medium text-2xl text-secondary">$100</span> -->

                            <span class="flex items-center text-main">
                                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 " viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                </svg>
                                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 " viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                </svg>
                                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 " viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                </svg>
                                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 " viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                </svg>
                                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 " viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                </svg>
                            </span>

                        </div>
                        <p class="leading-relaxed my-4">Like many types of hard cheese, The most common Rumi cheese suffers in Egypt from the spread of fungi and many microbes. That causes it to corrupt during manufacturing, settlement and trading periods which may last for several months. It is an edible antimicrobial film and can be applied </p>

                        <span class="block mb-4"> <b class='text-main'>Category : </b> Products, Covers </span>
                        <span class="block mb-4"> <b class='text-main'>Packing : </b> PAcking Detailes </span>
                        <span class="block mb-4"> <b class='text-main'>Sizes : </b> Small, Medium, Large </span>
                        <span class="block mb-4"> <b class='text-main'>Available Colors : </b></span>


                        <div class="grid lg:grid-cols-6 grid-cols-4 gap-2 lg:gap-6 mb-4">
                            <div class="text-center flex justify-center"><img class="h-24 rounded rounded-md" src="<?php echo get_template_directory_uri() ?>/assets/img/x1.jpg" @click="selectedImage = $event.target.src" alt=""> </div>
                            <div class="text-center flex justify-center"><img class="h-24 rounded rounded-md" src="<?php echo get_template_directory_uri() ?>/assets/img/x2.jpg" @click="selectedImage = $event.target.src" alt=""> </div>
                            <div class="text-center flex justify-center"><img class="h-24 rounded rounded-md" src="<?php echo get_template_directory_uri() ?>/assets/img/x3.jpg" @click="selectedImage = $event.target.src" alt=""> </div>
                            <div class="text-center flex justify-center"><img class="h-24 rounded rounded-md" src="<?php echo get_template_directory_uri() ?>/assets/img/x1.jpg" @click="selectedImage = $event.target.src" alt=""> </div>
                            <div class="text-center flex justify-center"><img class="h-24 rounded rounded-md" src="<?php echo get_template_directory_uri() ?>/assets/img/x2.jpg" @click="selectedImage = $event.target.src" alt=""> </div>
                            <div class="text-center flex justify-center"><img class="h-24 rounded rounded-md" src="<?php echo get_template_directory_uri() ?>/assets/img/x3.jpg" @click="selectedImage = $event.target.src" alt=""> </div>
                            <div class="text-center flex justify-center"><img class="h-24 rounded rounded-md" src="<?php echo get_template_directory_uri() ?>/assets/img/x1.jpg" @click="selectedImage = $event.target.src" alt=""> </div>
                            <div class="text-center flex justify-center"><img class="h-24 rounded rounded-md" src="<?php echo get_template_directory_uri() ?>/assets/img/x2.jpg" @click="selectedImage = $event.target.src" alt=""> </div>
                            <div class="text-center flex justify-center"><img class="h-24 rounded rounded-md" src="<?php echo get_template_directory_uri() ?>/assets/img/x3.jpg" @click="selectedImage = $event.target.src" alt=""> </div>
                            <div class="text-center flex justify-center"><img class="h-24 rounded rounded-md" src="<?php echo get_template_directory_uri() ?>/assets/img/x1.jpg" @click="selectedImage = $event.target.src" alt=""> </div>
                            <div class="text-center flex justify-center"><img class="h-24 rounded rounded-md" src="<?php echo get_template_directory_uri() ?>/assets/img/x2.jpg" @click="selectedImage = $event.target.src" alt=""> </div>
                            <div class="text-center flex justify-center"><img class="h-24 rounded rounded-md" src="<?php echo get_template_directory_uri() ?>/assets/img/x3.jpg" @click="selectedImage = $event.target.src" alt=""> </div>

                        </div>
                        <span class="block mb-4"> <b class='text-main'>Made In : </b> Egypt </span>








                    </div>
                </div>
            </div>
        </section>
        <section class="py-24 bg-gray-200">
            <div class="container mx-auto">
                <div class="text-center relative block mb-12">
                    <div class="relative inline-block">
                        <h2 class="text-4xl font-bold text-black relative z-10">Request a Quote</h2>
                        <hr class="w-full opacity-50 mx-auto border-main border-8 absolute bottom-0 left-0 -ml-2 mb-2 z-0 ">
                    </div>

                </div>
                <div class="text-center relative ">
                    <!-- <h3 class=" font-semibold text-2xl lg:text-4xl"> Reach Us Quickly </h3>
            <div class="bottom-dots py-4 inline-block">
                <span class="dot line-dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div> -->

                    <span class="bg-main inline-block absolute top-0 left-0 w-full h-full transform z-0  rotate-2 transition duration-300 ease-in-out group-hover:rotate-0 rounded rounded-lg  "></span>
                    <div class=" forminput px-4 py-8 rounded rounded-lg z-10 shadow shadow-lg bg-white z-10 relative">

                        <div role="form" class="wpcf7" id="wpcf7-f5-p62-o1" lang="en-US" dir="ltr">
                            <div class="screen-reader-response" role="alert" aria-live="polite"></div>
                            <form action="/contact-us/#wpcf7-f5-p62-o1" method="post" class="wpcf7-form init" novalidate="novalidate">
                                <div style="display: none;">
                                    <input type="hidden" name="_wpcf7" value="5">
                                    <input type="hidden" name="_wpcf7_version" value="5.2.2">
                                    <input type="hidden" name="_wpcf7_locale" value="en_US">
                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f5-p62-o1">
                                    <input type="hidden" name="_wpcf7_container_post" value="62">
                                    <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                                </div>
                                <div class="grid grid-cols-2 gap-2">
                                    <div class="col-span-2 lg:col-span-1">
                                        <span class="wpcf7-form-control-wrap name"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required text" aria-required="true" aria-invalid="false" placeholder="Name"></span>
                                    </div>
                                    <div class="col-span-2 lg:col-span-1">
                                        <span class="wpcf7-form-control-wrap email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email text" aria-required="true" aria-invalid="false" placeholder="Email"></span>
                                    </div>
                                    <div class="col-span-2">
                                        <span class="wpcf7-form-control-wrap subject"><input type="text" name="subject" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required text" aria-required="true" aria-invalid="false" placeholder="subject"></span>
                                    </div>
                                    <div class="col-span-2">
                                        <span class="wpcf7-form-control-wrap message"><textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required text" aria-required="true" aria-invalid="false" placeholder="Message"></textarea></span>
                                    </div>
                                    <div class="col-span-2"><input type="submit" value="SEND" class="wpcf7-form-control wpcf7-submit submitbutton"><span class="ajax-loader"></span></div>
                                </div>
                                <div class="wpcf7-response-output" role="alert" aria-hidden="true"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php else : ?>
<?php endif; ?>



<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.3.3/dist/alpine.min.js" defer=""></script>

<?php get_footer(); ?>