<html>
<link rel="icon" href="img/micclogo.png">
<link rel="stylesheet" href=" bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="424.css">
<script type="text/javascript" src="jquery-3.7.1.js"></script>
<title>MICC #ESPORT4EVERYONE</title>

<head>
    <title>MICC #ESPORT4EVERYONE</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./data424.css">
</head>
<body>

<body>
<div id="kel3isimicc"class="col-12">

<div align="center">
<?php

class log424 {
    public function in424(){
    session_start();

        if(!empty($_SESSION['nama424'])&&!empty($_SESSION['nim424'])&&!empty($_SESSION['foto424']))
        {     
            echo $_SESSION["nama424"]."<br>";
            echo $_SESSION["nim424"]."<br>";
            echo $_SESSION["foto424"]."<br></br>";
            echo "<form method='POST'><button type='submit' name='logout'>logout</button></form>";
        }else{
            echo"Akan diarahkan ke halaman login dalam 3 detik...";
            header("refresh:3;url=sessionlogin424.php");
            exit();
        }
        
}
public function out424(){
    if (isset($_POST['logout'])) {
        
        session_unset();
        session_destroy();
        header("Location: sessionlogin424.php");
        exit();
    }
}
}
$objin424 = new log424();
$objin424->in424();
if($_POST){
    $objout424 = new log424();
    $objout424->out424();
}
?>
</div>

    <div id="bg424">
    <form id="form" method="post">
    <br>
    <h1 align="center" style="color:#33716E"><b>MICC REGISTRATION</b></h1>
        <h1>Data Player</h1>
        <h3>
        Nama Lengkap Captain :
        <input type="text" name="nacap424" required><br>
        ID In Game Player 1(captain) :
        <input type="number" name="plr1424" required><br>
        ID In Game Player 2 :
        <input type="number" name="plr2424" required><br>
        ID In Game Player 3 :
        <input type="number" name="plr3424" required><br>
        ID In Game Player 4 :
        <input type="number" name="plr4424" required><br>
        ID In Game Player 5 :
        <input type="number" name="plr5424" required><br>
        Kode member (optional) :
        <input type="text" name="mbr424"><br>
        </h3>
        <button type="submit">Daftar</button>
    </form>
<div id="mio424">
    <?php
    class signup424 {
        public $nacap424;
        public $plr1424;
        public $plr2424;
        public $plr3424;
        public $plr4424;
        public $plr5424;

        public function __construct($nacap,$plr1, $plr2, $plr3, $plr4, $plr5) {
            $this->plr1424 = $plr1;
            $this->plr2424 = $plr2;
            $this->plr3424 = $plr3;
            $this->plr4424 = $plr4;
            $this->plr5424 = $plr5;
            $this->nacap424 = $nacap;
        }

        protected function inaray424() {
            $data_nacap424 = array("Ahmad Zilong", "Emanuel Martis");
            $data_plr1424 = array("755993993", "313284497");
            $data_plr2424 = array("394065000", "117900379");
            $data_plr3424 = array("229373644", "252716276");
            $data_plr4424 = array("127781618", "978272776");
            $data_plr5424 = array("335615718", "345167716");

            if (in_array($this->plr1424,  $data_plr1424)) {
                echo "ID Sudah Terdaftar". "<br>"; 
            } elseif (in_array($this->plr2424, $data_plr2424)) {
                echo "ID Sudah Terdaftar". "<br>";
            } elseif (in_array($this->plr3424, $data_plr3424)) {
                echo "ID Sudah Terdaftar". "<br>";
            } elseif (in_array($this->plr4424, $data_plr4424)) {
                echo "ID Sudah Terdaftar". "<br>";
            } elseif (in_array($this->plr5424, $data_plr5424)) {
                echo "ID Sudah Terdaftar". "<br>";
            } else {
                array_push($data_nacap424,$this->nacap424);
                array_push($data_plr1424,$this->plr1424);
                array_push($data_plr2424,$this->plr2424);
                array_push($data_plr3424,$this->plr3424);
                array_push($data_plr4424,$this->plr4424);
                array_push($data_plr5424,$this->plr5424);

                echo "<h5 id='beat'align='center' ><b> TERIMAKASIH TELAH BERPARTISIPASI PADA EVENT KAMI </b></h5><br>";
                echo"<span>Nama Captain : </span>". $this->nacap424."<br>","<span>ID In Game Player 1(captain)  : </span>".$this->plr1424."<br>","<span>ID In Game Player 2  : </span>". $this->plr2424."<br>","<span>ID In Game Player 3  : </span>". $this->plr3424."<br>","<span>ID In Game Player 4  : </span>". $this->plr4424."<br>","<span>ID In Game Player 5  : </span>". $this->plr5424."<br></br>";
                echo "<span><b>List Nama Captain Tim Yang Terdaftar : </b></span><br></br>";
                return $data_nacap424;
            }
        }
    }

    class daftar424 extends signup424 {
        public function cetak424() {
            return $this->inaray424();
        }
        public $diskon=5000;

public $kode_mbr424;
public $dataarray = array();

public function __set($name, $value)  
   {       
        
        $this->dataarray[$name] = ($value-$this->diskon);  
       
   }  
public function __get($name)  
   { 
       $this->kode_mbr424=$_POST['mbr424'];
          if (array_key_exists($name, $this->dataarray)) {  
            $this->dataarray[$name];
         $total=($this->dataarray[$name]); 
           if($this->kode_mbr424=='hapid'){
               return $total = $this->dataarray[$name]-5000;
           } else{
               return $total;
           }
       }
          
   } 

    }

    

    if($_POST) {
        $nacap424 = $_POST['nacap424'];
        $plr1424 = $_POST['plr1424'];
        $plr2424 = $_POST['plr2424'];
        $plr3424 = $_POST['plr3424'];
        $plr4424 = $_POST['plr4424'];
        $plr5424 = $_POST['plr5424'];

        $jeruk424= new daftar424($nacap424,$plr1424,$plr2424,$plr3424,$plr4424,$plr5424);
        $arraycetak424=$jeruk424->cetak424();
        if($arraycetak424){
            foreach($arraycetak424 as $key => $value){
                echo $value. "<br></br>";
            }
            $jeruk424->adminitrasi=50000;
            echo "Biaya pendaftaran : Rp. ".$jeruk424->adminitrasi . "<br><br>";  
        }
    }
    ?>
    </div>
    </div>
</body>
</html>
