<?php
include 'header.php';

// WHERE KOŞULUNDANN SONRA BELİRTİLEN SÜTUN ADINI TAKMA BİR İSME ATADIK VE TAKMA İSME DEĞER VEREREK VERİLEN DEĞERE EŞİT OLAN BİLGİLERİN GELMESİ SAĞLANDI

$hakkimizdasor=$db->prepare("SELECT * FROM hakkimizda where hakkimizda_id=:id");
$hakkimizdasor->execute(
  [
    'id' => 0
  ]
);

$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);




 ?>



        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Hakkımızda Ayarlar</h2>


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

                    <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Başlık <span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="hakkimizda_baslik" value="<?php echo $hakkimizdacek['hakkimizda_baslik']; ?> ">
                        </div>
                      </div>


                      <!-- Ck Editör Başlangıç -->

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İçerik <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <textarea  class="ckeditor" id="editor1" name="hakkimizda_icerik"><?php echo $hakkimizdacek['hakkimizda_icerik']; ?></textarea>
              </div>
            </div>

            <script>
                  CKEDITOR.replace( 'editor1' );
            </script>

          <!-- Ck Editör Bitiş -->



                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Video <span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="hakkimizda_video" value="<?php echo $hakkimizdacek['hakkimizda_video']; ?> ">
                        </div>
                      </div>



                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Vizyon <span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="hakkimizda_vizyon" value="<?php echo $hakkimizdacek['hakkimizda_vizyon']; ?> ">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Misyon <span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="hakkimizda_misyon" value="<?php echo $hakkimizdacek['hakkimizda_misyon']; ?> ">
                        </div>
                      </div>






                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success" name="hakkimizdaayarkaydet">Güncelle</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
<!-- /page content -->

<?php include 'footer.php' ?>
