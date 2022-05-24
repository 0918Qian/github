<?php

    include("starsign.php");

    $id1 = $_POST["id1"];
    $id2 = $_POST["id2"];

    if(!@mysqli_select_db($db,'starsign'))
        die("無法使用資料庫");
        
    if($id1==1 & $id2==1){
        $sql = "INSERT INTO view_star_sign(id,sign_name,star_mean,star_mean1) SELECT id,sign_name,star_mean,star_mean1 FROM star_sign WHERE `id`=1";
    }
    if($id1==1 & $id2==2){
        $sql = "INSERT INTO view_star_sign(id,sign_name,star_mean,star_mean1) SELECT id,sign_name,star_mean,star_mean1 FROM star_sign WHERE `id`=2";
    }
    if($id1==1 & $id2==3){
        $sql = "INSERT INTO view_star_sign(id,sign_name,star_mean,star_mean1) SELECT id,sign_name,star_mean,star_mean1 FROM star_sign WHERE `id`=3";
    }
    if($id1==2 & $id2==1){
        $sql = "INSERT INTO view_star_sign(id,sign_name,star_mean,star_mean1) SELECT id,sign_name,star_mean,star_mean1 FROM star_sign WHERE `id`=4";
    }
    if($id1==2 & $id2==2){
        $sql = "INSERT INTO view_star_sign(id,sign_name,star_mean,star_mean1) SELECT id,sign_name,star_mean,star_mean1 FROM star_sign WHERE `id`=5";
    }
    if($id1==2 & $id2==3){
        $sql = "INSERT INTO view_star_sign(id,sign_name,star_mean,star_mean1) SELECT id,sign_name,star_mean,star_mean1 FROM star_sign WHERE `id`=6";
    }
    if($id1==3 & $id2==1){
        $sql = "INSERT INTO view_star_sign(id,sign_name,star_mean,star_mean1) SELECT id,sign_name,star_mean,star_mean1 FROM star_sign WHERE `id`=7";
    }
    if($id1==3 & $id2==2){
        $sql = "INSERT INTO view_star_sign(id,sign_name,star_mean,star_mean1) SELECT id,sign_name,star_mean,star_mean1 FROM star_sign WHERE `id`=8";
    }
    if($id1==3 & $id2==3){
        $sql = "INSERT INTO view_star_sign(id,sign_name,star_mean,star_mean1) SELECT id,sign_name,star_mean,star_mean1 FROM star_sign WHERE `id`=9";
    }
    if($id1==4 & $id2==1){
        $sql = "INSERT INTO view_star_sign(id,sign_name,star_mean,star_mean1) SELECT id,sign_name,star_mean,star_mean1 FROM star_sign WHERE `id`=10";
    }
    if($id1==4 & $id2==2){
        $sql = "INSERT INTO view_star_sign(id,sign_name,star_mean,star_mean1) SELECT id,sign_name,star_mean,star_mean1 FROM star_sign WHERE `id`=11";
    }
    if($id1==4 & $id2==3){
        $sql = "INSERT INTO view_star_sign(id,sign_name,star_mean,star_mean1) SELECT id,sign_name,star_mean,star_mean1 FROM star_sign WHERE `id`=12";
    }
    if($id1==5 & $id2==1){
        $sql = "INSERT INTO view_star_sign(id,sign_name,star_mean,star_mean1) SELECT id,sign_name,star_mean,star_mean1 FROM star_sign WHERE `id`=13";
    }
    if($id1==5 & $id2==2){
        $sql = "INSERT INTO view_star_sign(id,sign_name,star_mean,star_mean1) SELECT id,sign_name,star_mean,star_mean1 FROM star_sign WHERE `id`=14";
    }
    if($id1==5 & $id2==3){
        $sql = "INSERT INTO view_star_sign(id,sign_name,star_mean,star_mean1) SELECT id,sign_name,star_mean,star_mean1 FROM star_sign WHERE `id`=15";
    }
    if($id1==6 & $id2==1){
        $sql = "INSERT INTO view_star_sign(id,sign_name,star_mean,star_mean1) SELECT id,sign_name,star_mean,star_mean1 FROM star_sign WHERE `id`=16";
    }
    if($id1==6 & $id2==2){
        $sql = "INSERT INTO view_star_sign(id,sign_name,star_mean,star_mean1) SELECT id,sign_name,star_mean,star_mean1 FROM star_sign WHERE `id`=17";
    }
    if($id1==6 & $id2==3){
        $sql = "INSERT INTO view_star_sign(id,sign_name,star_mean,star_mean1) SELECT id,sign_name,star_mean,star_mean1 FROM star_sign WHERE `id`=18";
    }
    if($id1==7 & $id2==1){
        $sql = "INSERT INTO view_star_sign(id,sign_name,star_mean,star_mean1) SELECT id,sign_name,star_mean,star_mean1 FROM star_sign WHERE `id`=19";
    }
    if($id1==7 & $id2==2){
        $sql = "INSERT INTO view_star_sign(id,sign_name,star_mean,star_mean1) SELECT id,sign_name,star_mean,star_mean1 FROM star_sign WHERE `id`=20";
    }
    if($id1==7 & $id2==3){
        $sql = "INSERT INTO view_star_sign(id,sign_name,star_mean,star_mean1) SELECT id,sign_name,star_mean,star_mean1 FROM star_sign WHERE `id`=21";
    }
    if($id1==8 & $id2==1){
        $sql = "INSERT INTO view_star_sign(id,sign_name,star_mean,star_mean1) SELECT id,sign_name,star_mean,star_mean1 FROM star_sign WHERE `id`=22";
    }
    if($id1==8 & $id2==2){
        $sql = "INSERT INTO view_star_sign(id,sign_name,star_mean,star_mean1) SELECT id,sign_name,star_mean,star_mean1 FROM star_sign WHERE `id`=23";
    }
    if($id1==8 & $id2==3){
        $sql = "INSERT INTO view_star_sign(id,sign_name,star_mean,star_mean1) SELECT id,sign_name,star_mean,star_mean1 FROM star_sign WHERE `id`=24";
    }
    if($id1==9 & $id2==1){
        $sql = "INSERT INTO view_star_sign(id,sign_name,star_mean,star_mean1) SELECT id,sign_name,star_mean,star_mean1 FROM star_sign WHERE `id`=25";
    }
    if($id1==9 & $id2==2){
        $sql = "INSERT INTO view_star_sign(id,sign_name,star_mean,star_mean1) SELECT id,sign_name,star_mean,star_mean1 FROM star_sign WHERE `id`=26";
    }
    if($id1==9 & $id2==3){
        $sql = "INSERT INTO view_star_sign(id,sign_name,star_mean,star_mean1) SELECT id,sign_name,star_mean,star_mean1 FROM star_sign WHERE `id`=27";
    }
    if($id1==10 & $id2==1){
        $sql = "INSERT INTO view_star_sign(id,sign_name,star_mean,star_mean1) SELECT id,sign_name,star_mean,star_mean1 FROM star_sign WHERE `id`=28";
    }
    if($id1==10 & $id2==2){
        $sql = "INSERT INTO view_star_sign(id,sign_name,star_mean,star_mean1) SELECT id,sign_name,star_mean,star_mean1 FROM star_sign WHERE `id`=29";
    }
    if($id1==10 & $id2==3){
        $sql = "INSERT INTO view_star_sign(id,sign_name,star_mean,star_mean1) SELECT id,sign_name,star_mean,star_mean1 FROM star_sign WHERE `id`=30";
    }
    if($id1==11 & $id2==1){
        $sql = "INSERT INTO view_star_sign(id,sign_name,star_mean,star_mean1) SELECT id,sign_name,star_mean,star_mean1 FROM star_sign WHERE `id`=31";
    }
    if($id1==11 & $id2==2){
        $sql = "INSERT INTO view_star_sign(id,sign_name,star_mean,star_mean1) SELECT id,sign_name,star_mean,star_mean1 FROM star_sign WHERE `id`=32";
    }
    if($id1==11 & $id2==3){
        $sql = "INSERT INTO view_star_sign(id,sign_name,star_mean,star_mean1) SELECT id,sign_name,star_mean,star_mean1 FROM star_sign WHERE `id`=33";
    }
    if($id1==12 & $id2==1){
        $sql = "INSERT INTO view_star_sign(id,sign_name,star_mean,star_mean1) SELECT id,sign_name,star_mean,star_mean1 FROM star_sign WHERE `id`=34";
    }
    if($id1==12 & $id2==2){
        $sql = "INSERT INTO view_star_sign(id,sign_name,star_mean,star_mean1) SELECT id,sign_name,star_mean,star_mean1 FROM star_sign WHERE `id`=35";
    }
    if($id1==12 & $id2==3){
        $sql = "INSERT INTO view_star_sign(id,sign_name,star_mean,star_mean1) SELECT id,sign_name,star_mean,star_mean1 FROM star_sign WHERE `id`=36";
    }
    //if($id1==0 & $id2==0){
        //$sql = "INSERT INTO `view_star_sign`(`id`, `sign_name`, `star_mean`, `star_mean1`) VALUES ('','請選擇選項','','')";
    //}

    $result = $db->query($sql);
    $db->close();

    header("Location: sign.php");//導航回首頁
    
?>