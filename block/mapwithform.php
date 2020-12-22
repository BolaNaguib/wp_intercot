<?php
// ACF FIELDS 
$map_title = get_field('map_title') ? get_field('map_title') : 'Find Us';
$map = get_field('map') ? get_field('map') : '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d27668.35345959953!2d32.449042!3d29.906232000000003!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x669ce6f62b7d2d55!2sIntercot%20Home%20Collection!5e0!3m2!1sen!2sus!4v1606207646734!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';
$form_title = get_field('form_title') ? get_field('form_title') : 'Get a Quote';
$form = get_field('form') ? get_field('form') : '[contact-form-7 id="107" title="Contact form 1"]';
?>
<!-- Map -->
<section class="py-24 bg-gray-100">

    <div class="container mx-auto relative ">

        <div class="grid grid-cols-3 gap-6 ">
            <div class="col-span-2 relative text-center">
                <div class="relative inline-block z-30  my-8">
                    <h2 class="text-4xl font-bold text-black relative z-10"><?php echo $map_title ?></h2>
                    <hr class="w-full opacity-50 mx-auto border-main border-8 absolute bottom-0 left-0 -ml-2 mb-2 z-0 ">
                </div>
                <div class="relative">
                    <div class="bg-white absolute top-0 left-0 w-full h-full z-10 rounded rounded-lg shadow shadow-lg"></div>
                    <span class="bg-main inline-block absolute top-0 left-0 w-full h-full transform z-0  rotate-1  rounded rounded-lg"></span>
                    <div class="iframe relative z-20 p-4 rounded rounded-lg overflow-hidden ">
                        <?php echo $map ?>
                    </div>
                </div>

            </div>

            <div class="relative text-center">
                <div class="relative inline-block z-30 my-8">
                    <h2 class="text-4xl font-bold text-black relative z-10"><?php echo $form_title ?></h2>
                    <hr class="w-full opacity-50 mx-auto border-main border-8 absolute bottom-0 left-0 -ml-2 mb-2 z-0 ">
                </div>
                <div class="relative">
                    <span class="bg-main inline-block absolute top-0 left-0 w-full h-full transform z-0  rotate-1  rounded rounded-lg"></span>
                    <div class="bg-white absolute top-0 left-0 w-full h-full z-10 rounded rounded-lg shadow shadow-lg"></div>

                    <div class=" forminput px-4 py-8 rounded rounded-lg z-10 shadow shadow-lg bg-white z-10 relative">
                        <?php echo do_shortcode('' . $form . '') ?>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>