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

                        include("./scripts/php/admin/statements.php");

                        ?>
                    </table>
                </div>
            </div>
            <div class="col-md-6 block">
                <div class="color__yellow">
                    <H2>Aktualności</H2>
                </div>
                <br />
                <div class="content overflow-auto">
                    <table class="col-md-12">
                        <?php

                        include("./scripts/php/admin/news.php");

                        ?>
                    </table>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5 block">
                <div class="color__blue">
                    <H2>Przetargi</H2>
                </div>
                <br/>
                <div class="content overflow-auto">
                    <table class="col-md-12">
                        <?php

                        include("./scripts/php/admin/tenders.php");

                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>