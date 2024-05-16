<header class="menu_bar">
    <table>
        <tr>
            <td>Blog</td>
            <td>
                <ul>
                    <li>
                        <a href="/blog/index.php" class="<?=(!isset($_GET["page"])? "menu_active" : ""); ?>">Home</a>
                    </li>
                    <li>
                        <a href="/blog/pages/articles.php?page=articles" class="<?=(isset($_GET["page"]) && $_GET["page"] == "articles" ? "menu_active" : ""); ?>">Articles</a>
                    </li>
                    <li>
                        <a href="/blog/pages/inscription.php?page=inscription" class="<?=(isset($_GET["page"]) && $_GET["page"] == "inscription" ? "menu_active" : ""); ?>">Inscription</a>
                    </li>                    
                    <li>
                        <a href="/blog/pages/connexion.php?page=connexion" class="<?=(isset($_GET["page"]) && $_GET["page"] == "connexion" ? "menu_active" : ""); ?>">Connexion</a>
                    </li>
                </ul>
            </td>
        </tr>
    </table>
</header>