<html>
<head>
    <title>arif rh</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
<form action="simpanpesanan.php" method="post">
    <div class="container">
        <div class="title">PEMBAYARAN</div><br>
        <div><img src="1.jpg" width="570px"></div>
        <div class="content">
            <form action="#">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Nama</span>
                        <input type="text" placeholder="nama anda" required name="nama">
                    </div>
                    <div class="input-box">
                        <span class="details">Jumlah</span>
                        <input type="text" placeholder="Jumlah Barang" required name="jumlah">
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="email" placeholder="Email Anda" required name="email">
                    </div>
                    <div class="input-box">
                        <span class="details">No</span>
                        <input type="text" placeholder="+62" required name="no">
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" placeholder="Password Email" required name="password">
                    </div>
                    <div class="input-box">
                        <span class="details">Confirm Password</span>
                        <input type="password" placeholder="Confirm password" required>
                    </div>
                </div>
                
                <input type="submit" name="proses" value="pesan"> 
            </form>
        </div>
    </div>
</body>
</html>

