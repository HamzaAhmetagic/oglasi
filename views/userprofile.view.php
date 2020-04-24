<?php
require_once("partials/head.php");
require_once("partials/header.php");
//var_dump($all_messages_number);
?>
<!--    <div class="container">-->
        <div class="row">
            <div class="col s3 admin-panel">
                <div class="collection">
                    <a href="#!" class="collection-item" id="oglasi-number">Moji oglasi (<?php echo $all_oglasi_number ?>)</a>
                    <a href="#!" class="collection-item" id="message-number">Messages (<?php echo $all_messages_number ?>)</a>
                </div>
            </div>
            <div class="col s8">
                <div class="card light-green darken-1">
                    <div class="card-content white-text">
                        <span class="card-title"><?php echo $_SESSION['user']['name']; ?></span>
                        <img src="images/user.png" class="responsive-img user-profile">
                    </div>
                    <div class="card-action">
                            <button class="waves-effect red btn-small">Edit account</button>
                            <a href="add.new.oglas.php" class="waves-effect waves-green btn-small right">Add oglas</a>
                    </div>
                </div>
            </div>
        </div>
                <div class="row">
                    <div class="col s3"></div>
                    <div class="col s9" id="oglasi-holder">
                        <h3>Moji oglasi</h3>
                    <?php foreach($oglasi as $oglas): ?>
                        <a href="single.oglas.php?id=<?php echo $oglas['id']; ?>">
                            <div class="col s12 m4">
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
                                        <button class="waves-effect pink btn-small right"><?php echo $oglas["price"]; ?> KM</button>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php endforeach ?>
                </div>
                </div>
                        <div class="row" >
                            <div class="col s9 offset-s3" id="messages-holder">
                                <h3>Messages</h3>
                                <ul class="collapsible">
                                    <?php foreach ($result as $message): ?>
                                    <li>
                                        <div class="collapsible-header"><i class="material-icons">message</i><?php echo $message['title']; ?></div>
                                        <div class="collapsible-body"><span><?php echo $message['body'] ?></span></div>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
    <script>
        $(document).ready(function(){
            $('.collapsible').collapsible();

            $("#messages-holder,#oglasi-holder").hide()
            $("#message-number").on("click",function(){
                $("#messages-holder").slideToggle()
            })
            $("#oglasi-number").on("click",function(){
                $("#oglasi-holder").slideToggle()
            })
        });
    </script>
<?php
require_once("partials/bottom.php");
?>