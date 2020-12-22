<?php
// ACF FIELDS 
$block_title = get_field('block_title') ? get_field('block_title') : 'Get a Quote';

$form = get_field('form') ? get_field('form') : '[contact-form-7 id="107" title="Contact form 1"]';

?>
<section class="py-24 bg-gray-200">
    <div class="container mx-auto">
        <div class="text-center relative block mb-12">
            <div class="relative inline-block">
                <h2 class="text-4xl font-bold text-black relative z-10"><?php echo $block_title ?></h2>
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

                <?php echo do_shortcode('' . $form . '') ?>
            </div>
        </div>
    </div>
</section>