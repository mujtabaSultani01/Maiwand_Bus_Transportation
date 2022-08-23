@extends('moster.moster')
@section('title','about')
@section('content')


<!--about start here-->
<div class="about">
  <div class="container">
  	<div class="about-main">
		   <div class="about-top">
			<h2>About us</h2>
			 @foreach($about as $a)
			<div class="col-md-4 abouttop-left">
				<a href="#"><img src="link/images/{{$a->image}}" alt="" class="img-responsive"></a>
			</div>
			<div class="col-md-8 abouttop-right">
		 	
			   <p>  {{$a->body}}</p>
			</div>
			 @endforeach
	
		    </div> 
	</div><br><br>
	 <div class="history">
	 	<div class="history-top">
	  	    <h3>Our History</h3>
	    </div>
	    <div class="history-bottom">
	    	
	    	<div class="col-md-4 history-grids">
	    		<h4>2015</h4>
	    		<p>Integer rutrum ante eu lacuestibulum libero nisl porta vel scelerisque eget malesuada at neque Vivamus eget nibh. Etiamursus leo vel metus. Nulla facilisi.</p>
	    	</div>
	    	
	    	
	    </div>
	   
	 </div>
	</div>
</div>
<!--about end here-->

<!--footer start here-->
@endsection