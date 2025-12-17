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
                <p>Association des Parents d'Élèves des Établissements Scolaires Français en Tunisie</p>
                <a href="<?php echo esc_url(home_url('/adhesion-assurance')); ?>" class="btn-primary">Adhérer en ligne</a>
            </div>
        </div>
    </section>

    <!-- Présentation Section -->
    <section class="presentation-section">
        <div class="container">
            <div class="presentation-content">
                <h2 class="section-title">Association des Parents d'Élèves des Établissements Scolaires Français en Tunisie</h2>
                <p class="presentation-subtitle">Membre de la FAPEE (Fédération des Associations de Parents d'Élèves des Établissements Français à l'Étranger)</p>
                
                <div class="presentation-text">
                    <p>L'APEESFT est une association indépendante, apolitique et bénévole, qui représente et accompagne les familles des élèves scolarisés dans les établissements français en Tunisie. Notre mission est de favoriser un dialogue constructif entre les parents, les équipes éducatives, les directions d'établissement et les institutions françaises, afin de contribuer au bien-être et à la réussite de tous les élèves.</p>
                    
                    <p>En tant que membre de la FAPEE, nous faisons partie d'un réseau international d'associations de parents d'élèves engagé dans la défense d'une éducation de qualité, accessible et ouverte sur le monde. Cette affiliation nous permet de relayer vos préoccupations auprès des instances de l'enseignement français à l'étranger et de bénéficier d'un accompagnement solide sur les enjeux éducatifs, pédagogiques et institutionnels.</p>
                </div>

                <div class="engagements-grid">
                    <div class="engagement-card">
                        <h3>Nos engagements</h3>
                        <ul>
                            <li>Représenter les familles au sein des conseils d'établissement et des différentes instances éducatives</li>
                            <li>Accompagner les parents dans leurs démarches et dans la compréhension du fonctionnement du système scolaire français</li>
                            <li>Favoriser la communication et le lien entre les familles et les institutions scolaires</li>
                            <li>Soutenir des initiatives éducatives, culturelles et citoyennes pour enrichir la vie scolaire</li>
                        </ul>
                    </div>
                    
                    <div class="vision-card">
                        <h3>Notre vision</h3>
                        <p>Une communauté de parents engagés, unis autour d'un objectif commun : garantir à chaque enfant un parcours scolaire épanouissant, exigeant et respectueux de sa singularité.</p>
                        <p class="vision-cta">Nous vous invitons à explorer notre site pour découvrir nos actions, nos actualités et les moyens de participer à la vie de l'association.</p>
                        <p class="vision-motto"><strong>Ensemble, faisons entendre la voix des parents pour construire une école toujours plus ambitieuse et inclusive.</strong></p>
                    </div>
                </div>
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

