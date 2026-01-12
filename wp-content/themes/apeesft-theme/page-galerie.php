<?php
/**
 * Template pour la Galerie Photos/Vidéos
 */
get_header();
?>

<section class="content-section">
    <div class="container">
        <h1 class="section-title">Galerie Photos & Vidéos</h1>
        
        <div style="max-width: 1200px; margin: 0 auto;">
            <!-- Filtres -->
            <div style="background: white; padding: 2rem; border-radius: 10px; box-shadow: 0 3px 15px rgba(0,0,0,0.1); margin-bottom: 2rem;">
                <div style="display: flex; gap: 1rem; flex-wrap: wrap; justify-content: center;">
                    <button class="gallery-filter-btn active" data-filter="all" style="padding: 0.75rem 1.5rem; background: var(--primary-color); color: white; border: none; border-radius: 8px; cursor: pointer; font-weight: 600; transition: all 0.3s ease;">
                        Tous
                    </button>
                    <button class="gallery-filter-btn" data-filter="activites" style="padding: 0.75rem 1.5rem; background: var(--bg-light); color: var(--text-dark); border: none; border-radius: 8px; cursor: pointer; font-weight: 600; transition: all 0.3s ease;">
                        Activités
                    </button>
                    <button class="gallery-filter-btn" data-filter="evenements" style="padding: 0.75rem 1.5rem; background: var(--bg-light); color: var(--text-dark); border: none; border-radius: 8px; cursor: pointer; font-weight: 600; transition: all 0.3s ease;">
                        Événements
                    </button>
                    <button class="gallery-filter-btn" data-filter="ateliers" style="padding: 0.75rem 1.5rem; background: var(--bg-light); color: var(--text-dark); border: none; border-radius: 8px; cursor: pointer; font-weight: 600; transition: all 0.3s ease;">
                        Ateliers
                    </button>
                    <button class="gallery-filter-btn" data-filter="videos" style="padding: 0.75rem 1.5rem; background: var(--bg-light); color: var(--text-dark); border: none; border-radius: 8px; cursor: pointer; font-weight: 600; transition: all 0.3s ease;">
                        Vidéos
                    </button>
                </div>
            </div>
            
            <!-- Grille de galerie -->
            <div id="gallery-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 1.5rem; margin-bottom: 3rem;">
                <!-- Les éléments de la galerie seront générés par JavaScript -->
            </div>
            
            <!-- Message si aucune image -->
            <div id="no-items-message" style="display: none; text-align: center; padding: 3rem; background: white; border-radius: 10px; box-shadow: 0 3px 15px rgba(0,0,0,0.1);">
                <p style="color: var(--text-light); font-size: 1.1rem;">Aucun élément à afficher pour cette catégorie.</p>
            </div>
            
            <!-- Modal pour afficher les images/vidéos en grand -->
            <div id="gallery-modal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.95); z-index: 10000; align-items: center; justify-content: center;">
                <div style="position: relative; max-width: 90%; max-height: 90%;">
                    <button id="close-modal" style="position: absolute; top: -50px; right: 0; background: white; border: none; color: var(--text-dark); font-size: 2rem; width: 45px; height: 45px; border-radius: 50%; cursor: pointer; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease; z-index: 10001;">&times;</button>
                    <button id="prev-item" style="position: absolute; left: -60px; top: 50%; transform: translateY(-50%); background: white; border: none; color: var(--text-dark); font-size: 1.5rem; width: 45px; height: 45px; border-radius: 50%; cursor: pointer; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease; z-index: 10001;">‹</button>
                    <button id="next-item" style="position: absolute; right: -60px; top: 50%; transform: translateY(-50%); background: white; border: none; color: var(--text-dark); font-size: 1.5rem; width: 45px; height: 45px; border-radius: 50%; cursor: pointer; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease; z-index: 10001;">›</button>
                    <div id="modal-content" style="text-align: center;"></div>
                    <div id="modal-info" style="position: absolute; bottom: -50px; left: 50%; transform: translateX(-50%); color: white; text-align: center;">
                        <div id="modal-title" style="font-weight: 600; font-size: 1.1rem; margin-bottom: 0.25rem;"></div>
                        <div id="modal-date" style="font-size: 0.9rem; opacity: 0.9;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.gallery-item {
    position: relative;
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 0 3px 15px rgba(0,0,0,0.1);
    cursor: pointer;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    background: var(--bg-light);
    aspect-ratio: 4/3;
}

.gallery-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 20px rgba(0,0,0,0.2);
}

.gallery-item img,
.gallery-item video {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.gallery-item .gallery-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
    padding: 1.5rem;
    color: white;
    transform: translateY(100%);
    transition: transform 0.3s ease;
}

.gallery-item:hover .gallery-overlay {
    transform: translateY(0);
}

.gallery-item .gallery-title {
    font-weight: 600;
    margin-bottom: 0.5rem;
}

.gallery-item .gallery-date {
    font-size: 0.9rem;
    opacity: 0.9;
}

.gallery-filter-btn.active {
    background: var(--primary-color) !important;
    color: white !important;
}

.gallery-filter-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 3px 10px rgba(0,0,0,0.1);
}

#close-modal:hover,
#prev-item:hover,
#next-item:hover {
    background: var(--primary-color) !important;
    color: white !important;
    transform: scale(1.1);
}

@media (max-width: 768px) {
    #gallery-grid {
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)) !important;
        gap: 1rem !important;
    }
    
    #prev-item,
    #next-item {
        display: none !important;
    }
    
    #close-modal {
        top: 10px !important;
        right: 10px !important;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Chemin vers le dossier des images
    const galleryPath = '<?php echo get_template_directory_uri(); ?>/img/gallery/';
    
    // Données d'exemple (dans une vraie application, cela viendrait d'une base de données)
    // Les images doivent être placées dans le dossier img/gallery/
    const galleryItems = [
        // Exemples - à remplacer par les vraies images
        // Format: { id: 1, type: 'image', category: 'activites', title: 'Titre', date: 'DD/MM/YYYY', url: galleryPath + 'nom-image.jpg' },
        { id: 1, type: 'image', category: 'activites', title: 'Atelier orientation', date: '15/10/2024', url: galleryPath + 'placeholder.jpg' },
        { id: 2, type: 'image', category: 'evenements', title: 'Assemblée Générale', date: '20/09/2024', url: galleryPath + 'placeholder.jpg' },
        { id: 3, type: 'image', category: 'ateliers', title: 'Atelier parents', date: '05/11/2024', url: galleryPath + 'placeholder.jpg' },
        { id: 4, type: 'video', category: 'videos', title: 'Présentation APEESFT', date: '01/09/2024', url: 'https://www.youtube.com/embed/dQw4w9WgXcQ' },
        { id: 5, type: 'image', category: 'activites', title: 'Sortie scolaire', date: '12/10/2024', url: galleryPath + 'placeholder.jpg' },
        { id: 6, type: 'image', category: 'evenements', title: 'Fête de l\'école', date: '25/05/2024', url: galleryPath + 'placeholder.jpg' },
    ];
    
    const galleryGrid = document.getElementById('gallery-grid');
    const filterButtons = document.querySelectorAll('.gallery-filter-btn');
    const modal = document.getElementById('gallery-modal');
    const modalContent = document.getElementById('modal-content');
    const modalTitle = document.getElementById('modal-title');
    const modalDate = document.getElementById('modal-date');
    const closeModal = document.getElementById('close-modal');
    const prevItem = document.getElementById('prev-item');
    const nextItem = document.getElementById('next-item');
    const noItemsMessage = document.getElementById('no-items-message');
    
    let currentFilter = 'all';
    let currentItems = [];
    let currentIndex = 0;
    
    function renderGallery(filter = 'all') {
        galleryGrid.innerHTML = '';
        noItemsMessage.style.display = 'none';
        
        currentItems = filter === 'all' 
            ? galleryItems 
            : galleryItems.filter(item => item.category === filter);
        
        if (currentItems.length === 0) {
            noItemsMessage.style.display = 'block';
            return;
        }
        
        currentItems.forEach((item, index) => {
            const galleryItem = document.createElement('div');
            galleryItem.className = 'gallery-item';
            galleryItem.dataset.category = item.category;
            galleryItem.dataset.index = index;
            
            if (item.type === 'image') {
                galleryItem.innerHTML = `
                    <img src="${item.url}" alt="${item.title}" loading="lazy" onerror="this.src='data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'300\' height=\'225\'%3E%3Crect fill=\'%23f0f0f0\' width=\'300\' height=\'225\'/%3E%3Ctext x=\'50%25\' y=\'50%25\' text-anchor=\'middle\' dy=\'.3em\' fill=\'%23999\' font-family=\'sans-serif\' font-size=\'14\'%3EImage à venir%3C/text%3E%3C/svg%3E'">
                    <div class="gallery-overlay">
                        <div class="gallery-title">${item.title}</div>
                        <div class="gallery-date">${item.date}</div>
                    </div>
                `;
            } else {
                galleryItem.innerHTML = `
                    <div style="width: 100%; height: 100%; background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); display: flex; align-items: center; justify-content: center; color: white; font-size: 4rem;">
                        ▶
                    </div>
                    <div class="gallery-overlay">
                        <div class="gallery-title">${item.title}</div>
                        <div class="gallery-date">${item.date}</div>
                    </div>
                `;
            }
            
            galleryItem.addEventListener('click', () => {
                currentIndex = index;
                openModal(item);
            });
            galleryGrid.appendChild(galleryItem);
        });
    }
    
    function openModal(item) {
        modal.style.display = 'flex';
        
        if (item.type === 'image') {
            modalContent.innerHTML = `<img src="${item.url}" alt="${item.title}" style="max-width: 100%; max-height: 90vh; border-radius: 10px; box-shadow: 0 5px 30px rgba(0,0,0,0.5);" onerror="this.src='data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'800\' height=\'600\'%3E%3Crect fill=\'%23f0f0f0\' width=\'800\' height=\'600\'/%3E%3Ctext x=\'50%25\' y=\'50%25\' text-anchor=\'middle\' dy=\'.3em\' fill=\'%23999\' font-family=\'sans-serif\' font-size=\'24\'%3EImage à venir%3C/text%3E%3C/svg%3E'">`;
        } else {
            modalContent.innerHTML = `
                <iframe 
                    width="800" 
                    height="450" 
                    src="${item.url}" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen
                    style="border-radius: 10px; box-shadow: 0 5px 30px rgba(0,0,0,0.5);">
                </iframe>
            `;
        }
        
        modalTitle.textContent = item.title;
        modalDate.textContent = item.date;
        
        // Afficher/masquer les boutons de navigation
        prevItem.style.display = currentItems.length > 1 ? 'flex' : 'none';
        nextItem.style.display = currentItems.length > 1 ? 'flex' : 'none';
        
        document.body.style.overflow = 'hidden';
    }
    
    function closeModalFunc() {
        modal.style.display = 'none';
        modalContent.innerHTML = '';
        modalTitle.textContent = '';
        modalDate.textContent = '';
        document.body.style.overflow = '';
    }
    
    function navigateModal(direction) {
        if (direction === 'next') {
            currentIndex = (currentIndex + 1) % currentItems.length;
        } else {
            currentIndex = (currentIndex - 1 + currentItems.length) % currentItems.length;
        }
        openModal(currentItems[currentIndex]);
    }
    
    closeModal.addEventListener('click', closeModalFunc);
    prevItem.addEventListener('click', (e) => {
        e.stopPropagation();
        navigateModal('prev');
    });
    nextItem.addEventListener('click', (e) => {
        e.stopPropagation();
        navigateModal('next');
    });
    
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            closeModalFunc();
        }
    });
    
    // Navigation au clavier
    document.addEventListener('keydown', function(e) {
        if (modal.style.display === 'flex') {
            if (e.key === 'Escape') {
                closeModalFunc();
            } else if (e.key === 'ArrowLeft') {
                navigateModal('prev');
            } else if (e.key === 'ArrowRight') {
                navigateModal('next');
            }
        }
    });
    
    filterButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            filterButtons.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            currentFilter = this.dataset.filter;
            renderGallery(currentFilter);
        });
    });
    
    renderGallery();
});
</script>

<?php get_footer(); ?>
