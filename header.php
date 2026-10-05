<?php
$phone_display = '+38 050 577 31 19';
$phone_link    = '+380505773119';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

    <?php
    wp_head();
    ?>
    <header class="header" id="header">
        <div class="container header__inner">
            <div class="header__brand">
                <?php the_custom_logo(); ?>
                <a class="header__person" href="<?php echo esc_url(home_url('/')); ?>">
                    <span class="header__name"><?php bloginfo('name'); ?></span>
                    <span class="header__role"><?php bloginfo('description'); ?></span>
                </a>
            </div>



            <button class="header__burger" type="button"
                aria-expanded="false" aria-controls="header-panel"
                aria-label="Відкрити меню">
                <span></span><span></span><span></span>
            </button>

            <div class="header__panel" id="header-panel">
                <nav class="header__nav" aria-label="Головне меню">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'main',
                        'container'      => false,
                        'menu_class'     => 'header__menu',
                        'fallback_cb'    => false,
                    ));
                    ?>
                </nav>

                <a class="header__phone" href="tel:<?php echo esc_attr($phone_link); ?>">
                    <?php echo esc_html($phone_display); ?>
                </a>
            </div>

        </div>




    </header>