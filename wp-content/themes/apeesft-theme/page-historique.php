<?php
/**
 * Template pour la page Historique de l'association
 */
get_header();
?>

<section class="content-section">
    <div class="container">
        <h1 class="section-title">Historique de l'association</h1>
        
            <div style="max-width: 1200px; margin: 0 auto;">
                <!-- Timeline Container -->
                <div class="timeline-container" style="position: relative; padding: 2rem 0;">
                    
                    <!-- 1984 - Création -->
                    <div class="timeline-item" style="display: flex; gap: 0; margin-bottom: 4rem; opacity: 0; transform: translateY(30px); transition: all 0.8s ease; position: relative;" data-year="1984">
                        <div class="timeline-year" style="flex: 0 0 250px; text-align: right; padding-right: 2rem; position: relative;">
                            <div style="font-size: 2.5rem; font-weight: 800; color: var(--primary-color); margin-bottom: 0.5rem;">1984</div>
                            <div style="font-size: 1.1rem; color: var(--text-light); font-weight: 600;">Création de l'APEESFT</div>
                        </div>
                        <div style="flex: 0 0 60px; position: relative; display: flex; align-items: center; justify-content: center;">
                            <div class="timeline-line-left" style="width: 2rem; height: 2px; background: var(--primary-color);"></div>
                            <div class="timeline-dot" style="position: absolute; width: 16px; height: 16px; background: var(--primary-color); border-radius: 50%; border: 4px solid white; box-shadow: 0 0 0 4px var(--primary-color); z-index: 10;"></div>
                            <div class="timeline-line-right" style="width: 2rem; height: 2px; background: var(--primary-color);"></div>
                        </div>
                        <div class="timeline-content" style="flex: 1; background: white; padding: 2.5rem; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.1); position: relative; margin-left: 0;">
                        <div class="timeline-image" style="width: 100%; height: 250px; background: var(--bg-light); border-radius: 10px; margin-bottom: 1.5rem; display: flex; align-items: center; justify-content: center; overflow: hidden;">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/historique/1984.jpg" alt="Création APEESFT 1984" style="width: 100%; height: 100%; object-fit: cover; display: none;" onerror="this.style.display='none'; this.parentElement.innerHTML='<div style=\'color: var(--text-light); font-size: 0.9rem;\'>Photo à venir</div>';">
                            <div style="color: var(--text-light); font-size: 0.9rem; display: block;">Photo à venir</div>
                        </div>
                        <p style="color: var(--text-dark); line-height: 1.8; font-size: 1.05rem; margin: 0;">
                            L'Association des Parents d'Élèves des Établissements Scolaires Français en Tunisie est créée pour représenter et accompagner les familles des élèves scolarisés dans les établissements français en Tunisie.
                        </p>
                    </div>
                </div>

                    <!-- 1990-2000 - Développement -->
                    <div class="timeline-item" style="display: flex; gap: 0; margin-bottom: 4rem; opacity: 0; transform: translateY(30px); transition: all 0.8s ease 0.2s; position: relative;" data-year="1990">
                        <div class="timeline-year" style="flex: 0 0 250px; text-align: right; padding-right: 2rem; position: relative;">
                            <div style="font-size: 2.5rem; font-weight: 800; color: var(--primary-color); margin-bottom: 0.5rem;">1990-2000</div>
                            <div style="font-size: 1.1rem; color: var(--text-light); font-weight: 600;">Développement</div>
                        </div>
                        <div style="flex: 0 0 60px; position: relative; display: flex; align-items: center; justify-content: center;">
                            <div class="timeline-line-left" style="width: 2rem; height: 2px; background: var(--primary-color);"></div>
                            <div class="timeline-dot" style="position: absolute; width: 16px; height: 16px; background: var(--primary-color); border-radius: 50%; border: 4px solid white; box-shadow: 0 0 0 4px var(--primary-color); z-index: 10;"></div>
                            <div class="timeline-line-right" style="width: 2rem; height: 2px; background: var(--primary-color);"></div>
                        </div>
                        <div class="timeline-content" style="flex: 1; background: white; padding: 2.5rem; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.1); position: relative; margin-left: 0;">
                        <div class="timeline-image" style="width: 100%; height: 250px; background: var(--bg-light); border-radius: 10px; margin-bottom: 1.5rem; display: flex; align-items: center; justify-content: center; overflow: hidden;">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/historique/1990-2000.jpg" alt="Développement 1990-2000" style="width: 100%; height: 100%; object-fit: cover; display: none;" onerror="this.style.display='none'; this.parentElement.innerHTML='<div style=\'color: var(--text-light); font-size: 0.9rem;\'>Photo à venir</div>';">
                            <div style="color: var(--text-light); font-size: 0.9rem; display: block;">Photo à venir</div>
                        </div>
                        <p style="color: var(--text-dark); line-height: 1.8; font-size: 1.05rem; margin: 0;">
                            L'association se développe et renforce sa présence dans les différents établissements français en Tunisie, tout en consolidant ses relations avec les institutions éducatives.
                        </p>
                    </div>
                </div>

                    <!-- Adhésion FAPEE -->
                    <div class="timeline-item" style="display: flex; gap: 0; margin-bottom: 4rem; opacity: 0; transform: translateY(30px); transition: all 0.8s ease 0.4s; position: relative;" data-year="fapee">
                        <div class="timeline-year" style="flex: 0 0 250px; text-align: right; padding-right: 2rem; position: relative;">
                            <div style="font-size: 2.5rem; font-weight: 800; color: var(--primary-color); margin-bottom: 0.5rem;">FAPEE</div>
                            <div style="font-size: 1.1rem; color: var(--text-light); font-weight: 600;">Adhésion</div>
                        </div>
                        <div style="flex: 0 0 60px; position: relative; display: flex; align-items: center; justify-content: center;">
                            <div class="timeline-line-left" style="width: 2rem; height: 2px; background: var(--primary-color);"></div>
                            <div class="timeline-dot" style="position: absolute; width: 16px; height: 16px; background: var(--primary-color); border-radius: 50%; border: 4px solid white; box-shadow: 0 0 0 4px var(--primary-color); z-index: 10;"></div>
                            <div class="timeline-line-right" style="width: 2rem; height: 2px; background: var(--primary-color);"></div>
                        </div>
                        <div class="timeline-content" style="flex: 1; background: white; padding: 2.5rem; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.1); position: relative; margin-left: 0;">
                        <div class="timeline-image" style="width: 100%; height: 250px; background: var(--bg-light); border-radius: 10px; margin-bottom: 1.5rem; display: flex; align-items: center; justify-content: center; overflow: hidden;">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/historique/fapee.jpg" alt="Adhésion FAPEE" style="width: 100%; height: 100%; object-fit: cover; display: none;" onerror="this.style.display='none'; this.parentElement.innerHTML='<div style=\'color: var(--text-light); font-size: 0.9rem;\'>Photo à venir</div>';">
                            <div style="color: var(--text-light); font-size: 0.9rem; display: block;">Photo à venir</div>
                        </div>
                        <p style="color: var(--text-dark); line-height: 1.8; font-size: 1.05rem; margin: 0;">
                            L'APEESFT devient membre de la Fédération des Associations de Parents d'Élèves des Établissements Français à l'Étranger (FAPEE), renforçant ainsi son réseau et son influence.
                        </p>
                    </div>
                </div>

                    <!-- Aujourd'hui -->
                    <div class="timeline-item" style="display: flex; gap: 0; margin-bottom: 4rem; opacity: 0; transform: translateY(30px); transition: all 0.8s ease 0.6s; position: relative;" data-year="today">
                        <div class="timeline-year" style="flex: 0 0 250px; text-align: right; padding-right: 2rem; position: relative;">
                            <div style="font-size: 2.5rem; font-weight: 800; color: var(--primary-color); margin-bottom: 0.5rem;">Aujourd'hui</div>
                            <div style="font-size: 1.1rem; color: var(--text-light); font-weight: 600;">2026</div>
                        </div>
                        <div style="flex: 0 0 60px; position: relative; display: flex; align-items: center; justify-content: center;">
                            <div class="timeline-line-left" style="width: 2rem; height: 2px; background: var(--primary-color);"></div>
                            <div class="timeline-dot" style="position: absolute; width: 16px; height: 16px; background: var(--secondary-color); border-radius: 50%; border: 4px solid white; box-shadow: 0 0 0 4px var(--secondary-color); z-index: 10;"></div>
                            <div class="timeline-line-right" style="width: 2rem; height: 2px; background: var(--primary-color);"></div>
                        </div>
                        <div class="timeline-content" style="flex: 1; background: white; padding: 2.5rem; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.1); position: relative; margin-left: 0;">
                        <div class="timeline-image" style="width: 100%; height: 250px; background: var(--bg-light); border-radius: 10px; margin-bottom: 1.5rem; display: flex; align-items: center; justify-content: center; overflow: hidden;">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/historique/aujourdhui.jpg" alt="APEESFT Aujourd'hui" style="width: 100%; height: 100%; object-fit: cover; display: none;" onerror="this.style.display='none'; this.parentElement.innerHTML='<div style=\'color: var(--text-light); font-size: 0.9rem;\'>Photo à venir</div>';">
                            <div style="color: var(--text-light); font-size: 0.9rem; display: block;">Photo à venir</div>
                        </div>
                        <p style="color: var(--text-dark); line-height: 1.8; font-size: 1.05rem; margin: 0;">
                            L'APEESFT continue d'œuvrer pour le bien-être et la réussite scolaire de tous les élèves, en favorisant le dialogue entre les parents, les équipes éducatives et les institutions.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<style>
/* Animation au scroll */
.timeline-item.visible {
    opacity: 1 !important;
    transform: translateY(0) !important;
}

    /* Ligne verticale de la timeline - au centre */
    .timeline-container::after {
        content: '';
        position: absolute;
        left: calc(250px + 30px);
        top: 0;
        bottom: 0;
        width: 3px;
        background: linear-gradient(to bottom, var(--primary-color), var(--secondary-color));
        z-index: 1;
    }
    
    @media (max-width: 1200px) {
        .timeline-container::after {
            left: calc(220px + 30px);
        }
    }
    
    @media (max-width: 900px) {
        .timeline-container::after {
            left: 20px;
        }
    }

@media (max-width: 768px) {
    .timeline-item {
        flex-direction: column !important;
        gap: 1.5rem !important;
    }
    
    .timeline-year {
        flex: none !important;
        text-align: left !important;
    }
    
        .timeline-container::after {
            left: 20px !important;
        }
        
        .timeline-item {
            flex-direction: column !important;
            gap: 1.5rem !important;
        }
        
        .timeline-year {
            flex: none !important;
            text-align: left !important;
            padding-right: 0 !important;
        }
        
        .timeline-line-left,
        .timeline-line-right {
            display: none !important;
        }
        
        .timeline-dot {
            left: 10px !important;
            right: auto !important;
        }
        
        .timeline-content {
            margin-left: 0 !important;
        }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const timelineItems = document.querySelectorAll('.timeline-item');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, {
        threshold: 0.2,
        rootMargin: '0px 0px -100px 0px'
    });
    
    timelineItems.forEach(item => {
        observer.observe(item);
    });
});
</script>

<?php get_footer(); ?>
