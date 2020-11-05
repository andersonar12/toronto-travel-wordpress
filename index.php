<?php get_header() ?>


<div class="container pt-5">
    <div class="row">
        <div class="col text-justify">
        <div style="display:none"><?php $cat = get_the_category(the_ID()) ?></div>
            <h1><?php 

                if (is_category()):

                    echo $cat[0]->name;

                endif;
            ?></h1>
            <hr>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
    
        <div class="col">

        <?php while (have_posts()): the_post(); ?>

        <h3 class="text-center" ><?php the_title() ?></h3>

        <?php the_post_thumbnail( 'full', array('class'=>'img-fluid') ) ?>

        <p><?php if (is_category()):
            the_excerpt();
          else :
           the_content();
        endif;?></p>

        <p>Por:<?php the_author() ?> en Fecha: <?php the_date( ) ?></p>

        <hr>
        <?php endwhile; ?>
        </div>

        <div class="col-md-4">
                <?php get_sidebar() ?>    
        </div>
        
        
    </div>
</div>


<?php 
    $array= explode('/',$template);

    foreach ($array as $key => $value) {
        if(strpos($value,'.php') > 0){
            echo $value;
        }
    }
?>

<?php get_footer() ?>



