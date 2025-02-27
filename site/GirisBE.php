<?php
    include 'baglanti.php';
    $user_mail = $_POST['Email'];
    $user_password = $_POST['Password'];
    $bool = $_POST['Kontrol'];

    session_start();

    if($bool == 0){
        $sql = "SELECT * FROM Surucu WHERE SMail = '$user_mail' AND SSifre = '$user_password'";
       $stmt = $conn->prepare($sql);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user){
            $_SESSION['user_id']=$user['SurucuID'];
            $_SESSION['isim']=$user['SAd'];
            $_SESSION['soyisim']=$user['SSoyad'];
            $_SESSION['tel']=$user['STel'];
            $_SESSION['mail']=$user['SMail'];
            $_SESSION['sofor']=1;
            header("Location:index.php");
            exit();

        }
        else{
            echo "Hatalı kullanıcı adı veya şifre!";
        }
   
    }

    else{
        
         $sql = "SELECT * FROM Yolcu WHERE Mail = '$user_mail' AND YSifre = '$user_password'";
       $stmt = $conn->prepare($sql);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user){
            $_SESSION['user_id']=$user['YolcuID'];
            $_SESSION['isim']=$user['YAd'];
            $_SESSION['soyisim']=$user['YSoyad'];
            $_SESSION['tel']=$user['YTel'];
            $_SESSION['mail']=$user['Mail'];
            $_SESSION['sofor']=0;
            header("Location:index.php");
            exit();

        }
        else{
            echo "Hatalı kullanıcı adı veya şifre!";
        }
    }
?>