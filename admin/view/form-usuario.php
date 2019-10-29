<form class="form-horizontal" method="post" action="cadastro-usuario.php">
<fieldset>

<!-- Form Name -->
<h1>CADASTRO DE USUARIOS</h1>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nome">Nome</label>  
  <div class="col-md-4">
  <input id="nome" name="nome" type="text" placeholder="Nome do Serviço" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="senha">Senha</label>  
  <div class="col-md-4">
  <input id="senha" name="senha" type="password" placeholder="" class="form-control input-md" required="">
    
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