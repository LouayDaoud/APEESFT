<?php
/**
 * Template pour l'Espace Adhérents
 */
get_header();
?>

<section class="content-section">
    <div class="container">
        <h1 class="section-title">Espace Adhérents</h1>
        
        <div style="max-width: 900px; margin: 0 auto;">
            <!-- Zone de connexion -->
            <div id="login-section" style="background: white; padding: 3rem; border-radius: 10px; box-shadow: 0 3px 15px rgba(0,0,0,0.1); margin-bottom: 2rem;">
                <h2 style="color: var(--primary-color); margin-bottom: 2rem; text-align: center;">Connexion</h2>
                
                <form id="member-login-form" style="max-width: 500px; margin: 0 auto;">
                    <div class="form-group" style="margin-bottom: 1.5rem;">
                        <label for="member-email" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--text-dark);">Email *</label>
                        <input type="email" id="member-email" name="member_email" required style="width: 100%; padding: 0.75rem; border: 1px solid var(--border-color); border-radius: 5px; font-size: 1rem;">
                    </div>
                    
                    <div class="form-group" style="margin-bottom: 1.5rem;">
                        <label for="member-password" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--text-dark);">Mot de passe *</label>
                        <input type="password" id="member-password" name="member_password" required style="width: 100%; padding: 0.75rem; border: 1px solid var(--border-color); border-radius: 5px; font-size: 1rem;">
                    </div>
                    
                    <div id="login-message" style="display: none; padding: 1rem; border-radius: 5px; margin-bottom: 1rem;"></div>
                    
                    <button type="submit" class="btn-primary" style="width: 100%; padding: 1rem; background: var(--primary-color); color: white; border: none; border-radius: 8px; font-size: 1.1rem; font-weight: 600; cursor: pointer; transition: all 0.3s ease;">
                        Se connecter
                    </button>
                    
                    <p style="text-align: center; margin-top: 1rem; color: var(--text-light); font-size: 0.9rem;">
                        <a href="#" style="color: var(--primary-color); text-decoration: none;">Mot de passe oublié ?</a>
                    </p>
                </form>
            </div>
            
            <!-- Zone membre connecté (cachée par défaut) -->
            <div id="member-dashboard" style="display: none;">
                <!-- Reçus et documents -->
                <div style="background: white; padding: 3rem; border-radius: 10px; box-shadow: 0 3px 15px rgba(0,0,0,0.1); margin-bottom: 2rem;">
                    <h2 style="color: var(--primary-color); margin-bottom: 2rem;">Mes reçus et documents</h2>
                    
                    <div id="documents-list" style="display: grid; gap: 1rem;">
                        <!-- Les documents seront chargés dynamiquement -->
                    </div>
                </div>
                
                <!-- Informations pratiques réservées aux membres -->
                <div style="background: white; padding: 3rem; border-radius: 10px; box-shadow: 0 3px 15px rgba(0,0,0,0.1);">
                    <h2 style="color: var(--primary-color); margin-bottom: 2rem;">Informations pratiques</h2>
                    
                    <div style="display: grid; gap: 1.5rem;">
                        <div style="padding: 1.5rem; background: var(--bg-light); border-radius: 8px; border-left: 4px solid var(--primary-color);">
                            <h3 style="color: var(--primary-color); margin-bottom: 0.5rem;">Calendrier scolaire</h3>
                            <p style="color: var(--text-light); margin-bottom: 1rem;">Consultez le calendrier scolaire complet avec toutes les dates importantes.</p>
                            <a href="#" class="btn-secondary" style="display: inline-block; padding: 0.5rem 1rem; background: var(--primary-color); color: white; text-decoration: none; border-radius: 5px;">Télécharger</a>
                        </div>
                        
                        <div style="padding: 1.5rem; background: var(--bg-light); border-radius: 8px; border-left: 4px solid var(--primary-color);">
                            <h3 style="color: var(--primary-color); margin-bottom: 0.5rem;">Procédures administratives</h3>
                            <p style="color: var(--text-light); margin-bottom: 1rem;">Guide complet des démarches administratives pour les parents.</p>
                            <a href="#" class="btn-secondary" style="display: inline-block; padding: 0.5rem 1rem; background: var(--primary-color); color: white; text-decoration: none; border-radius: 5px;">Consulter</a>
                        </div>
                        
                        <div style="padding: 1.5rem; background: var(--bg-light); border-radius: 8px; border-left: 4px solid var(--primary-color);">
                            <h3 style="color: var(--primary-color); margin-bottom: 0.5rem;">Règlement intérieur</h3>
                            <p style="color: var(--text-light); margin-bottom: 1rem;">Règlement intérieur de l'établissement et charte de vie scolaire.</p>
                            <a href="#" class="btn-secondary" style="display: inline-block; padding: 0.5rem 1rem; background: var(--primary-color); color: white; text-decoration: none; border-radius: 5px;">Télécharger</a>
                        </div>
                        
                        <div style="padding: 1.5rem; background: var(--bg-light); border-radius: 8px; border-left: 4px solid var(--primary-color);">
                            <h3 style="color: var(--primary-color); margin-bottom: 0.5rem;">Comptes rendus d'Assemblée Générale</h3>
                            <p style="color: var(--text-light); margin-bottom: 1rem;">Accédez aux comptes rendus des dernières Assemblées Générales.</p>
                            <a href="#" class="btn-secondary" style="display: inline-block; padding: 0.5rem 1rem; background: var(--primary-color); color: white; text-decoration: none; border-radius: 5px;">Consulter</a>
                        </div>
                    </div>
                </div>
                
                <div style="text-align: center; margin-top: 2rem;">
                    <button id="logout-btn" class="btn-secondary" style="padding: 0.75rem 2rem; background: var(--text-light); color: white; border: none; border-radius: 8px; font-size: 1rem; font-weight: 600; cursor: pointer;">
                        Se déconnecter
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Simulation de connexion (dans une vraie application, cela ferait une requête AJAX)
    const loginForm = document.getElementById('member-login-form');
    const loginSection = document.getElementById('login-section');
    const memberDashboard = document.getElementById('member-dashboard');
    const loginMessage = document.getElementById('login-message');
    const logoutBtn = document.getElementById('logout-btn');
    
    // Vérifier si l'utilisateur est déjà connecté (via session/cookie)
    const isLoggedIn = sessionStorage.getItem('member_logged_in') === 'true';
    if (isLoggedIn) {
        showDashboard();
    }
    
    loginForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const email = document.getElementById('member-email').value;
        const password = document.getElementById('member-password').value;
        
        // Simulation de vérification (dans une vraie application, cela ferait une requête AJAX)
        // Pour la démo, on accepte n'importe quel email et mot de passe
        if (email && password) {
            sessionStorage.setItem('member_logged_in', 'true');
            sessionStorage.setItem('member_email', email);
            showDashboard();
            loadMemberDocuments();
        } else {
            showMessage(loginMessage, 'Veuillez remplir tous les champs.', 'error');
        }
    });
    
    logoutBtn.addEventListener('click', function() {
        sessionStorage.removeItem('member_logged_in');
        sessionStorage.removeItem('member_email');
        loginSection.style.display = 'block';
        memberDashboard.style.display = 'none';
        loginForm.reset();
    });
    
    function showDashboard() {
        loginSection.style.display = 'none';
        memberDashboard.style.display = 'block';
    }
    
    function loadMemberDocuments() {
        const documentsList = document.getElementById('documents-list');
        const email = sessionStorage.getItem('member_email');
        
        // Documents d'exemple (dans une vraie application, cela viendrait d'une base de données)
        const documents = [
            { name: 'Reçu d\'adhésion 2024-2025', date: '15/09/2024', type: 'pdf' },
            { name: 'Reçu assurance 2024-2025', date: '15/09/2024', type: 'pdf' },
            { name: 'Attestation d\'adhésion', date: '20/09/2024', type: 'pdf' },
        ];
        
        documentsList.innerHTML = '';
        
        documents.forEach(doc => {
            const docCard = document.createElement('div');
            docCard.style.padding = '1.5rem';
            docCard.style.background = 'var(--bg-light)';
            docCard.style.borderRadius = '8px';
            docCard.style.display = 'flex';
            docCard.style.justifyContent = 'space-between';
            docCard.style.alignItems = 'center';
            docCard.style.borderLeft = '4px solid var(--primary-color)';
            
            docCard.innerHTML = `
                <div>
                    <h4 style="color: var(--text-dark); margin-bottom: 0.25rem;">${doc.name}</h4>
                    <p style="color: var(--text-light); font-size: 0.9rem; margin: 0;">Date: ${doc.date}</p>
                </div>
                <a href="#" class="btn-secondary" style="padding: 0.5rem 1rem; background: var(--primary-color); color: white; text-decoration: none; border-radius: 5px;">Télécharger</a>
            `;
            
            documentsList.appendChild(docCard);
        });
    }
    
    function showMessage(element, message, type) {
        element.style.display = 'block';
        element.textContent = message;
        
        if (type === 'error') {
            element.style.background = '#f8d7da';
            element.style.color = '#721c24';
            element.style.border = '1px solid #f5c6cb';
        } else {
            element.style.background = '#d4edda';
            element.style.color = '#155724';
            element.style.border = '1px solid #c3e6cb';
        }
    }
});
</script>

<?php get_footer(); ?>
