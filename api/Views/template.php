<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/wwwroot/css/style.css">
    <?php if(!empty($this->getStyle())): ?>
        <link rel="stylesheet" href="/wwwroot/css/<?= $this->getStyle() ?>.css">
    <?php endif ?>
    <script src="/wwwroot/js/index.js" defer></script>
    <?php if(!empty($this->getScript())): ?>
        <script src="/wwwroot/js/<?= $this->getScript() ?>.js" defer></script>
    <?php endif ?>
    <title><?= $this->getTitle() ?></title>
</head>
<body>
    <header>
        <a href="/" id="header-title"><h1>Studeex</h1></a>
        <nav>
            <div id="menu-button" onclick="clickMenuButton()"><div></div><div></div><div></div></div>
            <ul id="menu-list">
                <li><a href="/sobre">Sobre o projeto</a></li>
                <li><a href="/contato">Contato</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div id="main-content">
            <?php $this->loadViewInTemplate($view, $modelData) ?>
        </div>
    </main>
    <footer>
        <p id="copyright">Copyright, Studeex - 2024</p>
    </footer>
</body>
</html>