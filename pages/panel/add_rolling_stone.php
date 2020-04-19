<main>
    <div class="container">
        <div class="row">
            <div class="col-md-5 block">
                <div class="color__green">
                    <H2>Dodaj pojazd</H2>
                </div>
                <div class="heading">
                </div>
                <div class="content__ticket">
                    <form method="POST" action="scripts/php/panel/rolling stone/add_rolling_stone.php">
                        <a>Numer taborowy:</a><br />
                        <input name="numer_taborowy" type="number" /><br /><br />
                        <a>Marka:</a><br />
                        <input name="marka" type="text" /><br /><br />
                        <a>Model</a><br />
                        <input name="model" type="text" /><br /><br />
                        <a>Rok produkcji:</a><br />
                        <input name="rok_produkcji" type="text" /><br /><br />
                        <a>Rok wprowadzenia do eksploatacji:</a><br />
                        <input name="rok_wprowadzenia" type="number" /><br /><br />
                        <a>Zajezdnia:</a><br />
                        <input name="zajezdnia" type="text" /><br /><br />
                        <a>Niskopodłogowy:</a><br />
                        <select name="czy_niskopodlogowy">
                            <option value="TAK">Tak</option>
                            <option value="NIE">Nie</option>
                        </select><br /><br />
                        <a>Klimatyzacja:</a><br />
                        <select name="czy_klima">
                            <option value="TAK">Tak</option>
                            <option value="NIE">Nie</option>
                        </select><br /><br />
                        <a>Biletomat:</a><br />
                        <select name="czy_biletomat">
                            <option value="TAK">Tak</option>
                            <option value="NIE">Nie</option>
                        </select><br /><br />
                        <a>Typ pojazdu:</a><br />
                        <select name="typ_pojazdu">
                            <option value="MIDI">MIDI</option>
                            <option value="MAXI">MAXI</option>
                            <option value="MEGA">MEGA</option>
                            <option value="TRAMWAJ">Tramwaj</option>
                        </select><br /><br />
                        <a>Rodzaj pojazdu:</a><br />
                        <select name="rodzaj_pojazdu">
                            <option value="AUTOBUS">Autobus</option>
                            <option value="TRAMWAJ">Tramwaj</option>
                            <option value="TROLEJBUS">Trolejbus</option>
                        </select><br /><br />
                        <a>Rysunek:</a><br />
                        <textarea name="rysunek" cols=50 placeholder="Tutaj wpisz nazwę pliku bez rozszerzenia"></textarea><br /><br />
                        <a>Uwagi:</a><br />
                        <textarea name="uwagi" cols=50></textarea><br /><br />
                        <button type="submit">Dodaj!</button>
                    </form><br/>
                </div>
                <div class="tootsy">
                    <a href="panel.php?page=rolling_stone">Wróć</a>
                </div>
            </div>
            <div class="col-md-1">

            </div>
            <div class="col-md-6 block">
                <div class="color__blue">
                    <H2>Dodaj wiele pojazdów</H2>
                </div>
                <div class="heading">
                    <a>Aby dodać więcej pojazdów przygotuj odpowiedni plik o formacie .csv</a><br />
                    <a href="Tabor.csv">Pobierz plik do uzupełnienia taboru</a><br/><br/>

                    <form enctype="multipart/form-data" action="scripts/php/panel/rolling stone/add_rolling_stone_csv.php" method="POST">
                        <input type="file" name="plik" /><br/><br/>
                        <input type="submit" value="Wyślij" />
                    </form>
                </div>
                <div class="content">

                </div>
                <div class="tootsy">
                </div>
            </div>
        </div>
    </div>
</main>