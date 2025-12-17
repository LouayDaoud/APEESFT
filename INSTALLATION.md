# Guide d'installation rapide - Thème APEESFT

## 📦 Structure du projet

```
proj-wordpres/
├── wp-content/
│   └── themes/
│       └── apeesft-theme/          # Thème personnalisé
│           ├── style.css           # Styles principaux
│           ├── functions.php       # Fonctions PHP du thème
│           ├── header.php          # En-tête
│           ├── footer.php          # Pied de page
│           ├── index.php           # Template principal
│           ├── single.php          # Template article
│           ├── page-adhesion.php   # Page adhésion
│           ├── page-contact.php    # Page contact
│           ├── page-ressources.php # Page ressources
│           ├── page-qui-sommes-nous.php
│           ├── page-bilans.php
│           ├── page-nos-actions.php
│           └── js/
│               └── main.js         # Scripts JavaScript
├── wp-config-sample.php            # Exemple de configuration
└── .htaccess                       # Configuration Apache
```

## 🚀 Installation étape par étape

### 1. Installer WordPress

Si WordPress n'est pas encore installé :

1. Téléchargez WordPress depuis [wordpress.org](https://wordpress.org/download/)
2. Décompressez les fichiers dans votre répertoire web
3. Suivez l'installation WordPress standard

### 2. Activer le thème

1. Connectez-vous à l'administration WordPress (`/wp-admin`)
2. Allez dans **Apparence > Thèmes**
3. Le thème "APEESFT Theme" devrait apparaître
4. Cliquez sur **Activer**

### 3. Créer les pages nécessaires

Créez les pages suivantes dans **Pages > Ajouter** :

| Titre de la page | Slug (URL) | Template à attribuer |
|-----------------|------------|---------------------|
| Accueil | `accueil` | (par défaut) |
| Qui sommes-nous ? | `qui-sommes-nous` | (par défaut) |
| Adhésion & Assurance | `adhesion-assurance` | **Adhésion** |
| Bilans & Transparence | `bilans-transparence` | **Bilans** |
| Nos actions | `nos-actions` | **Nos actions** |
| Ressources & Partenariats | `ressources-partenariats` | **Ressources** |
| Contact | `contact` | **Contact** |

**Note :** Pour attribuer un template personnalisé :
- Éditez la page
- Dans la colonne de droite, section "Attributs de page"
- Sélectionnez le template dans le menu déroulant

### 4. Configurer le menu

1. Allez dans **Apparence > Menus**
2. Créez un nouveau menu (ex: "Menu Principal")
3. Ajoutez toutes les pages créées
4. Dans "Emplacements du thème", cochez "Menu Principal"
5. Cliquez sur **Enregistrer**

### 5. Configurer la page d'accueil

1. Allez dans **Réglages > Lecture**
2. Sélectionnez "Une page statique"
3. Page d'accueil : sélectionnez "Accueil"
4. Cliquez sur **Enregistrer**

### 6. Tester le formulaire d'adhésion

1. Visitez la page "Adhésion & Assurance"
2. Remplissez le formulaire
3. Vérifiez que l'email est bien reçu à l'adresse configurée dans **Réglages > Général**

## ⚙️ Configuration avancée

### Modifier les tarifs

Éditez `wp-content/themes/apeesft-theme/functions.php` :

```php
// Ligne 50-51
$cotisation = 30; // Modifier ici
$assurance_par_enfant = 15; // Modifier ici
```

### Personnaliser les couleurs

Éditez `wp-content/themes/apeesft-theme/style.css` :

```css
/* Couleurs principales */
- Bleu principal : #1e3c72
- Bleu secondaire : #2a5298
- Violet : #667eea
- Rouge : #ff6b6b
```

### Configurer l'envoi d'emails

Par défaut, WordPress utilise `wp_mail()`. Pour un meilleur contrôle :

1. Installez le plugin **WP Mail SMTP**
2. Configurez avec votre serveur SMTP
3. Testez l'envoi d'emails

## 🔌 Plugins recommandés

### Essentiels

- **WP Mail SMTP** - Pour l'envoi d'emails fiable
- **UpdraftPlus** - Pour les sauvegardes automatiques
- **Wordfence Security** - Pour la sécurité

### Pour les fonctionnalités avancées

- **Gravity Forms** ou **Contact Form 7** - Pour des formulaires plus avancés
- **WooCommerce** ou **Easy Digital Downloads** - Pour le paiement en ligne
- **The Events Calendar** - Pour le calendrier des événements
- **MemberPress** ou **Ultimate Member** - Pour l'espace adhérents
- **PDF Generator** - Pour générer les reçus PDF

## 📝 Prochaines étapes

1. **Ajouter du contenu** dans chaque page
2. **Télécharger les PDF** (statuts, bilans) et les lier
3. **Configurer le paiement en ligne** avec un plugin
4. **Tester sur mobile** pour vérifier le responsive
5. **Configurer HTTPS** pour la sécurité

## 🆘 Dépannage

### Le formulaire ne fonctionne pas
- Vérifiez que jQuery est chargé
- Ouvrez la console du navigateur (F12) pour voir les erreurs
- Vérifiez que les scripts sont bien enregistrés dans `functions.php`

### Les emails ne sont pas envoyés
- Installez WP Mail SMTP
- Vérifiez les logs d'erreur WordPress
- Testez avec un plugin de test d'email

### Le menu ne s'affiche pas
- Vérifiez que le menu est assigné à l'emplacement "Menu Principal"
- Vérifiez que `header.php` appelle bien `wp_nav_menu()`

## 📞 Support

Pour toute question, consultez le fichier `README.md` ou contactez l'équipe de développement.

---

**Bon développement ! 🚀**

