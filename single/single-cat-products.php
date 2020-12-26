<?php get_header();
$id = get_the_ID();
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
    <?php while (have_posts()) : the_post();
        // wordpress vars
        $title = get_the_title() ? get_the_title() : 'product name';
        $thumbnail = get_the_post_thumbnail_url();
        $gallery_title = get_field('gallery_title') ? get_field('gallery_title') : 'gallery';
        $category = get_the_category($id);
        $content = get_the_content() ? get_the_content() : 'Like many types of hard cheese, The most common Rumi cheese suffers in Egypt from the spread of fungi and many microbes. That causes it to corrupt during manufacturing, settlement and trading periods which may last for several months. It is an edible antimicrobial film and can be applied ';
        $form = get_field('form') ? get_field('form') : '[contact-form-7 id="107" title="Contact form 1"]';


    ?>
        <section class="py-32" <?php if ($thumbnail) : ?> x-data="{ selectedImage: '<?php echo $thumbnail ?>' }" <?php else : ?> x-data="{ selectedImage: '<?php echo get_template_directory_uri() ?>/assets/img/x1.jpg' }" <?php endif; ?>>
            <div class="container mx-auto">
                <div class=" gap-6 grid lg:grid-cols-2 ">
                    <div class="flex flex-col-reverse sm:flex-row-reverse lg:flex-row justify-between px-5">
                        <div class="sm:pl-5 md:pl-4 lg:pl-0 lg:pr-2 xl:pr-3 flex flex-row sm:flex-col">
                            <?php if (have_rows('top_gallery_images')) : ?>
                                <?php while (have_rows('top_gallery_images')) : the_row();
                                    //ACF Fields
                                    $image = get_sub_field('image');

                                ?>
                                    <div class="w-28 sm:w-32 lg:w-24 xl:w-28 relative pb-5 mr-3 sm:pr-0">
                                        <div class="bg-v-pink border border-grey relative h-28 rounded flex items-center justify-center">
                                            <img <?php if ($image) : ?> src="<?php echo $image['url'] ?>" <?php else : ?> src="<?php echo get_template_directory_uri() ?>/assets/img/x1.jpg" <?php endif; ?> alt="<?php echo $image['alt'] ?>" title="<?php echo $image['title'] ?>" @click="selectedImage = $event.target.src">

                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="w-full sm:w-96 lg:w-80 xl:w-90 relative pb-5 sm:pb-0">
                            <div class="bg-v-pink border border-grey relative h-80 sm:h-94 xl:h-96 rounded flex items-center justify-center">

                                <img class="w-full" :src="selectedImage" <?php if ($thumbnail) : ?> <?php echo $thumbnail ?> <?php else : ?> src="<?php echo get_template_directory_uri() ?>/assets/img/x1.jpg" <?php endif ?> alt="">
                            </div>
                        </div>
                    </div>
                    <div class="pt-12 sm:pt-16 lg:pt-0 px-5">
                        <h2 class="text-sm title-font text-gray-500 tracking-widest"><?php
                                                                                        foreach ($category as $cd) {
                                                                                            echo $cd->cat_name . ' ';
                                                                                        } ?></h2>
                        <h1 class="text-gray-900 text-3xl title-font font-medium "><?php echo $title ?> </h1>
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
                        <p class="leading-relaxed my-4"><?php echo $content ?></p>

                        <!-- <span class="block mb-4"> <b class='text-main'>Category : </b> <?php
                                                                                            foreach ($category as $cd) {
                                                                                                echo $cd->cat_name . ' ';
                                                                                            } ?> </span> -->
                        <?php if (have_rows('extra_data')) : ?>
                            <?php while (have_rows('extra_data')) : the_row();
                                //ACF Fields
                                $title = get_sub_field('title') ? get_sub_field('title') : 'Packing';
                                $info = get_sub_field('info') ? get_sub_field('info') : 'PAcking Detailes';
                            ?>
                                <span class="block mb-4"> <b class='text-main'><?php echo $title ?> : </b> <?php echo $info ?> </span>

                            <?php endwhile; ?>
                        <?php endif; ?>
                        <span class="block mb-4"> <b class='text-main'><?php echo $gallery_title ?> : </b></span>
                        <div class="grid lg:grid-cols-6 grid-cols-4 gap-2 lg:gap-6 mb-4">
                            <?php if (have_rows('gallery_images')) : ?>
                                <?php while (have_rows('gallery_images')) : the_row();
                                    //ACF Fields
                                    $image = get_sub_field('image');
                                ?>
                                    <div class="text-center flex justify-center">
                                        <img class="h-24 rounded rounded-md" <?php if ($image) : ?> src="<?php echo $image['url'] ?>" <?php else : ?> src="<?php echo get_template_directory_uri() ?>/assets/img/x1.jpg" <?php endif; ?> alt="<?php echo $image['alt'] ?>" title="<?php echo $image['title'] ?>" @click="selectedImage = $event.target.src">
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>

                        </div>

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
                    <span class="bg-main inline-block absolute top-0 left-0 w-full h-full transform z-0  rotate-2 transition duration-300 ease-in-out group-hover:rotate-0 rounded rounded-lg  "></span>
                    <div class=" forminput px-4 py-8 rounded rounded-lg z-10 shadow shadow-lg bg-white z-10 relative">
                        <?php echo do_shortcode('' . $form . '') ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php else : ?>
<?php endif; ?>



<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.3.3/dist/alpine.min.js" defer=""></script>

<?php get_footer(); ?>