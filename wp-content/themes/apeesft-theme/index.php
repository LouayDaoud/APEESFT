<?php
/**
 * Template principal
 */
get_header();
?>

<?php if (is_front_page()) : ?>
    <!-- Page d'accueil -->
    <section class="hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/hero-bg.jpg');">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="hero-content">
                <h1>Bienvenue sur le site de l'APEESFT</h1>
                <p>Association des Parents d'Élèves de l'École Secondaire Franco-Tunisienne</p>
                <a href="<?php echo esc_url(home_url('/adhesion-assurance')); ?>" class="btn-primary">Adhérer en ligne</a>
            </div>
        </div>
    </section>

    <section class="quick-access">
        <div class="container">
            <h2 class="section-title">Accès rapide</h2>
            <div class="quick-access-grid">
                <div class="quick-card">
                    <h3>Bilans & Transparence</h3>
                    <p>Consultez nos rapports financiers et comptes rendus</p>
                    <a href="<?php echo esc_url(home_url('/bilans-transparence')); ?>">Voir les bilans →</a>
                </div>
                <div class="quick-card">
                    <h3>Ressources utiles</h3>
                    <p>Documents et informations pour les familles</p>
                    <a href="<?php echo esc_url(home_url('/ressources-partenariats')); ?>">Accéder aux ressources →</a>
                </div>
                <div class="quick-card">
                    <h3>École Sans Peur</h3>
                    <p>Plateforme de lutte contre le harcèlement scolaire</p>
                    <a href="https://ecole-sans-peur.tn" target="_blank">Visiter →</a>
                </div>
                <div class="quick-card">
                    <h3>FAPEE</h3>
                    <p>Fédération des Associations de Parents d'Élèves</p>
                    <a href="https://www.fapee.com" target="_blank">En savoir plus →</a>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
        ?>
        <section class="content-section">
            <div class="container">
                <article>
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </article>
            </div>
        </section>
        <?php
    endwhile;
endif;
?>

<?php get_footer(); ?>

