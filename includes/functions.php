<?php
// Função para exibir mensagens
function displayMessage() {
    if (isset($_SESSION['message'])) {
        echo '<div class="message success">';
        echo '<span>' . $_SESSION['message'] . '</span>';
        echo '<i class="fas fa-times"></i>';
        echo '</div>';
    }
    
    if (isset($_SESSION['error'])) {
        echo '<div class="message error">';
        echo '<span>' . $_SESSION['error'] . '</span>';
        echo '<i class="fas fa-times"></i>';
        echo '</div>';
    }
}

// Função para validar dados do formulário
function validateInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Função para verificar se campos estão vazios
function checkEmptyFields($fields) {
    foreach ($fields as $field) {
        if (empty($field)) {
            return true;
        }
    }
    return false;
}
?>