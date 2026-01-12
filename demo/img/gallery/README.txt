GALERIE PHOTOS & VIDÉOS
=======================

Pour ajouter des photos et vidéos à la galerie :

1. PLACER LES IMAGES :
   - Ajoutez vos images dans ce dossier (demo/img/gallery/)
   - Formats acceptés : JPG, PNG, GIF, WebP
   - Nommez les fichiers de manière descriptive (ex: atelier-orientation-2024.jpg)

2. MODIFIER LE FICHIER galerie.html :
   - Ouvrez demo/galerie.html
   - Dans la section <script>, trouvez le tableau "galleryItems"
   - Ajoutez vos images en suivant ce format :
   
     {
       id: 7,
       type: 'image',
       category: 'activites',  // ou 'evenements', 'ateliers'
       title: 'Titre de l\'image',
       date: '15/10/2024',
       url: 'img/gallery/nom-de-votre-image.jpg'
     }

3. CATÉGORIES DISPONIBLES :
   - 'activites' : Activités diverses
   - 'evenements' : Événements organisés
   - 'ateliers' : Ateliers et formations
   - 'videos' : Vidéos (utilisez l'URL d'embed YouTube)

4. POUR LES VIDÉOS :
   - Utilisez l'URL d'embed YouTube (ex: https://www.youtube.com/embed/VIDEO_ID)
   - Type: 'video' au lieu de 'image'

5. EXEMPLE COMPLET :
   {
     id: 10,
     type: 'image',
     category: 'evenements',
     title: 'Assemblée Générale 2024',
     date: '20/09/2024',
     url: 'img/gallery/ag-2024.jpg'
   }
