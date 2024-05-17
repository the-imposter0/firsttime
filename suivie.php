<?php
$cnx = mysqli_connect("localhost","root","","bdmotezhattek") or die("Connexion impossible !");
mysqli_set_charset($cnx, "UTF8");
$d = date('y-m-d');
$req= "SELECT nom, prenom, datecons, detailcons FROM patient p, consultation c WHERE p.mat = c.mat AND datecons='$d'";
$res = mysqli_query($cnx,$req);

if (mysqli_num_rows($res) == 0) {
    echo "no consultations aujourd'hui !";
} else {
    echo "<table border='2'>
    <tr>
        <th>NOM</th>
        <th>PRENOM</th>
        <th>DATECONS</th>
        <th>DETAILCONS</th>
    </tr>";

    while ($t = mysqli_fetch_array($res)) {
        echo "<tr>
        <td>" . $t['0'] . "</td>
        <td>" . $t['1'] . "</td>
        <td>" . $t['2'] . "</td>
        <td>" . $t['3'] . "</td>
        </tr>"; 
    }

    echo "</table>";
}

mysqli_close($cnx);
?>
