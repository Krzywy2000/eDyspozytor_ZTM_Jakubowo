<main>
    <div class="container">
        <div class="row">
            <div class="col-md-12 block">
                <div class="color__green">
                    <H2>Tabor</H2>
                </div>
                <div class="content__main">
                    <div class="heading">
                        <H6><b>Nasz tabor składa się z:</b></H6></br>
                    </div>
                    <div class="content__rolling_stone">
                        <?php
                        include("./scripts/php/main_page/rolling_stone/statistic_bus.php");
                        ?>
                        <a>sztuk autobusów,</a></br>
                        <?php
                        include("./scripts/php/main_page/rolling_stone/statistic_tram.php");
                        ?>
                        <a>składów tramwajów.</a></br>
                    </div>
                </div>
                <div class="content__main">
                    <div class="heading">
                        <H6><b>Statystyki taboru:</b></H6></br>
                    </div>
                    <div class="content__rolling_stone">
                        <a>Średni wiek taboru:</a>
                        <?php
                        include("./scripts/php/main_page/rolling_stone/average.php");
                        ?></br>

                        <a>Wiek najstarszego pojazdu:</a>
                        <?php
                        include("./scripts/php/main_page/rolling_stone/max_year.php");
                        ?></br>

                        <a>Wiek najmłodszego pojazdu:</a>
                        <?php
                        include("./scripts/php/main_page/rolling_stone/min_year.php");
                        ?></br>
                    </div>
                </div>
            </div>
            <div class="col-md-12 block">
                <div class="color__green">
                    <H4>MPK Jakubowo</H4>
                </div>
                <div class="heading">
                    <H4>Autobusy:</H4></br>
                </div>
                <div class="content__rolling_stone table-responsive">
                    <table class="table">
                        <tr>
                            <td><b>Marka</b></td>
                            <td><b>Model</b></td>
                            <td><b>Rok produkcji</b></td>
                            <td><b>Eksploatacja</b></td>
                            <td><b>Numery taborowe</b></td>
                            <td><b>Ilość sztuk</b></td>
                            <td><b>Zajezdnia</b></td>
                            <td><b>Uwagi</b></td>
                        </tr>
                        <?php
                        include("./scripts/php/main_page/rolling_stone/rolling_stone_MPK_bus.php");
                        ?>
                    </table>
                </div>
                <div class="heading">
                    <H4>Tramwaje:</H4></br>
                </div>
                <div class="content__rolling_stone table-responsive">
                    <table class="table">
                        <tr>
                            <td><b>Marka</b></td>
                            <td><b>Model</b></td>
                            <td><b>Rok produkcji</b></td>
                            <td><b>Eksploatacja</b></td>
                            <td><b>Numery taborowe</b></td>
                            <td><b>Ilość sztuk</b></td>
                            <td><b>Zajezdnia</b></td>
                            <td><b>Uwagi</b></td>
                        </tr>
                        <?php
                        include("./scripts/php/main_page/rolling_stone/rolling_stone_MPK_tram.php");
                        ?>
                    </table>
                </div>
            </div>
            <div class="col-md-12 block">
                <div class="color__green">
                    <H4>PPKS Grabowie Dolne</H4>
                </div>
                <div class="heading">
                    <H4>Autobusy:</H4></br>
                </div>
                <div class="content__rolling_stone table-responsive">
                    <table class="table">
                        <tr>
                            <td><b>Marka</b></td>
                            <td><b>Model</b></td>
                            <td><b>Rok produkcji</b></td>
                            <td><b>Eksploatacja</b></td>
                            <td><b>Numery taborowe</b></td>
                            <td><b>Ilość sztuk</b></td>
                            <td><b>Zajezdnia</b></td>
                            <td><b>Uwagi</b></td>
                        </tr>
                        <?php
                        include("./scripts/php/main_page/rolling_stone/rolling_stone_PPKS_bus.php");
                        ?>
                    </table>
                </div>
            </div>
            <div class="col-md-12 block">
                <div class="color__green">
                    <H4>Arriva</H4>
                </div>
                <div class="heading">
                    <H4>Autobusy:</H4></br>
                </div>
                <div class="content__rolling_stone table-responsive">
                    <table class="table">
                        <tr>
                            <td><b>Marka</b></td>
                            <td><b>Model</b></td>
                            <td><b>Rok produkcji</b></td>
                            <td><b>Eksploatacja</b></td>
                            <td><b>Numery taborowe</b></td>
                            <td><b>Ilość sztuk</b></td>
                            <td><b>Zajezdnia</b></td>
                            <td><b>Uwagi</b></td>
                        </tr>
                        <?php
                        include("./scripts/php/main_page/rolling_stone/rolling_stone_Arriva_bus.php");
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>