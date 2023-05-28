<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Suporte Online</header>
      <form action="#" method="POST" enctype="multipart/form-data">
        <div class="error-txt"></div>
        <div class="name-details">
          <div class="field input">
            <label>Nome</label>
            <input type="text" name="fname" placeholder="Primeiro nome" required>
          </div>
          <div class="field input">
            <label>Sobrenome</label>
            <input type="text" name="lsobrenome" placeholder="Informe o seu sobrenome" required>
          </div>
        </div>
        <div class="field input">
          <label>Email</label>
          <input type="text" name="email" placeholder="Digite sua e-mail" required>
        </div>
        <div class="field input">
          <label>Senha</label>
          <input type="password" name="password" placeholder="Digite sua senha" required>
          <i class="fa-solid fa-eye"></i>
        </div>
        <div class="field image">
          <label>Selecione a Imagem</label>
          <input type="file" name="image" >
        </div>
        <div class="field button">
          <input type="submit" value="Continue o chat">
        </div>
      </form>
      <div class="link">Não possui conta? <a href="#">Cadastre-se</a></div>
    </section>
  </div>
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></
