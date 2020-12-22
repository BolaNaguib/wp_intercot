<?php
// ACF Fields 
$title = get_field('title') ? get_field('title') : 'Intercot';
$span = get_field('span') ? get_field('span') : 'Home Collection';
$caption = get_field('caption') ? get_field('caption') : 'Textile Industrial Company based on Suez Freezone Area, <br> Ataka, Suez, Egypt.';
$image = get_field('image');
$background = get_field('background');
?>
<!-- Hero Section -->
<section class="fw h-screen relative z-10 leading-normal" style="background:url() no-repeat; background-attachment: scroll;
	background-size: cover;
    background-position: center center;">
    <div class="z-30 bg-black w-full h-full absolute opacity-75 ">
    </div>
    <img loading="lazy" class="object-cover w-full h-full absolute z-20" <?php if ($background) : ?> src="<?php echo $background['url'] ?>" <?php else : ?> src="<?php echo get_template_directory_uri() ?>/assets/img/bedx.jpg" <?php endif; ?> alt="<?php echo $background['alt'] ?>" title="<?php echo $background['title'] ?>">
    <div class="container mx-auto px-4 text-white font-semibold h-full flex items-center relative z-40">
        <div class="grid gap-6 lg:grid-cols-3 flex items-center">
            <div class="lg:col-span-2">
                <!--             <span class="text-sm lg:text-xl">NAVICO Egypt </span> -->
                <h1 class="text-3xl lg:text-6xl font-bold mb-2"><?php echo $title ?> </h1>
                <span class="text-sm lg:text-xl"><?php echo $span ?></span>
                <h2 class="text-base lg:text-2xl text-shadow"><?php echo $caption ?></h2>
                <div class="block mt-4 flex items-center">

                </div>
            </div>
            <div>
                <div class='relative group '>
                    <span class="bg-main inline-block absolute top-0 left-0 w-full h-full transform z-0  rotate-3 transition duration-300 ease-in-out group-hover:rotate-0 rounded rounded-lg  "></span>
                    <div class='bg-white h-full group-hover:bg-black relative overflow-hidden p-2 rounded rounded-lg z-10 shadow shadow-lg text-center'>
                        <img class="rounded rounded-lg " <?php if ($image) : ?> src="<?php echo $image['url'] ?>" <?php else : ?> src="<?php echo get_template_directory_uri() ?>/assets/img/T2_5.jpg" <?php endif; ?> alt="<?php echo $image['alt'] ?>" title="<?php echo $image['title'] ?>">
                    </div>


                </div>
            </div>

        </div>
    </div>

</section>