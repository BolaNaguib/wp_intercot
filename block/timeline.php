<!-- TimeLine Section -->

<section class="h-screen lg:px-2">
    <div class="grid lg:grid-cols-5 h-full gap-2 lg:gap-0">
        <?php for ($i = 0; $i < 5; $i++) : ?>
            <?php if (have_rows('timeline')) : ?>
                <?php while (have_rows('timeline')) : the_row();
                    //ACF Fields
                    $url = get_sub_field('url') ? get_sub_field('url') : '#';
                    $background = get_sub_field('background');
                    $title = get_sub_field('title') ? get_sub_field('title') : 'Main';
                    $title_bold = get_sub_field('title_bold') ? get_sub_field('title_bold') : 'Preview';
                    $caption = get_sub_field('caption') ? get_sub_field('caption') : 'Suitable for any food related timelines / blogs';
                ?>
                <?php endwhile; ?>
            <?php endif; ?>
            <a <?php if ($url) : ?> href="<?php echo $url ?>" <?php else : ?> <?php endif; ?> class="relative group overflow-hidden">
                <div class="z-30 bg-black w-full h-full absolute opacity-75 transform group-hover:opacity-0 transition ease-in-out duration-500">
                </div>
                <img loading="lazy" class="object-cover w-full h-full absolute z-20 transform group-hover:scale-110 transition ease-in-out duration-500" <?php if ($background) : ?> src="<?php echo $background ?>" <?php else : ?> src="<?php echo get_template_directory_uri() ?>/assets/img/x1.jpg" <?php endif; ?> alt="" title="wp3704688">
                <div class="z-40 relative h-full flex items-center justify-center text-white">
                    <span class="text-2xl group-hover:-translate-y-20 transform transition duration-500 ease-in-out group-hover:opacity-0  "><?php echo $title ?> <b><?php echo $title_bold ?></b></span>
                </div>
                <div class="bg-white hidden lg:block text-gray-700 text-sm  absolute text-center py-16 bottom-0 translate-y-full group-hover:-translate-y-1 left-0 w-full z-50 transform transition duration-500 ease-in-out">
                    <span><?php echo $caption ?></span>
                    <div class="flex items-center justify-center text-main mt-4">
                        <svg class="h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>

                    <br>
                </div>
            </a>
        <?php endfor; ?>

    </div>
</section>