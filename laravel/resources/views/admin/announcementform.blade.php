@extends('admin_moster.moster')
@section('content')

 <section id="main-content">
      <section class="wrapper">
     
 
  <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
               <h1> <strong> Announcement page arrangement</strong></h1>
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
                        <label for="curl" class="control-label col-lg-2">Description</label>
                         <div class="col-sm-10">
                           <textarea  name="body" rows="7" cols="100"></textarea>
                         </div>
                      </div>

                      <div class="form-group ">
                        <label for="curl" class="control-label col-lg-2">Image</label>
                         <div class="col-sm-10">
                          <input type="file" value="choose an image" name="image">
                         </div>
                      </div>

                      <div class="form-group">
                       <div class="col-lg-offset-2 col-lg-10">
                         <button class="btn btn-info" type="submit">Save</button>
                       </div>
                      </div>
                  </form>
                <div>
             


             
  </section>
        <div class="row">
          <div class=>
            <section class="panel">
              <header class="panel-heading">
             <h1> <strong>Gallery page data</strong></h1>
              </header>
              <table class="table table-bordered">
                {{csrf_field()}}
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Descraption</th>
                    <th>Image</th>
                    <th>Update</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($save as $d)                  
                  <tr>
                    <td>{{$d->id}}</td>
                    <td>{{$d->name}}</td>
                    <td>{{$d->body}}</td>
                    <td><img src="link/images/{{$d->image}}" width='100' height='100'></td>
                     <td> 
                       <a href="announcement/{{$d->id}}/edit " class="btn btn-primary" type="submit" >upade</a>
                    </td>
                    <td>
                           <form method="post" action="announcementform/{{$d->id}} ">
                            {{csrf_field()}}
                            {{method_field("DELETE")}}
                            <button class="btn btn-warning" type="submit">delete</button>
                            
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