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
            <h2>Komite Bilgileri <small>

            </small></h2>
       
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />

            <!-- / => en kök dizine çık ... ../ bir üst dizine çık -->
            <form action="<?php echo site_url('commitee/save_commitee/').$commitee['id'] ?>" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                <?php 
                if(!empty($message)){
                  echo $message;
                }
                ?>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Komite Adı <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="name" name="name" value="<?php echo $commitee['commitee_name'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Komite Konusu <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="subject" name="subject" value="<?php echo $commitee['commitee_subject'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Komite Dersleri<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <?php
                  $commitee_courses = "";
                  $this->load->model('course_model');
                    foreach (explode(",",$commitee['commitee_courses']) as $course) {
                      $course = $this->course_model->get_course_by_id($course)->row_array();
                      $commitee_courses.=$course['course_name'].",";
                    }
                  ?>
                  <input type="text" id="courses" name="courses" value="<?php echo substr($commitee_courses,0,strlen($commitee_courses)-1) ?>" required="required" placeholder="Dersleri virgülle ayırarak giriniz." class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button type="submit" name="genelayarkaydet" class="btn btn-success">Güncelle</button>
                </div>
              </div>

            </form>



          </div>
        </div>
      </div>
    </div>



    <hr>
    <hr>
    <hr>



  </div>
</div>
<!-- /page content -->

<?php include 'footer.php'; ?>
