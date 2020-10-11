<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>CarbonScripts Theme</title>
        <?php wp_head(); ?>
    </head>

    <?php
        if(is_front_page()):
            $cs_classes = array('home-class');
        endif;
    ?>

    <body <?php body_class($cs_classes); ?>>
        <div class="cs-container">
            <header class="cs-header fixed-top" id="cs-header">
                <div class="cs-header-cont">
                    <div class="cs-logo-div">
                        <div class="logo_title">CarbonScripts</div>
                    </div>
                    <div class="cs-empty-div">

                    </div>
                    <div class="cs-menu-div">
                        <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
                    </div>
                </div>
            </header>
            <main class="cs-main" id="cs-main">
                <?php if(is_front_page()) { ?>
                    <div id="banner" class="homebanner cfw posrel">
                        <div class="banner_container_new cfw particles-jsout">
                            <div id="particles-js" class="particles-js-new"></div>
                        </div>
                    </div>
                <?php } ?>
            </main>
        </div>