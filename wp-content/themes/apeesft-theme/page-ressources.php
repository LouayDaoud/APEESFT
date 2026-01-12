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
                <h2 style="color: var(--primary-color); margin-bottom: 1rem;">École Sans Peur</h2>
                <p style="margin-bottom: 1.5rem; color: var(--text-light);">Plateforme de lutte contre le harcèlement scolaire</p>
                <a href="https://ecolesanspeur.org/" target="_blank" class="btn-primary" style="background: var(--secondary-color); color: white; padding: 1rem 2rem; border-radius: 8px; text-decoration: none; display: inline-block; font-weight: 600; transition: all 0.3s ease;">Accéder à École Sans Peur</a>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-bottom: 3rem;">
                <div style="background: white; padding: 2rem; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
                    <h3 style="color: var(--primary-color); margin-bottom: 1.5rem; font-size: 1.5rem; font-weight: 700;">Textes officiels</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid var(--border-color);">
                            <a href="https://www.aefe.fr" target="_blank" style="color: var(--text-dark); text-decoration: none; font-weight: 500; transition: color 0.3s ease;">
                                AEFE - Agence pour l'enseignement français à l'étranger →
                            </a>
                        </li>
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid var(--border-color);">
                            <a href="https://www.education.gouv.fr" target="_blank" style="color: var(--text-dark); text-decoration: none; font-weight: 500; transition: color 0.3s ease;">
                                Ministère de l'Éducation Nationale →
                            </a>
                        </li>
                    </ul>
                    <h4 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem; font-size: 1.2rem; font-weight: 700;">Partenaires</h4>
                    <ul style="list-style: none; padding: 0;">
                        <li style="padding: 0.75rem 0; border-bottom: 1px solid var(--border-color);">
                            <a href="https://www.fapee.com" target="_blank" style="color: var(--text-dark); text-decoration: none; font-weight: 500; transition: color 0.3s ease;">
                                FAPEE →
                            </a>
                        </li>
                        <li style="padding: 0.75rem 0;">
                            <a href="https://www.aefe.fr" target="_blank" style="color: var(--text-dark); text-decoration: none; font-weight: 500; transition: color 0.3s ease;">
                                AEFE →
                            </a>
                        </li>
                    </ul>
                </div>

                <div style="background: white; padding: 2rem; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
                    <h3 style="color: var(--primary-color); margin-bottom: 1.5rem; font-size: 1.5rem; font-weight: 700;">Conseils pratiques</h3>
                    <div style="display: flex; flex-direction: column; gap: 1.5rem;">
                        <div>
                            <h4 style="color: var(--primary-color); margin-bottom: 0.5rem; font-size: 1.1rem; font-weight: 600;">Orientation scolaire</h4>
                            <p style="color: var(--text-light); font-size: 0.9rem; line-height: 1.6; margin: 0;">
                                Choix de filière, procédures d'orientation, conseils et accompagnement, poursuite d'études
                            </p>
                        </div>
                        <div style="border-top: 1px solid var(--border-color); padding-top: 1.5rem;">
                            <h4 style="color: var(--primary-color); margin-bottom: 0.5rem; font-size: 1.1rem; font-weight: 600;">Préparation aux examens</h4>
                            <p style="color: var(--text-light); font-size: 0.9rem; line-height: 1.6; margin: 0;">
                                Brevet des collèges, Baccalauréat, méthodes de révision, gestion du stress
                            </p>
                        </div>
                        <div style="border-top: 1px solid var(--border-color); padding-top: 1.5rem;">
                            <h4 style="color: var(--primary-color); margin-bottom: 0.5rem; font-size: 1.1rem; font-weight: 600;">Bourses scolaires</h4>
                            <p style="color: var(--text-light); font-size: 0.9rem; line-height: 1.6; margin: 0;">
                                Bourses AEFE, bourses du gouvernement français, calendrier des demandes, démarches et documents
                            </p>
                        </div>
                        <div style="border-top: 1px solid var(--border-color); padding-top: 1.5rem;">
                            <h4 style="color: var(--primary-color); margin-bottom: 0.5rem; font-size: 1.1rem; font-weight: 600;">Règles de vie scolaire</h4>
                            <p style="color: var(--text-light); font-size: 0.9rem; line-height: 1.6; margin: 0;">
                                Règlement intérieur, charte de vie scolaire, sanctions et procédures disciplinaires
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Sections détaillées des conseils pratiques -->
            <div style="max-width: 900px; margin: 3rem auto 0;">
                <div id="orientation" style="background: white; padding: 2.5rem; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1); margin-bottom: 2rem;">
                    <h2 style="color: var(--primary-color); margin-bottom: 1.5rem; font-size: 2rem; font-weight: 700;">Orientation scolaire</h2>
                    <div style="color: var(--text-dark); line-height: 1.8;">
                        <p style="margin-bottom: 1rem;">
                            L'orientation scolaire est une étape cruciale dans le parcours de chaque élève. L'APEESFT vous accompagne dans la compréhension des différentes filières et options disponibles dans le système éducatif français.
                        </p>
                        <ul style="list-style: none; padding: 0; margin-top: 1.5rem;">
                            <li style="padding: 0.75rem 0; border-bottom: 1px solid var(--border-color);">
                                <strong style="color: var(--primary-color);">Choix de filière :</strong> Informations sur les différentes filières (générale, technologique, professionnelle)
                            </li>
                            <li style="padding: 0.75rem 0; border-bottom: 1px solid var(--border-color);">
                                <strong style="color: var(--primary-color);">Procédures d'orientation :</strong> Calendrier et étapes des procédures d'orientation
                            </li>
                            <li style="padding: 0.75rem 0; border-bottom: 1px solid var(--border-color);">
                                <strong style="color: var(--primary-color);">Conseils et accompagnement :</strong> Ressources pour aider votre enfant dans ses choix
                            </li>
                            <li style="padding: 0.75rem 0;">
                                <strong style="color: var(--primary-color);">Poursuite d'études :</strong> Informations sur les études supérieures et les débouchés
                            </li>
                        </ul>
                    </div>
                </div>

                <div id="examens" style="background: white; padding: 2.5rem; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1); margin-bottom: 2rem;">
                    <h2 style="color: var(--primary-color); margin-bottom: 1.5rem; font-size: 2rem; font-weight: 700;">Préparation aux examens</h2>
                    <div style="color: var(--text-dark); line-height: 1.8;">
                        <p style="margin-bottom: 1rem;">
                            La préparation aux examens nécessite une bonne organisation et des ressources adaptées. Retrouvez ici toutes les informations utiles pour accompagner votre enfant.
                        </p>
                        <ul style="list-style: none; padding: 0; margin-top: 1.5rem;">
                            <li style="padding: 0.75rem 0; border-bottom: 1px solid var(--border-color);">
                                <strong style="color: var(--primary-color);">Brevet des collèges :</strong> Calendrier, épreuves et conseils de préparation
                            </li>
                            <li style="padding: 0.75rem 0; border-bottom: 1px solid var(--border-color);">
                                <strong style="color: var(--primary-color);">Baccalauréat :</strong> Informations sur les épreuves, coefficients et modalités
                            </li>
                            <li style="padding: 0.75rem 0; border-bottom: 1px solid var(--border-color);">
                                <strong style="color: var(--primary-color);">Méthodes de révision :</strong> Conseils et techniques pour optimiser les révisions
                            </li>
                            <li style="padding: 0.75rem 0;">
                                <strong style="color: var(--primary-color);">Gestion du stress :</strong> Ressources pour aider votre enfant à gérer le stress des examens
                            </li>
                        </ul>
                    </div>
                </div>

                <div id="bourses" style="background: white; padding: 2.5rem; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1); margin-bottom: 2rem;">
                    <h2 style="color: var(--primary-color); margin-bottom: 1.5rem; font-size: 2rem; font-weight: 700;">Bourses scolaires</h2>
                    <div style="color: var(--text-dark); line-height: 1.8;">
                        <p style="margin-bottom: 1rem;">
                            Les bourses scolaires permettent de réduire les frais de scolarité pour les familles éligibles. Découvrez les conditions, les démarches et les dates importantes.
                        </p>
                        <ul style="list-style: none; padding: 0; margin-top: 1.5rem;">
                            <li style="padding: 0.75rem 0; border-bottom: 1px solid var(--border-color);">
                                <strong style="color: var(--primary-color);">Bourses AEFE :</strong> Conditions d'éligibilité et montants des bourses de l'Agence pour l'enseignement français à l'étranger
                            </li>
                            <li style="padding: 0.75rem 0; border-bottom: 1px solid var(--border-color);">
                                <strong style="color: var(--primary-color);">Bourses du gouvernement français :</strong> Informations sur les bourses d'État
                            </li>
                            <li style="padding: 0.75rem 0; border-bottom: 1px solid var(--border-color);">
                                <strong style="color: var(--primary-color);">Calendrier des demandes :</strong> Dates importantes pour déposer votre dossier
                            </li>
                            <li style="padding: 0.75rem 0;">
                                <strong style="color: var(--primary-color);">Démarches et documents :</strong> Liste des documents nécessaires et procédure de demande
                            </li>
                        </ul>
                    </div>
                </div>

                <div id="regles" style="background: white; padding: 2.5rem; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
                    <h2 style="color: var(--primary-color); margin-bottom: 1.5rem; font-size: 2rem; font-weight: 700;">Règles de vie scolaire</h2>
                    <div style="color: var(--text-dark); line-height: 1.8;">
                        <p style="margin-bottom: 1rem;">
                            Le règlement intérieur et les règles de vie scolaire définissent les droits et devoirs de chaque élève. Consultez ici les documents officiels.
                        </p>
                        <ul style="list-style: none; padding: 0; margin-top: 1.5rem;">
                            <li style="padding: 0.75rem 0; border-bottom: 1px solid var(--border-color);">
                                <strong style="color: var(--primary-color);">Règlement intérieur :</strong> Document complet à télécharger
                            </li>
                            <li style="padding: 0.75rem 0; border-bottom: 1px solid var(--border-color);">
                                <strong style="color: var(--primary-color);">Charte de vie scolaire :</strong> Principes et valeurs de l'établissement
                            </li>
                            <li style="padding: 0.75rem 0;">
                                <strong style="color: var(--primary-color);">Sanctions et procédures disciplinaires :</strong> Informations sur le système disciplinaire
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

