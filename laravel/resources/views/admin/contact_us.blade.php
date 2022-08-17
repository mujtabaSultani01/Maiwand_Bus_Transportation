@extends('admin_moster.moster')
@section('content')
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row"> 
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i> Form Validation</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index">Home</a></li>
              <li><i class="icon_document_alt"></i>Forms</li>
              <li><i class="fa fa-files-o"></i>Form Validation</li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Form validations
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">
                     <div class="form-group">
                    <label class="col-sm-2 control-label">Rounder</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control round-input">
                    </div>
                  </div>
                   
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">E-Mail <span class="required">*</span></label>
                      <div class="col-sm-10">
                      <input type="text" class="form-control round-input">
                    </div>
                    </div>
                    <div class="form-group ">
                      <label for="curl" class="control-label col-lg-2">Website</label>
                      <div class="col-sm-10">
                      <input type="text" class="form-control round-input">
                    </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Subject <span class="required">*</span></label>
                      <div class="col-sm-10">
                      <input type="text" class="form-control round-input">
                    </div>
                    </div>
                    <div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-2">Feedback</label>
                     <div class="col-sm-10">
                      <input type="text" class="form-control round-input">
                    </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit">Save</button>
                        <button class="btn btn-primary" type="submit">upade</button>
                        <button class="btn btn-primary" type="submit">delete</button>
                        <button class="btn btn-default" type="button">Cancel</button>
                      </div>
                    </div>
                  </form>
                </div>

              </div>
            </section>
          </div>
        </div>
      
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">

        </div>
    </div>
  </section>
  <!-- container section end -->

  <!-- javascripts -->
  <script src="{!!asset('nice_admin/js/jquery.js')!!}"></script>
  <script src="{!!asset('nice_admin/js/bootstrap.min.js')!!}"></script>
  <!-- nice scroll -->
  <script src="{!!asset('nice_admin/js/jquery.scrollTo.min.js')!!}"></script>
  <script src="{!!asset('nice_admin/js/jquery.nicescroll.js')!!}" type="text/javascript"></script>
  <!-- jquery validate js -->
  <script type="text/javascript" src="{!!asset('nice_admin/js/jquery.validate.min.js')!!}"></script>
  <!-- custom form validation script for this page-->
  <script src="{!!asset('nice_admin/js/form-validation-script.js')!!}"></script>
  <!--custome script for all page-->
  <script src="{!!asset('nice_admin/js/scripts.js')!!}"></script>


@endsection()