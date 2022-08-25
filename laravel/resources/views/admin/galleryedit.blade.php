@extends('admin_moster.moster')
@section('content')

 <section id="main-content">
      <section class="wrapper">
      


  <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
              <h1> <strong>Edit Gallery form </strong></h1>
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="/galleryform/{{$message->id}}">
                 
                     {{csrf_field()}}
                     {{method_field("PUT")}}
                   
                  
                   
                     
                        
                         <div class="form-group ">
                      <label for="curl" class="control-label col-lg-2">Image</label>
                      <div class="col-sm-10">
                        <img src="/link/images/{{$message->image}}">
                    <input type="file" value="choose an image" name="image" >
                    
                    </div>
                    </div>

                      <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                         <button class="btn btn-success" type="submit">Save</button>
                      </div>
                    </div>
                    </form>
                    <div>
             

 
             
  </section>
          
    </section>
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