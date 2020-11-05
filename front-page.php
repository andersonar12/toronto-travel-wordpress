<?php get_header() ?>

<div class="container pt-5">

    <div class="row">
        <div class="col">
            <?php $args =array(
                'post_type' => 'post',
                'posts_per_page' => 4,
                'orderby' => 'date',
                'order' => 'DESC',
            ) ?>
            
            <ul class="bxslider">

                <?php $slider = new WP_Query($args) ?>

                <?php while ($slider->have_posts()) : $slider->the_post( )?>

                    <li><a href="<?php the_permalink() ?>"><?php the_post_thumbnail('destacada',array('class'=>'img-fluid'))?></a> </li>
                    
                <?php endwhile; wp_reset_postdata() ?>     
            </ul>
        
            
        </div>
    </div>
</div>

<div class="container cards">
    <div class="row d-flex justify-content-around">
<?php 
    $args = array(  
        'post_type' => 'cards',
        'order' => 'ASC'
    );

    $loop = new WP_Query( $args ); 
        
        while ( $loop->have_posts() ) : $loop->the_post();
         
         $imagen = get_field('imagen_car', get_the_ID());?>

            <div class="col-12 col-sm-3 p-3 text-center">
                <img src="<?php echo $imagen["url"]?>" class="img-fluid" alt="" srcset="">
                <?php the_category()?>
            </div>

        <?php endwhile; wp_reset_postdata(); ?>
  
    </div>

</div>

<div class="container">
    <div class="row">
        <div class="col-sm-4 informacion">
            <?php $informacion = new WP_Query(get_post(12)); 

            while ($informacion->have_posts()) : $informacion->the_post( );?>

            <div style="display:none"><?php $titulo = get_the_title() ?></div>
            
           <?php if( $titulo =='Información'){ ?>

                <h3><?php echo $titulo ?></h3>

                <?php the_excerpt(); ?>

            <?php }?>
            <?php endwhile;?>
        </div>

        <div class="col-sm-8 consejos">
        <h3>Consejos</h3>
            <div class="row">
            <?php 
                $args = array(
                    'category_name' => 'consejos',
                    'post_per_page'=> 2,
                    'order' => 'DESC',
                    'orderby'=> 'date'
                ) ?>
            
            <?php $consejos = new WP_Query($args)?>
                
            <?php while ($consejos->have_posts()) : $consejos->the_post( );?>
                <div class="col-sm-6 p-3">
                    <a href="<?php echo the_permalink() ?>"><?php the_post_thumbnail('blog',array('class'=>'img-fluid'))?></a>
                    
                    <h4><?php the_title() ?></h4>

                    <?php the_excerpt() ?>
                </div>     
            <?php endwhile; wp_reset_postdata()?>
            </div>
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

