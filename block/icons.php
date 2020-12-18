<?php 
// ACF FIELDS 
$block_title = get_field('block_title') ? get_field('block_title') : 'Service Perfection';
?>
<!-- Icons Section -->
<section class='bg-gray-100 py-24'>
    <div class="container mx-auto">
        <div class="text-center block mb-12">
        <h2 class="text-4xl font-bold text-gray-900"><?php echo $block_title ?></h2>
        </div>
        <div class="grid lg:grid-cols-3 gap-12">
<?php if (have_rows('card')) : ?>
<?php while (have_rows('card')) : the_row(); 
//ACF Fields
$icon = get_sub_field('icon') ? get_sub_field('icon') : '<svg class="" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>';
$title = get_sub_field('title') ? get_sub_field('title') : 'High Quality';
$caption = get_sub_field('caption') ? get_sub_field('caption') : 'We pays special attention to quality of raw materials and also to all styles of production in order to meet these high standards and offer high quality products.';

?>


<div class='relative group '>
                <span class="bg-main inline-block absolute top-0 left-0 w-full h-full transform z-0  rotate-3 transition duration-300 ease-in-out group-hover:rotate-0 rounded rounded-lg  "></span>
                <div class='bg-white h-full svgicon group-hover:bg-black relative px-4 py-8 rounded rounded-lg z-10 shadow shadow-lg text-center'>
                    <?php echo $icon ?>
                    <h3 class='text-2xl my-4 font-bold'><?php echo $title ?></h3>
                    <p><?php echo $caption ?></p>
                </div>


            </div>

<?php endwhile; ?>
<?php endif; ?>


            <!-- <div class='relative group '>
                <span class="bg-main inline-block absolute top-0 left-0 w-full h-full transform z-0  rotate-3 transition duration-300 ease-in-out group-hover:rotate-0 rounded rounded-lg  "></span>
                <div class='bg-white h-full group-hover:bg-black relative px-4 py-8 rounded rounded-lg z-10 shadow shadow-lg text-center'>
                    <svg class="w-24 h-24 rounded rounded-full bg-main text-white shadow shadow-lg p-4 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                    <h3 class='text-2xl my-4 font-bold'>Modern & Customized Styles</h3>
                    <p>
                        We pays special attention to get the lateset designs with comfortable colors, which makes your customers feel satisfied, elite and relaxed.</p>
                </div>


            </div>


            <div class='relative group '>
                <span class="bg-main inline-block absolute top-0 left-0 w-full h-full transform z-0  rotate-3 transition duration-300 ease-in-out group-hover:rotate-0 rounded rounded-lg  "></span>
                <div class='bg-white h-full  group-hover:bg-black relative px-4 py-8 rounded rounded-lg z-10 shadow shadow-lg text-center'>
                    <svg class="w-24 h-24 rounded rounded-full bg-main text-white shadow shadow-lg p-4 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                    </svg>
                    <h3 class='text-2xl my-4 font-bold'> Competitive Prices </h3>

                    <p>Dealing with Egyptian companies now is such a good deal for trading you have high quality products with very good prices. </p>
                </div>


            </div> -->
        </div>
    </div>
</section>