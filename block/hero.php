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
    <img loading="lazy"
     class="object-cover w-full h-full absolute z-20" 
     <?php if($background): ?>
                            src="<?php  echo $background['url'] ?>"
                         <?php else: ?>
                        src="<?php  echo get_template_directory_uri() ?>/assets/img/bedx.jpg"
                         <?php endif; ?>
                         alt="<?php  echo $background['alt'] ?>" title="<?php  echo $background['title'] ?>"
                         
>
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
                        <img class="rounded rounded-lg " 
                        <?php if($image): ?>
                            src="<?php  echo $image['url'] ?>"
                         <?php else: ?>
                        src="<?php  echo get_template_directory_uri() ?>/assets/img/T2_5.jpg"
                         <?php endif; ?>
                         alt="<?php  echo $image['alt'] ?>" title="<?php  echo $image['title'] ?>">
                    </div>


                </div>
            </div>

        </div>
    </div>

</section>



<!-- TimeLine Section -->

<section class="h-screen px-2">
    <div class="grid lg:grid-cols-5 h-full gap-2 lg:gap-0">
        <?php for ($i = 0; $i < 5; $i++) : ?>
            <a href="" class="relative group overflow-hidden">
                <div class="z-30 bg-black w-full h-full absolute opacity-75 transform group-hover:opacity-0 transition ease-in-out duration-500">
                </div>
                <img loading="lazy" class="object-cover w-full h-full absolute z-20 transform group-hover:scale-110 transition ease-in-out duration-500" src="<?php echo get_template_directory_uri() ?>/assets/img/x1.jpg" alt="" title="wp3704688">
                <div class="z-40 relative h-full flex items-center justify-center text-white">
                    <span class="text-2xl group-hover:-translate-y-20 transform transition duration-500 ease-in-out group-hover:opacity-0  ">Main <b>Preview</b></span>
                </div>
                <div class="bg-white hidden lg:block text-gray-700 text-sm  absolute text-center py-16 bottom-0 translate-y-full group-hover:-translate-y-1 left-0 w-full z-50 transform transition duration-500 ease-in-out">
                    <span>Suitable for any food related timelines / blogs </span>
                    <br>
                    <span>(doesn't show all available features)</span>
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