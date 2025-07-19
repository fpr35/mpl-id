<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="427.css">
<link rel="icon" href="img/micclogo.png">
<title>Form Login</title>

<div align="center" id="bg_cont_login427" class="col-12">
    <?php
    session_start();
    if (!empty($_SESSION['nama427']) && !empty($_SESSION['nim427']) && !empty($_SESSION['foto427'])) {
        echo "<br><br><br><br><br><br><br><br>";
        echo "<span>Akan diarahkan ke halaman form daftar team dalam 3 detik...</span>";
        header("refresh:3;url=formteam427.php");
        exit();
    } else if (!empty($_SESSION['nama424']) && !empty($_SESSION['nim424']) && !empty($_SESSION['foto424'])) {
        echo "<br><br><br><br><br><br><br><br>";
        echo "<span>Akan diarahkan ke halaman form data player dalam 3 detik...</span>";
        header("refresh:3;url=data424.php");
        exit();
    }
    ?>
    <div class="row" id="rowlogin427">
        <div class="col-6" id="imglogin427">
            <h4><b>Don't Miss It! JJK x MLBB Will be Back at 8 June 2024!</b></h4>
            <img src="img/maxresdefault.jpg" width="90%">
        </div>
        <div class="col-6" id="formloginkanan427">
            <form method="POST">
                <h4><b>Please Login First Before Accessing Form Page</b></h4>
                <label for="napeng">Username</label><br>
                <input type="text" name="napeng" placeholder="Enter your username here" required><br>
                <label for="pw">Password</label><br>
                <input type="password" name="pw" placeholder="Enter your password here" required><br><br>
                <button type="submit">Log-in</button><br>
            </form>
            <?php
            class login427
            {
                public function proses_login427()
                {
                    $Ausername = array("2213010427", "2213010424");
                    $Apassword = array("2213010427", "2213010424");

                    if ($_POST) {
                        $usname = $_POST['napeng'];
                        $paswerd = $_POST['pw'];

                        if ($usname == $Ausername[0] && $paswerd == $Apassword[0]) {
                            header("location: formteam427.php");
                            $nama427 = "Fito Patria";
                            $nim427 = "2213010427";
                            $foto427 = "<img src='img/fito427.jpg' width='10%'>";
                            $valid427 = true;
                        } elseif ($usname == $Ausername[1] && $paswerd == $Apassword[1]) {
                            header("location: data424.php");
                            $nama424 = "Havid Danggo Pamungkas";
                            $nim424 = "2213010424";
                            $foto424 = "<img src='img/fotohapid424.jpg' width='10%'>";
                            $valid424 = true;
                        } else {
                            $valid427 = false;
                            $valid424 = false;
                            echo "<p align='right'><b>Username dan password tidak tepat</b></p>";
                        }

                        if ($valid427) {
                            $_SESSION["nama427"] = $nama427;
                            $_SESSION["nim427"] = $nim427;
                            $_SESSION["foto427"] = $foto427;
                        } elseif ($valid424) {
                            $_SESSION["nama424"] = $nama424;
                            $_SESSION["nim424"] = $nim424;
                            $_SESSION["foto424"] = $foto424;
                        }
                    }
                }
            }

            $objek427 = new login427();
            $objek427->proses_login427();
            ?>
        </div>
    </div>
</div>
