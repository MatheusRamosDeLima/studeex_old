<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <?php if(!empty($this->getStyle())): ?>
        <link rel="stylesheet" href="/assets/css/<?= $this->getStyle() ?>.css">
    <?php endif ?>
    <script src="/assets/js/index.js" defer></script>
    <?php if(!empty($this->getScript())): ?>
        <script src="/assets/js/<?= $this->getScript() ?>.js" defer></script>
    <?php endif ?>
    <title><?= $this->getTitle() ?></title>
</head>
<body>
    <header>
        <a href="/" id="header-title"><h1>Studeex</h1></a>
        <nav>
            <div id="menu-button" onclick="clickMenuButton()"><div></div><div></div><div></div></div>
            <ul id="menu-list">
                <li><a href="/sobre">
                    <img src="/assets/imgs/icons/geral/sobre.png" alt="Ícone: Sobre o projeto" class="list-icon">
                    <span class="list-name">Sobre o projeto</span>
                </a></li>
                <li><a href="/contato">
                    <img src="/assets/imgs/icons/geral/contato.png" alt="Ícone: Contato" class="list-icon">
                    <span class="list-name">Contato</span>
                </a></li>
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
    <div id="dark-background-div" onclick="clickDarkBackgroundDiv()"></div>
</body>
</html>