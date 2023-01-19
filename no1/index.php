<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="icon"  href="img/icon.png">
    <title>PT. indah perindo</title>
    <style type="text/css">
        
        a{
            text-decoration: none;
            font-size: 25px;
            color:green;
        }

        body{
            background-image: url(img/bg.jpeg);
        }
        a:hover{
            color: white;
        }
        table{
            color: white;
            background-color: rgb(112,130,56);
            text-align: center;
        }

        table:hover{
            color: white;
        }
h1{
    text-align: center;
    font-style: italic;
    font-family: serif;
}
.nav{
    background-color:black;
}

img{
    border-radius: 100px;
}

.brand{
    border-radius: 100px;
    width: 200px;
    height: 200px;
}


    </style>
  </head>
  <body>
    <h1>Welcome To Our Website <br>
      <marquee> <b style="color:blue"> PT. indah perindo</b></marquee>
    </h1>
    <hr>
    <div class="nav">
    <a href="index.php">HOME</a> |
    <a href="index.php?page=<?= base64_encode(base64_encode('page1')); ?>">ABOUT</a> |
    <a href="index.php?page=<?= base64_encode(base64_encode('page2')); ?>">CONTACK</a> |
    <a href="index.php?page=<?= base64_encode(base64_encode('page3')); ?>">HISTORY</a> |
    <a href="index.php?page=<?= base64_encode(base64_encode('page4')); ?>">LOCATION</a> |
    <hr>
    </div>
    <?php 
    
    if (isset($_GET['page'])) :  
        $page= base64_decode(base64_decode(filter_var($_GET['page'],FILTER_SANITIZE_URL)));
        $a= include "halaman/".$page.".php";
        if ($a==false):
          header('location:index.php');
        endif;
        ?>
 <?php else: ?>
      <center><img src="img/brand.jpeg" class="brand"><br> <table border="1px" width="70%" cellpadding="5" cellspacing="0">
    <tr>
        <td>NAMA       : JESTIKA SAFITRI</td>
    </tr>
    <tr><td>JABATAN    : DIREKTUR UTAMA</td></tr>
        <tr><td>ALAMAT : BENGKULU</td></tr>
        <tr><td>E-MAIL : JESTIKA@gmail.com</td></tr>
        <tr><td>NO HP : 086732642387</td></tr>
    <tr>
        <td style="background-color:silver; color: black" > DIREKTUR UTAMA PT. indah perindo <br><img src="img/je.jpeg" width="400px" height="400px"></td></tr>

        
</table>

</center>

<?php endif; ?>
    
  </body>
</html>

<!--php://filter/convert.base64-encode/resource= ->
