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
                <h2 style="color: #1e3c72; margin-bottom: 1rem;">Présentation de l'APEESFT</h2>
                <p style="margin-bottom: 1rem;">
                    L'Association des Parents d'Élèves de l'École Secondaire Franco-Tunisienne (APEESFT) 
                    représente les parents d'élèves et œuvre pour le bien-être et la réussite scolaire 
                    de tous les élèves.
                </p>
                <p>
                    Notre mission est de faciliter la communication entre les familles et l'établissement, 
                    de défendre les intérêts des élèves et de leurs parents, et de contribuer à l'amélioration 
                    des conditions de scolarité.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                <div style="background: white; padding: 2rem; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
                    <h3 style="color: #1e3c72; margin-bottom: 1rem;">Missions</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="padding: 0.5rem 0;">✓ Représenter les parents d'élèves</li>
                        <li style="padding: 0.5rem 0;">✓ Faciliter la communication</li>
                        <li style="padding: 0.5rem 0;">✓ Défendre les intérêts des élèves</li>
                        <li style="padding: 0.5rem 0;">✓ Contribuer à l'amélioration de la scolarité</li>
                    </ul>
                </div>

                <div style="background: white; padding: 2rem; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
                    <h3 style="color: #1e3c72; margin-bottom: 1rem;">Comité Directeur</h3>
                    <p>Le Comité Directeur de l'APEESFT est élu chaque année lors de l'Assemblée Générale.</p>
                    <p style="margin-top: 1rem;">
                        <a href="<?php echo esc_url(home_url('/bilans-transparence')); ?>" style="color: #667eea;">
                            Voir les comptes rendus d'AG →
                        </a>
                    </p>
                </div>
            </div>

            <div style="background: white; padding: 2rem; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1); margin-top: 2rem;">
                <h3 style="color: #1e3c72; margin-bottom: 1rem;">Statuts et règlement intérieur</h3>
                <p style="margin-bottom: 1rem;">
                    Les statuts de l'association et le règlement intérieur sont disponibles en téléchargement.
                </p>
                <a href="#" class="btn-primary" style="display: inline-block; text-decoration: none;">
                    Télécharger les statuts (PDF)
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

