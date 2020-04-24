<?php
require_once("partials/head.php");
require_once("partials/header.php");
?>
    <div class="container">
        <div class="row">
            <div class="col s8 offset-s2">
                <div class="row">
                    <form class="col s12" action="save.oglas.php" method="post">
                        <div class="row">
                            <div class="input-field col s12">
                                <input name="title" id="title" type="text" class="validate">
                                <label for="title">title</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input name="text" id="text" type="text" class="validate">
                                <label for="text">text oglasa</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input name="price" id="price" type="text" class="validate">
                                <label for="price">price</label>
                            </div>
                        </div>
                        <label>Category</label>
                        <select name="kategorija" class="browser-default">
                            <?php foreach($category as $cat): ?>
                                <option  value="<?php echo $cat["name"]; ?>"> <?php echo $cat["name"]; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <br>
                        <p>
                            <label>
                                <input name="active" value="1" type="radio" checked />
                                <span>Active</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input name="active" value="0" type="radio" />
                                <span>Inactive</span>
                            </label>
                        </p>
                        <br>
                        <p>
                            <label>
                                <input name="used" type="checkbox" checked="checked" />
                                <span>Used</span>
                            </label>
                        </p>
                        <button type="submit" class="btn pink col s12" >Objavi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems, "pink");
        });
    </script>
<?php
require_once("partials/bottom.php");
?>