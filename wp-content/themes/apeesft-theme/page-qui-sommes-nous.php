<?php
/**
 * Template pour la page Qui sommes-nous ?
 */
get_header();
?>

<section class="content-section">
    <div class="container">
        <h1 class="section-title">Qui sommes-nous ?</h1>
        
        <div style="max-width: 900px; margin: 0 auto;">
            <div style="background: white; padding: 3rem; border-radius: 10px; box-shadow: 0 3px 15px rgba(0,0,0,0.1); margin-bottom: 2rem;">
                <h2 style="color: var(--primary-color); margin-bottom: 1.5rem; font-size: 2rem;">Présentation de l'APEESFT</h2>
                <div style="line-height: 1.8; color: var(--text-dark);">
                    <p style="margin-bottom: 1.5rem; font-size: 1.1rem;">
                        L'Association des Parents d'Élèves des Établissements Scolaires Français en Tunisie (APEESFT) 
                        est une association indépendante, apolitique et bénévole, qui représente et accompagne les familles 
                        des élèves scolarisés dans les établissements français en Tunisie.
                    </p>
                    <p style="margin-bottom: 1.5rem; font-size: 1.1rem;">
                        Notre mission est de favoriser un dialogue constructif entre les parents, les équipes éducatives, 
                        les directions d'établissement et les institutions françaises, afin de contribuer au bien-être 
                        et à la réussite de tous les élèves.
                    </p>
                    <p style="margin-bottom: 1.5rem; font-size: 1.1rem;">
                        En tant que membre de la FAPEE (Fédération des Associations de Parents d'Élèves des Établissements 
                        Français à l'Étranger), nous faisons partie d'un réseau international d'associations de parents 
                        d'élèves engagé dans la défense d'une éducation de qualité, accessible et ouverte sur le monde.
                    </p>
                    <p style="font-size: 1.1rem;">
                        Cette affiliation nous permet de relayer vos préoccupations auprès des instances de l'enseignement 
                        français à l'étranger et de bénéficier d'un accompagnement solide sur les enjeux éducatifs, 
                        pédagogiques et institutionnels.
                    </p>
                </div>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                <div style="background: white; padding: 2rem; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
                    <h3 style="color: var(--primary-color); margin-bottom: 1rem; font-size: 1.5rem; font-weight: 700;">Missions</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="padding: 0.5rem 0; color: var(--text-light);">✓ Représenter les parents d'élèves</li>
                        <li style="padding: 0.5rem 0; color: var(--text-light);">✓ Faciliter la communication</li>
                        <li style="padding: 0.5rem 0; color: var(--text-light);">✓ Défendre les intérêts des élèves</li>
                        <li style="padding: 0.5rem 0; color: var(--text-light);">✓ Contribuer à l'amélioration de la scolarité</li>
                    </ul>
                </div>

                <div style="background: white; padding: 2rem; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
                    <h3 style="color: var(--primary-color); margin-bottom: 1rem; font-size: 1.5rem; font-weight: 700;">Comité Directeur</h3>
                    <p style="color: var(--text-light); line-height: 1.6;">Le Comité Directeur de l'APEESFT est élu chaque année lors de l'Assemblée Générale.</p>
                    <p style="margin-top: 1rem;">
                        <a href="<?php echo esc_url(home_url('/bilans-transparence')); ?>" style="color: var(--primary-color); text-decoration: none; font-weight: 600;">
                            Voir les comptes rendus d'AG →
                        </a>
                    </p>
                </div>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-top: 2rem;">
                <div style="background: white; padding: 2rem; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
                    <h3 style="color: var(--primary-color); margin-bottom: 1rem; font-size: 1.5rem; font-weight: 700;">Statuts et règlement intérieur</h3>
                    <p style="margin-bottom: 1rem; color: var(--text-light); line-height: 1.6;">
                        Les statuts de l'association et le règlement intérieur sont disponibles en téléchargement.
                    </p>
                    <a href="<?php echo get_template_directory_uri(); ?>/documents/statuts-reglement-interieur.pdf" target="_blank" class="btn-primary" style="display: inline-block; padding: 0.75rem 1.5rem; background: var(--primary-color); color: white; text-decoration: none; border-radius: 8px; font-weight: 600; transition: all 0.3s ease;">
                        Télécharger les statuts (PDF)
                    </a>
                </div>

                    <div style="background: white; padding: 2rem; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
                        <h3 style="color: var(--primary-color); margin-bottom: 1rem; font-size: 1.5rem; font-weight: 700;">Historique de l'association</h3>
                        <p style="margin-bottom: 1rem; color: var(--text-light); line-height: 1.6;">
                            Découvrez l'histoire de l'APEESFT depuis sa création en 1984 jusqu'à nos jours, avec des photos et des détails sur les moments clés de notre association.
                        </p>
                        <a href="<?php echo esc_url(home_url('/historique')); ?>" style="display: inline-block; padding: 0.75rem 1.5rem; background: var(--primary-color); color: white; text-decoration: none; border-radius: 8px; font-weight: 600; transition: all 0.3s ease;">
                            Découvrir l'historique complet →
                        </a>
                    </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

