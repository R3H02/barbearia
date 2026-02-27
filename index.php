<?php
require_once 'includes/functions.php';
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <h1 class="hero-title fade-in">SEU ESTILO <span>COMEÇA AQUI</span></h1>
        <p class="hero-subtitle fade-in delay-1">Experiência única em cuidados masculinos</p>
        <a href="agendamento.php" class="btn btn-primary fade-in delay-2">Agendar Agora</a>
    </div>
</section>

<!-- About Section -->
<section class="about" id="sobre">
    <h2 class="section-title slide-left">SOBRE <span>NÓS</span></h2>
    
    <div class="about-content">
        <div class="about-text slide-left">
            <p>Fundada em 2020, a Barbearia Moderna nasceu com o propósito de oferecer uma experiência única em cuidados masculinos. Nossa missão é proporcionar não apenas cortes impecáveis, mas momentos de relaxamento e estilo.</p>
            <p>Contamos com profissionais altamente qualificados e sempre atualizados com as últimas tendências. Utilizamos produtos de alta qualidade e técnicas modernas para garantir o melhor resultado para nossos clientes.</p>
            <p>Mais que uma barbearia, somos um espaço de convivência onde você pode relaxar, conversar e sair renovado.</p>
        </div>
        
        <div class="about-stats slide-right">
            <div class="stat-item">
                <h3>5000+</h3>
                <p>Clientes Atendidos</p>
            </div>
            <div class="stat-item">
                <h3>5</h3>
                <p>Anos de Experiência</p>
            </div>
            <div class="stat-item">
                <h3>15+</h3>
                <p>Profissionais</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services" id="servicos">
    <h2 class="section-title slide-left">NOSSOS <span>SERVIÇOS</span></h2>
    
    <div class="services-grid">
        <div class="service-card fade-in">
            <div class="service-icon">
                <i class="fas fa-cut"></i>
            </div>
            <h3>Corte Tradicional</h3>
            <p>Corte clássico com acabamento perfeito</p>
            <div class="service-price">R$ 45,00</div>
        </div>
        
        <div class="service-card fade-in delay-1">
            <div class="service-icon">
                <i class="fas fa-wind"></i>
            </div>
            <h3>Degradê</h3>
            <p>Técnica moderna de fade personalizado</p>
            <div class="service-price">R$ 55,00</div>
        </div>
        
        <div class="service-card fade-in delay-2">
            <div class="service-icon">
                <i class="fas fa-smile"></i>
            </div>
            <h3>Barba</h3>
            <p>Modelagem e hidratação completa</p>
            <div class="service-price">R$ 40,00</div>
        </div>
        
        <div class="service-card fade-in delay-3">
            <div class="service-icon">
                <i class="fas fa-star"></i>
            </div>
            <h3>Combo</h3>
            <p>Corte + Barba com desconto especial</p>
            <div class="service-price">R$ 85,00</div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>