<?php include '../src/variables.php'; ?>

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
        <a class="close" href="#"> <img src="images/Close_icon.png" alt="close"> </a>
        <a href="#link_associations">Les associations </a>
            <?php foreach ($associations as $associationList => $associationInfo) {
                ?> <a href="<?= 'asso.php?name=' . $associations[$associationList]['name']
                .'&address=' . $associations[$associationList]['address']
                .'&telephone=' . $associations[$associationList]['telephone']
                . '&fax=' . $associations[$associationList]['fax']
                . '&mail=' . $associations[$associationList]['mail']
                . '&url=' . $associations[$associationList]['url']
                . '&logo=' . $associations[$associationList]['logo']
                . '&shortName=' . $associations[$associationList]['abbreviation'] ?>">
                <?= $associations[$associationList]['abbreviation'] ?> </a>
            <?php } ?>
    </div>
</header>