<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <link rel="stylesheet" href="AllStyle.css">
    <link rel="stylesheet" href="buku tamu.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $('#icon').click(function(){
                $('ul').toggleClass('show');
            });
        });
    </script>
    
</head>
<body>
    <nav>
        <label class="logo">Biographical Data</label>
        <ul>
            <li><a href="Home.html">Home</a></li>
            <li><a href="about me.html">About Me</a></li>
            <li><a href="Blog.html">Blog</a></li>
            <li><a href="Buku tamu.php">Buku Tamu</a></li>
        </ul>
        <label id="icon">
            <ion-icon name="ellipsis-vertical-outline"></ion-icon>
        </label>
    </nav>

    <br>
    <br>
    
    <div id="wrap">
        <div class="row">
        <div class="container">
		<div class="container-left">
            		<h1>Biodata Mahasiswa </h1>
            		<img src="vasily-koloda-8CqDvPuo_kI-unsplash.jpg" alt="gambar">
            		<h1>Fakultas Ilmu Komputer</h1>
            		<p>Universitas Dian Nuswantoro</p>
		</div>
		<div class="container-right">
            		<form action="data.php" method="post" name="BIODATA MAHASISWA">
                		<div class="input">
                    			<label for="Nama">Nama</label>
                    			<input type="text" id="Nama" name="Nama">
                		</div>		  	
				<div class="input">
				    <label for="NIM">NIM</label>
				    <input type="text" id="NIM" name="NIM">
				</div>
				<div class="input">
				    <label for="Progdi">Progdi</label>
				    <select name="Progdi" id="Progdi">
					<option value="A">Teknik Informatika - S1</option>
					<option value="B">Desain Komunikasi Visual - S1</option>
					<option value="C">Sistem Informasi - S1</option>
					<option value="D">Film dan Televisi - SST</option>
					<option value="E">Teknik Informatika - D3</option>
					<option value="F">Animasi - SST</option>
					<option value="G">Ilmu Komunikasi - S1</option>
					<option value="H">Broadcasting - D3</option>
				    </select>
				</div>
				<div class="input">
				    <label for="Tanggal Lahir">Tanggal Lahir</label>
				    <input type="date" id="Tanggal Lahir" name="Tanggal Lahir">
				</div>
				<div class="input">
				    <label for="Jenis Kelamin">Jenis Kelamin</label>
				    <select name="Jenis Kelamin" id="Jenis Kelamin">
					<option value="Laki-Laki">Laki-Laki</option>
					<option value="Perempuan">Perempuan</option>
				    </select>
				</div>
				<input class="submit" type="submit" name="simpan" value="Masuk">
			</form>	
		</div>
	</div>
        </div>
    </div>
    
    <div class="col-12">
        <footer>
            <p>Copyright &copy; 2022 SlametHudhaNurrohman</p>
        </footer>
    </div>
    <br>
    <br>
    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>