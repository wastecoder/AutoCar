<header class="topo">
    <img src="fotos_site/logo.png">
    <p>Auto Car</p>
    <ul>
        <a href="index.php">
            <li>Início</li>
        </a>
        <a href="pesquisar.php">
            <li>Pesquisar</li>
        </a>
        <?php
        @session_start();
        if(isset($_SESSION['logado'])){
            echo "
            <a href=create.php>
                <li>Inserir</li>
            </a>";
        }else{
            /*echo "
            <a href=login.php>
                <li>Inserir</li>
            </a>";*/
        }
        ?>
        <?php
        @session_start();
        if(isset($_SESSION['logado'])){
            echo "
            <a href=#>
                <li>$_SESSION[user]</li>
            </a>

            <a href=javascript:confirmExit()>
                <li>Sair</li>
            </a>";
        }else{
            echo "
            <a href=createUser.php>
                <li>Cadastrar</li>
            </a>

            <a href=login.php>
                <li>Entrar</li>
            </a>";
        }
        ?>
    </ul>
</header>