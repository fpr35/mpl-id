<?php
session_start();
if(!empty($_SESSION['nama424'])&&!empty($_SESSION['nim424'])&&!empty($_SESSION['foto424']))
{     
    echo"Akan diarahkan ke halaman form data player dalam 3  detik...";
header("refresh:3;url=data424.php");
    exit();
}else if(!empty($_SESSION['nama427'])&&!empty($_SESSION['nim427'])&&!empty($_SESSION['foto427']))
{
    echo"Akan diarahkan ke halaman form daftar team dalam 3 detik...";
    header("refresh:3;url=formteam427.php");
    exit();
}
?>
        <link rel="stylesheet" href=" bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="kel3.css">
        
<div align="center">
<form method="POST">
    <label for="napeng">Username :</label><br>
    <input type="text" name="napeng"><br>
    <label for="pw">Password :</label><br>
    <input type="password" name="pw"><br><br>
    <button type="submit">Login</button>
</form>
</div>

<?php
class login424{
    public function proses_login424(){

        $Ausername = array("2213010424","2213010427");
        $Apassword = array("2213010424","2213010427");

if($_POST){
    $usname=$_POST['napeng'];
    $paswerd=$_POST['pw'];

    if($usname==$Ausername[0] && $paswerd==$Apassword[0]){
        header("location: data424.php");
        $nama424="Havid Danggo Pamungkas";
        $nim424="2213010424";
        $foto424="<img src='img/fotohapid424.jpg' width='10%'>";
        $valid424=true;
    }elseif($usname==$Ausername[1] && $paswerd==$Apassword[1]){
        header("location: formteam427.php");
        $nama427="Fito Patria";
        $nim427="2213010427";
        $foto427="<img src='img/fito427.jpg' width='10%'>";
        $valid427=true;
    }else{
        $valid424=false;
        $valid427=false;
        echo "Username dan password tidak tepat"."<br>";
    }

if($valid424){
    $_SESSION["nama424"] = $nama424;
    $_SESSION["nim424"] = $nim424;
    $_SESSION["foto424"] = $foto424;
}elseif($valid427){
    $_SESSION["nama427"] = $nama427;
    $_SESSION["nim427"] = $nim427;
    $_SESSION["foto427"] = $foto427;
}}

}}

$objek424 = new login424();
$objek424->proses_login424();
?>