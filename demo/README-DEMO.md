# Démonstration du site APEESFT

Cette démonstration permet de visualiser le design et tester les fonctionnalités front-end du site sans avoir besoin d'installer WordPress.

## 🚀 Lancer la démonstration

### Option 1 : Serveur Python (Recommandé)

**Windows :**
```bash
cd demo
start-demo.bat
```

**Linux/Mac :**
```bash
cd demo
chmod +x start-demo.sh
./start-demo.sh
```

**Ou manuellement :**
```bash
cd demo
python -m http.server 8000
# ou
python3 -m http.server 8000
```

Puis ouvrez votre navigateur sur : **http://localhost:8000**

### Option 2 : Ouvrir directement les fichiers HTML

Vous pouvez aussi ouvrir directement `demo/index.html` dans votre navigateur, mais certaines fonctionnalités JavaScript peuvent ne pas fonctionner correctement.

## 📄 Pages disponibles

- **index.html** - Page d'accueil
- **adhesion.html** - Formulaire d'adhésion (fonctionnel avec calcul automatique)
- **contact.html** - Formulaire de contact
- **qui-sommes-nous.html** - Page présentation
- **bilans.html** - Page bilans
- **nos-actions.html** - Page actions
- **ressources.html** - Page ressources

## ✨ Fonctionnalités testables

✅ **Formulaire d'adhésion**
- Ajout/suppression d'enfants dynamiquement
- Calcul automatique des tarifs (30 DT + 15 DT/enfant)
- Validation des champs
- Affichage du récapitulatif

✅ **Formulaire de contact**
- Validation des champs
- Message de confirmation

✅ **Design responsive**
- Testez en redimensionnant la fenêtre
- Compatible mobile, tablette, desktop

## 📝 Notes

- Les formulaires simulent l'envoi (pas de vraie connexion serveur)
- Les données ne sont pas sauvegardées
- C'est une démonstration visuelle et fonctionnelle du front-end

## 🔄 Pour utiliser avec WordPress

Pour utiliser ce thème avec WordPress, suivez les instructions dans `../INSTALLATION.md`

