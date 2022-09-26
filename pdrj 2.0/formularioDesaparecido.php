<?php
include "controle.php"
?>
      <div class= "container bg-secondary pag">
      <div class="text-end">
                <a href="listarDesaparecido.php">
                <button type="button" class="btn btn-success btn-sm">LISTA DE DESAPARECIDOS
                </button>
                </a>
        </div>
            <h1>Cadastro de Desaparecidos</h1>
            <form name="form" method="post" action="incluirDesaparecido.php">
            <div class="mb-4">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" 
            name="nome" required>         
            </div>
            <div class="mb-3">
            <label for="cordapele" class="form-label">Cor da Pele</label>
            <input type="text" class="form-control" id="cordapele" 
            name="cordapele" required>         
            </div>
            <div class="mb-4">
            <label for="desaparecimento" class="form-label">Desaparecimento</label>
            <input type="text" class="form-control" id="desaparecimento" 
            name="desaparecimento" required>         
            </div>
            <div class="mb-4">
            <label for="vestimenta" class="form-label">Vestimenta</label>
            <input type="text" class="form-control" id="vestimenta" 
            name="vestimenta" required>         
             </div>
            
    
             <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
     </div>
     <?php
include "footer.php";
?>