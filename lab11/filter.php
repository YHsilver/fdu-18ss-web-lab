<?php
if (isset($_POST['continent'])) {
    $continent = $_POST['continent'];
    $pdo = new PDO("mysql:host=localhost;dbname=travel", "root", "root");

    $sql_countries = "SELECT * from Countries Where Continent = '$continent'";
    $country = $pdo->query($sql_countries);

    echo "<option value=\"0\">Select Country</option>";
    while ($result = $country->fetch()) {
        echo '<option value=' . $result['ISO'] . '>' . $result['CountryName'] . '</option>';
    }
}