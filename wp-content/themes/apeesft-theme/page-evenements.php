<?php
/**
 * Template pour la page Événements
 */
get_header();
?>

<section class="content-section">
    <div class="container">
        <h1 class="section-title">Événements</h1>
        
        <div style="max-width: 1200px; margin: 0 auto;">
            <!-- Calendrier interactif -->
            <div style="background: white; padding: 3rem; border-radius: 10px; box-shadow: 0 3px 15px rgba(0,0,0,0.1); margin-bottom: 3rem;">
                <h2 style="color: var(--primary-color); margin-bottom: 2rem; text-align: center;">Calendrier interactif</h2>
                
                <div id="calendar-container" style="margin-bottom: 2rem;">
                    <!-- Le calendrier sera généré par JavaScript -->
                    <div class="calendar-wrapper" style="max-width: 800px; margin: 0 auto;">
                        <div class="calendar-header" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
                            <button class="calendar-nav-btn" id="prev-month" style="background: var(--primary-color); color: white; border: none; padding: 0.5rem 1rem; border-radius: 5px; cursor: pointer;">←</button>
                            <h3 id="current-month-year" style="color: var(--text-dark); font-size: 1.5rem; margin: 0;"></h3>
                            <button class="calendar-nav-btn" id="next-month" style="background: var(--primary-color); color: white; border: none; padding: 0.5rem 1rem; border-radius: 5px; cursor: pointer;">→</button>
                        </div>
                        <div id="calendar-grid" style="display: grid; grid-template-columns: repeat(7, 1fr); gap: 0.5rem;"></div>
                    </div>
                </div>
                
                <!-- Liste des événements -->
                <div id="events-list" style="margin-top: 2rem;">
                    <h3 style="color: var(--primary-color); margin-bottom: 1.5rem;">Événements à venir</h3>
                    <div id="events-container"></div>
                </div>
            </div>
            
            <!-- Formulaire d'inscription -->
            <div style="background: white; padding: 3rem; border-radius: 10px; box-shadow: 0 3px 15px rgba(0,0,0,0.1);">
                <h2 style="color: var(--primary-color); margin-bottom: 2rem; text-align: center;">Inscription à un événement</h2>
                
                <form id="event-registration-form" style="max-width: 600px; margin: 0 auto;">
                    <div class="form-group" style="margin-bottom: 1.5rem;">
                        <label for="event-name" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--text-dark);">Nom de l'événement *</label>
                        <select id="event-name" name="event_name" required style="width: 100%; padding: 0.75rem; border: 1px solid var(--border-color); border-radius: 5px; font-size: 1rem;">
                            <option value="">Sélectionner un événement...</option>
                            <option value="ag">Assemblée Générale</option>
                            <option value="reunion">Réunion parents</option>
                            <option value="atelier">Atelier</option>
                            <option value="evenement-scolaire">Événement scolaire</option>
                        </select>
                    </div>
                    
                    <div class="form-group" style="margin-bottom: 1.5rem;">
                        <label for="event-date" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--text-dark);">Date de l'événement *</label>
                        <input type="date" id="event-date" name="event_date" required style="width: 100%; padding: 0.75rem; border: 1px solid var(--border-color); border-radius: 5px; font-size: 1rem;">
                    </div>
                    
                    <div class="form-group" style="margin-bottom: 1.5rem;">
                        <label for="participant-name" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--text-dark);">Nom complet *</label>
                        <input type="text" id="participant-name" name="participant_name" required style="width: 100%; padding: 0.75rem; border: 1px solid var(--border-color); border-radius: 5px; font-size: 1rem;">
                    </div>
                    
                    <div class="form-group" style="margin-bottom: 1.5rem;">
                        <label for="participant-email" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--text-dark);">Email *</label>
                        <input type="email" id="participant-email" name="participant_email" required style="width: 100%; padding: 0.75rem; border: 1px solid var(--border-color); border-radius: 5px; font-size: 1rem;">
                    </div>
                    
                    <div class="form-group" style="margin-bottom: 1.5rem;">
                        <label for="participant-phone" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--text-dark);">Téléphone</label>
                        <input type="tel" id="participant-phone" name="participant_phone" style="width: 100%; padding: 0.75rem; border: 1px solid var(--border-color); border-radius: 5px; font-size: 1rem;">
                    </div>
                    
                    <div class="form-group" style="margin-bottom: 1.5rem;">
                        <label for="participant-notes" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--text-dark);">Remarques</label>
                        <textarea id="participant-notes" name="participant_notes" rows="4" style="width: 100%; padding: 0.75rem; border: 1px solid var(--border-color); border-radius: 5px; font-size: 1rem; resize: vertical;"></textarea>
                    </div>
                    
                    <div id="event-registration-message" style="display: none; padding: 1rem; border-radius: 5px; margin-bottom: 1rem;"></div>
                    
                    <button type="submit" class="btn-primary" style="width: 100%; padding: 1rem; background: var(--primary-color); color: white; border: none; border-radius: 8px; font-size: 1.1rem; font-weight: 600; cursor: pointer; transition: all 0.3s ease;">
                        S'inscrire à l'événement
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
// Calendrier interactif simple
document.addEventListener('DOMContentLoaded', function() {
    let currentDate = new Date();
    const monthNames = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
    const dayNames = ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam'];
    
    // Événements d'exemple (AG, réunions, ateliers)
    const events = [
        { date: new Date(2026, 0, 15), title: 'Assemblée Générale', type: 'ag' },
        { date: new Date(2026, 0, 22), title: 'Réunion parents', type: 'reunion' },
        { date: new Date(2026, 1, 5), title: 'Atelier orientation', type: 'atelier' },
        { date: new Date(2026, 1, 12), title: 'Atelier prévention', type: 'atelier' },
        { date: new Date(2026, 2, 10), title: 'Réunion parents', type: 'reunion' },
    ];
    
    function renderCalendar() {
        const year = currentDate.getFullYear();
        const month = currentDate.getMonth();
        
        document.getElementById('current-month-year').textContent = monthNames[month] + ' ' + year;
        
        const firstDay = new Date(year, month, 1).getDay();
        const daysInMonth = new Date(year, month + 1, 0).getDate();
        
        const grid = document.getElementById('calendar-grid');
        grid.innerHTML = '';
        
        // En-têtes des jours
        dayNames.forEach(day => {
            const header = document.createElement('div');
            header.textContent = day;
            header.style.textAlign = 'center';
            header.style.fontWeight = '600';
            header.style.color = 'var(--primary-color)';
            header.style.padding = '0.5rem';
            grid.appendChild(header);
        });
        
        // Jours vides au début
        for (let i = 0; i < firstDay; i++) {
            const empty = document.createElement('div');
            grid.appendChild(empty);
        }
        
        // Jours du mois
        for (let day = 1; day <= daysInMonth; day++) {
            const dayCell = document.createElement('div');
            dayCell.textContent = day;
            dayCell.style.padding = '0.75rem';
            dayCell.style.textAlign = 'center';
            dayCell.style.border = '1px solid var(--border-color)';
            dayCell.style.borderRadius = '5px';
            dayCell.style.cursor = 'pointer';
            dayCell.style.transition = 'all 0.2s ease';
            
            const cellDate = new Date(year, month, day);
            const event = events.find(e => 
                e.date.getDate() === day && 
                e.date.getMonth() === month && 
                e.date.getFullYear() === year
            );
            
            if (event) {
                dayCell.style.background = 'var(--primary-color)';
                dayCell.style.color = 'white';
                dayCell.style.fontWeight = '600';
                dayCell.title = event.title;
            } else {
                dayCell.style.background = 'white';
            }
            
            dayCell.addEventListener('mouseenter', function() {
                if (!event) {
                    this.style.background = 'var(--bg-light)';
                }
            });
            
            dayCell.addEventListener('mouseleave', function() {
                if (!event) {
                    this.style.background = 'white';
                }
            });
            
            grid.appendChild(dayCell);
        }
    }
    
    document.getElementById('prev-month').addEventListener('click', function() {
        currentDate.setMonth(currentDate.getMonth() - 1);
        renderCalendar();
        renderEvents();
    });
    
    document.getElementById('next-month').addEventListener('click', function() {
        currentDate.setMonth(currentDate.getMonth() + 1);
        renderCalendar();
        renderEvents();
    });
    
    function renderEvents() {
        const container = document.getElementById('events-container');
        container.innerHTML = '';
        
        const upcomingEvents = events.filter(e => e.date >= new Date()).sort((a, b) => a.date - b.date);
        
        if (upcomingEvents.length === 0) {
            container.innerHTML = '<p style="color: var(--text-light); text-align: center; padding: 2rem;">Aucun événement à venir pour le moment.</p>';
            return;
        }
        
        upcomingEvents.forEach(event => {
            const eventCard = document.createElement('div');
            eventCard.style.background = 'var(--bg-light)';
            eventCard.style.padding = '1.5rem';
            eventCard.style.borderRadius = '8px';
            eventCard.style.marginBottom = '1rem';
            eventCard.style.borderLeft = '4px solid var(--primary-color)';
            
            const dateStr = event.date.toLocaleDateString('fr-FR', { 
                weekday: 'long', 
                year: 'numeric', 
                month: 'long', 
                day: 'numeric' 
            });
            
            eventCard.innerHTML = `
                <h4 style="color: var(--primary-color); margin-bottom: 0.5rem;">${event.title}</h4>
                <p style="color: var(--text-light); margin: 0;">${dateStr}</p>
            `;
            
            container.appendChild(eventCard);
        });
    }
    
    // Formulaire d'inscription
    document.getElementById('event-registration-form').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const messageDiv = document.getElementById('event-registration-message');
        messageDiv.style.display = 'block';
        messageDiv.style.background = '#d4edda';
        messageDiv.style.color = '#155724';
        messageDiv.style.border = '1px solid #c3e6cb';
        messageDiv.textContent = 'Votre inscription a été enregistrée avec succès ! Vous recevrez un email de confirmation.';
        
        this.reset();
        
        setTimeout(() => {
            messageDiv.style.display = 'none';
        }, 5000);
    });
    
    renderCalendar();
    renderEvents();
});
</script>

<?php get_footer(); ?>
