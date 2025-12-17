<?php
/**
 * Functions and definitions pour le thème APEESFT
 */

// Empêcher l'accès direct
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Configuration du thème
 */
function apeesft_setup() {
    // Support des traductions
    load_theme_textdomain('apeesft', get_template_directory() . '/languages');
    
    // Support des images à la une
    add_theme_support('post-thumbnails');
    
    // Support du titre automatique
    add_theme_support('title-tag');
    
    // Support HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Enregistrement des menus
    register_nav_menus(array(
        'primary' => __('Menu Principal', 'apeesft'),
        'footer' => __('Menu Footer', 'apeesft'),
    ));
}
add_action('after_setup_theme', 'apeesft_setup');

/**
 * Enregistrement des scripts et styles
 */
function apeesft_scripts() {
    // Styles
    wp_enqueue_style('apeesft-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Scripts
    wp_enqueue_script('apeesft-main', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true);
    
    // Localisation pour AJAX
    wp_localize_script('apeesft-main', 'apeesftAjax', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('apeesft_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'apeesft_scripts');

/**
 * Gestion du formulaire d'adhésion via AJAX
 */
function apeesft_process_adhesion() {
    // Vérification du nonce
    check_ajax_referer('apeesft_nonce', 'nonce');
    
    // Récupération des données
    $parent_nom = sanitize_text_field($_POST['parent_nom']);
    $parent_prenom = sanitize_text_field($_POST['parent_prenom']);
    $parent_email = sanitize_email($_POST['parent_email']);
    $parent_telephone = sanitize_text_field($_POST['parent_telephone']);
    $enfants = json_decode(stripslashes($_POST['enfants']), true);
    $etablissements = isset($_POST['etablissements']) ? $_POST['etablissements'] : array();
    $montant_total = floatval($_POST['montant_total']);
    
    // Validation
    if (empty($parent_nom) || empty($parent_prenom) || empty($parent_email)) {
        wp_send_json_error(array('message' => 'Veuillez remplir tous les champs obligatoires.'));
    }
    
    // Calcul des montants
    $cotisation = 30; // 30 DT par famille
    $assurance_par_enfant = 15; // 15 DT par enfant
    $nombre_enfants = count($enfants);
    $montant_assurance = $nombre_enfants * $assurance_par_enfant;
    $montant_calcule = $cotisation + $montant_assurance;
    
    // Sauvegarde dans la base de données (optionnel - créer une table personnalisée)
    // Pour l'instant, on envoie juste un email
    
    // Préparation de l'email
    $to = get_option('admin_email');
    $subject = 'Nouvelle adhésion APEESFT - ' . $parent_nom . ' ' . $parent_prenom;
    
    $message = "Nouvelle demande d'adhésion reçue :\n\n";
    $message .= "Parent :\n";
    $message .= "Nom : " . $parent_nom . "\n";
    $message .= "Prénom : " . $parent_prenom . "\n";
    $message .= "Email : " . $parent_email . "\n";
    $message .= "Téléphone : " . $parent_telephone . "\n\n";
    $message .= "Enfants (" . $nombre_enfants . ") :\n";
    
    foreach ($enfants as $index => $enfant) {
        $message .= ($index + 1) . ". " . $enfant['nom'] . " " . $enfant['prenom'] . " - " . $enfant['niveau'] . " - " . $enfant['etablissement'] . "\n";
    }
    
    $message .= "\nÉtablissements sélectionnés : " . implode(', ', $etablissements) . "\n";
    $message .= "\nMontant total : " . $montant_calcule . " DT\n";
    
    // Envoi de l'email
    wp_mail($to, $subject, $message);
    
    // Email de confirmation au parent
    $parent_subject = 'Confirmation de votre demande d\'adhésion - APEESFT';
    $parent_message = "Bonjour " . $parent_prenom . ",\n\n";
    $parent_message .= "Nous avons bien reçu votre demande d'adhésion à l'APEESFT.\n\n";
    $parent_message .= "Montant à régler : " . $montant_calcule . " DT\n";
    $parent_message .= "  - Cotisation : 30 DT\n";
    $parent_message .= "  - Assurance (" . $nombre_enfants . " enfant(s)) : " . $montant_assurance . " DT\n\n";
    $parent_message .= "Vous recevrez prochainement les instructions de paiement.\n\n";
    $parent_message .= "Cordialement,\nL'équipe APEESFT";
    
    wp_mail($parent_email, $parent_subject, $parent_message);
    
    // Réponse JSON
    wp_send_json_success(array(
        'message' => 'Votre demande d\'adhésion a été envoyée avec succès !',
        'montant' => $montant_calcule
    ));
}
add_action('wp_ajax_apeesft_adhesion', 'apeesft_process_adhesion');
add_action('wp_ajax_nopriv_apeesft_adhesion', 'apeesft_process_adhesion');

/**
 * Gestion du formulaire de contact
 */
function apeesft_process_contact() {
    check_ajax_referer('apeesft_nonce', 'nonce');
    
    $nom = sanitize_text_field($_POST['nom']);
    $email = sanitize_email($_POST['email']);
    $sujet = sanitize_text_field($_POST['sujet']);
    $message = sanitize_textarea_field($_POST['message']);
    
    if (empty($nom) || empty($email) || empty($message)) {
        wp_send_json_error(array('message' => 'Veuillez remplir tous les champs.'));
    }
    
    $to = get_option('admin_email');
    $subject = 'Contact APEESFT : ' . $sujet;
    $body = "Message de : " . $nom . " (" . $email . ")\n\n" . $message;
    
    wp_mail($to, $subject, $body);
    
    wp_send_json_success(array('message' => 'Votre message a été envoyé avec succès !'));
}
add_action('wp_ajax_apeesft_contact', 'apeesft_process_contact');
add_action('wp_ajax_nopriv_apeesft_contact', 'apeesft_process_contact');

/**
 * Ajout de zones de widgets
 */
function apeesft_widgets_init() {
    register_sidebar(array(
        'name' => __('Sidebar', 'apeesft'),
        'id' => 'sidebar-1',
        'description' => __('Widgets pour la sidebar', 'apeesft'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'apeesft_widgets_init');

