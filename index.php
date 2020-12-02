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
        <?php the_content(); ?>
    <?php endwhile; ?>
<?php else : ?>
<?php endif; ?>




<?php get_footer(); ?>