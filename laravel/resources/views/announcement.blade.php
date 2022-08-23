@extends('moster.moster')
@section('title','announcement')
@section('content')

<body>
<!--header start here-->

<!--header strat here-->
<!--short codes start here-->
<div class="">
	<div class="container">
	<div class="page">
	 	<!--button-->
	<!--Forms-->
  @foreach($data as $dt)
    <div class="col-md-4 col1 gallery-grid"><p>{{$dt->name}}</p>
            
              <img class="img-responsive" src="link/images/{{$dt->image}}" alt="" width="300" height="200">
    
            <p>{{$dt->body}}</p>
          </div>
          @endforeach
	<!--//forms-->
	</div>
</div>
</div>

<!--short codes end here-->
@endsection()