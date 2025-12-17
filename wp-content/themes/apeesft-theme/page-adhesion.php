<?php
/**
 * Template pour la page Adhésion & Assurance
 */
get_header();
?>

<section class="content-section">
    <div class="container">
        <h1 class="section-title">Adhésion & Assurance</h1>
        
        <div style="max-width: 800px; margin: 0 auto 3rem; background: white; padding: 2rem; border-radius: 10px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);">
            <h2 style="color: #1e3c72; margin-bottom: 1rem;">Tarifs</h2>
            <ul style="list-style: none; padding: 0;">
                <li style="padding: 0.5rem 0; border-bottom: 1px solid #eee;">
                    <strong>Cotisation annuelle :</strong> 30 DT par famille
                </li>
                <li style="padding: 0.5rem 0; border-bottom: 1px solid #eee;">
                    <strong>Assurance :</strong> 15 DT par enfant et par an
                </li>
            </ul>
            <p style="margin-top: 1rem; color: #666;">
                Le montant total sera calculé automatiquement selon le nombre d'enfants que vous inscrivez.
            </p>
        </div>

        <form id="adhesion-form" class="adhesion-form">
            <h2 style="color: #1e3c72; margin-bottom: 1.5rem;">Informations du parent</h2>
            
            <div class="form-group">
                <label for="parent_nom">Nom *</label>
                <input type="text" id="parent_nom" name="parent_nom" required>
            </div>
            
            <div class="form-group">
                <label for="parent_prenom">Prénom *</label>
                <input type="text" id="parent_prenom" name="parent_prenom" required>
            </div>
            
            <div class="form-group">
                <label for="parent_email">Email *</label>
                <input type="email" id="parent_email" name="parent_email" required>
            </div>
            
            <div class="form-group">
                <label for="parent_telephone">Téléphone *</label>
                <input type="tel" id="parent_telephone" name="parent_telephone" required>
            </div>

            <h2 style="color: #1e3c72; margin: 2rem 0 1.5rem;">Établissement(s) de scolarisation</h2>
            <div class="checkbox-group">
                <div class="checkbox-item">
                    <input type="checkbox" id="etab_lycee" name="etablissements[]" value="Lycée Pierre Mendès France">
                    <label for="etab_lycee">Lycée Pierre Mendès France</label>
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" id="etab_autre" name="etablissements[]" value="Autre établissement">
                    <label for="etab_autre">Autre établissement</label>
                </div>
            </div>

            <h2 style="color: #1e3c72; margin: 2rem 0 1.5rem;">Enfants</h2>
            <div id="children-container"></div>
            <button type="button" id="add-child" style="background: #667eea; color: white; border: none; padding: 0.75rem 1.5rem; border-radius: 5px; cursor: pointer; margin-top: 1rem;">
                + Ajouter un enfant
            </button>

            <div class="pricing-summary" id="pricing-summary" style="display: none;">
                <h3 style="margin-bottom: 1rem; color: #1e3c72;">Récapitulatif</h3>
                <div class="pricing-item">
                    <span>Cotisation (par famille) :</span>
                    <span id="cotisation-amount">30 DT</span>
                </div>
                <div class="pricing-item">
                    <span>Assurance (<span id="children-count">0</span> enfant(s)) :</span>
                    <span id="assurance-amount">0 DT</span>
                </div>
                <div class="pricing-total">
                    <span>Total :</span>
                    <span id="total-amount">30 DT</span>
                </div>
            </div>

            <div style="margin-top: 2rem; text-align: center;">
                <button type="submit" class="btn-primary" style="border: none; cursor: pointer;">
                    Soumettre la demande d'adhésion
                </button>
            </div>

            <div id="form-message" style="margin-top: 1rem; padding: 1rem; border-radius: 5px; display: none;"></div>
        </form>
    </div>
</section>

<?php get_footer(); ?>

