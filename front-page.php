<!-- le modele front-page permet d'afficher la page d'accueil -->
<?php get_header(); ?>
<!-- <h1> pour debogade - a retirer ---------- Front-page.php -----------</h1> -->
<section class="hero">
  <picture class="hero__image">
    <img src="wp-content/uploads/2025/06/maldives.1.jpg" alt="Maldives" />
  </picture>
  <div class="hero__contenu">
    <h1 class="hero__titre">
      La vie est une
      <a href="#" class="hero__lien"><strong>Voyage</strong></a>
    </h1>
    <p class="hero__description">
      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum delectus
      tempore explicabo quibusdam provident atque dolores repudiandae nobis
      modi ducimus!
    </p>
    <small>email@gmail.com</small>
    <small>700 n'importe ou, Montreal</small>
    <small>(123)456-6789</small>
  </div>
</section>

<section class="formulaire">
  <form action="" class="formulaire__contenu">
    <div>
      <label for="nom">Nom</label>
      <input
        class="formulaire__input"
        type="text"
        name="nom"
        id="nom"
        placeholder="Ecrivez votre nom" />
    </div>
    <div>
      <label for="prenom">Prenom</label>
      <input
        class="formulaire__input"
        type="text"
        name="prenom"
        id="prenom"
        placeholder="Ecrivez votre Prenom" />
    </div>
    <div>
      <label for="telephone">Telephone</label>
      <input
        class="formulaire__input"
        type="text"
        name="telephone"
        id="telephone"
        placeholder="Ecrivez votre telephone" />
    </div>
    <div>
      <label for="nom">Courriel</label>
      <input
        class="formulaire__input"
        type="text"
        name="curiel"
        id="courriel"
        placeholder="Ecrivez votre courriel" />
    </div>
    <button type="submit" class="hero__lien">S'inscrire</button>
  </form>
</section>

<section class="populaire">
  <div class="populaire__destinations">
    <?php if (have_posts()) {
      // extraire chaque post
      while (have_posts()) {
        the_post();
    ?>
        <?php
        if (in_category('galerie')) {
          get_template_part("gabarit/galerie");
        } else {
          get_template_part("gabarit/carte");
        ?>

    <?php }
      }
    } ?>
  </div>


  <h2>Les Destinations favorites</h2>
  <hr />
  <div class="populaire__cartes">
    <article class="carte">
      <img src="wp-content/uploads/2025/06/aventure.jpg" alt="jeep dans le desert" />
    </article>
    <article class="carte">
      <img src="wp-content/uploads/2025/06/nature.jpg" alt="foret" />
    </article>
    <article class="carte">
      <img src="wp-content/uploads/2025/06/plage_1.jpg" alt="plage" />
    </article>
    <article class="carte">
      <img src="wp-content/uploads/2025/06/veneza.jpg" alt="Veneza" />
    </article>
    <article class="carte">
      <img src="wp-content/uploads/2025/06/zen.jpg" alt="jardin" />
    </article>
    <article class="carte">
      <img src="wp-content/uploads/2025/06/paris.jpg" alt="paris" />
    </article>
    <article class="carte">
      <img src="wp-content/uploads/2025/06/croisiere.jpg" alt="croisiere" />
    </article>
    <article class="carte">
      <img src="wp-content/uploads/2025/06/chalet.jpg" alt="chalet" />
    </article>
    <article class="carte">
      <img src="wp-content/uploads/2025/06/montagnes.jpg" alt="montagnes" />
    </article>
    <article class="carte">
      <img src="wp-content/uploads/2025/06/aurora_boreel.jpg" alt="aurora boreel" />
    </article>
  </div>
</section>

<?php get_footer(); ?>