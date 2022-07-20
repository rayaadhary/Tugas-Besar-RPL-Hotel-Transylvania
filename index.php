<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hotel Transylvania</title>
</head>

<body>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <!-- banner -->
    <!-- <div class="banner">
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark shadow-sm bg-primary">
            <div class="container-fluid justify-content-center">
                <a class="navbar-brand" href="#">Hotel Transylvania</a>
            </div>
            <div>
                <img src="#" alt="GAMBAR">
            </div>
        </nav>
    </div> -->
    <div class="banner">
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark shadow-sm bg-primary">
            <div class="container-fluid justify-content-center">
                <a class="navbar-brand" href="#">Hotel Transylvania</a>
            </div>
        </nav>
    </div>
    <div>
        <img src="" alt="GAMBAR">
    </div>

    <!-- <div class="card text-center mb-6">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div> -->

	<form method="post" name="f" action="login.php">
		<?php
		if (isset($_GET["error"])) {
			$error = $_GET["error"];
			if ($error == 1)
				showError("Nama Petugas dan password tidak sesuai.");
			else if ($error == 2)
				showError("Error database. Silahkan hubungi administrator");
			else if ($error == 3)
				showError("Koneksi ke Database gagal. Autentikasi gagal.");
			else if ($error == 4)
				showError("Anda tidak boleh mengakses halaman sebelumnya karena belum login. Silahkan
login terlebih dahulu.");
			else
				showError("Unknown Error.");
		}
		?>

		<div class="container py-5 h-100">
			<div class="row d-flex justify-content-center align-items-center h-100 g-0">
				<div class="card" style="opacity: 0.9;">
					<div class="row g-0">
						<div class="col-lg-7">
							<div class="login-layout text-center mt-4">
								<h4>Login</h4>
								<form>
									<div class="mb-3 text-start mx-5">
										<label for="nama_petugas" class="form-label">Nama Petugas</label>
										<input type="text" class="form-control" id="nama_petugas" name="nama_petugas" placeholder="Masukkan Nama Petugas" maxlength="5" size="5">
									</div>
									<div class="mb-3 text-start mx-5">
										<label for="pass" class="form-label">Kata Sandi</label>
										<input type="password" class="form-control" id="pass" name="password" placeholder="Masukkan Kata Sandi" maxlength="20">
									</div>
									<div class="mb-3 text-start mx-5 form-check">
										<label class="form-check-label">Lihat Kata Sandi</label>
										<input type="checkbox" onclick="lihatpassword()" class="form-check-input">
									</div>
									<div class="d-flex justify-content-center">
										<button type="submit" name="TblLogin" class="btn btn-primary">Login</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
	<script type="text/javascript">
		function lihatpassword() {
			var pass = document.getElementById('pass');
			if (pass.type == 'password') {
				pass.type = "text";
			} else {
				pass.type = 'password';
			}
		}
	</script>
</body>

</html>