<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BMS App - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<?php
		 //Fungsi untuk mencegah inputan karakter yang tidak sesuai
		 function input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		//Cek apakah ada kiriman form dari method post
		if ($_SERVER["REQUEST_METHOD"] == "POST") {

			session_start();
			include "koneksi.php";
			$username = input($_POST["username"]);
			$p = input($_POST["password"]);

			$sql = "select * from users where username='".$username."' and password='".$p."' limit 1";
			$hasil = mysqli_query ($connection,$sql);
			$jumlah = mysqli_num_rows($hasil);

            if ($jumlah>0) {
                $row = mysqli_fetch_assoc($hasil);
                $_SESSION["id"]=$row["id"];
                $_SESSION["username"]=$row["username"];
                $_SESSION["fullname"]=$row["fullname"];
                $_SESSION["lvl"]=$row["lvl"];
                $_SESSION["image"]=$row["image"];
        
        
                if ($_SESSION["lvl"]=$row["lvl"]=="admin") {
                    header("Location:admin/index.php");
                } else {
                    echo "<div class='alert alert-danger'>
				<strong>Error!</strong> Username dan password salah. 
			  </div>";
                }
            }
        }
	
	?>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-md-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                        
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Selamat Datang</h1>
                                        <?php 
	                                        if(isset($_GET['pesan'])){
		                                        if($_GET['pesan']=="gagal"){
			                                        echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		                                        }
	                                        }
	                                    ?>
                                    </div>
                                    <form class="user" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                aria-describedby="usernameHelp" name="username"
                                                placeholder="Enter Username...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                 placeholder="Password" name="password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>