<header>
    <div id="burger">
        <div class="burger-line"></div>
        <div class="burger-line"></div>
        <div class="burger-line"></div>
        <div id="burger-mask"></div>
    </div>
    <div id="nav-menu" class="nav-menu">
        <div id="times-icons"></div>
        <ul>
            <a href=""><li>La commision centre</li></a>
            <a href=""><li>Formations</li></a>
            <a href=""><li>Concours et festivals</li></a>
            <a href=""><li>Agenda</li></a>
            <a href=""><li>Contact</li></a>
        </ul>
    </div>
</header>
<script type="text/javascript">
    let menuButton      = document.getElementById('burger-mask');
    let menuNav         = document.getElementById('nav-menu');
    let menuCloseButton = document.getElementById('times-icons');
    menuButton.addEventListener("click", () => {
        menuNav.classList = 'menu-show';
    })

    menuCloseButton.addEventListener("click", () => {
        menuNav.classList = 'nav-menu';
    })

    
</script>