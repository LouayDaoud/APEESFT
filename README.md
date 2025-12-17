# Site WordPress APEESFT

Site web pour l'Association des Parents d'Élèves de l'École Secondaire Franco-Tunisienne (APEESFT).

## 🚀 Installation

### Prérequis
- WordPress 5.0 ou supérieur
- PHP 7.4 ou supérieur
- MySQL 5.7 ou supérieur
- Serveur web (Apache/Nginx)

### Étapes d'installation

1. **Installer WordPress**
   - Téléchargez WordPress depuis [wordpress.org](https://wordpress.org/download/)
   - Décompressez les fichiers dans votre répertoire web

2. **Configurer la base de données**
   - Créez une base de données MySQL
   - Copiez `wp-config-sample.php` vers `wp-config.php`
   - Remplissez les informations de connexion à la base de données

3. **Installer le thème**
   - Le thème est déjà présent dans `wp-content/themes/apeesft-theme/`
   - Activez-le depuis l'administration WordPress : Apparence > Thèmes

4. **Configurer les menus**
   - Allez dans Apparence > Menus
   - Créez un menu principal avec les pages suivantes :
     - Accueil
     - Qui sommes-nous ?
     - Adhésion & Assurance
     - Bilans & Transparence
     - Nos actions
     - Ressources & Partenariats
     - Contact

5. **Créer les pages**
   - Créez les pages suivantes dans WordPress :
     - Accueil (utilise le template par défaut)
     - Qui sommes-nous ?
     - Adhésion & Assurance (attribuez le template "Adhésion")
     - Bilans & Transparence
     - Nos actions
     - Ressources & Partenariats (attribuez le template "Ressources")
     - Contact (attribuez le template "Contact")

## 📋 Fonctionnalités

### ✅ Implémentées

- **Formulaire d'adhésion en ligne**
  - Calcul automatique des tarifs (30 DT/famille + 15 DT/enfant)
  - Ajout dynamique d'enfants
  - Envoi d'emails de confirmation
  - Validation des données

- **Formulaire de contact**
  - Envoi d'emails via AJAX
  - Validation côté client et serveur

- **Design responsive**
  - Compatible mobile, tablette et desktop
  - Interface moderne et professionnelle

- **Structure des pages**
  - Page d'accueil avec accès rapide
  - Pages de contenu personnalisables
  - Footer avec liens utiles

### 🔄 À configurer

1. **Paiement en ligne**
   - Installer un plugin de paiement (Paymee, Stripe, PayPal)
   - Configurer les clés API
   - Intégrer dans le formulaire d'adhésion

2. **Génération de PDF**
   - Installer un plugin PDF (PDF Generator, TCPDF)
   - Créer un template de reçu/attestation
   - Générer automatiquement après paiement

3. **Espace adhérents**
   - Installer un plugin de membres (MemberPress, Ultimate Member)
   - Créer un système de connexion
   - Restreindre l'accès aux documents

4. **Calendrier**
   - Installer un plugin de calendrier (The Events Calendar)
   - Ajouter les événements et AG

5. **Galerie photos**
   - Utiliser la galerie WordPress native
   - Ou installer un plugin (NextGEN Gallery)

## 🎨 Personnalisation

### Couleurs
Les couleurs principales sont définies dans `style.css` :
- Bleu principal : `#1e3c72`
- Bleu secondaire : `#2a5298`
- Violet : `#667eea`
- Rouge : `#ff6b6b`

### Modifier les tarifs
Dans `functions.php`, ligne 50-51 :
```php
$cotisation = 30; // Modifier ici
$assurance_par_enfant = 15; // Modifier ici
```

## 📧 Configuration email

Les emails sont envoyés via la fonction `wp_mail()` de WordPress. Assurez-vous que votre serveur est configuré pour envoyer des emails, ou utilisez un plugin SMTP (comme WP Mail SMTP).

## 🔒 Sécurité

- Les formulaires utilisent des nonces WordPress
- Toutes les données sont sanitizées
- Validation côté serveur et client
- Protection CSRF intégrée

## 📝 Notes

- Le formulaire d'adhésion envoie actuellement un email à l'administrateur
- Pour la production, envisagez de stocker les données dans une table personnalisée
- Ajoutez un plugin de sauvegarde (UpdraftPlus, BackWPup)
- Configurez HTTPS pour la sécurité des paiements

## 🆘 Support

Pour toute question ou problème, contactez l'équipe de développement.

---

**Version :** 1.0.0  
**Dernière mise à jour :** 2024

