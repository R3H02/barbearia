<?php
require_once 'includes/functions.php';
include 'includes/header.php';

// Processa o formulário de agendamento
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = validateInput($_POST['nome'] ?? '');
    $telefone = validateInput($_POST['telefone'] ?? '');
    $servico = validateInput($_POST['servico'] ?? '');
    $data = validateInput($_POST['data'] ?? '');
    $horario = validateInput($_POST['horario'] ?? '');
    
    // Validação básica
    $campos = [$nome, $telefone, $servico, $data, $horario];
    
    if (checkEmptyFields($campos)) {
        $_SESSION['error'] = "Por favor, preencha todos os campos!";
    } else {
        $_SESSION['message'] = "Agendamento realizado com sucesso! Entraremos em contato para confirmação.";
        // Aqui futuramente será inserido no banco de dados
    }
    
    header('Location: agendamento.php');
    exit();
}
?>

<section class="hero" style="height: 40vh; background-attachment: scroll;">
    <div class="hero-content">
        <h1 class="hero-title fade-in">AGENDE SEU <span>HORÁRIO</span></h1>
        <p class="hero-subtitle fade-in delay-1">Escolha o melhor dia e horário para você</p>
    </div>
</section>

<section class="about">
    <div class="form-container fade-in">
        <?php displayMessage(); ?>
        
        <form method="POST" action="" onsubmit="return validarFormulario()">
            <div class="form-group">
                <label for="nome">Nome Completo *</label>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo" required>
            </div>
            
            <div class="form-group">
                <label for="telefone">Telefone *</label>
                <input type="tel" id="telefone" name="telefone" placeholder="(11) 99999-9999" required>
            </div>
            
            <div class="form-group">
                <label for="servico">Tipo de Serviço *</label>
                <select id="servico" name="servico" required>
                    <option value="">Selecione um serviço</option>
                    <option value="Corte Tradicional">Corte Tradicional - R$ 45,00</option>
                    <option value="Degradê">Degradê - R$ 55,00</option>
                    <option value="Barba">Barba - R$ 40,00</option>
                    <option value="Combo">Combo (Corte + Barba) - R$ 85,00</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="data">Data *</label>
                <input type="date" id="data" name="data" min="<?php echo date('Y-m-d'); ?>" required>
            </div>
            
            <div class="form-group">
                <label for="horario">Horário *</label>
                <select id="horario" name="horario" required>
                    <option value="">Selecione um horário</option>
                    <option value="09:00">09:00</option>
                    <option value="10:00">10:00</option>
                    <option value="11:00">11:00</option>
                    <option value="13:00">13:00</option>
                    <option value="14:00">14:00</option>
                    <option value="15:00">15:00</option>
                    <option value="16:00">16:00</option>
                    <option value="17:00">17:00</option>
                    <option value="18:00">18:00</option>
                    <option value="19:00">19:00</option>
                </select>
            </div>
            
            <button type="submit" class="btn btn-submit">Confirmar Agendamento</button>
        </form>
    </div>
</section>

<script>
function validarFormulario() {
    let nome = document.getElementById('nome').value;
    let telefone = document.getElementById('telefone').value;
    let servico = document.getElementById('servico').value;
    let data = document.getElementById('data').value;
    let horario = document.getElementById('horario').value;
    
    if (!nome || !telefone || !servico || !data || !horario) {
        alert('Por favor, preencha todos os campos!');
        return false;
    }
    
    // Validação simples de telefone
    let telefoneRegex = /^\(?[1-9]{2}\)? ?9?[0-9]{4}-?[0-9]{4}$/;
    if (!telefoneRegex.test(telefone)) {
        alert('Por favor, digite um telefone válido!');
        return false;
    }
    
    return true;
}

// Formatação do telefone
document.getElementById('telefone').addEventListener('input', function(e) {
    let value = e.target.value.replace(/\D/g, '');
    if (value.length > 10) {
        value = value.replace(/^(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
    } else if (value.length > 5) {
        value = value.replace(/^(\d{2})(\d{4})(\d{0,4})/, '($1) $2-$3');
    } else if (value.length > 2) {
        value = value.replace(/^(\d{2})(\d{0,5})/, '($1) $2');
    } else {
        value = value.replace(/^(\d*)/, '($1');
    }
    e.target.value = value;
});
</script>

<?php include 'includes/footer.php'; ?>