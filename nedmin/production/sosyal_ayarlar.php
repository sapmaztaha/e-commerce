<?php
include 'header.php';

 ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Sosyal Ayarlar</h2>


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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Facebook <span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="ayar_facebook" value="<?php echo $ayarcek['ayar_facebook']; ?> ">
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Twitter <span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="ayar_twitter" value="<?php echo $ayarcek['ayar_twitter']; ?> ">
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Google <span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="ayar_google" value="<?php echo $ayarcek['ayar_google']; ?> ">
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Youtube <span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="ayar_youtube" value="<?php echo $ayarcek['ayar_youtube']; ?> ">
                        </div>
                      </div>


                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success" name="sosyal_ayar_kaydet">Güncelle</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
<!-- /page content -->

<?php include 'footer.php' ?>
