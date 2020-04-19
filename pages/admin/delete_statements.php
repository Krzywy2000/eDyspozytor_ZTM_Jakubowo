<main>
    <?php
        $id = $_GET['id'];
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 block">
                <div class="color__red">
                    <H3>Usuń komunikat</H3>
                </div>
                <div class="heading">
                    <form method="POST" action="scripts/php/admin/delete_statements.php">
                        <p>Czy na pewno chcesz usunąć?</p>
                        <input name="id" type="hidden" value="<?php echo $id ?>"/>
                        <button type="submit">Tak</button>
                        <a href="admin.php"><input type="button" value="Nie"></a>
                    </form>
                </div>
                <div class="tootsy">

                </div>
            </div>
        </div>
    </div>
</main>