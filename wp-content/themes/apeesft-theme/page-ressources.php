<?php
/**
 * Template pour la page Ressources & Partenariats
 */
get_header();
?>

<section class="content-section">
    <div class="container">
        <h1 class="section-title">Ressources & Partenariats</h1>
        
        <div style="max-width: 900px; margin: 0 auto;">
            <div style="background: white; padding: 3rem; border-radius: 10px; box-shadow: 0 3px 15px rgba(0,0,0,0.1); margin-bottom: 2rem; text-align: center;">
                <h2 style="color: #1e3c72; margin-bottom: 1rem;">École Sans Peur</h2>
                <p style="margin-bottom: 1.5rem;">Plateforme de lutte contre le harcèlement scolaire</p>
                <a href="https://ecole-sans-peur.tn" target="_blank" class="btn-primary">Accéder à École Sans Peur</a>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                <div style="background: white; padding: 2rem; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
                    <h3 style="color: #1e3c72; margin-bottom: 1rem;">Textes officiels</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="padding: 0.5rem 0;"><a href="https://www.aefe.fr" target="_blank">AEFE - Agence pour l'enseignement français à l'étranger</a></li>
                        <li style="padding: 0.5rem 0;"><a href="https://www.education.gouv.fr" target="_blank">Ministère de l'Éducation Nationale</a></li>
                    </ul>
                </div>

                <div style="background: white; padding: 2rem; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
                    <h3 style="color: #1e3c72; margin-bottom: 1rem;">Conseils pratiques</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="padding: 0.5rem 0;">Orientation scolaire</li>
                        <li style="padding: 0.5rem 0;">Préparation aux examens</li>
                        <li style="padding: 0.5rem 0;">Bourses scolaires</li>
                        <li style="padding: 0.5rem 0;">Règles de vie scolaire</li>
                    </ul>
                </div>

                <div style="background: white; padding: 2rem; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
                    <h3 style="color: #1e3c72; margin-bottom: 1rem;">Partenaires</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="padding: 0.5rem 0;"><a href="https://www.fapee.com" target="_blank">FAPEE</a></li>
                        <li style="padding: 0.5rem 0;"><a href="https://www.aefe.fr" target="_blank">AEFE</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

