<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.ccs">
    <title>Pembayaran</title>
</head>
<body>
    <div class="main-container">
        <a href="logout.php">Logout</a>
        <section class="panel-form">
            <h1>Hitung Pembayaran</h1>
            <form action="index.php" method="POST">
                <div class="form-group">
                    <label for="">Total Belanja:</label>
                    <input type="text" name="total_belanja" id="">
                </div>
                <input type="submit" value="hitung">
            </form> <!--akhir dari form-->
        </section>
        
        
        <?php

          function hitung_discount($total_belanja)
          {
            $discount = 0;
            if ($total_belanja >= 100000){
                $discount = $total_belanja * 0.1;
            }else if ($total_belanja >= 50000 ){
                $discount = $total_belanja * 0.05;
            }

            return $discount;

          }

          if($_POST){
            $total_belanja = $_POST['$total_belanja'];
            $nilai_discount = hitung_discount
            ($total_belanja);

            $bayar = $total_belanja - $nilai_discount;


                echo "<div section='panel-info'>";
                  echo "<div class='info-belanja'";
                   echo "<p>Total Belanja</p>";
                   echo "<p>".$total_belanja. "</p>";
                  echo "</div>";

                  echo "<div class='info-discount'";
                   echo "<p>Total Discount</p>";
                   echo "<p>".$nilai_discount."</p>";
                  echo "</div>";

                  echo "<div class='info-bayar'";
                   echo "<p>Total Bayar</p>";
                   echo "<p>".$bayar."</p>";
                  echo "</div>";
                echo "<section/>";
            }
        ?>
    </div><!--akhir dari main-container -->


</body>
</html>