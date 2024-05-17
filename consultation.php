<?php
$cnx=mysqli_connect("localhost","root","","bdmotezhattek") or die("Connexion impossible !");
mysqli_set_charset($cnx,"UTF8");
$mat=$_POST["matr"];
$det=$_POST["det"];
$nbj=$_POST["nbr"];
$req1="SELECT * from patient where mat='$mat'";
$res1=mysqli_query($cnx,$req1);
if (mysqli_num_rows($res1)==0){
    echo"<p  >Matricule inexistante !!</p>";
}elseif($nbj>=0) {
    $d=date('y-m-d');
    $d2=date('y-m-d',strtotime("+$nbj days"));
    $req="insert into consultation values('$mat','$d','$d2','$det')";
    $res2=mysqli_query($cnx,$req);
    if(mysqli_affected_rows($cnx)!=-1){
    echo("<p  >insertion avec succés La date du prochain RDV est : $d2</p>");
   }else    echo"<p  > insertion échouée </p>";
}
?>
<style>
    p{
        color:white;
    }
</style>