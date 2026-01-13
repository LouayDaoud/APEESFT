document.addEventListener('DOMContentLoaded', function() {
    // Menu mobile toggle
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const mainNav = document.querySelector('.main-nav');
    const navLinks = document.querySelectorAll('.main-nav a');
    
    if (mobileMenuToggle && mainNav) {
        // S'assurer que le menu est fermé au chargement - FORCER
        mobileMenuToggle.classList.remove('active');
        mainNav.classList.remove('active');
        mainNav.style.display = 'none';
        document.body.style.overflow = '';
        
        // Vérifier la largeur de l'écran
        function checkScreenSize() {
            if (window.innerWidth <= 768) {
                // Sur mobile, cacher le menu par défaut
                if (!mainNav.classList.contains('active')) {
                    mainNav.style.display = 'none';
                }
            } else {
                // Sur desktop, afficher le menu normal
                mainNav.style.display = '';
            }
        }
        
        // Vérifier au chargement et au redimensionnement
        checkScreenSize();
        window.addEventListener('resize', checkScreenSize);
        
        mobileMenuToggle.addEventListener('click', function(e) {
            e.stopPropagation();
            const isActive = mainNav.classList.contains('active');
            
            if (isActive) {
                // Fermer le menu
                mobileMenuToggle.classList.remove('active');
                mainNav.classList.remove('active');
                setTimeout(() => {
                    if (!mainNav.classList.contains('active')) {
                        mainNav.style.display = 'none';
                        mainNav.style.visibility = 'hidden';
                    }
                }, 300);
                document.body.style.overflow = '';
            } else {
                // Ouvrir le menu - FORCER l'affichage de TOUS les éléments
                mainNav.style.display = 'block';
                mainNav.style.visibility = 'visible';
                mainNav.style.opacity = '1';
                
                // Forcer l'affichage de tous les éléments de la liste
                const navItems = mainNav.querySelectorAll('ul li');
                navItems.forEach(item => {
                    item.style.display = 'block';
                    item.style.visibility = 'visible';
                    item.style.opacity = '1';
                    item.style.height = 'auto';
                    const link = item.querySelector('a');
                    if (link) {
                        link.style.display = 'block';
                        link.style.visibility = 'visible';
                        link.style.opacity = '1';
                    }
                });
                
                // Forcer le reflow
                mainNav.offsetHeight;
                mobileMenuToggle.classList.add('active');
                mainNav.classList.add('active');
                document.body.style.overflow = 'hidden';
            }
        });
        
        // Fermer le menu quand on clique sur un lien - SANS empêcher la navigation
        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                // NE PAS utiliser preventDefault() - laisser le lien fonctionner normalement
                // Fermer le menu immédiatement pour permettre la navigation
                mobileMenuToggle.classList.remove('active');
                mainNav.classList.remove('active');
                mainNav.style.display = 'none';
                document.body.style.overflow = '';
                // Ne pas empêcher la navigation - laisser le navigateur suivre le lien
            });
        });
        
        // Fermer le menu quand on clique sur l'overlay (mais pas sur le menu lui-même)
        document.addEventListener('click', function(e) {
            // Si le clic est sur un lien du menu, laisser faire
            if (e.target.closest('.main-nav a')) {
                return;
            }
            
            // Si le clic est sur le menu lui-même (mais pas sur un lien), ne rien faire
            if (e.target.closest('.main-nav ul')) {
                return;
            }
            
            // Si le clic est sur l'overlay ou en dehors, fermer le menu
            if (mainNav.classList.contains('active') && 
                !mainNav.contains(e.target) && 
                e.target !== mobileMenuToggle &&
                !mobileMenuToggle.contains(e.target)) {
                mobileMenuToggle.classList.remove('active');
                mainNav.classList.remove('active');
                mainNav.style.display = 'none';
                document.body.style.overflow = '';
            }
        });
    }
    
    let childCount = 0;
    const cotisationBase = 30;
    const assuranceParEnfant = 15;

    // Ajouter un enfant
    const addChildBtn = document.getElementById('add-child');
    if (addChildBtn) {
        addChildBtn.addEventListener('click', function() {
            childCount++;
            const childrenContainer = document.getElementById('children-container');
            const childHtml = `
                <div class="child-item" data-child-index="${childCount}">
                    <h4 style="margin-bottom: 1rem; color: #1e3c72;">Enfant ${childCount}</h4>
                    <div class="form-group">
                        <label>Nom *</label>
                        <input type="text" class="child-nom" required>
                    </div>
                    <div class="form-group">
                        <label>Prénom *</label>
                        <input type="text" class="child-prenom" required>
                    </div>
                    <div class="form-group">
                        <label>Niveau *</label>
                        <select class="child-niveau" required>
                            <option value="">Sélectionner...</option>
                            <option value="6ème">6ème</option>
                            <option value="5ème">5ème</option>
                            <option value="4ème">4ème</option>
                            <option value="3ème">3ème</option>
                            <option value="2nde">2nde</option>
                            <option value="1ère">1ère</option>
                            <option value="Terminale">Terminale</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Établissement / Section *</label>
                        <input type="text" class="child-etablissement" required>
                    </div>
                    <button type="button" class="remove-child">Supprimer cet enfant</button>
                </div>
            `;
            childrenContainer.insertAdjacentHTML('beforeend', childHtml);
            updatePricing();
        });
    }

    // Supprimer un enfant
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('remove-child')) {
            e.target.closest('.child-item').remove();
            childCount--;
            updatePricing();
        }
    });

    // Mettre à jour le calcul des prix
    function updatePricing() {
        const children = document.querySelectorAll('.child-item').length;
        const assuranceTotal = children * assuranceParEnfant;
        const total = cotisationBase + assuranceTotal;

        const childrenCountEl = document.getElementById('children-count');
        const assuranceAmountEl = document.getElementById('assurance-amount');
        const totalAmountEl = document.getElementById('total-amount');
        const pricingSummary = document.getElementById('pricing-summary');

        if (childrenCountEl) childrenCountEl.textContent = children;
        if (assuranceAmountEl) assuranceAmountEl.textContent = assuranceTotal + ' DT';
        if (totalAmountEl) totalAmountEl.textContent = total + ' DT';

        if (pricingSummary) {
            if (children > 0) {
                pricingSummary.style.display = 'block';
            } else {
                pricingSummary.style.display = 'none';
            }
        }
    }

    // Écouter les changements dans les champs enfants
    document.addEventListener('input', function(e) {
        if (e.target.closest('.child-item')) {
            updatePricing();
        }
    });

    document.addEventListener('change', function(e) {
        if (e.target.closest('.child-item')) {
            updatePricing();
        }
    });

    // Soumission du formulaire d'adhésion
    const adhesionForm = document.getElementById('adhesion-form');
    if (adhesionForm) {
        adhesionForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const messageDiv = document.getElementById('form-message');
            messageDiv.style.display = 'none';
            messageDiv.className = '';

            // Collecter les données des enfants
            const enfants = [];
            document.querySelectorAll('.child-item').forEach(function(item) {
                const nom = item.querySelector('.child-nom').value;
                const prenom = item.querySelector('.child-prenom').value;
                const niveau = item.querySelector('.child-niveau').value;
                const etablissement = item.querySelector('.child-etablissement').value;

                if (nom && prenom && niveau && etablissement) {
                    enfants.push({
                        nom: nom,
                        prenom: prenom,
                        niveau: niveau,
                        etablissement: etablissement
                    });
                }
            });

            // Collecter les établissements sélectionnés
            const etablissements = [];
            document.querySelectorAll('input[name="etablissements[]"]:checked').forEach(function(checkbox) {
                etablissements.push(checkbox.value);
            });

            // Calculer le montant total
            const montantTotal = cotisationBase + (enfants.length * assuranceParEnfant);

            // Validation
            const parentNom = document.getElementById('parent_nom').value;
            const parentPrenom = document.getElementById('parent_prenom').value;
            const parentEmail = document.getElementById('parent_email').value;

            if (!parentNom || !parentPrenom || !parentEmail) {
                showMessage(messageDiv, 'Veuillez remplir tous les champs obligatoires.', 'error');
                return;
            }

            // Simuler l'envoi (dans la vraie version, ce serait une requête AJAX)
            const submitBtn = adhesionForm.querySelector('button[type="submit"]');
            submitBtn.disabled = true;
            submitBtn.textContent = 'Envoi en cours...';

            setTimeout(function() {
                showMessage(messageDiv, 
                    'Votre demande d\'adhésion a été envoyée avec succès ! Montant total : ' + montantTotal + ' DT', 
                    'success'
                );
                adhesionForm.reset();
                document.getElementById('children-container').innerHTML = '';
                childCount = 0;
                updatePricing();
                submitBtn.disabled = false;
                submitBtn.textContent = 'Soumettre la demande d\'adhésion';
            }, 1500);
        });
    }

    // Formulaire de contact
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const messageDiv = document.getElementById('contact-message');
            messageDiv.style.display = 'none';
            messageDiv.className = '';

            const submitBtn = contactForm.querySelector('button[type="submit"]');
            submitBtn.disabled = true;
            submitBtn.textContent = 'Envoi en cours...';

            setTimeout(function() {
                showMessage(messageDiv, 'Votre message a été envoyé avec succès !', 'success');
                contactForm.reset();
                submitBtn.disabled = false;
                submitBtn.textContent = 'Envoyer';
            }, 1500);
        });
    }

    function showMessage(element, message, type) {
        element.textContent = message;
        element.style.display = 'block';
        element.style.padding = '1rem';
        element.style.borderRadius = '5px';
        element.style.marginTop = '1rem';

        if (type === 'success') {
            element.style.background = '#d4edda';
            element.style.color = '#155724';
            element.style.border = '1px solid #c3e6cb';
        } else {
            element.style.background = '#f8d7da';
            element.style.color = '#721c24';
            element.style.border = '1px solid #f5c6cb';
        }
    }

    // Scroll to top button
    const scrollToTopBtn = document.querySelector('.scroll-to-top');
    if (scrollToTopBtn) {
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                scrollToTopBtn.classList.add('visible');
            } else {
                scrollToTopBtn.classList.remove('visible');
            }
        });

        scrollToTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
    
    // Marquer le lien actif dans le menu
    function setActiveMenuItem() {
        const currentPath = window.location.pathname;
        const currentPage = currentPath.split('/').pop() || 'index.html';
        const navLinks = document.querySelectorAll('.main-nav a');
        
        navLinks.forEach(link => {
            // Retirer d'abord toutes les classes active
            link.classList.remove('active');
            if (link.parentElement) {
                link.parentElement.classList.remove('active');
            }
            
            const linkHref = link.getAttribute('href');
            const linkPage = linkHref.split('/').pop();
            
            // Comparer les noms de fichiers
            if (linkPage === currentPage || 
                (currentPage === '' && linkPage === 'index.html') ||
                (currentPage === 'index.html' && linkPage === 'index.html') ||
                (currentPath.includes(linkPage) && linkPage !== 'index.html')) {
                link.classList.add('active');
                if (link.parentElement) {
                    link.parentElement.classList.add('active');
                }
            }
        });
    }
    
    // Exécuter immédiatement et après le chargement complet
    setActiveMenuItem();
    window.addEventListener('load', setActiveMenuItem);
});

