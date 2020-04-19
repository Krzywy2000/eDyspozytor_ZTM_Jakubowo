<main>
    <div class="container">
        <div class="row">
            <div class="col-md-12 block">
                <div class="color__yellow">
                    <H3>Dodaj aktualności</H3>
                </div>
                <div class="heading">
                    <form method="POST" action="scripts/php/admin/add_news.php">
                        <a>Nagłówek:</a><br/>
                        <input type="text" name="title"/><br/><br/>
                        <a>Adresaci:</a><br/>
                        <select name="tryb">
                            <option value="Wszyscy">Wszyscy</option>
                            <option value="Przewoznicy">Przewoźnicy</option>
                        </select><br/><br/>
                        <a>Treść skrócona:</a><br/>
                        <textarea cols="50" rows="5" name="content_short"></textarea><br/><br/>
                        <a>Treść:</a><br/>
                        <textarea cols="50" rows="15" name="content"></textarea><br/><br/>
                        <button type="submit">Wstaw!</button>
                    </form>
                </div>
                <div class="tootsy">

                </div>
            </div>
        </div>
    </div>
</main>