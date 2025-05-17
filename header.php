<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- link google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Actor&family=Allura&family=Amatic+SC:wght@400;700&family=Archivo+Narrow:ital,wght@0,400..700;1,400..700&family=Belleza&family=Cinzel:wght@400..900&family=Kings&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lexend+Giga:wght@100..900&family=Lexend+Mega:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Quicksand:wght@300..700&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="normalize.css" />
  <link rel="stylesheet" href="style.css" />
  <title>Page Accueil</title>
  <?php wp_head(); ?>
</head>

<body>
  <header class="entete">
    <div class="entete__contenu">
      <picture class="entete__logo"><?php echo get_custom_logo(); ?></picture>
      <!-- <picture><a href=""><img class="entete__logo" src="img/logo.png" alt="logo" /></a></picture> -->
      <!-- <img class="entete__logo" src="./img/logo.png" alt="logo" /> -->
      <label for="chk__menu" class="entete__burger">
        <img
          src="https://s2.svgbox.net/hero-outline.svg?ic=menu&color=000"
          width="32"
          height="32" />
      </label>
      <input type="checkbox" class="chk__menu" id="chk__menu" />
      <nav class="entete__nav">
        <form action="" class="recherche">
          <input
            class="recherche__input"
            type="search"
            name="recherche"
            id="recherche" />
          <button class="recherche__bouton">
            <img
              src="https://s2.svgbox.net/materialui.svg?ic=search&color=000"
              width="26"
              height="26" />
          </button>
        </form>
        <!-- <ul class="entete__menu">
          <li class="entete__menu-item"><a href="#">Aventure</a></li>
          <li class="entete__menu-item"><a href="#">Relaxer</a></li>
          <li class="entete__menu-item"><a href="#">Culturel</a></li>
          <li class="entete__menu-item"><a href="#">Zen</a></li>
          <li class="entete__menu-item"><a href="#">Nature</a></li>
          <li class="entete__menu-item"><a href="#">Sport</a></li>
          <li class="entete__menu-item"><a href="#">Croisiere</a></li>
        </ul> -->
        <?php wp_nav_menu(array(
          "menu" => "principal",
          'container'            => 'ul',
          'container_class'      => '1111',
          'menu_class'           => 'entete__menu',
        )) ?>
      </nav>
    </div>
  </header>