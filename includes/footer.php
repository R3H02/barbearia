    </main>
    
    <footer class="footer" id="contato">
        <div class="footer-content">
            <div class="footer-info">
                <h3>Barbearia Moderna</h3>
                <p><i class="fas fa-map-marker-alt"></i> Av. Principal, 123 - Centro</p>
                <p><i class="fas fa-phone"></i> (11) 99999-9999</p>
                <p><i class="fas fa-envelope"></i> contato@barbeariamoderna.com</p>
            </div>
            
            <div class="footer-social">
                <h3>Redes Sociais</h3>
                <div class="social-links">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                    <a href="#"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; 2024 Barbearia Moderna. Todos os direitos reservados.</p>
        </div>
    </footer>
    
    <!-- JavaScript -->
    <script>
        // Header scroll effect
        window.addEventListener('scroll', function() {
            const header = document.getElementById('header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
        
        // Mobile menu
        const hamburger = document.getElementById('hamburger');
        const navMenu = document.getElementById('navMenu');
        
        hamburger.addEventListener('click', function() {
            hamburger.classList.toggle('active');
            navMenu.classList.toggle('active');
        });
        
        // Close mobile menu when clicking on a link
        document.querySelectorAll('.nav-menu a').forEach(link => {
            link.addEventListener('click', () => {
                hamburger.classList.remove('active');
                navMenu.classList.remove('active');
            });
        });
        
        // Animation on scroll
        function checkScroll() {
            const elements = document.querySelectorAll('.fade-in, .slide-left, .slide-right');
            
            elements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const windowHeight = window.innerHeight;
                
                if (elementTop < windowHeight - 100) {
                    element.style.opacity = '1';
                }
            });
        }
        
        window.addEventListener('scroll', checkScroll);
        window.addEventListener('load', checkScroll);
        
        // Fade out messages
        document.querySelectorAll('.message i').forEach(closeBtn => {
            closeBtn.addEventListener('click', function() {
                this.parentElement.remove();
            });
        });
        
        setTimeout(() => {
            document.querySelectorAll('.message').forEach(msg => {
                msg.style.opacity = '0';
                setTimeout(() => msg.remove(), 500);
            });
        }, 5000);
    </script>
</body>
</html>
<?php
// Limpa as mensagens da sessão após exibir
if (isset($_SESSION['message'])) {
    unset($_SESSION['message']);
}
if (isset($_SESSION['error'])) {
    unset($_SESSION['error']);
}
?>