<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/wwwroot/css/style.css">
    <script src="/wwwroot/js/index.js" defer></script>
    <title><?= $this->getTitle() ?></title>
</head>
<body>
    <header>
        <h1>Studeex</h1>
        <nav>
            <div id="menu-button">
                <div class="menu-button-line"></div>
                <div class="menu-button-line"></div>
                <div class="menu-button-line"></div>
            </div>
            <ul id="menu-list">
                <li><a href="/sobre">Sobre o projeto</a></li>
                <li><a href="/contato">Contato</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <?php $this->loadViewInTemplate($view, $modelData) ?>
    </main>
    <footer>
        <p id="copyright">Copyright, Studeex - 2024</p>
    </footer>
</body>
</html>