<main>
    <?php
    $id = $_GET['id'];

    require_once("scripts/php/db_connect.php");
    $connect = new mysqli($host, $db_user, $db_password, $db_name);
    @$connect->query("SET CHARSET utf8");

    $query = "SELECT * FROM wiadomosci WHERE `id` = $id";
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 block">
                <div class="color__yellow">
                    <H3>
                        <?php
                        if ($result = @$connect->query($query)) {
                            $statements = $result->num_rows;
                            if ($statements > 0) {
                                while ($row = $result->fetch_array()) {
                                    echo $row['naglowek'];
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
                                    echo "<H6>".$row['data_dodania']."</H6>";
                                }
                            }
                        }
                    ?>
                </div>
                <div class="content">
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
                <a href="admin.php?page=main">Wróć</a>
                </div>
            </div>
        </div>
    </div>
</main>