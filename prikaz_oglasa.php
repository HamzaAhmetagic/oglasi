<div class="container">
    <div class="row">
        <div class="col s10 offset-s1">
            <div class="row">
                <?php foreach($oglasi as $oglas): ?>
                    <a href="single.oglas.php?id=<?php echo $oglas['id']; ?>">
                        <div class="col s12 m6">
                            <div class="card blue-grey darken-1">
                                <div class="card-content white-text">
                                    <span class="card-title"><?php echo $oglas["title"]; ?>
                                    <span style="font-size: 14px" class=" orange-text right"><?php echo $oglas["created_at"] ?></span> </span>
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
    </div>
</div>