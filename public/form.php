<section id = 'link_contact'>
    <h2>CONTACT</h2>
    <form class='formulaire' action='#link_contact' method="POST">
        <fieldset class="field">
            <div  class="form">
                <div class="name">
                    <label for="firstname">PRENOM:</label>
                    <input type="text" id="firstname" name="firstname" autocomplete placeholder="John" REQUIRED>
                </div>
                <div class="name">
                    <label for="lastname">NOM:</label>
                    <input type="text" id="lastname" name="lastname" autocomplete placeholder="Doe" REQUIRED>
                </div>
                <div class="email">
                    <label for="mail">EMAIL:</label>
                    <input type="email" id="mail" name="mail" autocomplete placeholder="johndoe@gmail.com" REQUIRED>
                </div>
                <div class="textarea">
                    <label for="msg">MESSAGE:</label>
                    <textarea id="msg" name="user_message"></textarea>
                </div>
            </div>
            <div  class="button">
                <button type="submit" id="submit" name="submit" value="sent">Envoyer</button>
            </div>

            <?php
            if (!empty($errors)) {
                ?>
                <ul class="errorList">
                <?php foreach ($errors as $key => $value) {
                    ?>
                    <li class="errorListElement">
                        <?= $value ?>
                    </li>
                <?php } ?>
                </ul>
            <?php } ?>

        </fieldset>
    </form>
</section>
