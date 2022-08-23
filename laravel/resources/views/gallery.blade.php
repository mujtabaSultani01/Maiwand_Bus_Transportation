
@extends('moster.moster')
@section('title','gallery')
@section('content')


<!--header strat here-->
<!--gallery start here-->
<div class="gallery" id="gallery">
	<div class="container">
	  <div class="gallery-main">
	  	<div class="gallery-top">
	  		<h2>Gallery</h2>
	  	</div>
		<div class="gallery-bott">
			        @foreach($photo as $p)
					<div class="col-md-4 col1 gallery-grid">
						<a href="{!!asset('link/images/g2.jpg')!!}" rel="title" class="b-link-stripe b-animate-go  thickbox">
						
							<img class="img-responsive" src="link/images/{{$p->image}}" alt="">
	 								
						 
						</a>
					</div>
				
			        @endforeach
					
			     
			</div>
		</div>
	</div>
</div>
<!--gallery end here-->

@endsection()