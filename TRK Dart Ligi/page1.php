<?php
    $number="";
    isset($_COOKIE['number']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRK DART LİGİ</title>
    <link rel="stylesheet" href="page1.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        function validate(){
            var input_number = document.getElementById("number");
            if(input_number.value == "" ){
                Swal.fire({
                    icon: 'error',
                    text: 'Lütfen sadece sayı giriniz!',
                    });
                return false;
            }
        }
    </script>
</head>
<body>
    <div id="header">
        <h1>TRK DART LİGİ</h1>
    </div>
    <div id="body">
        Dart Ligi düzenlenecektir.<br>
        <div class="form">
            <form action="page2.php" method="post" onsubmit="return validate();">
                <label for="">Kaç oyuncu olmasını istersiniz?</label><br><br>
                Oyuncu Sayısı: <input type="number" name="number" id="number" value="<?php echo $number; ?>" /> <br><br>
                <button type="submit">BAŞLA</button>
            </form>
        </div>
    </div>
    <div id="footer">
        <p>copyright &copy; TRK 2021<p>
    </div>
</body>
</html>