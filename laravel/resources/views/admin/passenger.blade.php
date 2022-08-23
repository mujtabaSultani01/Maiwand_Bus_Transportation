@extends('admin_moster.moster')
@section('content')

 <section id="main-content">
      <section class="wrapper">
      

 
       
      <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                 <h1> <strong>Passenger Form validations</strong></h1>   
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="">

                     {{csrf_field()}}
                   
                    <div class="form-group ">
                      <label for="curl" class="control-label col-lg-2">Name</label>
                      <div class="col-sm-10">
                      <input type="text" class="form-control round-input" name="name" >
                    </div>
                    </div>
                    <div class="form-group ">
                      <label for="curl" class="control-label col-lg-2">Provence</label>
                      <div class="col-sm-10">
                      <input type="text" class="form-control round-input" name="provence" >
                    </div>
                    </div>
                    <div class="form-group ">
                      <label for="curl" class="control-label col-lg-2">Fee</label>
                      <div class="col-sm-10">
                      <input type="text" class="form-control round-input" name="fee" >
                    </div>
                    </div>
                    <div class="form-group ">
                      <label for="curl" class="control-label col-lg-2">Phone</label>
                      <div class="col-sm-10">
                      <input type="text" class="form-control round-input" name="phone" >
                    </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                         <button class="btn btn-success" type="submit" name="save">Save</button>
                      </div>
                    </div>
                  </form>
                </div>




  </section>


   <div class="row">
          <div >
            <section class="panel">
              <header class="panel-heading no-border">
               <h1> <strong> Data about passenger</strong></h1>
              </header>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Provence</th>
                    <th>Fee</th>
                    <th>Phone</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($passenger as $p)
                  <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->name}}</td>
                    <td>{{$p->provence}}</td>
                    <td>{{$p->fee}}</td>
                    <td>{{$p->phone}}</td>
                    <td> 
                        <a href="passenger/{{$p->id}}/edit " class="btn btn-success" type="submit" >upade</a>
                       </td>
                    <td>
                     <form method="post" action="passenger/{{$p->id}} ">
                            {{csrf_field()}}
                            {{method_field("DELETE")}}
                            <button class="btn btn-danger" type="submit">delete</button>
                            
                          </form>
                     </td>
                  </tr>
                   @endforeach    
               
                    



               
                </tbody>
              </table>
            </section>
          </div>
       
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