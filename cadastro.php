<?php
require_once 'includes/functions.php';
include 'includes/header.php';

// Processa o formulário de cadastro
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = validateInput($_POST['nome'] ?? '');
    $email = validateInput($_POST['email'] ?? '');
    $telefone = validateInput($_POST['telefone'] ?? '');
    $senha = validateInput($_POST['senha'] ?? '');
    $confirmar_senha = validateInput($_POST['confirmar_senha'] ?? '');
    
    // Validação básica
    $campos = [$nome, $email, $telefone, $senha, $confirmar_senha];
    
    if (checkEmptyFields($campos)) {
        $_SESSION['error'] = "Por favor, preencha todos os campos!";
    } elseif ($senha !== $confirmar_senha) {
        $_SESSION['error'] = "As senhas não coincidem!";
    } elseif (strlen($senha) < 6) {
        $_SESSION['error'] = "A senha deve ter pelo menos 6 caracteres!";
    } else {
        $_SESSION['message'] = "Cadastro realizado com sucesso! Bem-vindo à Barbearia Moderna.";
        // Aqui futuramente será inserido no banco de dados
    }
    
    header('Location: cadastro.php');
    exit();
}
?>

<section class="hero" style="height: 40vh; background-attachment: scroll;">
    <div class="hero-content">
        <h1 class="hero-title fade-in">CRIE SUA <span>CONTA</span></h1>
        <p class="hero-subtitle fade-in delay-1">Faça parte da nossa comunidade</p>
    </div>
</section>

<section class="about">
    <div class="form-container fade-in">
        <?php displayMessage(); ?>
        
        <form method="POST" action="" onsubmit="return validarCadastro()">
            <div class="form-group">
                <label for="nome">Nome Completo *</label>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo" required>
            </div>
            
            <div class="form-group">
                <label for="email">E-mail *</label>
                <input type="email" id="email" name="email" placeholder="seu@email.com" required>
            </div>
            
            <div class="form-group">
                <label for="telefone">Telefone *</label>
                <input type="tel" id="telefone" name="telefone" placeholder="(11) 99999-9999" required>
            </div>
            
            <div class="form-group">
                <label for="senha">Senha *</label>
                <input type="password" id="senha" name="senha" placeholder="Mínimo 6 caracteres" required>
            </div>
            
            <div class="form-group">
                <label for="confirmar_senha">Confirmar Senha *</label>
                <input type="password" id="confirmar_senha" name="confirmar_senha" placeholder="Digite a senha novamente" required>
            </div>
            
            <button type="submit" class="btn btn-submit">Criar Conta</button>
        </form>
    </div>
</section>

<script>
function validarCadastro() {
    let nome = document.getElementById('nome').value;
    let email = document.getElementById('email').value;
    let telefone = document.getElementById('telefone').value;
    let senha = document.getElementById('senha').value;
    let confirmarSenha = document.getElementById('confirmar_senha').value;
    
    if (!nome || !email || !telefone || !senha || !confirmarSenha) {
        alert('Por favor, preencha todos os campos!');
        return false;
    }
    
    // Validação de email
    let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert('Por favor, digite um e-mail válido!');
        return false;
    }
    
    // Validação de telefone
    let telefoneRegex = /^\(?[1-9]{2}\)? ?9?[0-9]{4}-?[0-9]{4}$/;
    if (!telefoneRegex.test(telefone)) {
        alert('Por favor, digite um telefone válido!');
        return false;
    }
    
    // Validação de senha
    if (senha.length < 6) {
        alert('A senha deve ter pelo menos 6 caracteres!');
        return false;
    }
    
    if (senha !== confirmarSenha) {
        alert('As senhas não coincidem!');
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