<!-- LE GABARIT SEARCH FORM permet d'afficher un formulaire de recherche -->
<!-- <form class="recherche" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
    <label>
        <input class="recherche__input" type="search" placeholder="Rechercher..." value="<?php echo get_search_query(); ?>" name="s" />
    </label>
    <button class="recherche__bouton" type="submit">
        <span class="recherche__icone">🔍</span>
    </button>
</form> -->

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