
<?php include "incluedes/cadastrar-depar.php";?>  
<?php include "../incluedes/header.php";?>




<div class="container">


<h1>CADASTRO DA LOJA</h1>
    
<form class="form-horizontal" method="post" action="cadastro-depar.php">
<fieldset>

<!-- Form Name -->


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nome"></label>  
  <div class="col-md-4">
  <input id="nome" name="nome" type="text" placeholder="Nome do Serviço" class="form-control input-md" required="">
    
  </div>
</div>





<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Solicitar</button>
  </div>
</div>

</fieldset>
</form>
<div>
<?php if(isset($msg))echo $msg;?>
</div>


</div>


    <?php include "incluedes/footer.php";?>

   
   