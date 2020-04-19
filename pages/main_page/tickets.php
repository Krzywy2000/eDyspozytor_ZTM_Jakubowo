<main>
    <div class="container">
        <div class="row">
            <div class="col-md-12 block">
                <div class="color__green">
                    <H3>Taryfa</H3>
                </div>
                <div class="heading">
                    <H5>Obowiązuje do 30 kwietnia</H5>
                </div>
                <div class="content__tickets">
                    <table class="table">
                        <tr>
                            <td colspan="4" class="tickets">
                                <H4>Ulgowe</H4>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Nazwa biletu</b></td>
                            <td><b>Cena</b></td>
                            <td><b>Ważność</b></td>
                            <td><b>Strefa</b></td>
                        </tr>
                        <?php include("./scripts/php/main_page/tickets/tickets.php"); ?>
                        <tr>
                            <td colspan="4" class="tickets">
                                <H4>Normalne</H4>
                            </td>
                        </tr>
                        <?php include("./scripts/php/main_page/tickets/tickets_normal.php"); ?>
                    </table>
                </div>
                <div class="tootsy">
                    <a><b>Uwaga!</b> W przypadku zakupu biletów u kierowcy w autobusie (dostępne będą tylko bilety 40 minutowe i 90 minutowe) do ceny biletu należy dodać kwotę 50 groszy dla biletów normalnych i 25 groszy dla ulgowych.</a>
                </div>
            </div>
        </div>
    </div>
</main>