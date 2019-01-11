<div class="row no-gutters">
    <div class="col-12 col-md-6 col-lg-4">
        <h2><?php echo get_cat_name(4);?></h2>
        <?php echo category_description(4)?>
        <?php $the_query = new WP_Query( array( "cat" => 4, "posts_per_page" => 10, "order" => "ASC"  ) );
        if ($the_query->have_posts() ) :
            while ($the_query->have_posts() ) : $the_query->the_post(); ?>
                    
                    <?php the_content();?>
                    <div class="col-12 col-md-6">
                        <?php the_post_thumbnail("full");?>

                    </div>


        <?php endwhile;
    endif;?>
    </div>
</div>
