<?php
/**
 * Template pour la page Nos actions
 */
get_header();
?>

<section class="content-section">
    <div class="container">
        <h1 class="section-title">Nos actions</h1>
        
        <div style="max-width: 900px; margin: 0 auto;">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-bottom: 2rem;">
                <div style="background: white; padding: 2rem; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
                    <h3 style="color: var(--primary-color); margin-bottom: 1rem; font-size: 1.5rem; font-weight: 700;">Lutte contre le harcèlement scolaire</h3>
                    <p style="margin-bottom: 1rem; color: var(--text-light); line-height: 1.6;">
                        L'APEESFT s'engage activement dans la lutte contre le harcèlement scolaire en partenariat avec la plateforme Ecole Sans Peur.
                    </p>
                    <a href="https://ecolesanspeur.org/" target="_blank" style="color: var(--primary-color); text-decoration: none; font-weight: 600; display: inline-flex; align-items: center; gap: 0.5rem; transition: gap 0.3s ease;">
                        En savoir plus <span style="transition: transform 0.3s ease;">→</span>
                    </a>
                </div>

                <div style="background: white; padding: 2rem; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
                    <h3 style="color: var(--primary-color); margin-bottom: 1rem; font-size: 1.5rem; font-weight: 700;">Ateliers et conférences</h3>
                    <p style="color: var(--text-light); line-height: 1.6;">
                        Organisation d'ateliers et de conférences pour les parents et les élèves sur des thèmes variés: orientation, prévention, bien-être.
                    </p>
                </div>

                <div style="background: white; padding: 2rem; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
                    <h3 style="color: var(--primary-color); margin-bottom: 1rem; font-size: 1.5rem; font-weight: 700;">Événements passés</h3>
                    <p style="color: var(--text-light); line-height: 1.6; margin-bottom: 1rem;">
                        Retrouvez ici les photos et vidéos de nos activités et événements passés : ateliers, campagnes de sensibilisation, événements passés.
                    </p>
                    <a href="<?php echo esc_url(home_url('/galerie')); ?>" style="color: var(--primary-color); text-decoration: none; font-weight: 600; display: inline-flex; align-items: center; gap: 0.5rem;">
                        Voir la galerie →
                    </a>
                </div>

                <div style="background: white; padding: 2rem; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
                    <h3 style="color: var(--primary-color); margin-bottom: 1rem; font-size: 1.5rem; font-weight: 700;">Campagnes de sensibilisation</h3>
                    <p style="color: var(--text-light); line-height: 1.6;">
                        Mise en place de campagnes de sensibilisation sur différents sujets liés à la scolarité et au bien-être des élèves.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

