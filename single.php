<?php get_header() ?>

<div class="container mt-5">
    <div class="row">
    
        <div class="col">

        <?php while (have_posts()): the_post(); ?>

        <h3 class="text-center" ><?php the_title() ?></h3>

        <?php the_post_thumbnail( 'full', array('class'=>'img-fluid') ) ?>
        
        <strong class="mt-2 w-100"><?php  the_tags(__('Etiquetas en este post: '), ', ', '<br>') ?></strong>

        <p><?php if (is_category()):
            the_excerpt();
          else :
           the_content();
        endif;?></p>

        <p>Por:<?php the_author() ?> en Fecha: <?php the_date( ) ?></p>

        <?php comments_template() ?>

        <hr>
        <?php endwhile; ?>
        </div>

        <div class="col-md-4">
                <?php get_sidebar() ?>    
        </div>
        
        
    </div>
</div>

<?php get_footer() ?>