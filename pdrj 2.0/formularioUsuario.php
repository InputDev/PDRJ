<?php
include "controle.php"
?>
      <div class= "container bg-secondary pag">
      <div class="text-end">
                <a href="listarUsuario.php">
                <button type="button" class="btn btn-success btn-sm">LISTA DE ADMINISTRADOR
                </button>
                </a>
        </div>
            <h1>Cadastro de Administrador</h1>
            <form name="form" method="post" action="incluirUsuario.php">
            <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" 
            name="nome" required>         
            </div>
            <div class="mb-3">
            <label for="login" class="form-label">Login</label>
            <input type="text" class="form-control" id="login" 
            name="login" required>         
            </div>
            <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" 
            name="senha" required>         
             </div>
    
             <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
     </div>
     <?php
include "footer.php";
?>