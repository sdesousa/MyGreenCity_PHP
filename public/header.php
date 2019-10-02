<?php include 'variables.php'; ?>

<header>
    <nav>
        <a class="menu_icon_link" href="/index.php"> <img class="menu_icon" src="/images/green-v2.png" alt="menu"> </a>
        <div class="menu" id="link_burger" >
            <a class="close_burger" href="#"> <img src="/images/Close_icon.png" alt="close"> </a>
            <a href="#link_actions"> ACTIONS </a>
            <a href="#sub_menu"> ASSOCIATIONS </a>
            <a href="#link_dechets"> DECHETS </a>
        </div>
        <a class="burger" href="#link_burger"> <img src="/images/burger.svg" alt="menu"> </a>

    </nav>

    <div class="superposition">
        <h1> MY <span class="Green">Green</span> CITY </h1>
    </div>

    <div class="sub_menu_asso" id="sub_menu">
        <a class="close" href="#"> <img src="/images/Close_icon.png" alt="close"> </a>
        <a href="#link_associations">Les associations </a>
<!--        <a href="/asso/asso1.php"> CEN</a>-->
<!--        <a href="/asso/asso2.php"> LNE</a>-->
<!--        <a href="/asso/asso3.php"> LPB</a>-->
            <a href="<?= "/$associations[1]?name=$associations[0]&address=$associations[4]&telephone=$associations[5]&fax=$associations[6]&mail=$associations[7]&url=$associations[8]" ?>"> <?= $associations[9] ?> </a>
            <a href="<?= "/$associations[1]?name=$associations[0]&address=$associations[4]&telephone=$associations[5]&fax=$associations[6]&mail=$associations[7]&url=$associations[8]" ?>"> <?= $associations[9] ?> </a>
            <a href="<?= "/$associations[1]?name=$associations[0]&address=$associations[4]&telephone=$associations[5]&fax=$associations[6]&mail=$associations[7]&url=$associations[8]" ?>"> <?= $associations[9] ?> </a>
    </div>
</header>