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
        <div class="grid lg:grid-cols-3 gap-12 mt-12">
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

            <div class='relative group '>
                <span class="bg-main inline-block absolute top-0 left-0 w-full h-full transform z-0  rotate-3 transition duration-300 ease-in-out group-hover:rotate-0 rounded rounded-lg  "></span>
                <div class='bg-white h-full group-hover:bg-black relative px-4 py-8 rounded rounded-lg z-10 shadow shadow-lg text-center'>

                    <svg class="w-24 h-24 rounded rounded-full bg-main text-white shadow shadow-lg p-4 inline-block" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marked-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path fill="currentColor" d="M288 0c-69.59 0-126 56.41-126 126 0 56.26 82.35 158.8 113.9 196.02 6.39 7.54 17.82 7.54 24.2 0C331.65 284.8 414 182.26 414 126 414 56.41 357.59 0 288 0zm0 168c-23.2 0-42-18.8-42-42s18.8-42 42-42 42 18.8 42 42-18.8 42-42 42zM20.12 215.95A32.006 32.006 0 0 0 0 245.66v250.32c0 11.32 11.43 19.06 21.94 14.86L160 448V214.92c-8.84-15.98-16.07-31.54-21.25-46.42L20.12 215.95zM288 359.67c-14.07 0-27.38-6.18-36.51-16.96-19.66-23.2-40.57-49.62-59.49-76.72v182l192 64V266c-18.92 27.09-39.82 53.52-59.49 76.72-9.13 10.77-22.44 16.95-36.51 16.95zm266.06-198.51L416 224v288l139.88-55.95A31.996 31.996 0 0 0 576 426.34V176.02c0-11.32-11.43-19.06-21.94-14.86z" class=""></path>
                    </svg>
                    <h3 class='text-2xl my-4 font-bold'>Address</h3>
                    <p>
                        Ataka Freezone, Adabia, Suez, Egypt.</p>
                </div>


            </div>


            <div class='relative group '>
                <span class="bg-main inline-block absolute top-0 left-0 w-full h-full transform z-0  rotate-3 transition duration-300 ease-in-out group-hover:rotate-0 rounded rounded-lg  "></span>
                <div class='bg-white h-full  group-hover:bg-black relative px-4 py-8 rounded rounded-lg z-10 shadow shadow-lg text-center'>

                    <svg class="w-24 h-24 rounded rounded-full bg-main text-white shadow shadow-lg p-4 inline-block" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="at" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M256 8C118.941 8 8 118.919 8 256c0 137.059 110.919 248 248 248 48.154 0 95.342-14.14 135.408-40.223 12.005-7.815 14.625-24.288 5.552-35.372l-10.177-12.433c-7.671-9.371-21.179-11.667-31.373-5.129C325.92 429.757 291.314 440 256 440c-101.458 0-184-82.542-184-184S154.542 72 256 72c100.139 0 184 57.619 184 160 0 38.786-21.093 79.742-58.17 83.693-17.349-.454-16.91-12.857-13.476-30.024l23.433-121.11C394.653 149.75 383.308 136 368.225 136h-44.981a13.518 13.518 0 0 0-13.432 11.993l-.01.092c-14.697-17.901-40.448-21.775-59.971-21.775-74.58 0-137.831 62.234-137.831 151.46 0 65.303 36.785 105.87 96 105.87 26.984 0 57.369-15.637 74.991-38.333 9.522 34.104 40.613 34.103 70.71 34.103C462.609 379.41 504 307.798 504 232 504 95.653 394.023 8 256 8zm-21.68 304.43c-22.249 0-36.07-15.623-36.07-40.771 0-44.993 30.779-72.729 58.63-72.729 22.292 0 35.601 15.241 35.601 40.77 0 45.061-33.875 72.73-58.161 72.73z" class=""></path>
                    </svg>
                    <h3 class='text-2xl my-4 font-bold'> Email </h3>

                    <p>intercot@intercoteg.com</p>
                </div>


            </div>
        </div>
    </div>
</section>