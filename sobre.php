<html>
  <head>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1"
      charset="utf-8"
    />
    <link rel="stylesheet" href="style2.css" />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />

    <style>
      body {
        background-image: linear-gradient(180deg, white, #ececec);
        overflow-x: hidden;
        font-family: Montserrat;
      }
      h4 {
        text-align: center;
      }
      h5 {
        text-align: center;
      }
    </style>
  </head>

  <body>
    <script src="https://use.fontawesome.com/4082de62c3.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <!--        NAVBAR               -->
    <!--        NAVBAR               -->
    <!--        NAVBAR               -->
    <!--        NAVBAR               -->
    <!--        NAVBAR               -->

    <nav
      class="navbar navbar-expand-lg"
      id="navbarResponsive"
      style="
        border-bottom: rgb(56, 89, 130) 5px solid;
        background-color: #2367b1;
      "
    >
      <a href="https://theoffice.fandom.com/wiki/Dunder_Mifflin_Paper_Company">
        <img
          src="C:\Users\pedri\Desktop\SITE/fotos/dundermifflin.png"
          alt="logobagulhesca"
          class="mx-1 my-0"
          style="width: 90px; height: 90px; border-color: #b6b9c1;"
        />
      </a>
      <a
        class="nav-link btn-primary"
        href="index2.php"
        style="background-color: #2367b1;"
        >Produtos</a
      >
      <a
        class="nav-link btn-primary"
        href="duvidas.php"
        style="background-color: #2367b1;"
        >Duvidas</a
      >
      <a
        class="nav-link btn-primary"
        href="sobre.php"
        style="background-color: #2367b1;"
        >Sobre</a
      >

      <form class="mx-5 my-auto d-inline w-100" id="navbarResponsive">
        <div class="input-group">
          <input
            type="text"
            list="historico"
            class="form-control border border-right-0"
            placeholder="O que você está procurando?"
          />
          <span class="input-group-append">
            <button
              class="btn border border-left-0"
              type="button"
              style="border: 4px solid #ffff; background-color: #ffff;"
            >
              <i class="fa fa-search"></i>
            </button>
          </span>
        </div>
      </form>

      <datalist id="historico" class="w-100">
        <option value="Papel Premium Dunder Mifflin A4 500 páginas"> </option>
        <option value="A Day at Dunder Mifflin Elementary"> </option>
        <option value="Caneca Dunder Mifflin 300ml"> </option>
        <option value="Premio Dundie Awards"> </option>
        <option value="Impressora digital Sabre"> </option>
        <option value="Celular Sabre Pyramid"> </option>
        <option value="Copiadora Sabre 3900"> </option>
      </datalist>

      <div class="nav-item mx-auto" id="navbarResponsive">
        <span class="input-group-append">
          <button
            class="btn btn-lg"
            type="button"
            style="border: 4px solid #2367b1; background-color: #2367b1;"
          >
            <i
              class="fa fa-user-circle fa-2x"
              style="color: white; margin-top: 10px;"
            >
            </i>
            <a class="nav-link" href="perfil.php"></a>
          </button>
        </span>
      </div>
      <div class="nav-item mx-auto" id="navbarResponsive">
        <span class="input-group-append">
          <button
            class="btn btn-lg"
            type="button"
            style="border: 4px solid #2367b1; background-color: #2367b1;"
          >
          <a class="nav-link" href="login.php">
            <i class="fa fa-sign-out fa-2x" style="color:white; margin-top: 10px;"> </i>
            <a class="nav-link" href="login.php"></a>
          </button>
        </span>
      </div>
    </nav>
    <div class="texto1">
      <p class="recuo2">
        O Site por completo é apenas uma obra baseada num conjunto de sitcom de
        comedia chamada The Office, cujo os alunos tem uma grande admiração por
        ela e quiseram propor uma pequena homenagem.<br />
      </p>
      <p class="recuo2">
        O Site foi produzido pelos alunos do 3º Ano do Ensino Médio FELIPE AKIO
        CERQUEIRA MURATA, PEDRO GABRIEL CAIRES SILVA e ANA CLARA ZUIANI KARLOVIC
        do colégio Eniac.
      </p>
    </div>
    <div class="text-center">
      <img
        src="C:\Users\pedri\Desktop\SITE/fotos/3ANOTI.png"
        class="rounded"
        style="width: auto; margin-bottom: 50px;"
      />
    </div>
  </body>
</html>
