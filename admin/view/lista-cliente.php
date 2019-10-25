<table class="table">
    <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">NOME</th>
          <th scope="col">ENDERECO</th>
          <th scope="col">CEP</th>
          <th scope="col">E-MAIL</th>
          <th scope="col">CPF</th>
      </tr>
   </thead>

   <tbody>
     <?php foreach($lista as $cliente){?>
     <tr>
         <th ><?php echo $cliente['pk_cliente']; ?>
         <th ><?php echo $cliente['nome']; ?>
         <th ><?php echo $cliente['endereco']; ?>
         <th ><?php echo $cliente['cep']; ?>
         <th ><?php echo $cliente['email']; ?>
         <th ><?php echo $cliente['cpf']; ?>
      </tr>
      <?php }?>
   </tbody>





</table>