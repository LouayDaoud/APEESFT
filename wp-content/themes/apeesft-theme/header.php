<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container">
        <div class="header-content">
            <div class="logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/logo.jpeg" alt="<?php bloginfo('name'); ?>" class="logo-image" onerror="this.style.display='none'">
                </a>
            </div>
            <button class="mobile-menu-toggle" aria-label="Menu mobile">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <nav class="main-nav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => '',
                    'fallback_cb' => 'apeesft_default_menu',
                    'link_before' => '',
                    'link_after' => ' <span class="chevron">▼</span>',
                ));
                ?>
            </nav>
        </div>
    </div>
</header>

<?php
// Menu par défaut si aucun menu n'est configuré
function apeesft_default_menu() {
    echo '<ul>';
    echo '<li><a href="' . esc_url(home_url('/')) . '">Accueil <span class="chevron">▼</span></a></li>';
    echo '<li><a href="' . esc_url(home_url('/qui-sommes-nous')) . '">Qui sommes-nous ? <span class="chevron">▼</span></a></li>';
    echo '<li><a href="' . esc_url(home_url('/adhesion-assurance')) . '">Adhésion & Assurance <span class="chevron">▼</span></a></li>';
    echo '<li><a href="' . esc_url(home_url('/bilans-transparence')) . '">Bilans & Transparence <span class="chevron">▼</span></a></li>';
    echo '<li><a href="' . esc_url(home_url('/nos-actions')) . '">Nos actions <span class="chevron">▼</span></a></li>';
    echo '<li><a href="' . esc_url(home_url('/ressources-partenariats')) . '">Ressources <span class="chevron">▼</span></a></li>';
    echo '<li><a href="' . esc_url(home_url('/contact')) . '">Contact</a></li>';
    echo '</ul>';
}
?>

