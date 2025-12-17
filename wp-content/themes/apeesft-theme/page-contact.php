<?php
/**
 * Template pour la page Contact
 */
get_header();
?>

<section class="content-section">
    <div class="container">
        <h1 class="section-title">Contactez-nous</h1>
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; max-width: 1000px; margin: 0 auto;">
            <div>
                <h2 style="color: #1e3c72; margin-bottom: 1rem;">Formulaire de contact</h2>
                <form id="contact-form" class="adhesion-form">
                    <div class="form-group">
                        <label for="contact-nom">Nom *</label>
                        <input type="text" id="contact-nom" name="nom" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="contact-email">Email *</label>
                        <input type="email" id="contact-email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="contact-sujet">Sujet *</label>
                        <input type="text" id="contact-sujet" name="sujet" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="contact-message-text">Message *</label>
                        <textarea id="contact-message-text" name="message" rows="5" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn-primary" style="border: none; cursor: pointer;">
                        Envoyer
                    </button>
                    
                    <div id="contact-message" style="margin-top: 1rem; padding: 1rem; border-radius: 5px; display: none;"></div>
                </form>
            </div>
            
            <div>
                <h2 style="color: #1e3c72; margin-bottom: 1rem;">Coordonnées</h2>
                <div style="background: white; padding: 2rem; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
                    <p><strong>Email :</strong><br><?php echo get_option('admin_email'); ?></p>
                    <p style="margin-top: 1rem;"><strong>Association APEESFT</strong><br>
                    École Secondaire Franco-Tunisienne</p>
                </div>
                
                <h2 style="color: #1e3c72; margin: 2rem 0 1rem;">FAQ</h2>
                <div style="background: white; padding: 2rem; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
                    <h3 style="color: #667eea; margin-bottom: 0.5rem;">Comment adhérer ?</h3>
                    <p style="margin-bottom: 1rem;">Remplissez le formulaire d'adhésion en ligne et suivez les instructions de paiement.</p>
                    
                    <h3 style="color: #667eea; margin-bottom: 0.5rem;">Quel est le montant de l'adhésion ?</h3>
                    <p style="margin-bottom: 1rem;">30 DT par famille + 15 DT par enfant pour l'assurance.</p>
                    
                    <h3 style="color: #667eea; margin-bottom: 0.5rem;">Quel est le rôle de l'APEESFT ?</h3>
                    <p>L'APEESFT représente les parents d'élèves et œuvre pour le bien-être et la réussite scolaire des élèves.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

