
<!-- Products Section -->
<section class='bg-gray-100 py-24  px-4 lg:px-0'>
    <div class="container mx-auto">
        <div class="text-center block mb-12">
            <!-- <h2 class="text-4xl font-bold text-gray-900">Our Products</h2> -->
        </div>
        <div class="grid lg:grid-cols-3 gap-12">
           <?php if (have_rows('categories')) : ?>
           <?php while (have_rows('categories')) : the_row(); 
           //ACF Fields
           $image = get_sub_field('image') ;
           ?>
           <?php endwhile; ?>
           <?php endif; ?>
                    <div class='relative group '>
                        <a href="#">

                            <span class="bg-main inline-block absolute top-0 left-0 w-full h-full transform z-0  rotate-3 transition duration-300 ease-in-out group-hover:rotate-0 rounded rounded-lg  "></span>
                            <div class='bg-white relative h-full group-hover:bg-black relative overflow-hidden p-2 rounded rounded-lg z-10 shadow shadow-lg text-center'>
                                <img class="group-hover:scale-105 transform  transition duration-300 ease-in-out  rounded rounded-lg"  src="<?php echo $image['url'] ? $image['url'] : get_template_directory_uri() ?>'/assets/img/T2_5.jpg'  ?>" alt="">
                                <span style="width: 96%;" class="absolute rounded rounded-lg block  left-0 bottom-0 text-center bg-gradient-to-t from-gray-900 m-2 text-white pb-4 pt-24">
                                </span>
                                <span class="block w-full absolute rounded rounded-lg block  left-0 bottom-0 mb-4 text-white text-center"><?php echo $title ?></span>
                            </div>

                        </a>

                    </div>

          

        </div>
    </div>
</section>