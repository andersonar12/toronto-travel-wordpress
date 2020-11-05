<?php 
/* 
 Template Name: Consejos
*/
get_header() ?>

  
<div class="container pt-5">

<div class="row">
    <div class="col">
        <?php the_post_thumbnail('destacada', array('class'=>'img-fluid mb-3'))?>
    </div>
</div>
    <div class="row">
        <div class="col-md-8 text-justify">

        <?php $post = get_posts( array('category'=>'12') ) ?>

        <?php foreach ($post as $key => $value) {

            echo '<h3 class="text-center" >'. $value->post_title . '</h3>';

            $imagen = get_the_post_thumbnail_url($value,'full');

            echo '<a href="'. $value->guid .'"><img src="'. $imagen .'" class="img-fluid"></a>';
            
            echo '<p class="mb-4">' . $value->post_excerpt .'</p>';
             
         }?></div>

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