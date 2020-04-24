<?php
require_once("partials/head.php");
require_once("partials/header.php");
?>
<div class="container">
    <div class="row">
        <div class="col s10 offset-s1">
            <div class="row">
                    <a href="single.oglas.php?id=<?php echo $oglas['id']; ?>">
                        <div class="col s12">
                            <div class="card blue-grey darken-1">
                                <div class="card-content white-text">
                                    <span class="card-title"><?php echo $oglas["title"]; ?></span>
                                    <p class="center-align"><?php echo $oglas["text"]; ?></p>
                                </div>
                                <div class="card-action">
                                    <?php if($oglas["used"] == 1) : ?>
                                        <button class="waves-effect red btn-small">Koristeno</button>
                                    <?php else: ?>
                                        <button class="waves-effect waves-green btn-small">Novo</button>
                                    <?php endif ?>
                                    <button class="waves-effect pink btn-small right"><?php echo $oglas["created_at"]; ?></button>
                                    <button class="waves-effect purple btn-small left"><?php echo $owner["name"]; ?></button>
                                    <?php if($show_form): ?>
                                    <button class="waves-effect pink btn-small right">Edit</button>
                                    <button class="waves-effect pink btn-small right">Delete</button>
                                    <?php endif; ?>
                                    <button class="waves-effect orange btn-small right"><?php echo $oglas["category"]; ?></button>
                                    <button class="waves-effect blue btn-small right"><?php echo $oglas["price"]; ?> KM</button>
                                </div>
                            </div>
                        </div>
                    </a>
            </div>
        </div>
    </div>
</div>
<?php if(!$show_form): ?>
<div class="container">
    <div class="row">
        <div class="col s10 offset-s1">
            <form class="col s12" action="send.message.php" method="post">
                <div class="row">
                    <div class="input-field col s10">
                        <input placeholder="Your message" id="mess" type="text" class="validate" name="message">
                        <label for="mess">Send message</label>
                    </div>
                    <div class="col s2 input-field">
                        <button class="btn-small green col s12">Send</button>
                    </div>
                    <input type="hidden" name="owner_id" value="<?php echo $owner['id']; ?>">
                </div>
                </form>
        </div>
    </div>
</div>
<?php endif; ?>
<?php
require_once("partials/bottom.php");
?>

