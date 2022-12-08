<?php
include 'header.php';

// WHERE KOŞULUNDANN SONRA BELİRTİLEN SÜTUN ADINI TAKMA BİR İSME ATADIK VE TAKMA İSME DEĞER VEREREK VERİLEN DEĞERE EŞİT OLAN BİLGİLERİN GELMESİ SAĞLANDI

$kullanicisor=$db->prepare("SELECT * FROM kullanici");
$kullanicisor->execute();





 ?>



        <!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Kullanıcı Listeleme</h2>

              <?php
              if (isset($_GET['durum'])) {
                // code...

              if ($_GET['durum']=="ok") {?>

               <b style="color: green;">Güncelleme İşlemi Tamamlandı</b>

              <?php } elseif ($_GET['durum']=="no") {?>

              <b style="color: darkred;">Güncelleme İşlemi Gerçekleştirilemedi</b>

              <?php } } ?>


            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />

            <!-- / => en kök dizine çık yani en dışarı klasöre -->
            <!-- ../ Bir Üst klasöre çık -->

            <!-- Div Başlangıç -->

            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Kayıt Tarihi</th>
                          <th>Ad Soyad</th>
                          <th>Mail Adres</th>
                          <th>Telefon</th>

                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php

                          while ($kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC)) {?>


                          <tr>
                            <td><?php echo $kullanicicek['kullanici_zaman'] ?></td>
                            <td><?php echo $kullanicicek['kullanici_adsoyad'] ?></td>
                            <td><?php echo $kullanicicek['kullanici_mail'] ?></td>
                            <td><?php echo $kullanicicek['kullanici_gsm'] ?></td>

                            <td><center><a href="kullanici-duzenle.php?kullanici_id=<?php echo $kullanicicek['kullanici_id']; ?>"><button class="btn btn-primary btn-xs">Düzenle</button></a></center></td>


                          <!--   <td> <center> <a href="kullanici-duzenle.php?kullanici_id=<?php // echo $kullanicicek['kullanici_id']; ?>"> <button class="btn btn-primary btn-xs" >Düzenle</button></a> </center> </td> -->
                          <td><center><a href="../netting/islem.php?kullanici_id=<?php echo $kullanicicek['kullanici_id']; ?>&kullanicisil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
                          </tr>

                      <?php  }  ?>


                      </tbody>
                    </table>


            <!-- Div Bitiş -->



          </div>
        </div>
      </div>
    </div>
<!-- /page content -->

<?php include 'footer.php' ?>
