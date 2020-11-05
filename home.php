<?php get_header() ?>


<div class="container pt-5">
<div class="row">
        <div class="col">
            <img src="<?php echo get_the_post_thumbnail_url($wp_query->queried_object,'destacada');?>" alt="" class="img-fluid" srcset="">
        </div>
    </div>
    <div class="row pt-5">
        <div class="col text-justify">
            <h1><?php echo $wp_the_query->queried_object->post_title ?></h1>
            <hr>
        </div>
    </div>
</div>

<div class="container blog">
    <div class="row">
    
        <div class="col">

            <div class="row">

            <?php while (have_posts()): the_post(); ?>

            <div style="display:none;"><?php $cat = get_the_category(the_ID());?></div>

                <div class="col-6 mt-4">

                    <div class="card hvr-glow">
                        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full', array('class'=>'card-img-top img-fluid') ) ?></a>
                        <div class="card-body">
                        <h5 class="card-title text-center"><?php the_title() ?></h5>
                        <p class="card-text"><?php the_excerpt()?></p>
                        </div>
                        <div class="card-footer text-center">
                        <h4><span class="badge badge-danger"><?php the_category() ?> </span></h4>
                        </div>
                    </div>

                </div>
                
            <?php endwhile; ?>  
            </div>

       
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
