<?php get_header();
	global $term_meta, $cat, $cat_id, $wp_query;

if (!is_front_page()) : 




?>

    <section class="relative">
        <div class="z-30 bg-black w-full h-full absolute opacity-75 ">
        </div>
        <img loading="lazy" class="object-cover w-full h-full absolute z-20" src="<?php echo get_template_directory_uri() ?>/assets/img/bedx.jpg" alt="">
        <div class="container mx-auto py-24 flex justify-center">
            <div class="relative text-center z-40 bg-white shadow-xl py-4 lg:py-8 px-8 lg:px-32 transform translate-y-32 lg:translate-y-40 rounded">
                <h1 class="text-3xl lg:text-4xl"><?php single_cat_title(); ?></h1>
               <div class="breadcrumb text-sm lg:text-base text-gray-600">
									<?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>

                </div> 

            </div>
        </div>
    </section>
	
	<?php

	$category = get_category( get_query_var( 'cat' ) );
    $cat_id = $category->cat_ID;

	?>
<?php endif; ?>
<?php 
if( $category->parent != 0 && ! category_has_children( $category->term_id ) ) : ?>
<?php if (have_posts()) :
    $args = array(
        'cat' => $cat_id
    );
    query_posts($args);


?>
    <!-- Products Section -->
    <section class='bg-gray-100 py-24'>
        <div class="container mx-auto">
            <div class="text-center block mb-12">
                <!-- <h2 class="text-4xl font-bold text-gray-900">Our Products</h2> -->
            </div>
            <div class="grid lg:grid-cols-3 gap-12">
                <?php /* Start the Loop */ ?>
                <?php while (have_posts()) : the_post();
                    $title = get_the_title();
					$id = get_the_ID();
                    $permalink = get_permalink($id);
                    $thumbnail = get_the_post_thumbnail_url();



                ?>
                    <div class='relative group '>
                        <a href=" <?php echo $permalink ?>">

                            <span class="bg-main inline-block absolute top-0 left-0 w-full h-full transform z-0  rotate-3 transition duration-300 ease-in-out group-hover:rotate-0 rounded rounded-lg  "></span>
                            <div class='bg-white relative h-full group-hover:bg-black relative overflow-hidden p-2 rounded rounded-lg z-10 shadow shadow-lg text-center'>
                                <img class="group-hover:scale-105 transform  transition duration-300 ease-in-out  rounded rounded-lg" src="<?php echo $thumbnail ?>" alt="">
                                <span style="width: 96%;" class="absolute rounded rounded-lg block left-0 bottom-0 text-center bg-gradient-to-t from-gray-900 m-2 text-white pb-4 pt-24">
                                    <span class="block"><?php echo $title ?></span></span>
                            </div>

                        </a>

                    </div>
                <?php endwhile;
                wp_reset_query(); ?>



            </div>
        </div>
    </section>


<?php endif; ?>
<?php else: ?>

	


       <section class='bg-gray-100 py-24'>
        <div class="container mx-auto">
      
            <div class="grid lg:grid-cols-3 gap-12">
           
        
	<?php 
		$args = array('parent' => $cat_id);
		$categories = get_categories( $args );
		foreach($categories as $categoryx):
		
		    $thumbnail = get_field('thumbnail', $categoryx);
?> 
   		
				  <div class='relative group '>
                        <a href='<?php echo get_category_link( $categoryx->term_id ) ?>'>

                            <span class="bg-main inline-block absolute top-0 left-0 w-full h-full transform z-0  rotate-3 transition duration-300 ease-in-out group-hover:rotate-0 rounded rounded-lg  "></span>
                            <div class='bg-white relative h-full group-hover:bg-black relative overflow-hidden p-2 rounded rounded-lg z-10 shadow shadow-lg text-center'>
                                <img style="    object-fit: cover;
    height: 100%;" class="group-hover:scale-105 transform  transition duration-300 ease-in-out  rounded rounded-lg" src="<?php echo $thumbnail ?>" alt="">
                                <span style="width: 96%;" class="absolute rounded rounded-lg block left-0 bottom-0 text-center bg-gradient-to-t from-gray-900 m-2 text-white pb-4 pt-24">
                                    <span class="block"><?php echo $categoryx->name ?></span></span>
                            </div>

                        </a>

                    </div>
	<?php endforeach; ?>

</div>
        </div>
    </section>



<?php  endif ?>





<?php get_footer(); ?>