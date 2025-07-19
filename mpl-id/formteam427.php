<html>
    <link rel="icon" href="img/micclogo.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="427.css">
    <script type="text/javascript" src="jquery-3.7.1.js"></script>
    <title>MICC #ESPORT4EVERYONE</title>

    <body>
        <div id="kel3isimicc" class="col-12" align="center">
            <br>
            <h1 align="center" style="color:#33716E"><b>MICC REGISTRATION</b></h1>
            <div align="center" id="divsession427">
                <?php
                class log427 {
                    public function in427(){
                        session_start();
                        if (!empty($_SESSION['nama427']) && !empty($_SESSION['nim427']) && !empty($_SESSION['foto427'])) {     
                            echo "Nama : " . $_SESSION["nama427"] . "<br>";
                            echo "NIM : " . $_SESSION["nim427"] . "<br><br>";
                            echo $_SESSION["foto427"] . "<br></br>";
                            echo "<form method='POST'><button type='submit' name='logout'>logout</button></form>";
                        } else {
                            echo "<p id='predirectform'>Akan diarahkan ke halaman login dalam 3 detik...";
                            header("refresh:3;url=sessionlogin427.php");
                            exit();
                        }
                    }

                    public function out427(){
                        if (isset($_POST['logout'])) {
                            session_unset();
                            session_destroy();
                            header("Location: sessionlogin427.php");
                            exit();
                        }
                    }
                }
                $objin427 = new log427();
                $objin427->in427();
                if ($_POST) {
                    $objout427 = new log427();
                    $objout427->out427();
                }
                ?>
            </div>
            <form method="post">
                <div align="center" class="container-fluid d427">
                    <div align="left" id="divform427" class="col-10">
                        <h1 align="center" style="color:white"><b>TEAMS</b></h1>
                        <div class="row">
                            <div id="divrow427" class="col-6">
                                <b>NAMA TEAM : </b><br></br>
                                <input type="text" name="namatim427" required>
                                <span id="span427">Nama Tim dan Nama Pemain tidak boleh mengandung: kata-kata vulgar, kotor, kasar, dan menyinggung SARA; nama yang terkait dengan karakter hero di MLBB atau karakter serupa lainnya; atau nama lain yang dapat membuat kebingungan.</span><br></br>
                                <b>NAMA PANGGILAN TEAM : </b><br></br>
                                <input type="text" name="nicktim427" required>
                                <span id="span427">Contoh: Bigetron to BTR</span><br></br>
                                <b>EMAIL CONTACT PERSON : </b><br></br>
                                <input type="email" name="email427" required><br></br>
                            </div>
                            <div id="divrow427" class="col-6">
                                <b>WHATSAPP CONTACT PERSON : </b><br></br>
                                <input type="number" name="wa427" required><br></br>
                                <b>ID INGAME CAPTAIN TEAM : </b><br></br>
                                <input type="number" name="idg427" required>
                                <span id="span427">Id ingame captain team harus sama dengan yang diisikan pada form player</span><br></br>
                                <b>MASUKKAN ASAL KOMUNITAS : </b><br><br>
                                <input type="text" name="komunitas">
                                <button id="tombol427" type="submit"><b>DONE</b></button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <?php
            class dafteam427 {
                public $namatim427;
                public $nicktim427;
                public $email427;
                public $wa427;
                public $idg427;

                public function __construct($namatim, $nicktim, $email, $wa, $idg) {
                    $this->namatim427 = $namatim;
                    $this->nicktim427 = $nicktim;
                    $this->email427 = $email;
                    $this->wa427 = $wa;
                    $this->idg427 = $idg;
                }

                protected function data427() {
                    $data_namatim427 = array("Crow Esport", "Freezing Ice", "Sword");
                    $data_nicktim427 = array("CRW", "FRZ", "SWRD");
                    $data_email427 = array("faizal14@gmail.com", "vren34@gmail.com", "nando1140@gmail.com");
                    $data_wa427 = array("08912386720", "08128948539", "081227940176");
                    $data_idg427 = array("153038308", "337368353", "78271337");

                    if (in_array($this->namatim427, $data_namatim427)) {
                        echo "<h5 style='color:red'><b>NAMA TIM SUDAH DIPAKAI</b></h5>" . "<br>"; 
                        if (in_array($this->nicktim427, $data_nicktim427)) {
                            echo "<h5 style='color:red'><b>NICKNAME TEAM SUDAH DIPAKAI</b></h5>" . "<br>";
                        }
                    } elseif (in_array($this->nicktim427, $data_nicktim427)) {
                        echo "<h5 style='color:red'><b>NICKNAME TEAM SUDAH DIPAKAI</b></h5>" . "<br>";
                        if (in_array($this->namatim427, $data_namatim427)) {
                            echo "<h5 style='color:red'><b>NAMA TIM SUDAH DIPAKAI</b></h5>" . "<br>"; 
                        }
                    } else {
                        array_push($data_namatim427, $this->namatim427);
                        array_push($data_nicktim427, $this->nicktim427);
                        array_push($data_email427, $this->email427);
                        array_push($data_wa427, $this->wa427);
                        array_push($data_idg427, $this->idg427);
                        
                        echo "<h3 style='color:greenyellow' align='center'>TEAM ANDA SUDAH TERDAFTAR</h3> <br><br><br>";
                        echo "<span style='color:greenyellow'>NAMA TEAM : </span>" . $this->namatim427 . "<br><br>", "<span style='color:greenyellow'>NAMA PANGGILAN TEAM : </span>" . 
                        $this->nicktim427 . "<br><br>", "<span style='color:greenyellow'>EMAIL CONTACT PERSON : </span>" . $this->email427 . "<br><br>", 
                        "<span style='color:greenyellow'>WHATSAPP CONTACT PERSON : </span>" . $this->wa427 . "<br><br>", "<span style='color:greenyellow'>ID INGAME CAPTAIN TEAM : </span>" . $this->idg427 . "<br></br><br></br>";
                        echo "<h3 style='color:greenyellow'>LIST TEAM YANG SUDAH TERDAFTAR : </h3><br>";
                        return $data_namatim427;
                    }
                }
            }

            class daftarteam427 extends dafteam427 {
                public $fee_regist = 10000;
                private $prizepool = 1000000;
                public $komunitas;
                public $dataarray = array();

                public function __set($name, $value) {       
                    $this->dataarray[$name] = ($value - $this->fee_regist);  
                }  

                public function __get($name) { 
                    $this->komunitas = $_POST['komunitas'];
                    if (array_key_exists($name, $this->dataarray)) {  
                        $total = ($this->dataarray[$name] - $this->fee_regist); 
                        if ($this->komunitas == 'CH_210') {
                            return $total;
                        } else {
                            return $total = $this->dataarray[$name] - 90000;
                        }
                    }
                }  

                public function tampilkan427() {
                    return $this->data427();
                }
            }
            ?>
            <div class="container-fluid" align="center">
                <div align="left" class="col-10" id="divhasilform427">
                    <b>
                        <?php
                        if ($_POST) {
                            $namatim427 = $_POST['namatim427'];
                            $nicktim427 = $_POST['nicktim427'];
                            $email427 = $_POST['email427'];
                            $wa427 = $_POST['wa427'];
                            $idg427 = $_POST['idg427'];

                            $objek427 = new daftarteam427($namatim427, $nicktim427, $email427, $wa427, $idg427);
                            $arraytampil427 = $objek427->tampilkan427();
                            if ($arraytampil427) {
                                foreach ($arraytampil427 as $key => $value) {
                                    echo "<span style='color:aqua'>TEAM </span>" . $value . "<br></br>";
                                }
                                echo "<br><h4 style='color:greenyellow'>SILAHKAN TEKAN TOMBOL <b>NEXT</b> UNTUK MELANJUTKAN MENGISI FORM DATA PLAYER</h4><br>";
                                $objek427->prizepool = 5000000;
                                echo "Total Hadiah : Rp. " . $objek427->prizepool . "<br><br>";  
                                echo "<a href='data424.php'><button id='nextbut427'><b>NEXT ></b></button></a>";
                            }
                        }
                        ?>
                    </b>
                </div>
            </div>
            <img id="footer427" src="img/footer.webp">
        </div>
    </body>
    <script src="kel3.js"></script>
</html>