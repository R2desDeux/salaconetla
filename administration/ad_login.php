

<body class="d-flex flex-column min-vh-100 bg-body-tertiary">
    <main class="w-40 m-auto">
        <?php
        if (isset($_GET["erreur"])) {
            $erreur = $_GET["erreur"];
        ?>
            <div class="alert alert-warning role=" alert>
                <?php echo $erreur ?>
            </div>
        <?php
        }
        ?>
        <form action="ad_login_exe.php" method="post">
            <h1>Authentification</h1>
            <div>
                <label class="form-label">Login</label>
                <input class="form-control" type="text" id="login" name="login">
            </div>
            <div>
                <label class="form-label">Mot de passe</label>
                <input class="form-control" type="password" id="password"
                    name="password">
            </div>
            <button class="btn btn-primary w-100 my-2" type="submit">Valider</button>
        </form>
    </main>
  