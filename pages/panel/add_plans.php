<?php
if(isset($_POST['data']))
{
    $data = $_POST['data'];
}
else
{
    $data = $_GET['data'];
}
?>
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-12 block">
                <div class="color__green">
                    <H2>Dodaj przydział</H2>
                </div>
                <div class="heading">
                    <H6><b>Spis:</b></H6>
                </div>
                <div class="content overflow-auto">
                    <table class="table table-responsive-sm">
                        <tr>
                            <td colspan="5" class="tickets"><H4><b>Pojazdy nieprzypisane</b></H4></td>
                        </tr>
                        <tr>
                            <th scope="col">Numer taborowy</th>
                            <th scope="col">Rodzaj pojazdu</th>
                            <th scope="col">Wybierz rozkład</th>
                        </tr>
                        <?php include("scripts/php/panel/plans/add_plans_list_vehicles.php");?>
                    </table>
                </div>
                <div class="tootsy">
                <a href="panel.php?page=confirm_date_plans">Cofnij</a>
                <a href="panel.php?page=plans">Powrót do przydziałów</a>
                </div>
            </div>
        </div>
    </div>
</main>