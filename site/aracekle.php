<?php  

    include 'baglanti.php';

    $marka = $_POST['Marka'];
    $model = $_POST['Model'];
    $renk = $_POST['Renk'];
    $yil = $_POST['Yıl'];
    $maxyolcu = $_POST['Yolcu'];

    $sql = "INSERT INTO Arac (Marka, Model, Renk, Yil, YolcuMaxSayisi)
            VALUES ('$marka', '$model', '$renk', '$yil', '$maxyolcu')";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
     
    $sql2 = "Select AracID from Arac where Marka='$marka' and Model='$model'and Renk='$renk' and Yil='$yil' and YolcuMaxSayisi='$maxyolcu'" ;
    $stmt = $conn->query($sql2);
$aid1= $stmt->fetch();
foreach($aid1 as $a):
    $aid=$a;
endforeach;
$sid=$_SESSION['user_id'];

        $sql1 = "INSERT INTO Surucu_Arac (SurucuID,AracID) 
         VALUES ('$sid', '$aid')";
    $stmt = $conn->prepare($sql1);
    $stmt->execute(); 
    
            header("Location:index.php");
?>