<?php
    session_start();
?>
<header>
    <nav class="navbar navbar-dark navbar-expand-md bg-color" role="navigation">
        <div class="container-fluid">
            <a class="navbar-brand" href="admin.php">ZTM Jakubowo</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#bs-navbar-collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse border__ul" id="bs-navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="nav-item border__li"><a class="nav-link" href="admin.php?page=add_news">Dodaj aktualność</a></li>
                    <li class="nav-item border__li"><a class="nav-link" href="admin.php?page=add_statements">Dodaj komunikat</a></li>
                    <li class="nav-item border__li"><a class="nav-link" href="admin.php?page=add_tenders">Dodaj przetarg</a></li>
                </ul>
                <ul class="navbar-nav mr-auto">


                </ul>
                <ul class="nav navbar-nav">
                    <li class="nav-item border__li"><a class="nav-link">
                            <?php
                                include("./scripts/php/panel/main/header_person.php");
                            ?>
                        </a>
                    </li>
                    <li class="nav-item border__li"><a class="nav-link" href="scripts/php/panel/logoff.php">Wyloguj</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>