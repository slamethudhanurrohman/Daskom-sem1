<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku tamu</title>
    <link rel="stylesheet" href="Allstyle.css">
    <link rel="stylesheet" href="buku-tamu-style.css">
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
            <li><a href="buku tamu1.php">Buku Tamu</a></li>
        </ul>
        <label id="icon">
            <ion-icon name="ellipsis-vertical-outline"></ion-icon>
        </label>
    </nav>

    <div class="row">
       <div class="col-12">
            <div class="container">
                <div class="container-right">
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                        <div class="input">
                            <label>Nama</label>
                            <input name="Nama">
                        </div>		  	
                        <div class="input">
                            <label>NIM</label>
                            <input name="NIM">
                        </div>
                        <div class="input">
                            <label>Tahun Masuk</label>
                            <input name="Angkatan">
                        </div>
                        <div class="input">
                            <label>Alamat</label>
                            <input name="Alamat">
                        </div>
                        <div class="input">
                            <label>Pesan</label>
                            <input name="Pesan">
                        </div>
                        <input class="submit" type="submit" name="simpan" value="Masuk">
                    </form>	<br>
                    <div class="input">
                        <?php
                            if(isset($_POST['Nama'])){
                                $nama = $_POST['Nama'];
                                $nim = $_POST['NIM'];
                                $angkatan = $_POST['Angkatan'];
                                $alamat = $_POST['Alamat'];
                                $pesan = $_POST['Pesan'];

                                echo "
                                Nama : $nama <br> 
                                NIM : $nim <br> 
                                Angktan : $angkatan <br> 
                                Alamat : $alamat <br> 
                                Pesan : $pesan <br>                                 
                                ";
                            }
                        ?>
                    </div>
                </div>
		    </div>
        </div>
        </div>
   </div> 
            
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>