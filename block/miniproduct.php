<?php
// ACF FIELDS 
$block_name = get_field('block_name') ? get_field('block_name') : 'Category';
$term = get_field('products_category');


?>
<!-- Products Section -->
<section class='bg-gray-100 py-24  px-4 lg:px-0'>
    <div class="container mx-auto">
        <div class="text-center block mb-12">
            <h2 class="text-4xl font-bold text-gray-900"><?php echo $block_name ?></h2>
        </div>
        <div class="grid lg:grid-cols-6 gap-6">
          <?php 
          	$args = array('parent' => $term[0]->term_id);
		$categories = get_categories( $args );
		foreach($categories as $categoryx):
            		    $thumbnail = get_field('thumbnail', $categoryx);

          ?>

                 <div class='relative group '>
                        <a href='<?php echo get_category_link( $categoryx->term_id ) ?>'>

                            <span class="bg-main inline-block absolute top-0 left-0 w-full h-full transform z-0  rotate-3 transition duration-300 ease-in-out group-hover:rotate-0 rounded rounded-lg  "></span>
                            <div class='bg-white relative h-full group-hover:bg-black relative overflow-hidden p-2 rounded rounded-lg z-10 shadow shadow-lg text-center'>
                                <img style="    object-fit: cover;
    height: 100%;" class="group-hover:scale-105 transform  transition duration-300 ease-in-out  rounded rounded-lg" <?php if ($thumbnail) : ?> src="<?php echo $thumbnail ?>" <?php else : ?> src="<?php echo get_template_directory_uri() ?>/assets/img/T2_5.jpg" <?php endif; ?> alt="">
                                <span style="width: 92%;" class="absolute rounded rounded-lg block  left-0 bottom-0 text-center bg-gradient-to-t from-gray-900 m-2 text-white pb-4 pt-24">
                                </span>
                                <span class="block w-full absolute rounded rounded-lg block  left-0 bottom-0 mb-4 text-white text-center"><?php echo $categoryx->name ?></span>
                            </div>

                        </a>

                    </div>
<?php endforeach; ?>




        </div>
    </div>
</section>