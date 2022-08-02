<header>
    <nav class="navbar navbar-expand-lg bg-transparent shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="home">Accueil</a>
                    </li>
                    <?php if (isset ($_SESSION['access'])) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="create">Ajouter un produit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout">Déconnection</a>
                    </li>
                    <?php endif; ?>
                    <?php if (!isset ($_SESSION['access'])) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="register">S'enregistrer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login">Connection</a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>