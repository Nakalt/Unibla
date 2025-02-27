<?php  

    include 'baglanti.php';

    $user_name = $_POST['Name'];
    $user_surname = $_POST['Surname'];
    $tel = $_POST['Tel'];
    $mail = $_POST['Email'];
    $password = $_POST['Password'];
    $bool = $_POST['Kontrol'];

    if($bool == 1){

    $sql = "INSERT INTO Yolcu(YAd,YSoyad,YTel,Mail,YSifre)
            VALUES ('$user_name', '$user_surname', '$tel', '$mail', '$password')";

    $stmt = $conn->prepare($sql);
    $stmt->execute(); 
    header("Location: index.php");

    }

    else{

        $sql = "INSERT INTO Surucu(SAd,SSoyad,STel,SMail,SSifre)
                VALUES ('$user_name', '$user_surname', '$tel', '$mail', '$password')";

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        header("Location: index.php");
    }
?>