<html>
<body>
  <link rel="stylesheet" href="comment.css" />
<div class="navbar">
<div class="login">
    <form action="simpan.php" method="post">
    <input type="text" placeholder="Username" id="username" name="username">  
  <input type="text" placeholder="Message" id="message"name="message">  
  <input type="submit" value="Send">
  <a href="productsesudah.html" class="forgot">Kembali</a>
</form>
</div>
<div class="shadow"></div>
<center>
  <?php
        include("koneksi.php");
        $query=mysqli_query($koneksi,'select * from comment');
        while($data=mysqli_fetch_array($query))
        {
        $username = $data['username'];
        $message = $data['message'];
        $date = $data['date'];
        echo "
        <br>
        <h2>People Comments</h2>
        <b>$username</b> said <br>
        '$message' <br>
        $date
        ";}
        ?></center></div>
<body>
</html>