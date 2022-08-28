@extends('admin_moster.moster')
@section('content')

 <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i> Form Validation</h3>
            <ol class="breadcrumb">
             
             
            </ol>
          </div>
        </div>


  <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Form validations
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="/abouthistory/{{$message->id}}">
                 {{csrf_field()}}
                {{method_field("PUT")}}
                     
                   
                  
                    <div class="form-group ">
                      <label for="curl" class="control-label col-lg-2">Date</label>
                      <div class="col-sm-10">
                      <input type="text" class="form-control round-input" name="name" value="{{$message->name}}" >
                    </div>
                    </div>
                     
                      <div class="form-group ">
                      <label for="curl" class="control-label col-lg-2">Description</label>
                      <div class="col-sm-10">
                     <textarea name="body" rows="7" cols="100">{{$message->body}}</textarea>
                       </div>
                    </div>
                   

                      <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                         <button class="btn btn-success" type="submit" name="save">Save</button>
                      </div>
                    </div>
                    </form>
                    <div>
             


             
 
             <!--main content end-->
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
         </div>
    </div>
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="{!!asset('nice_admin/js/jquery.js')!!}"></script>
  <script src="{!!asset('nice_admin/js/bootstrap.min.js')!!}"></script>
  <!-- nicescroll -->
  <script src="{!!asset('nice_admin/js/jquery.scrollTo.min.js')!!}"></script>
  <script src="{!!asset('nice_admin/js/jquery.nicescroll.js')!!}" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="{!!asset('nice_admin/js/scripts.js')!!}"></script>
@endsection