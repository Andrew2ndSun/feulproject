@extends('layouts.app')

@section('content')

<div style="margin-top: 7%;" class = "container about">
	<div class="row justify-content-around " >
		<div class = "col-lg-3 col-md-3 col-sm-12">
			<div class="card" style="background-color: rgba(52,144,220,.25); text-align: center;">
				<img src="fuelimage/img/Ha.jpg" alt="John" style="width:100%">
				<h1>Mr.Ha</h1>
				<div style="color: white;">
				<p class="title">Front-End</p>
				<p>University of Houston</p>
				</div>
				<div class="mb-4">
					<a style="color: white" href="#"><i class="fa fa-dribbble"></i></a>
				<a style="color: white" href="#"><i class="fa fa-twitter"></i></a>
				<a style="color: white" href="#"><i class="fa fa-linkedin"></i></a>
				<a style="color: white" href="#"><i class="fa fa-facebook"></i></a>
				</div>
				
				<button class="btn btn-primary m-0" type="submit">Contact</button>
			</div>

		</div>
		<div class = "col-lg-3 col-md-3 col-sm-12">
			<div class="card" style="background-color: rgba(52,144,220,.25);text-align: center;">
				<img src="fuelimage/img/Mastriano.jpg" alt="John" style="width:100%">
				<h1>Mr.Mastriano</h1>
				<div style="color: white">
				<p class="title">Database</p>
				<p>University of Houston</p>
				</div>
				<div class="mb-4">
					<a style="color: white" href="#"><i class="fa fa-dribbble"></i></a>
				<a style="color: white" href="#"><i class="fa fa-twitter"></i></a>
				<a style="color: white" href="#"><i class="fa fa-linkedin"></i></a>
				<a style="color: white" href="#"><i class="fa fa-facebook"></i></a>
				</div>
				<button class="btn btn-primary m-0" type="submit">Contact</button>
			</div>
		</div>
		<div class = "col-lg-3 col-md-3 col-sm-12">
				<div class="card" style="background-color: rgba(52,144,220,.25);text-align: center;">
				<img src="fuelimage/img/Tran.jpg" alt="John" style="width:100%">
				<h1>Mr.Tran</h1>
				<div style="color: white;">
				<p class="title">Back-end</p>
				<p>University of Houston</p>
				</div>
				<div class="mb-4">
					<a style="color: white" href="#"><i class="fa fa-dribbble"></i></a>
				<a style="color: white" href="#"><i class="fa fa-twitter"></i></a>
				<a style="color: white" href="#"><i class="fa fa-linkedin"></i></a>
				<a style="color: white" href="#"><i class="fa fa-facebook"></i></a>
				</div>
				<button class="btn btn-primary m-0" type="submit">Contact</button>
			</div>
		</div>



	</div>
</div>
@endsection