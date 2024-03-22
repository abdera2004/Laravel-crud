<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-initial-scale=1.0">
    <link rel="stylesheet" text-type="text/css" href="{{url('./assets/css/estilo.css')}}">
    <title>Cadastro</title>
</head>
<body>

<div class="container" >

    
    <div class="content">      
 

      <!--FORMULÁRIO DE CADASTRO-->
      <div id="cadastro">
        <form method="POST" action="/cadastrar"> 
        @csrf


          <h1>Cadastro</h1> 
          
          <p> 
            <label for="nome_cad">Seu nome</label>
            <input id="nome_cad" name="nome" required="required" type="text" placeholder="Digite seu nome.." />
          </p>
          
          <p> 
            <label for="email_cad">Seu e-mail</label>
            <input id="email_cad" name="email" required="required" type="email" placeholder="Digite seu email.."/> 
          </p>
          
          <p> 
            <label for="senha_cad">Sua senha</label>
            <input id="senha_cad" name="senha" required="required" type="password" placeholder="Digite sua senha..."/>
          </p>
          
          <p> 
            <input type="submit" value="Cadastrar"/> 
          </p>
          
  

</div>

</body>
</html>