<hr class="linea-roja">
<footer class="container">
   
        <?php 
        $args = array(
            'menu_class' => 'navbar',
            'theme_location' => 'menu-principal',
        );
        wp_nav_menu($args);
        ?>              
    
    <div class="row">
        <div class="col">
            <strong><p class="text-center"> <?php the_author() ?> <?php echo get_bloginfo('name') . " " . date('Y') ."."?></p>
            </strong>
        </div>
    </div>
</footer> 
    <?php wp_footer(); ?>
</body>
</html>