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

            <h2 style="color: var(--primary-color); margin: 2rem 0 1.5rem; font-size: 1.5rem; font-weight: 700; padding-bottom: 0.75rem; border-bottom: 2px solid var(--border-color);">Établissement(s) de scolarisation</h2>
            <div class="checkbox-group" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1rem; margin-bottom: 1rem;">
                <div class="checkbox-item">
                    <input type="checkbox" id="etab_pmf" name="etablissements[]" value="PMF">
                    <label for="etab_pmf">PMF</label>
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" id="etab_lgf" name="etablissements[]" value="LGF">
                    <label for="etab_lgf">LGF</label>
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" id="etab_philippe_seguin" name="etablissements[]" value="Philippe Seguin">
                    <label for="etab_philippe_seguin">Philippe Seguin</label>
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" id="etab_paul_verlaine" name="etablissements[]" value="Paul Verlaine">
                    <label for="etab_paul_verlaine">Paul Verlaine</label>
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" id="etab_george_sand" name="etablissements[]" value="George Sand">
                    <label for="etab_george_sand">George Sand</label>
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" id="etab_jean_giono" name="etablissements[]" value="Jean Giono">
                    <label for="etab_jean_giono">Jean Giono</label>
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" id="etab_robert_desnos" name="etablissements[]" value="Robert Desnos">
                    <label for="etab_robert_desnos">Robert Desnos</label>
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" id="etab_georges_brassens" name="etablissements[]" value="Georges Brassens">
                    <label for="etab_georges_brassens">Georges Brassens</label>
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" id="etab_lfi_sousse" name="etablissements[]" value="LFI Sousse">
                    <label for="etab_lfi_sousse">LFI Sousse</label>
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

        <!-- FAQ Section -->
        <div style="max-width: 900px; margin: 3rem auto 0; background: white; padding: 3rem; border-radius: 10px; box-shadow: 0 3px 15px rgba(0,0,0,0.1);">
            <h2 style="color: #1e3c72; margin-bottom: 2rem; text-align: center;">FAQ sur l'adhésion et l'assurance</h2>
            
            <div class="faq-item" style="margin-bottom: 1.5rem; padding-bottom: 1.5rem; border-bottom: 1px solid #eee;">
                <h3 style="color: var(--primary-color); margin-bottom: 0.75rem; font-size: 1.1rem; font-weight: 600;">Qu'est-ce que l'adhésion à l'APEESFT ?</h3>
                <p style="color: var(--text-light); line-height: 1.7; margin: 0;">L'adhésion à l'APEESFT permet de devenir membre de l'association et de bénéficier de ses services, de participer aux assemblées générales et de contribuer à la vie scolaire de vos enfants.</p>
            </div>

            <div class="faq-item" style="margin-bottom: 1.5rem; padding-bottom: 1.5rem; border-bottom: 1px solid #eee;">
                <h3 style="color: var(--primary-color); margin-bottom: 0.75rem; font-size: 1.1rem; font-weight: 600;">Quel est le montant de la cotisation ?</h3>
                <p style="color: var(--text-light); line-height: 1.7; margin: 0;">La cotisation annuelle est de 30 DT par famille, quel que soit le nombre d'enfants scolarisés dans les établissements français en Tunisie.</p>
            </div>

            <div class="faq-item" style="margin-bottom: 1.5rem; padding-bottom: 1.5rem; border-bottom: 1px solid #eee;">
                <h3 style="color: var(--primary-color); margin-bottom: 0.75rem; font-size: 1.1rem; font-weight: 600;">Qu'est-ce que l'assurance proposée ?</h3>
                <p style="color: var(--text-light); line-height: 1.7; margin: 0;">L'assurance scolaire couvre votre enfant pendant les activités scolaires et périscolaires. Le montant est de 15 DT par enfant et par an.</p>
            </div>

            <div class="faq-item" style="margin-bottom: 1.5rem; padding-bottom: 1.5rem; border-bottom: 1px solid #eee;">
                <h3 style="color: var(--primary-color); margin-bottom: 0.75rem; font-size: 1.1rem; font-weight: 600;">Dois-je adhérer si j'ai plusieurs enfants ?</h3>
                <p style="color: var(--text-light); line-height: 1.7; margin: 0;">Non, la cotisation est unique par famille (30 DT), mais l'assurance doit être souscrite pour chaque enfant (15 DT par enfant).</p>
            </div>

            <div class="faq-item" style="margin-bottom: 1.5rem; padding-bottom: 1.5rem; border-bottom: 1px solid #eee;">
                <h3 style="color: var(--primary-color); margin-bottom: 0.75rem; font-size: 1.1rem; font-weight: 600;">Quand dois-je renouveler mon adhésion ?</h3>
                <p style="color: var(--text-light); line-height: 1.7; margin: 0;">L'adhésion est valable pour une année scolaire. Le renouvellement se fait chaque année au début de l'année scolaire.</p>
            </div>

            <div class="faq-item" style="margin-bottom: 1.5rem; padding-bottom: 1.5rem; border-bottom: 1px solid #eee;">
                <h3 style="color: var(--primary-color); margin-bottom: 0.75rem; font-size: 1.1rem; font-weight: 600;">Comment puis-je payer mon adhésion ?</h3>
                <p style="color: var(--text-light); line-height: 1.7; margin: 0;">Après avoir soumis votre formulaire d'adhésion, vous recevrez les instructions de paiement par email. Plusieurs modes de paiement sont acceptés.</p>
            </div>

            <div class="faq-item" style="margin-bottom: 1.5rem; padding-bottom: 1.5rem; border-bottom: 1px solid #eee;">
                <h3 style="color: var(--primary-color); margin-bottom: 0.75rem; font-size: 1.1rem; font-weight: 600;">L'assurance est-elle obligatoire ?</h3>
                <p style="color: var(--text-light); line-height: 1.7; margin: 0;">L'assurance scolaire n'est pas obligatoire, mais elle est fortement recommandée pour couvrir votre enfant lors des activités scolaires et des sorties.</p>
            </div>

            <div class="faq-item" style="margin-bottom: 0;">
                <h3 style="color: var(--primary-color); margin-bottom: 0.75rem; font-size: 1.1rem; font-weight: 600;">Puis-je adhérer en cours d'année ?</h3>
                <p style="color: var(--text-light); line-height: 1.7; margin: 0;">Oui, vous pouvez adhérer à tout moment de l'année. L'adhésion sera valable jusqu'à la fin de l'année scolaire en cours.</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

