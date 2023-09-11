@extends('layout.master')

@section('title' , 'Home')


@section('page')

<div class="hero-wrap js-fullheight"
		style="background-image: url('images/celsus-library-ephesus-ancient-city-izmir-turkey.jpg');"
		data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
				data-scrollax-parent="true">
				<div class="col-md-9 text text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
					<!-- <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
          		<span class="ion-ios-play"></span>
            </a> -->
					<p class="caps" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Travel to any corner
						in Jordan , without going around in circles</p>
					<h1 data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Make Your Tour of Jordan Amazing
						With Us</h1>
				</div>
			</div>
		</div>
	</div>


	<br> <br>


	<section class="ftco-section ftco-no-pb ftco-no-pt">
		<div class="container">
			<div class="row">
				<div class="col-md-12 mb-5">
					<div class="search-wrap-1 search-wrap-notop ftco-animate p-4">
						<form action="#" method="get" class="search-property-1">
							<div class="row">
								<div class="col-lg align-items-end">
									<div class="form-group">
										<label for="#">Destination</label>
										<div class="form-field">
											<div class="icon"><span class="ion-ios-search"></span></div>
											<input type="text" class="form-control" placeholder="Search place" name="search">
										</div>
									</div>
								</div>
								<div class="col-lg align-items-end">

								</div>


								<div class="col-lg align-self-end">
									<div class="form-group">
										<div class="form-field">
											<input type="submit" value="Search" class="form-control btn btn-primary">
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-counter img" id="section-counter">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 d-flex">
    				<div class="img d-flex align-self-stretch" style="background-image:url(myimg/old-fortress-wall.jpg);"></div>
    			</div>
    			<div class="col-md-6 pl-md-5 py-5">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		            <h2 class="mb-4">Make Your Tour Memorable and Safe With Us</h2>
		          </div>
				  <div class="col-md-6 d-flex align-self-stretch ftco-animate">
		            <div class="media block-6 services d-block">
		              <div class="icon"><span class="flaticon-paragliding"></span></div>
		              <div class="media-body">
		                <h3 class="heading mb-3">Activities</h3>
		                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
		              </div>
		            </div>      
		          </div>
		          <div class="col-md-6 d-flex align-self-stretch ftco-animate">
		            <div class="media block-6 services d-block">
		              <div class="icon"><span class="flaticon-route"></span></div>
		              <div class="media-body">
		                <h3 class="heading mb-3">Travel Arrangements</h3>
		                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
		              </div>
		            </div>    
		          </div>
		          <div class="col-md-6 d-flex align-self-stretch ftco-animate">
		            <div class="media block-6 services d-block">
		              <div class="icon"><span class="flaticon-tour-guide"></span></div>
		              <div class="media-body">
		                <h3 class="heading mb-3">Private Guide</h3>
		                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
		              </div>
		            </div>      
		          </div>
		          <div class="col-md-6 d-flex align-self-stretch ftco-animate">
		            <div class="media block-6 services d-block">
		              <div class="icon"><span class="flaticon-map"></span></div>
		              <div class="media-body">
		                <h3 class="heading mb-3">Location Manager</h3>
		                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
		              </div>
		            </div>      
		          </div>
          	</div>
          </div>
        </div>
		        </div>
		    		
		        </div>
	        </div>
        </div>
    	</div>
    </section>


		<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Categories	</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-3 ftco-animate">
        		<div class="project-destination">
        			<a href="archaeological" class="img" style="background-image: url(myimg/place1.jpg);">
        				<div class="text">
        					<h3>Archaeological Tours</h3>
        					<span>View All Tours</span>
        				</div>
        			</a>
        		</div>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<div class="project-destination">
        			<a href="medical" class="img" style="background-image: url(myimg/dead_sea.jpg);">
        				<div class="text">
        					<h3>Medical Tourism</h3>
        					<span>View All Tours</span>
        				</div>
        			</a>
        		</div>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<div class="project-destination">
        			<a href="enjoyment" class="img" style="background-image: url(myimg/saraya-aqaba-waterpark.jpg);">
        				<div class="text">
        					<h3>Enjoyment Tours</h3>
        					<span>View All Tours</span>
        				</div>
        			</a>
        		</div>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<div class="project-destination">
        			<a href="religious" class="img" style="background-image: url(myimg/Mount-Nebo-7.jpg);">
        				<div class="text">
        					<h3>Religious Tours </h3>
        					<span>View All Tours</span>
        				</div>
        			</a>
        		</div>
        	</div>
        </div>
    	</div>
    </section>

    <section class="ftco-section ftco-no-pt">
    	<div class="container">
    		<div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Best Place Destination</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-4 ftco-animate">
        		<div class="project-wrap">
        			<a href="petradetails" class="img" style="background-image: url(myimg/petra.jpg);"></a>
        			<div class="text p-4">
        				<span class="price">10JOD/person</span>
        				<span class="days">1 Day Tour</span>
        				<h3><a href="#">Petra, Ma'an</a></h3>
        				
        				<ul>
        					<li><span class="flaticon-shower"></span>0</li>
        					<li><span class="flaticon-king-size"></span>0</li>
        					<li><span class="flaticon-mountains"></span>Near Mountain</li>
        				</ul>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<div class="project-wrap">
        			<a href="wadidetails" class="img" style="background-image: url(myimg/w-rum.jpg);"></a>
        			<div class="text p-4">
        				<span class="price">10JOD/person</span>
        				<span class="days">1 Day Tour</span>
        				<h3><a href="#">Wadi Rum, Aqaba</a></h3>
						    <ul>
        					<li><span class="flaticon-shower"></span>0</li>
        					<li><span class="flaticon-king-size"></span>0</li>
							<li><span class="flaticon-mountains"></span>Near Mountain</li>
        				</ul>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<div class="project-wrap">
        			<a href="aqabadetails" class="img" style="background-image: url(myimg/aqC.jpg);"></a>
        			<div class="text p-4">
        				<span class="price">3JOD/person</span>
        				<span class="days">7hour Tour</span>
        				<h3><a href="#">Red sea, Aqaba</a></h3>
        				<ul>
        					<li><span class="flaticon-shower"></span>1</li>
        					<li><span class="flaticon-king-size"></span>0</li>
        					<li><span class="flaticon-sun-umbrella"></span>Beach</li>
        				</ul>
        			</div>
        		</div>
        	</div>

        	<div class="col-md-4 ftco-animate">
        		<div class="project-wrap">
        			<a href="ammandetails" class="img" style="background-image: url(myimg/amman-jordan.jpg);"></a>
        			<div class="text p-4">
        				<span class="price">50JOD/person</span>
        				<span class="days">5 Days Tour</span>
        				<h3><a href="#">Amman, Jordan</a></h3>
        				<ul>
        					<li><span class="flaticon-shower"></span>2</li>
        					<li><span class="flaticon-king-size"></span>3</li>
							<li><span class="flaticon-mountains"></span>Near Mountain</li>
        				</ul>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<div class="project-wrap">
        			<a href="ummdetails" class="img" style="background-image: url(myimg/thumbs_b2_311f22c55a8405b4512844093d34b4f9.jpg);"></a>
        			<div class="text p-4">
        				<span class="price">15JOD/person</span>
        				<span class="days">1 Day Tour</span>
        				<h3><a href="#">Umm Qais, Irbid</a></h3>
        				
        				<ul>
        					<li><span class="flaticon-shower"></span>2</li>
        					<li><span class="flaticon-king-size"></span>3</li>
        					<li><span class="flaticon-mountains"></span>Near Mountain</li>
        				</ul>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<div class="project-wrap">
        			<a href="deaddetails" class="img" style="background-image: url(myimg/deadS.jpg);"></a>
        			<div class="text p-4">
        				<span class="price">30JOD/person</span>
        				<span class="days">2 Days Tour</span>
        				<h3><a href="#">Dead sea</a></h3>
        			
        				<ul>
        					<li><span class="flaticon-shower"></span>2</li>
        					<li><span class="flaticon-king-size"></span>2</li>
        					<li><span class="flaticon-sun-umbrella"></span> Beach</li>
        				</ul>
        			</div>
        		</div>
        	</div>
        </div>
    	</div>
		<div class="text-center">
			<a href="book" class="btn btn-primary">View All Tours</a>
		</div>
    </section>




    
@endsection
    
