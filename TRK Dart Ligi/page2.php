<?php
    if(isset($_POST['number'])) {
        session_start();

        setcookie("number",$_POST['number']);
    } else{
        setcookie("number",0);
    }
    
    $servername = "localhost";
    $username = "hotel_trk";
    $password = "trkturizm123";
    $db = "test";
    $conn = mysqli_connect($servername, $username, $password,$db);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRK DART LİGİ</title>
    <link rel="stylesheet" href="page2.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="page2.js"></script>
</head>
<body>
    <div id="header">
        <h1>TRK DART LİGİ</h1>
    </div>
    <div id="body">
        <?php
        $number=0;
        if(isset($_POST['number'])) {
            $number=$_POST['number'];
            } 
        $_SESSION['number']=$number;
        echo "Müsabakalara katılan oyuncu sayısı: $number";
        ?>
        <br><br>
        <form >
            <table id="table" border=1 cellspacing=0>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Oyuncu Adı</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if(isset($_POST['number'])) {
                            $number= floatval( $_POST['number'] );
                        }
                        for($i=1; $i<=$number; $i++)
                        {
                            echo "<tr>
                                    <td>$i</td>
                                    <td><input class='textInput' type='text' name='name$i' id='name$i' /></td>
                                 </tr> "; 
                        } 
                    ?>
                </tbody>
            </table><br>
            <input id="save" type="button" value="KAYDET" ></input>
        </form>
    </div>
</body>
</html>