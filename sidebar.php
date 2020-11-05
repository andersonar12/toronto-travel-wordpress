<div class="container">
<div class="row">
    <div class="col">
        <?php dynamic_sidebar('sidebar-2') ?>
<?php 
    $array= explode('/',$_template_file);

   /*  foreach ($array as $key => $value) {
        if(strpos($value,'.php') > 0){
            echo $value;
        }
    } */
?>
    </div>
</div>
</div>