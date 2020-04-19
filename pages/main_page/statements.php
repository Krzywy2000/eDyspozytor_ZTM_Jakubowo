<main>
    <?php
    $id = $_GET['id'];

    require_once("scripts/php/db_connect.php");
    $connect = new mysqli($host, $db_user, $db_password, $db_name);
    @$connect->query("SET CHARSET utf8");

    $query = "SELECT * FROM komunikaty WHERE `id` = $id";
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 block">
                <div class="color__red">
                    <H3>
                        <?php
                        if ($result = @$connect->query($query)) {
                            $statements = $result->num_rows;
                            if ($statements > 0) {
                                while ($row = $result->fetch_array()) {
                                    echo $row['temat'];
                                }
                            }
                        }
                        ?>
                    </H3>
                </div>
                <div class="heading">
                    <?php
                        if ($result = @$connect->query($query)) {
                            $statements = $result->num_rows;
                            if ($statements > 0) {
                                while ($row = $result->fetch_array()) {
                                    echo "<H6>Dotyczy: ".$row['numery linii']."</H6>";
                                    if($row['data_koniec'] == "0000-00-00")
                                    {
                                        echo "<H6>Od: ".$row['data_poczatek']."</H6>";
                                    }
                                    else
                                    {
                                        echo "<H6>Od: ".$row['data_poczatek']."</br>Do: ".$row['data_koniec']."</H6>";
                                    }
                                }
                            }
                        }
                    ?>
                </div>
                <div class="content overflow-auto">
                <?php
                        if ($result = @$connect->query($query)) {
                            $statements = $result->num_rows;
                            if ($statements > 0) {
                                while ($row = $result->fetch_array()) {
                                    echo "<a>".$row['tresc']."</a>";
                                }
                            }
                        }
                    ?>
                </div>
                <div class="tootsy">
                <H6>Inne komunikaty dotyczące tych linii:</H6>
                <?php
                    $query_more = "SELECT * FROM komunikaty WHERE `numery linii` like '%".$row['numery linii']."%' and `id` Not Like '".$id."' and `tryb` = 'Wszyscy'";
                    if ($result = @$connect->query($query_more)) {
                        $statements = $result->num_rows;
                        if ($statements > 0) {
                            while ($row1 = $result->fetch_array()) {
                                echo "<a href='index.php?page=statements&id=".$row1['id']."'>".$row1['temat']."</a><br/>";
                            }
                        }
                    }
                ?></br>
                <a href="index.php?page=main">Wróć</a>
                </div>
            </div>
        </div>
    </div>
</main>