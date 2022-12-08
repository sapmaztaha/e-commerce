<?php
include 'header.php';

if (!isset($_GET['menu_id']) || empty(trim($_GET['menu_id']))) {  //eğer kullanıcı id yoksa menu.php yönlendir;
  Header("Location:menu.php");
  exit;
}

$menusor=$db->prepare("SELECT * FROM menu where menu_id=:id");
$menusor->execute(
  [
  'id' => $_GET['menu_id']
  ]
);

$menucek=$menusor->fetch(PDO::FETCH_ASSOC);



 ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Menu Düzenleme İşlemleri</h2>


                      <?php
                      if (isset($_GET['durum'])) {


                      if ($_GET['durum']=="ok") {?>

                       <b style="color: green;">Güncelleme İşlemi Tamamlandı</b>

                      <?php } elseif ($_GET['durum']=="no") {?>

                      <b style="color: darkred;">Güncelleme İşlemi Gerçekleştirilemedi</b>

                      <?php } } ?>






                    </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />

                    <!-- / => en kök dizine çık yani en dışarı klasöre -->
                    <!-- ../ Bir Üst klasöre çık -->

                    <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <input type="hidden" name="menu_id" value="<?php echo $menucek['menu_id']; ?>">


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">AD   </label>
                     
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="menu_ad" value="<?php echo $menucek['menu_ad']; ?> ">
                        </div>
                      </div>



                     <!-- Ck Editör Başlangıç -->

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Menu Detay </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea  class="ckeditor" id="editor1" name="menu_detay" value="<?php echo trim($menucek['menu_detay']); ?>"></textarea>
                        </div>
                      </div>

                      <script>
                            CKEDITOR.replace( 'editor1' );
                      </script>

                    <!-- Ck Editör Bitiş -->



                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Menu Url </label>
         

                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="menu_url" value="<?php echo trim($menucek['menu_url']); ?> ">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Menu Sıra </label>
         

                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="menu_sira" value="<?php echo $menucek['menu_sira']; ?> ">
                        </div>
                      </div>

                      

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kullanıcı Durum<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <select id="heard" class="form-control" name="menu_durum" required>



                           <!-- Kısa İf Kulllanımı 

                            <?php //echo $menucek['menu_durum'] == '1' ? 'selected=""' : ''; ?>

                          -->




                          <option value="1" <?php echo $menucek['menu_durum'] == 1 ? 'selected' : '' ?>>Aktif</option>

                          
                          <option value="0" <?php echo $menucek['menu_durum'] == 0 ? 'selected' : '' ?>>Pasif</option>

                          


                         </select>
                       </div>
                     </div>

                     


                     



<!-- 
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Durum<span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select id="heard" class="form-control" name="menu_durum" required>

                          <option value="1" <?php// echo $menucek['menu_durum'] == '1' ? 'selected=""' :''; ?>>Aktif</option>

                          <option value="0" <?php //if ($menucek['menu_durum'] == '0') { echo 'selected=""'; } ?>>Pasif</option>

                        </select>
                        </div>
                      </div>

-->

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success" name="menuduzenle">Düzenle</button>
                        </div>
                        <br>
                      </div>
                    </form>
                    <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                         <a href="menu.php"><button class="btn btn-warning">Menu Listesi</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>




<!-- /page content -->

<?php include 'footer.php' ?>
