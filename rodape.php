<script src="script.js"></script>

<footer class="footer">
        <img class="patern" src="images/bg-pattern-footer-desktop.svg" alt="">
        <div class="container">
            <!-- footer header -->
            <div class="footer-header">
                <div class="logo-footer">
                    <img src="images/logo.svg" alt="">
                </div>
                <div class="medias-socias">
                    <img src="images/icon-facebook.svg" alt="">
                    <img src="images/icon-twitter.svg" alt="">
                    <img src="images/icon-pinterest.svg" alt="">
                    <img src="images/icon-instagram.svg" alt="">
                </div>
            </div>
            <!-- end footer header -->
            <!-- footer content -->
            <div class="footer-content">
                <div>
                    <h3>Empresa</h3>
                    <ul class="nav-links">
                        <a href="README.md">Sobre nós</a>
                        <a href="README.md">Equipe</a>
                        <a href="#">Cursos</a>
                        <a href="#">Trabalhe Conosco</a>
                    </ul>
                </div>
                <div>
                    <h3>Suporte</h3>
                    <ul class="nav-links">
                        <a href="#">FAQ</a>
                        <a href="README.md">Termos de uso</a>
                        <a href="README.md">Política de Privacidade</a>
                        <a href="#">Cookies</a>
                    </ul>
                </div>
                <div>
                    <h3>Contatos</h3>
                    <ul class="nav-links">
                        <a href="#">Parcerias</a>
                        <a href="#">Ouvidoria</a>
                        <a href="#">Fale Conosco</a>
                    </ul>
                </div>
                <div>
                    <h3>Outros</h3>
                    <ul class="nav-links">
                        <a href="carreira.php">Carreiras</a>
                        <a href="#">Imprensa</a>
                        <a href="README.md">Licenças</a>
                    </ul>
                </div>
            </div>
            <!-- end footer content -->
        </div>
    </footer>
    <script>
        // Menu mobile
        const menuIcon = document.querySelector('.menu-icon');
        const nav = document.querySelector('nav');
        menuIcon.addEventListener('click', () => {
            if (nav.classList.contains('open')) {
                nav.classList.remove('open');
                menuIcon.querySelector('img').src = 'images/icon-hamburger.svg';
            } else {
                nav.classList.add('open');
                menuIcon.querySelector('img').src = 'images/icon-close.svg';
            }
        });
    </script>
</body>

</html>


