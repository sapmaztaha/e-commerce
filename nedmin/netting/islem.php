<?php
include 'baglan.php';

ob_start();
session_start();



//Login Panel Admin Giriş İşlemleri

if (isset($_POST['admingiris'])) {
    $kullanici_mail = $_POST['kullanici_mail'];
    $kullanici_password = $_POST['kullanici_password'];

    $kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail and kullanici_password=:password and kullanici_yetki=:yetki");
    $kullanicisor->Execute(array(

          'mail' => $kullanici_mail,
          'password' => $kullanici_password,
          'yetki' => 9

      ));

      $say=$kullanicisor->rowCount();

      if ($say==1) {
          $_SESSION['kullanici_mail']=$kullanici_mail;
          header('Location:../production/index.php');
      }
      else {
        header('Location:../production/login.php?durum=no');
      }

// test1
}


//Login Panel Admin Giriş İşlemleri Bitiş

////////////////////////////////////////////////////////////////////////////////


//////////////////////////////////////////////////////////////////////////////////////////////

//Kullanıcı Sil İşlemi Başlangıç

if (isset($_GET['kullanicisil']) and $_GET['kullanicisil']=="ok") { // önce dolu mu değil mi sonra durum okey mi değil mi eray sağsul düzeltti

	$sil=$db->prepare("DELETE from kullanici where kullanici_id=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['kullanici_id']
		));


	if ($kontrol) {


		header("location:../production/kullanici.php?sil=ok");


	} else {

		header("location:../production/kullanici.php?sil=no");

	}


}



//Kullanıcı Sil İşlemi Bitiş

////////////////////////////////////////////////////////////////////////////////


// Kullanıcı Düzenleme Başlangıç

if (isset($_POST['kullaniciduzenle'])) {

    $kullanici_id = $_POST['kullanici_id'];

    $kullanicikaydet=$db->prepare("UPDATE kullanici SET
        kullanici_tc      =:kullanici_tc,
        kullanici_adsoyad =:kullanici_adsoyad,
        kullanici_gsm     =:kullanici_gsm,
        kullanici_durum   =:kullanici_durum

        WHERE kullanici_id={$_POST['kullanici_id']}
        ");
    $update=$kullanicikaydet->Execute(array(
        'kullanici_tc'       => $_POST['kullanici_tc'],
        'kullanici_adsoyad'  => $_POST['kullanici_adsoyad'],
        'kullanici_gsm'      => $_POST['kullanici_gsm'],
        'kullanici_durum'    => $_POST['kullanici_durum']   //checpoint Noktasında düzgün olandan kopyalanacak
        ));



    if ($update) {

    Header("Location:../production/kullanici-duzenle.php?kullanici_id={$kullanici_id}&durum=ok");
    exit;
    } else {

    Header("Location:../production/kullanici-duzenle.php?kullanici_id={$kullanici_id}&durum=no");
    exit;
    }
 }

// Kullanıcı Düzenleme Bitiş

////////////////////////////////////////////////////////////////////////////////

// Menu Düzenleme Başlangıç


if (isset($_POST['menuduzenle'])) {

    $menu_id = $_POST['menu_id'];

    $menukaydet=$db->prepare("UPDATE menu SET
        menu_ad     =:menu_ad,
        menu_detay  =:menu_detay,
        menu_url    =:menu_url,
        menu_durum  =:menu_durum,
        menu_sira   =:menu_sira

    
        WHERE menu_id={$_POST['menu_id']}
        ");
    

    $update=$menukaydet->Execute(array(
        'menu_ad'   => $_POST['menu_ad'],
        'menu_detay'=> $_POST['menu_detay'],
        'menu_url'  => $_POST['menu_url'],
        'menu_durum'=> $_POST['menu_durum'],
        'menu_sira' => $_POST['menu_sira']
 
        ));




    if ($update) {

        Header("Location:../production/menu-duzenle.php?menu_id=$menu_id&durum=ok");

    } else {

        Header("Location:../production/menu-duzenle.php?menu_id=$menu_id&durum=no");
    }

}
                /*
                if (isset($_POST['menuduzenle'])) {

                    $menu_id = $_POST['menu_id'];

                    $menukaydet=$db->prepare("UPDATE menu SET
                        menu_ad     =:menu_ad,
                        menu_detay  =:menu_detay,
                        menu_url    =:menu_url,
                        menu_sıra   =:menu_sıra
                        WHERE menu_id={$_POST['menu_id']}
                        ");
                    $update=$menukaydet->Execute(array(
                        'menu_ad'   => $_POST['menu_ad'],
                        'menu_detay'=> $_POST['menu_detay'],
                        'menu_url'  => $_POST['menu_url'],
                        'menu_sıra' => $_POST['menu_sıra']
                        ));



                    if ($update) {

                    Header("Location:../production/menu-duzenle.php?menu_id={$menu_id}&durum=ok");
                    exit;
                    } else {

                    Header("Location:../production/menu-duzenle.php?menu_id={$menu_id}&durum=no");
                    exit;
                    }
                 }
                */



// Menu Düzenleme Bitiş


//////////////////////////////////////////////////////////////////

// Menu Kaydet Başlangıç

if (isset($_POST['menukaydet'])) {

    $kaydet=$db->prepare("INSERT INTO menu SET 
        menu_ad     =:menu_ad,
        menu_detay  =:menu_detay,
        menu_url    =:menu_url,
        menu_durum  =:menu_durum,
        menu_sira   =:menu_sira
        ");
    $insert=$kaydet->Execute(
    [
        'menu_ad'   => $_POST['menu_ad'],
        'menu_detay'=> $_POST['menu_detay'],
        'menu_url'  => $_POST['menu_url'],
        'menu_durum'=> $_POST['menu_durum'],
        'menu_sira' => $_POST['menu_sira']
    ]
    );

     if ($insert) {
        header("Location:../production/menu.php");
    }
    else {
         header("Location:../production/menu.php");
    }
    
}


// Menu Kaydet Bitiş



//////////////////////////////////////////////////////////////////


//Menü Sil Başlangıç

if (isset($_GET['menusil']) and $_GET['menusil']=="ok") { // önce dolu mu değil mi sonra durum okey mi değil mi eray sağsul düzeltti

    $sil=$db->prepare("DELETE from menu where menu_id=:id");
    $kontrol=$sil->execute(array(
        'id' => $_GET['menu_id']
        ));


    if ($kontrol) {


        header("location:../production/menu.php?sil=ok");


    } else {

        header("location:../production/menu.php?sil=no");

    }


}

//Menü Sil Bitiş

//////////////////////////////////////////////////////////////////

//Genel Ayarlar Güncelleme Kaydetme İşlemi Başlangıç

if (isset($_POST['genelayarkaydet'])) {

    $ayarkaydet=$db->prepare("UPDATE ayar SET
        ayar_title      =:ayar_title,
        ayar_description=:ayar_description,
        ayar_keywords   =:ayar_keywords,
        ayar_author     =:ayar_author
        WHERE ayar_id=0
        ");
    $update=$ayarkaydet->Execute(array(
        'ayar_title'        => $_POST['ayar_title'],
        'ayar_description'  => $_POST['ayar_description'],
        'ayar_keywords'     => $_POST['ayar_keywords'],
        'ayar_author'       => $_POST['ayar_author']
        ));


    if ($update) {
        header("Location:../production/genel_ayar.php?durum=ok");
    }
    else {
         header("Location:../production/genel_ayar.php?durum=no");
    }
 }
    // Genel Ayarlar Güncelleme İşlemi Bitiş

// ////////////////////////////////////////////////////////////////

    // İletişim Ayarlar İşlemi Başlangıç

if (isset($_POST['iletisim_ayar_kaydet'])){
     $ayarkaydet=$db->prepare("UPDATE ayar SET
        ayar_tel  =:ayar_tel,
        ayar_gsm  =:ayar_gsm,
        ayar_faks =:ayar_faks,
        ayar_mail =:ayar_mail,
        ayar_il   =:ayar_il,
        ayar_ilce =:ayar_ilce,
        ayar_adres=:ayar_adres,
        ayar_mesai=:ayar_mesai
        WHERE ayar_id=0
    ");

     $updat=$ayarkaydet->Execute(array(
        'ayar_tel'  =>$_POST['ayar_tel'],
        'ayar_gsm'  =>$_POST['ayar_gsm'],
        'ayar_faks' =>$_POST['ayar_faks'],
        'ayar_mail' =>$_POST['ayar_mail'],
        'ayar_il'   =>$_POST['ayar_il'],
        'ayar_ilce' =>$_POST['ayar_ilce'],
        'ayar_adres'=>$_POST['ayar_adres'],
        'ayar_mesai'=>$_POST['ayar_mesai']
    ));

    if ($updat) {
    header("Location:../production/iletisim_ayarlar.php?durum=ok");
    }
    else {
     header("Location:../production/iletisim_ayarlar.php?durum=no");
    }
}



    // İletişim Ayarlar Bitiş

// //////////////////////////////////////////////////////////////

    // API Ayarlar Başlangıç


if (isset($_POST['api_ayar_kaydet'])) {

    $ayarkaydet=$db->prepare("UPDATE ayar SET
        ayar_analystic  =:ayar_analystic,
        ayar_maps       =:ayar_maps,
        ayar_zopim      =:ayar_zopim
        WHERE ayar_id=0
        ");
    $update=$ayarkaydet->Execute(array(
        'ayar_analystic'=> $_POST['ayar_analystic'],
        'ayar_maps'     => $_POST['ayar_maps'],
        'ayar_zopim'    => $_POST['ayar_zopim']
        ));


    if ($update) {
        header("Location:../production/api_ayarlar.php?durum=ok");
    }
    else {
         header("Location:../production/api_ayarlar.php?durum=no");
    }
 }

 // API Ayarlar Bitiş

// //////////////////////////////////////////////////////////////

 // Sosyal Ayarlar Başlangıç

 if (isset($_POST['sosyal_ayar_kaydet'])) {

    $ayarkaydet=$db->prepare("UPDATE ayar SET
        ayar_facebook   =:ayar_facebook,
        ayar_twitter    =:ayar_twitter,
        ayar_google     =:ayar_google,
        ayar_youtube    =:ayar_youtube
        WHERE ayar_id=0
        ");
    $update=$ayarkaydet->Execute(array(
        'ayar_facebook' => $_POST['ayar_facebook'],
        'ayar_twitter'  => $_POST['ayar_twitter'],
        'ayar_google'   => $_POST['ayar_google'],
        'ayar_youtube'  => $_POST['ayar_youtube']
        ));


    if ($update) {
        header("Location:../production/sosyal_ayarlar.php?durum=ok");
    }
    else {
         header("Location:../production/sosyal_ayarlar.php?durum=no");
    }
 }

     // Sosyal Ayarlar Bitiş

// //////////////////////////////////////////////////////////////


    // Mail Ayarlar Başlangıç

if (isset($_POST['mail_ayar_kaydet'])) {

    $ayarkaydet=$db->prepare("UPDATE ayar SET
        ayar_smtpuser       =:ayar_smtpuser,
        ayar_smtppassword   =:ayar_smtppassword,
        ayar_smtphost       =:ayar_smtphost,
        ayar_smtpport       =:ayar_smtpport
        WHERE ayar_id=0
        ");
    $update=$ayarkaydet->Execute(array(
        'ayar_smtpuser'     => $_POST['ayar_smtpuser'],
        'ayar_smtppassword' => $_POST['ayar_smtppassword'],
        'ayar_smtphost'     => $_POST['ayar_smtphost'],
        'ayar_smtpport'     => $_POST['ayar_smtpport']
        ));


    if ($update) {
        header("Location:../production/mail_ayarlar.php?durum=ok");
    }
    else {
         header("Location:../production/mail_ayarlar.php?durum=no");
    }
 }

        // Mail Ayarlar Başlangıç

// //////////////////////////////////////////////////////////////

        // Hakkımızda Ayarlar Başlangıç



if (isset($_POST['hakkimizdaayarkaydet'])) {

    $ayarkaydet=$db->prepare("UPDATE hakkimizda SET
        hakkimizda_baslik    =:hakkimizda_baslik,
        hakkimizda_icerik    =:hakkimizda_icerik,
        hakkimizda_video     =:hakkimizda_video,
        hakkimizda_vizyon    =:hakkimizda_vizyon,
        hakkimizda_misyon    =:hakkimizda_misyon
        WHERE hakkimizda_id=0
        ");
    $update=$ayarkaydet->Execute(array(
        'hakkimizda_baslik'  => $_POST['hakkimizda_baslik'],
        'hakkimizda_icerik'  => $_POST['hakkimizda_icerik'],
        'hakkimizda_video'   => $_POST['hakkimizda_video'],
        'hakkimizda_vizyon'  => $_POST['hakkimizda_vizyon'],
        'hakkimizda_misyon'  => $_POST['hakkimizda_misyon']
        ));


    if ($update) {
        header("Location:../production/hakkimizda_ayarlar.php?durum=ok");
    }
    else {
         header("Location:../production/hakkimizda_ayarlar.php?durum=no");
    }
 }





 ?>
