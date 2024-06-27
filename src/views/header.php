<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor Financeiro</title>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="public/js/scripts.js"></script>
</head>
<body>
    
    <header>
        
        <nav>
          <ul>
            <a href="index.php">
              <li><i class="fa-solid fa-house"></i> Home</li>
            </a>
            <a href="index.php?action=adicionar_receita">
              <li> <i class="fa-solid fa-list"></i> Adicionar Receita</li>
            </a>
            <a href="index.php?action=adicionar_despesa">
              <li> <i class="fa-solid fa-list"></i> Adicionar Despesa</li>
            </a>
            <a href="index.php?action=listar_receitas">
              <li><i class="fa-solid fa-sliders"></i> Receitas</li>
            </a>
            <a href="index.php?action=listar_despesas">
              <li><i class="fa-solid fa-sliders"></i> Despesas</li>
            </a>
            
          </ul>
        </nav>
    </header>

    <div class="pai">
        <div class="filho">
            <h1 class="filhoh1">Gestor de Despesas <i class="fa-solid fa-calendar-days"></i></h1>
        </div>
    </div>
