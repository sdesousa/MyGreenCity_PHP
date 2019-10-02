<?php include 'variables.php'; ?>

<section>
    <h2>CONTACT</h2>
    <form method="post">
        <div  class="form">
            <div class="name">
                <label for="name">NOM</label>
                <input type="text" id="name" name="user_name">
            </div>
            <div class="email">
                <label for="mail">EMAIL</label>
                <input type="email" id="mail" name="user_mail">
            </div>
            <div class="textarea">
                <label for="msg">MESSAGE</label>
                <textarea id="msg" name="user_message"></textarea>
            </div>
        </div>
        <div  class="button">
            <button type="submit">Envoyer</button>
        </div>
    </form>
</section>
