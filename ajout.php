<?php
$cnx=mysqli_connect("localhost","root","","bdmotezhattek") or die("Connexion impossible !");
mysqli_set_charset($cnx,"UTF8");
$mat=$_POST["matr"];
$nom=$_POST["nm"];
$pre=$_POST["prn"];
$req1="SELECT * from patient where mat='$mat'";
$res1=mysqli_query($cnx,$req1);
if (mysqli_num_rows($res1)!=0){
    echo"<p  >patient deja existant !!</p>";
}else{
    $req2="insert into patient values('$mat','$nom','$pre')";
    $res2=mysqli_query($cnx,$req2);
    if(mysqli_affected_rows($cnx)!=-1){
        echo"<p  >patient enregistré avec succès !!</p>";
    }else    echo"<p  > insertion échouée </p>";
}

?>
<style>
    p{
        color:white;
    }
</style>