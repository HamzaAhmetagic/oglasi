<?php
require_once("partials/head.php");
require_once("partials/header.php");
?>
    <div class="container">
        <div class="row">
            <div class="col s8 offset-s2">
                <div class="row">
                    <form class="col s12" action="loginuser.php" method="post">
                        <div class="row">
                            <div class="input-field col s12">
                                <input name="name" id="first_name" type="text" class="validate">
                                <label for="first_name">Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input name="password" id="password" type="password" class="validate">
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <button type="submit" class="btn blue col s12" >Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
require_once("partials/bottom.php");
?>