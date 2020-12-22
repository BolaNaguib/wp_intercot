<?php
// ACF FIELDS 
$block_title = get_field('block_title') ? get_field('block_title') : 'Find Us';
$map = get_field('map') ? get_field('map') : '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d27668.35345959953!2d32.449042!3d29.906232000000003!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x669ce6f62b7d2d55!2sIntercot%20Home%20Collection!5e0!3m2!1sen!2sus!4v1606207646734!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';
?>
<!-- Map -->
<section class="py-24 bg-gray-100">
    <div class="text-center relative block mb-12">
        <div class="relative inline-block">
            <h2 class="text-4xl font-bold text-black relative z-10"><?php echo $block_title ?></h2>
            <hr class="w-full opacity-50 mx-auto border-main border-8 absolute bottom-0 left-0 -ml-2 mb-2 z-0 ">
        </div>

    </div>
    <div class="container mx-auto relative ">

        <div class="relative">
            <div class="bg-white absolute top-0 left-0 w-full h-full z-10 rounded rounded-lg shadow shadow-lg"></div>
            <span class="bg-main inline-block absolute top-0 left-0 w-full h-full transform z-0  rotate-1  rounded rounded-lg"></span>
            <div class="iframe relative z-20 p-4 rounded rounded-lg overflow-hidden ">
                <?php echo $map ?>
            </div>
        </div>

    </div>
</section>



<!-- Countries Flags -->
<section class="py-24 bg-gray-200">
    <div class="container mx-auto">
        <!-- <div class="text-center relative block mb-12">
            <div class="relative inline-block">
                <h2 class="text-4xl font-bold text-black relative z-10">Our Statistics</h2>
                <hr class="w-full opacity-50 mx-auto border-main border-8 absolute bottom-0 left-0 -ml-2 mb-2 z-0 ">
            </div>

        </div> -->
        <div class="grid grid-cols-3 gap-6">
            <div class="col-span-2 text-center">
                <div class="relative inline-block z-30  my-8">
                    <h2 class="text-4xl font-bold text-black relative z-10">Countries We Export To</h2>
                    <hr class="w-full opacity-50 mx-auto border-main border-8 absolute bottom-0 left-0 -ml-2 mb-2 z-0 ">
                </div>
                <div class="relative p-6">
                    <span class="bg-main inline-block absolute top-0 left-0 w-full h-full transform z-0  rotate-1  rounded rounded-lg"></span>
                    <div class="bg-white absolute top-0 left-0 w-full h-full z-10 rounded rounded-lg shadow shadow-lg"></div>
                    <div class="relative z-30  grid grid-cols-6 gap-6">
                        <?php for ($i = 0; $i < 24; $i++) : ?>
                            <div class="block">
                                <div class=" flex justify-center">
                                    <img class="block" src="<?php echo get_template_directory_uri() ?>/assets/img/uk.png" alt="">
                                </div>
                                <small class="block text-xs font-semibold text-gray-600 tracking-wider">United Kingdom</small>


                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
            <div class=" text-center">
                <div class="relative inline-block z-30  my-8">
                    <h2 class="text-4xl font-bold text-black relative z-10">Successful Projects</h2>
                    <hr class="w-full opacity-50 mx-auto border-main border-8 absolute bottom-0 left-0 -ml-2 mb-2 z-0 ">
                </div>
                <div class="relative text-left">
                    <figcaption class="flex items-center space-x-4 p-6 md:px-10 md:py-6 bg-gradient-to-br rounded-b-xl leading-6 font-semibold">
                        <div class="relative ">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-main opacity-25 z-0">
                            </span>
                            <div class="flex-none w-20 h-20 bg-main text-white rounded-full flex items-center justify-center relative z-30  shadow shadow-lg">
                                35
                            </div>
                        </div>
                        <div class="flex-auto">Country</div>
                    </figcaption>
                    <figcaption class="flex items-center space-x-4 p-6 md:px-10 md:py-6 bg-gradient-to-br rounded-b-xl leading-6 font-semibold">
                        <div class="relative ">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-main opacity-25 z-0">
                            </span>
                            <div class="flex-none w-20 h-20 bg-main text-white rounded-full flex items-center justify-center relative z-30  shadow shadow-lg">
                                120
                            </div>
                        </div>

                        <div class="flex-auto">Exporting Number per Year</div>
                    </figcaption>
                    <figcaption class="flex items-center space-x-4 p-6 md:px-10 md:py-6 bg-gradient-to-br rounded-b-xl leading-6 font-semibold">
                        <div class="relative ">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-main opacity-25 z-0">
                            </span>
                            <div class="flex-none w-20 h-20 bg-main text-white rounded-full flex items-center justify-center relative z-30  shadow shadow-lg">
                                999
                            </div>
                        </div>
                        <div class="flex-auto">Exporting Number per Month</div>
                    </figcaption>
                </div>

            </div>
        </div>
    </div>
</section>