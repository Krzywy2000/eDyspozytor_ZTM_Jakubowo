<main>
    <div class="container">
        <div class="row">
            <div class="col-md-12 block">
                <div class="color__red">
                    <H2>Komunikaty</H2>
                </div>
                <br />
                <div class="content overflow-auto">
                    <table class="col-md-12">
                        <?php

                        include("./scripts/php/main_page/main/statements.php");

                        ?>
                    </table>
                </div>
            </div>
            <div class="col-md-12 block">
                <div class="color__yellow">
                    <H2>Aktualności</H2>
                </div>
                <br />
                <div class="content overflow-auto">
                    <table class="col-md-12">
                        <?php

                        include("./scripts/php/main_page/main/news.php");

                        ?>
                    </table>
                </div>
            </div>
            <div class="logo__position">
                <img class="logo" src="images/logos/logo_mpk.png">

                <img class="logo" src="images/logos/logo_ppks.png">

                <img class="logo" src="images/logos/logo_arriva.png">

            </div>
        </div>
    </div>
</main>