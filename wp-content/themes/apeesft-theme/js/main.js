jQuery(document).ready(function($) {
    // Menu mobile toggle
    const mobileMenuToggle = $('.mobile-menu-toggle');
    const mainNav = $('.main-nav');
    const navLinks = $('.main-nav a');
    
    if (mobileMenuToggle.length && mainNav.length) {
        // S'assurer que le menu est fermé au chargement - FORCER
        mobileMenuToggle.removeClass('active');
        mainNav.removeClass('active');
        mainNav.css('display', 'none');
        $('body').css('overflow', '');
        
        // Vérifier la largeur de l'écran
        function checkScreenSize() {
            if ($(window).width() <= 768) {
                // Sur mobile, cacher le menu par défaut
                if (!mainNav.hasClass('active')) {
                    mainNav.css('display', 'none');
                }
            } else {
                // Sur desktop, afficher le menu normal
                mainNav.css('display', '');
            }
        }
        
        // Vérifier au chargement et au redimensionnement
        checkScreenSize();
        $(window).on('resize', checkScreenSize);
        
        mobileMenuToggle.on('click', function(e) {
            e.stopPropagation();
            const isActive = mainNav.hasClass('active');
            
            if (isActive) {
                // Fermer le menu
                mobileMenuToggle.removeClass('active');
                mainNav.removeClass('active');
                mainNav.css('display', 'none');
                $('body').css('overflow', '');
            } else {
                // Ouvrir le menu
                mobileMenuToggle.addClass('active');
                mainNav.addClass('active');
                mainNav.css('display', 'block');
                $('body').css('overflow', 'hidden');
            }
        });
        
        // Fermer le menu quand on clique sur un lien
        navLinks.on('click', function() {
            mobileMenuToggle.removeClass('active');
            mainNav.removeClass('active');
            mainNav.css('display', 'none');
            $('body').css('overflow', '');
        });
        
        // Fermer le menu quand on clique en dehors
        $(document).on('click', function(e) {
            if (mainNav.hasClass('active') && 
                !$(e.target).closest('.main-nav, .mobile-menu-toggle').length) {
                mobileMenuToggle.removeClass('active');
                mainNav.removeClass('active');
                mainNav.css('display', 'none');
                $('body').css('overflow', '');
            }
        });
    }
    
    let childCount = 0;
    const cotisationBase = 30;
    const assuranceParEnfant = 15;

    // Ajouter un enfant
    $('#add-child').on('click', function() {
        childCount++;
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
        $('#children-container').append(childHtml);
        updatePricing();
    });

    // Supprimer un enfant
    $(document).on('click', '.remove-child', function() {
        $(this).closest('.child-item').remove();
        childCount--;
        updatePricing();
    });

    // Mettre à jour le calcul des prix
    function updatePricing() {
        const children = $('.child-item').length;
        const assuranceTotal = children * assuranceParEnfant;
        const total = cotisationBase + assuranceTotal;

        $('#children-count').text(children);
        $('#assurance-amount').text(assuranceTotal + ' DT');
        $('#total-amount').text(total + ' DT');

        if (children > 0) {
            $('#pricing-summary').show();
        } else {
            $('#pricing-summary').hide();
        }
    }

    // Écouter les changements dans les champs enfants
    $(document).on('input change', '.child-item input, .child-item select', function() {
        updatePricing();
    });

    // Soumission du formulaire d'adhésion
    $('#adhesion-form').on('submit', function(e) {
        e.preventDefault();

        const form = $(this);
        const messageDiv = $('#form-message');
        messageDiv.hide().removeClass('success error');

        // Collecter les données des enfants
        const enfants = [];
        $('.child-item').each(function() {
            const nom = $(this).find('.child-nom').val();
            const prenom = $(this).find('.child-prenom').val();
            const niveau = $(this).find('.child-niveau').val();
            const etablissement = $(this).find('.child-etablissement').val();

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
        $('input[name="etablissements[]"]:checked').each(function() {
            etablissements.push($(this).val());
        });

        // Calculer le montant total
        const montantTotal = cotisationBase + (enfants.length * assuranceParEnfant);

        // Préparer les données
        const formData = {
            action: 'apeesft_adhesion',
            nonce: apeesftAjax.nonce,
            parent_nom: $('#parent_nom').val(),
            parent_prenom: $('#parent_prenom').val(),
            parent_email: $('#parent_email').val(),
            parent_telephone: $('#parent_telephone').val(),
            enfants: JSON.stringify(enfants),
            etablissements: etablissements,
            montant_total: montantTotal
        };

        // Désactiver le bouton
        form.find('button[type="submit"]').prop('disabled', true).text('Envoi en cours...');

        // Envoyer via AJAX
        $.ajax({
            url: apeesftAjax.ajaxurl,
            type: 'POST',
            data: formData,
            success: function(response) {
                if (response.success) {
                    messageDiv.addClass('success')
                        .css({
                            'background': '#d4edda',
                            'color': '#155724',
                            'border': '1px solid #c3e6cb'
                        })
                        .text(response.data.message)
                        .show();
                    
                    form[0].reset();
                    $('#children-container').empty();
                    childCount = 0;
                    updatePricing();
                } else {
                    messageDiv.addClass('error')
                        .css({
                            'background': '#f8d7da',
                            'color': '#721c24',
                            'border': '1px solid #f5c6cb'
                        })
                        .text(response.data.message)
                        .show();
                }
            },
            error: function() {
                messageDiv.addClass('error')
                    .css({
                        'background': '#f8d7da',
                        'color': '#721c24',
                        'border': '1px solid #f5c6cb'
                    })
                    .text('Une erreur est survenue. Veuillez réessayer.')
                    .show();
            },
            complete: function() {
                form.find('button[type="submit"]').prop('disabled', false).text('Soumettre la demande d\'adhésion');
            }
        });
    });

    // Formulaire de contact
    $('#contact-form').on('submit', function(e) {
        e.preventDefault();

        const form = $(this);
        const messageDiv = $('#contact-message');
        messageDiv.hide().removeClass('success error');

        const formData = {
            action: 'apeesft_contact',
            nonce: apeesftAjax.nonce,
            nom: $('#contact-nom').val(),
            email: $('#contact-email').val(),
            sujet: $('#contact-sujet').val(),
            message: $('#contact-message-text').val()
        };

        form.find('button[type="submit"]').prop('disabled', true).text('Envoi en cours...');

        $.ajax({
            url: apeesftAjax.ajaxurl,
            type: 'POST',
            data: formData,
            success: function(response) {
                if (response.success) {
                    messageDiv.addClass('success')
                        .css({
                            'background': '#d4edda',
                            'color': '#155724',
                            'border': '1px solid #c3e6cb'
                        })
                        .text(response.data.message)
                        .show();
                    form[0].reset();
                } else {
                    messageDiv.addClass('error')
                        .css({
                            'background': '#f8d7da',
                            'color': '#721c24',
                            'border': '1px solid #f5c6cb'
                        })
                        .text(response.data.message)
                        .show();
                }
            },
            error: function() {
                messageDiv.addClass('error')
                    .css({
                        'background': '#f8d7da',
                        'color': '#721c24',
                        'border': '1px solid #f5c6cb'
                    })
                    .text('Une erreur est survenue. Veuillez réessayer.')
                    .show();
            },
            complete: function() {
                form.find('button[type="submit"]').prop('disabled', false).text('Envoyer');
            }
        });
    });

    // Scroll to top button
    const scrollToTopBtn = $('.scroll-to-top');
    if (scrollToTopBtn.length) {
        $(window).on('scroll', function() {
            if ($(window).scrollTop() > 300) {
                scrollToTopBtn.addClass('visible');
            } else {
                scrollToTopBtn.removeClass('visible');
            }
        });

        scrollToTopBtn.on('click', function() {
            $('html, body').animate({
                scrollTop: 0
            }, 600);
        });
    }
});

