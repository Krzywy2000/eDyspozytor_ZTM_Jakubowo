<main>
    <div class="container">
        <div class="row">
            <div class="col-md-12 block">
                <div class="color__yellow">
                    <H2>Dodaj pojazd do warsztatu</H2>
                </div>
                <div class="heading">
                   
                </div>
                <div class="content__tickets">
                    <form method="POST" action="scripts/php/panel/workshop/add_workshop.php">
                        <a>Data rozpoczęcia naprawy:</a><br/>
                        <input type="date" name='data_poczatek'/><br/><br/>
                        <a>Data usunięcia usterki:</a><br/>
                        <input type="date" name='data_koniec'/><br/><br/>
                        <a>Numer boczny pojazdu:</a><br/>
                        <input type="text" name='numer_taborowy'/><br/><br/>
                        <a>Powód:</a><br/>
                        <textarea cols="60" rows="10" name='powod'></textarea><br/><br/><br/>
                        <button type="submit">Dodaj!</button>
                    </form>
                </div>
                <div class="tootsy">
                    <a href="panel.php?page=workshop">Wróć</a>
                </div>
            </div>
        </div>
    </div>
</main>