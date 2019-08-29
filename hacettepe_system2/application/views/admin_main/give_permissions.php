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
            <h2>Komite Grubu Üye İşlemleri<small>

            </small></h2>
       
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />

            <!-- / => en kök dizine çık ... ../ bir üst dizine çık -->
            <form action="<?php echo site_url('operation/save_permissions') ?>" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

               <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ad: <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="first_name" value="" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Soyad: <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="last_name" name="last_name" value="" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
                 <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Gruba Girdiği/Ayrıldığı Komite No: <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="no" name="no" value="" required="required" class="form-control col-md-7 col-xs-12">
                </div>
                <br>
                <br>
                <br>
              <div class="form-group">
                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button type="submit" name="button" class="btn btn-success" value = "add_member">Ekle</button>
                   <button type="submit" name="button" class="btn btn-danger" value="delete_member">Çıkar</button>
                </div>
              </div>
             

            </form>
            <br><br><br><br><br><br>
            <h2>Toplu Kişi Ekleme</h2><h4>(Lütfen doc formatında her satırda bir kişi olacak şekilde liste yükleyiniz.)</h4>
            <hr>
             <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Liste: <span class="required">*</span>
                </label>
                <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12">
                 	<input type="file" required="required" class="form-control dropify" id="list" name="list" accept=".doc"></div>
                </div>

                 <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Komite no: <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="com_no" name="com_no" value="" required="required" class="form-control col-md-7 col-xs-12">
                </div>
                <br>
                <br>
                <br>
              <div class="form-group">
                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button type="submit" name="button" class="btn btn-success" value="add_member_list">Ekle</button>
                   <button type="submit" name="button" class="btn btn-danger" value="delete_member_list">Çıkar</button>
                </div>
              </div>
             

            </form>



       

  
<!-- /page content -->

<?php include 'footer.php'; ?>
