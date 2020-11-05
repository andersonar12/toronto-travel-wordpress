<?php get_header() ?>

<div class="container pt-5">

    <div class="row">
        <div class="col">
            <?php the_post_thumbnail('destacada',array('class'=>'img-fluid mb-3'))?>
        </div>
    </div>
        <div class="row">

        <div class=" <?php echo $action = is_page('contacto') ? 'col' : 'col-md-8' ?> text-justify">
           
            <?php while (have_posts()): the_post(); ?>

            <h1><?php the_title() ?></h1>
            <hr>
            <p><?php the_content() ?></p>
                
            <?php endwhile; ?>

        </div>

            <?php if (is_page('contacto')) {?>
                
            <?php } else { ?>
            
              <div class="col-md-4"><?php get_sidebar() ?></div>

            <?php } ?>
    
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

