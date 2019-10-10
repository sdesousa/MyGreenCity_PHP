<?php
require_once '../connec/connec.php';
require_once '../src/functions.php';

$associations = selectAllAssociations();

?>

<header>
    <nav>
        <a class="menu_icon_link" href="index.php"> <img class="menu_icon" src="images/green-v2.png" alt="menu"> </a>
        <div class="menu" id="link_burger" >
            <a class="close_burger" href="#"> <img src="images/Close_icon.png" alt="close"> </a>
            <a href="#link_actions"> ACTIONS </a>
            <a href="#sub_menu"> ASSOCIATIONS </a>
            <a href="#link_dechets"> DECHETS </a>
        </div>
        <a class="burger" href="#link_burger"> <img src="images/burger.svg" alt="menu"> </a>

    </nav>
    <div class="sub_menu_asso" id="sub_menu">
        <a class="sub_menu_asso_close" href="#"> <img src="images/Close_icon.png" alt="close"> </a>
        <a class="sub_menu_asso_index" href="index.php#link_associations">Les associations </a>
            <?php foreach ($associations as $association) {
                ?> <a class="sub_menu_asso_links" href="<?= 'asso.php?id=' . $association['id'] ?>">
                    <?= $association['abbreviation'] ?>
                </a>
            <?php } ?>
    </div>
</header>