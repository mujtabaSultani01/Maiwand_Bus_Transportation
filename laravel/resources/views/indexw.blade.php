@extends('moster.moster')
@section('title','Home')
@section('content')
<body>
<!--header start here-->

<!--header strat here-->
<!--welcome start here-->
<div class="welcome">
	<div class="container">
		  <div class="col -md-6">
		<div class="wel-main">
		  <div class="wel-top">
		
	      </div><h1>Out Workers</h1>
	      @foreach($home as $ms)
	      <div class="wel-bottom">
	      	
	      	
	      	  	 <div class="wel-block">
		      	  	 <div class="">
		       	  	 	<img  src="link/images/{{$ms->image}}" width="300"  alt="" class="img-responsive">
		      	  	 </div>
		      	  	 <div class="wel-text">
		      	  	 	<h4>{{$ms->name}}</h4>
		      	  	 	<p> {{$ms->body}}</p>
		      	  	 </div>
		      	   <div class="clearfix"> </div>
	      	    </div>
	      	   
	      	  </div>
	      	 
	      	<div class="clearfix"> </div>
	      </div>
	      @endforeach
	      </div>
		</div>
	</div>
</div>
<!--welcome end here-->
<!--testimonial start here-->
<!-- <div class="testimo">
	<div class="container">
		<div class="testimo-main">
			<h3>Graduted Student in library environment</h3>
			</div>
	</div>
</div> -->
<!--testimonial end here-->
<!--our admissions start here-->
<div class="admission">
	<div class="container">
		<div class="admissions-main">
			<div class="admission-top">
				<h3>Espicelly to Passenger Ateteention!</h3>
			</div>
			<div class="admission-bottom">
				<div class="col-md-6 admission-left">
					<span class="quot1"> </span>
					<div class="quot-text">
						<p>Things that passengers lost during transportation</p>
				
					</div>
				 <div class="clearfix"> </div>
				</div>
				<div class="col-md-6 admission-left">
					<span class="quot1"> </span>
					<div class="quot-text">
						<p>Things that passengers lost during transportation</p>
					    
					</div>
				  <div class="clearfix"> </div>
				</div>
			  <div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--our admissions end here-->
<!--course strat here-->

@endsection()
<!--courses end here-->
<!--footer start here-->
