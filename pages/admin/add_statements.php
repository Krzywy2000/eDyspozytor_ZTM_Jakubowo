<main>
    <div class="container">
        <div class="row">
            <div class="col-md-12 block">
                <div class="color__red">
                    <H3>Dodaj komunikat</H3>
                </div>
                <div class="heading">
                    <form method="POST" action="scripts/php/admin/add_statements.php">
                        <a>Temat:</a><br/>
                        <input type="text" name="title"/><br/><br/>
                        <a>Adresaci:</a><br/>
                        <select name="tryb">
                            <option value="Wszyscy">Wszyscy</option>
                            <option value="Przewoznicy">Przewoźnicy</option>
                        </select><br/><br/>
                        <a>Treść:</a><br/>
                        <textarea cols="50" rows="15" name="content"></textarea><br/><br/>
                        <a>Data początkowa:</a><br/>
                        <input type="date" name="start_date"/><br/><br/>
                        <a>Data końcowa:</a><br/>
                        <input type="date" name="end_date"/><br/><br/>
                        <a>Numery linii:</a><br/>
                        <input type="text" name="lines"/><br/><br/>
                        <button type="submit">Wstaw!</button>
                    </form>
                </div>
                <div class="tootsy">

                </div>
            </div>
        </div>
    </div>
</main>