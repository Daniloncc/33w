<!-- LE GABARIT SEARCH FORM permet d'afficher un formulaire de recherche -->


<form class="recherche" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
    <label>
        <input class="recherche__input" type="search" placeholder="Rechercher..." value="<?php echo get_search_query(); ?>" name="s" />
    </label>
    <button class="recherche__bouton" type="submit">
        <i class="fa-solid fa-magnifying-glass"></i>
    </button>
</form>