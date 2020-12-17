<?php
// ACF Fields
$logo = get_field('logo');
$title = get_field('title') ? get_field('title') : 'WELCOME TO INTERCOT HOME COLLECTION' ;
$caption = get_field('caption') ? get_field('caption') : 'We are Intercot Home Collection, Textile Industrial Company based on Suez Freezone Area, Ataka, Suez, Egypt.<br>We are working in producing, all types of (Quilts, Quilt cover, Bed Sheets, Pillow Cases, Pillows, Mattress Protectors, Bedspreads, Flannel Sheets, Towels, Shower Curtains, Window Curtains).'
?>
<!-- About Section -->
<section class="py-24">
    <div class="container mx-auto relative">
        <div class="bg-main absolute top-0 left-0 w-full h-full z-10 rounded rounded-lg shadow shadow-lg"></div>
        <span class="bg-gray-200 inline-block absolute top-0 left-0 w-full h-full transform z-0  rotate-1  rounded rounded-lg"></span>
        <div class="grid lg:grid-cols-2 relative z-20 flex items-center">

            <div class="text-center flex justify-center py-8">
                <img class="inline-block" src="<?php echo $logo ? $logo['url'] : get_template_directory_uri(); ?>/assets/img/logo-white.png" alt="<?php echo $logo['alt'] ?>" title="<?php echo $logo['title'] ?>">
            </div>
            <div class='p-8 lg:p-2'>
                <div class="text-white text-center lg:text-left">
                    <h2 class="mb-4 bg-white inline-block text-main py-4 px-4 rounded rounded-lg shadow shadow-lg font-bold"><?php echo $title ?></h2>
					<p>
					<?php echo $caption ?>
					</p>
                </div>
            </div>
        </div>

    </div>
</section>