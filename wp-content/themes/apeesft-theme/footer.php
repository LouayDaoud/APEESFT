<footer class="site-footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-section">
                <h3>APEESFT</h3>
                <p>Association des Parents d'Élèves de l'École Secondaire Franco-Tunisienne</p>
            </div>
            <div class="footer-section">
                <h3>Liens utiles</h3>
                <a href="<?php echo esc_url(home_url('/statuts')); ?>">Statuts</a>
                <a href="https://ecole-sans-peur.tn" target="_blank">École Sans Peur</a>
                <a href="https://www.aefe.fr" target="_blank">AEFE</a>
                <a href="https://www.fapee.com" target="_blank">FAPEE</a>
            </div>
            <div class="footer-section">
                <h3>Contact</h3>
                <p>Email : <?php echo get_option('admin_email'); ?></p>
            </div>
            <div class="footer-section">
                <h3>Mentions légales</h3>
                <a href="<?php echo esc_url(home_url('/mentions-legales')); ?>">Mentions légales</a>
                <a href="<?php echo esc_url(home_url('/politique-confidentialite')); ?>">Politique de confidentialité</a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> APEESFT. Tous droits réservés.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>

