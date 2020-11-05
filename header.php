<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ) ?>">
    <title><?php wp_title(''); echo $tittle = (wp_title('',false)) ? ' : ' : ''; bloginfo( 'name') ?></title>
    <?php wp_head(); ?>
</head>
<body>

    <header>

        <nav class="navbar navbar-dark bg-danger justify-content-between navbar-expand-lg ">

            <div class="container">
            <a class="navbar-brand" href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri();?>/img/logo.png" class="img-fluid" alt="img-logo"></a>
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
            <div class="container-fluid">
            <?php 
                        $args = array(
                            'menu_class' => 'navbar-nav w-100 justify-content-end',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id' => 'navbarNavDropdown',
                            'theme_location' => 'menu-principal',
                        );
                        wp_nav_menu($args);
                    ?> 
            </div>
            </div>
          
        </nav>
    
    </header>

    
   