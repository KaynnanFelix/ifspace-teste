<?php
echo "<nav class='navbar navbar-expand-lg navbar-light bg-success'>
<a class='navbar-brand' href='index.php'>IFSpace</a>
<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
  <span class='navbar-toggler-icon'></span>
</button>

<div class='collapse navbar-collapse' id='navbarSupportedContent'>
  <ul class='navbar-nav mr-auto'>
    <li class='nav-item active'>
      <a class='nav-link' href='index.php'>Home <span class='sr-only'>(current)</span></a>
    </li>";

    if(isset($_COOKIE['admin'])){
    echo "<li class='nav-item dropdown'>
      <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
        Usuário
      </a>
      <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
        <a class='dropdown-item' href='adminPerfil.php'>Perfil</a>
        <a class='dropdown-item' href='sair.php'>Sair</a>
      </div>
    </li>";
    }else if(isset($_COOKIE['user'])){
        echo "<li class='nav-item dropdown'>
        <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
          Usuário
        </a>
        <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
          <a class='dropdown-item' href='userPerfil.php'>Perfil</a>
          <a class='dropdown-item' href='sair.php'>Sair</a>
        </div>
      </li>";
    }else{
        echo "<li class='nav-item'>
        <a class='nav-link' href='login.php'>Login</a>
      </li>";
    }
  echo "</ul>
</div>
</nav>";
?>