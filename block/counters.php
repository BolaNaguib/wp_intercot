<?php
// ACF FIELDS 
$countries_title = get_field('countries_title') ? get_field('countries_title') : 'Countries We Export To';
$counters_title = get_field('counters_title') ? get_field('counters_title') : 'Successful Projects';
?>
<!-- Countries Flags -->
<section class="py-24 bg-gray-200">
    <div class="container mx-auto px-4 lg:px-0">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="col-span-2 text-center">
                <div class="relative inline-block z-30  my-8">
                    <h2 class="text-4xl font-bold text-black relative z-10"><?php echo $countries_title ?></h2>
                    <hr class="w-full opacity-50 mx-auto border-main border-8 absolute bottom-0 left-0 -ml-2 mb-2 z-0 ">
                </div>
                <div class="relative p-6">
                    <span class="bg-main inline-block absolute top-0 left-0 w-full h-full transform z-0  rotate-1  rounded rounded-lg"></span>
                    <div class="bg-white absolute top-0 left-0 w-full h-full z-10 rounded rounded-lg shadow shadow-lg"></div>
                    <div class="relative z-30  grid  grid-cols-3 lg:grid-cols-6 gap-6">
                        <?php if (have_rows('countries')) : ?>
                            <?php while (have_rows('countries')) : the_row();
                                //ACF Fields
                                $image = get_sub_field('image');
                                $name = get_sub_field('name') ? get_sub_field('name') : 'Name';
                            ?>
                                <div class="block">
                                    <div class=" flex justify-center">
                                        <img class="block" <?php if ($image) : ?> src="<?php echo $image['url'] ?>" <?php else : ?> src="<?php echo get_template_directory_uri() ?>/assets/img/uk.png" <?php endif; ?> alt="<?php echo $image['alt'] ?>" title="<?php echo $image['title'] ?>">
                                    </div>
                                    <small class="block text-xs font-semibold text-gray-600 tracking-wider"><?php echo $name ?></small>


                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>


                    </div>
                </div>
            </div>
            <div class=" text-center">
                <div class="relative inline-block z-30  my-8">
                    <h2 class="text-4xl font-bold text-black relative z-10"><?php echo $counters_title ?></h2>
                    <hr class="w-full opacity-50 mx-auto border-main border-8 absolute bottom-0 left-0 -ml-2 mb-2 z-0 ">
                </div>
                <div class="relative text-left">
                    <?php if (have_rows('counters')) : ?>
                        <?php while (have_rows('counters')) : the_row();
                            //ACF Fields
                            $count = get_sub_field('count') ? get_sub_field('count') : '100';
                            $name = get_sub_field('name') ? get_sub_field('name') : 'Name';
                        ?>
                            <figcaption class="flex items-center space-x-4 p-6 md:px-10 md:py-6 bg-gradient-to-br rounded-b-xl leading-6 font-semibold">
                                <div class="relative ">
                                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-main opacity-25 z-0">
                                    </span>
                                    <div class="flex-none w-20 h-20 bg-main text-white rounded-full flex items-center justify-center relative z-30  shadow shadow-lg">
                                        <?php echo $count ?>
                                    </div>
                                </div>
                                <div class="flex-auto"><?php echo $name ?></div>
                            </figcaption>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div>
</section>