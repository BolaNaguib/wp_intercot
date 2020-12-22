<?php
// ACF FIELDS 
$block_title = get_field('block_title') ? get_field('block_title') : 'WHY INTERCOT';
?>
<!-- Why Section -->
<section class="py-24">
    <div class="container mx-auto">
        <div class="text-center relative block mb-12">
            <div class="relative inline-block">
                <h2 class="text-4xl font-bold text-white text-gray-900 relative z-10"><?php echo $block_title ?></h2>
                <hr class="w-64 opacity-50 mx-auto border-main border-8 absolute bottom-0 left-0 mb-2 z-0 ">
            </div>

        </div>
        <div class="grid lg:grid-cols-3 gap-6">
            <?php if (have_rows('cards')) : ?>
                <?php while (have_rows('cards')) : the_row();
                    //ACF Fields
                    $icon = get_sub_field('icon') ? get_sub_field('icon') : '<svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                </svg>';
                    $caption = get_sub_field('caption') ? get_sub_field('caption') : 'Exporting to European Union and the Middle East and North of America';
                ?>
                    <figcaption class="flex items-center space-x-4 p-6 md:px-10 md:py-6 bg-gradient-to-br rounded-b-xl leading-6 font-semibold">
                        <div class="flex-none w-20 h-20 bg-main rounded-full flex items-center justify-center shadow shadow-lg svgiconv2">
                            <?php echo $icon ?>
                        </div>
                        <div class="flex-auto"><?php echo $caption ?></div>
                    </figcaption>
                <?php endwhile; ?>
            <?php endif; ?>



        </div>
    </div>

</section>