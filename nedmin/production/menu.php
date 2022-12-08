<?php
include 'header.php';

// WHERE KOŞULUNDANN SONRA BELİRTİLEN SÜTUN ADINI TAKMA BİR İSME ATADIK VE TAKMA İSME DEĞER VEREREK VERİLEN DEĞERE EŞİT OLAN BİLGİLERİN GELMESİ SAĞLANDI

$menusor=$db->prepare("SELECT * FROM menu");
$menusor->execute();





 ?>



        <!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Menü Listeleme</h2>

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
            <div class="">
              <a href="menu-ekle.php"> <button  class="btn btn-success">Yeni Ekle</button></a>
            </div>
          <div class="x_content">
            <br />

            <!-- / => en kök dizine çık yani en dışarı klasöre -->
            <!-- ../ Bir Üst klasöre çık -->

            <!-- Div Başlangıç -->

            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Sıra No</th>
                          <th>Mneü Ad</th>
                          <th>Menü URL</th>
                          <th>Menü Sıra</th>
                          <th>Menü Durum</th>

                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $say=0;

                          while ($menucek=$menusor->fetch(PDO::FETCH_ASSOC)) { $say++;?>


                          <tr>
                            <td width="15"><?php echo $say; ?></td>
                            <td><?php echo $menucek['menu_ad'] ?></td>
                            <td><?php echo $menucek['menu_url'] ?></td>
                            <td><?php echo $menucek['menu_sira'] ?></td>
                            <td><center>

                            <?php
                            if ($menucek['menu_durum'] == 1) {?>

                              <button class="btn btn-success">Aktif</button>

                            <?php  }else {?>

                              <button class="btn btn-danger">Pasif</button>

                            <?php }  ?>

                          </center></td>

                            <td><center><a href="menu-duzenle.php?menu_id=<?php echo $menucek['menu_id']; ?>"><button class="btn btn-primary btn-xs">Düzenle</button></a></center></td>


                          <!--   <td> <center> <a href="menu-duzenle.php?menu_id=<?php // echo $menucek['menu_id']; ?>"> <button class="btn btn-primary btn-xs" >Düzenle</button></a> </center> </td> -->
                          <td><center><a href="../netting/islem.php?menu_id=<?php echo $menucek['menu_id']; ?>&menusil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
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
