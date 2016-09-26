
<?php get_header(); ?>

    

      <div class="row">

        <div class="col-sm-8 blog-main">
        <!-- if page Works :  page_id = 2 -->
        <?php if( is_page(2)) : ?>
          <ul>
          <?php


$categories = get_categories( array(
    'orderby' => 'name',
    'order'   => 'ASC',
    'parent' => 0
) );
 
foreach( $categories as $category ) {

if($category->term_id === 3){



    $category_link = sprintf( '<a href="%1$s" alt="%2$s">%3$s</a>',
        esc_url( get_category_link( $category->term_id ) ),
        esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
        esc_html( $category->name )
    );

     
    echo '<h3><span>' . sprintf( esc_html__( '%s', 'textdomain' ), $category_link ) . '</span> |  ';
    echo '<small>' . sprintf( esc_html__( '%s', 'textdomain' ), $category->description ) . '</small></h3>';


          // Filter on category 3 === works
          $args = array( 'posts_per_page' => 50, 'offset'=> 0, 'category' => $category->term_id );
          $myposts = get_posts( $args );

          foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                
              <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
         
          <?php endforeach;
          //wp_reset_postdata();
}
  } 
?>
</ul>

<?php else : ?>


   <?php if(have_posts()) : ?>
          <?php while(have_posts()) : the_post(); ?>
          <?php get_template_part('content', get_post_format()); ?>
          <?php endwhile; ?>
          <?php else : ?>
          <p><?php __('No Page Found') ?></p>

          <?php endif; ?>



<?php endif; ?>





         

        </div><!-- /.blog-main -->

       

<?php get_footer(); ?>
    
