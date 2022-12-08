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
                    <h2>Menu Ekleme</h2>




                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <br />

                    <!-- / => en kök dizine çık yani en dışarı klasöre -->
                    <!-- ../ Bir Üst klasöre çık -->

                    <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Menu ad </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="menu_ad">
                        </div>
                      </div>



                     <!-- Ck Editör Başlangıç -->

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menu Detay</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea  class="ckeditor" id="editor1" name="menu_detay"></textarea>
                        </div>
                      </div>

                      <script>
                            CKEDITOR.replace( 'editor1' );
                      </script>

                    <!-- Ck Editör Bitiş -->



                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Menu Url </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" class="form-control col-md-7 col-xs-12" name="menu_url">
                        </div>
                      </div>



                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Menu Sıra </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="menu_sira">
                        </div>
                      </div>

                      

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kullanıcı Durum</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <select id="heard" class="form-control" name="menu_durum" required>

                          <option value="1">Aktif</option>

                          
                          <option value="0">Pasif</option>

                          


                         </select>
                       </div>
                     </div>

                    

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                          <button type="submit" class="btn btn-success" name="menukaydet">Ekle</button>

                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>




<!-- /page content -->

<?php include 'footer.php' ?>
