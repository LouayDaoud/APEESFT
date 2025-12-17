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
                    <h3 style="color: #1e3c72; margin-bottom: 1rem;">Lutte contre le harcèlement scolaire</h3>
                    <p style="margin-bottom: 1rem;">
                        L'APEESFT s'engage activement dans la lutte contre le harcèlement scolaire 
                        en partenariat avec la plateforme École Sans Peur.
                    </p>
                    <a href="https://ecole-sans-peur.tn" target="_blank" style="color: #667eea; text-decoration: none;">
                        En savoir plus →
                    </a>
                </div>

                <div style="background: white; padding: 2rem; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
                    <h3 style="color: #1e3c72; margin-bottom: 1rem;">Ateliers et conférences</h3>
                    <p style="margin-bottom: 1rem;">
                        Organisation d'ateliers et de conférences pour les parents et les élèves 
                        sur des thèmes variés : orientation, prévention, bien-être.
                    </p>
                </div>

                <div style="background: white; padding: 2rem; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
                    <h3 style="color: #1e3c72; margin-bottom: 1rem;">Campagnes de sensibilisation</h3>
                    <p style="margin-bottom: 1rem;">
                        Mise en place de campagnes de sensibilisation sur différents sujets 
                        liés à la scolarité et au bien-être des élèves.
                    </p>
                </div>
            </div>

            <div style="background: white; padding: 2rem; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
                <h2 style="color: #1e3c72; margin-bottom: 1rem;">Activités passées</h2>
                <p>
                    Retrouvez ici les photos et vidéos de nos activités et événements passés.
                </p>
                <!-- La galerie sera ajoutée via un plugin WordPress ou du code personnalisé -->
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

