@extends('moster.moster')
@section('title','contact')
@section('content')


<!--header strat here-->
<!--contact start here-->
<div class="contact">
	<div class="container">
		<div class="contact-main">
			<div class="col-md-6 contact-left">
				<div class="contact-top">
					<h2>Contact with administrator</h2>
					<p>Following area available right now</p>
			    </div>
				<div class="conta-1">
					<div class="con-phone">
						<span class="con-ph"> </span>
						<div class="con-para">
							<h6>Phone</h6>
							<p>+767499442</p>
		 				</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="conta-2">
					<div class="con-email">
						<span class="con-location"> </span>
						<div class="con-para">
							<h6>Facebook</h6>
							<p><a href="ceng76.sadiqi@gmail.com">ceng76.sadiqi@gmail.com</a></p>
						</div>
					</div>
				</div>
			 </div>
			<div class="col-md-6 contact-right">
				<div class="contact-top">
					<h3>Send a Message</h3>
					<p>Send message to our main office</p>
				</div>
				<form method="post" action="">
						<input type="text" class="shart" value="Name" name="name">
					 	<input type="text" class="shart" value="Subject" name="subject">
				        <textarea value="Message" name="message">Message</textarea>
                        <input type="submit" value="Submit">
				</form>
				</div>
		  <div class="clearfix"> </div>
		</div>
			</div>
</div>
<!--contact end here-->
@endsection()