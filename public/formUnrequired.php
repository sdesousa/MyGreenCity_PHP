<section id = 'link_contact'>
    <h2>CONTACT</h2>

    <form class='formulaire' action='' method="POST">
        <fieldset class="fieldButton">
            <div class="checkbox">
                <label for="activeCheckbox">Remove REQUIRED</label>
                <input type="checkbox" id="activeCheckbox" name="activeCheckbox" <?php if($activeCheckbox) echo 'CHECKED'; ?>>
                <button type="submit" id="submitCheckbox" name="submitCheckbox" value="sentCheckbox">Send</button>
            </div>
        </fieldset>
    </form>

    <form class='formulaire' action='#link_contact' method="POST">
        <fieldset class="field">
            <div  class="form">
                <div class="name">
                    <label for="firstname">PRENOM:</label>
                    <input type="text" id="firstname" name="firstname" autocomplete placeholder="John" <?php if(isset($_POST['firstname'])) echo 'value="' . $_POST['firstname'] . '"';?> >
                </div>
                <div class="name">
                    <label for="lastname">NOM:</label>
                    <input type="text" id="lastname" name="lastname" autocomplete placeholder="Doe" <?php if(isset($_POST['lastname'])) echo 'value="' . $_POST['lastname'] . '"';?> >
                </div>
                <div class="email">
                    <label for="mail">EMAIL:</label>
                    <input type="text" id="mail" name="mail" autocomplete placeholder="johndoe@gmail.com" <?php if(isset($_POST['mail'])) echo 'value="' . $_POST['mail'] . '"';?> >
                </div>
                <div class="textarea">
                    <label for="msg">MESSAGE:</label>
                    <textarea id="msg" name="message" ><?php if(isset($_POST['message'])) echo $_POST['message'];?></textarea>
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
