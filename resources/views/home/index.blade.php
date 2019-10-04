@extends('layouts.app1')

@section('content')
	<!-- Header -->
<header id="header">
  <div class="intro text-center">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="intro-text">
            <h1>{{ $HomeTitle->title }} <!-- <span class="brand">Nerve</span> --></h1>
            <p>{{ $HomeTitle->description }}</p>
            <a href="#services" class="btn btn-default btn-lg page-scroll">Learn More</a> </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Services Section -->
<div id="services" class="text-center">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 section-title">
      <h2>{{ $serviceTitle->title }}</h2>
      <p>{{ $serviceTitle->description }}</p>
    </div>
    <div class="row">
    	@if(!empty($services))
      		@foreach($services as $service)
	      		<div class="col-xs-6 col-md-3"> <i class="{{ $service->image}}"></i>
			        <h4>{{ $service->service}}</h4>
			        <p>{{ $service->description}}</p>
	      		</div>
		    @endforeach
	    @else
	    	<div class="well"> Record not found</div>
	    @endif
    </div>
  </div>
</div>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 section-title text-center">
      <h2>{{ $aboutTitle->title }}</h2>
      <p>{{ $aboutTitle->description }}</p>
    </div>
    <div class="row">
      <div class="col-xs-12 col-md-6"> <img src="img/about.jpg" class="img-responsive" alt=""> </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h4>Who We Are</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam commodo.</p>
          <h4>What We Do</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam commodo nibh ante.</p>
          <h4>Why Choose Us</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Portfolio Section -->
<div id="portfolio">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 section-title text-center">
      <h2>{{ $portfolioTitle->title }}</h2>
      <p>{{ $portfolioTitle->description }}</p>
    </div>
    <div class="categories">
      <ul class="cat">
        <li>
          <ol class="type">
    	@if(!empty($categories))
          	<li><a href="#" data-filter="*" class="active">All</a></li>
      		@foreach($categories as $category)
	            <li><a href="#" data-filter=".{{$category->slug}}">{{$category->title}}</a></li>
	        @endforeach
	    @else
	    	<div><h2>No Record Found</h2></div>
	    @endif
          </ol>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="row">
      <div class="portfolio-items">

    	@if(!empty($portfolios))
    		@foreach($portfolios as $portfolio)
		        <div class="col-sm-6 col-md-3 col-lg-3 {{$portfolio->tags}}">
		          <div class="portfolio-item">
		            <div class="hover-bg"> <a href="{{$portfolio->project_links}}" title="Project description" rel="prettyPhoto">
		              <div class="hover-text">
		                <h4>{{$portfolio->project_title}}</h4>
		                <small>{{$portfolio->category}}</small> </div>
		              <img src="{{$portfolio->image}}" class="img-responsive" alt="Project Title"> </a> </div>
		          </div>
		        </div>
		    @endforeach
		@else
			<div><h2>No Data Exist!</h2></div>

		@endif
      </div>
    </div>
  </div>
</div>
<!-- Team Section -->
<div id="team" class="text-center">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 section-title">
      <h2>{{ $teamTitle->title }}</h2>
      <p>{{ $teamTitle->description }}</p>
    </div>
    <div id="row">
    @if(!empty($teams))
      	@foreach($teams as $team)
	      <div class="col-md-3 col-sm-6 team">
	        <div class="thumbnail"> <img src="{{$team->image}}" alt="..." class="img-circle team-img">
	          <div class="caption">
	            <h3>{{$team->name}}</h3>
	            <p>{{$team->position}}</p>
	          </div>
	        </div>
	      </div>
	    @endforeach
	@else
		<div><h2>No Record Found!</h2></div>
	@endif

    </div>
  </div>
</div>
<!-- Contact Section -->
<div id="contact" class="text-center">
  <div class="overlay">
    <div class="container">
      <div class="col-md-8 col-md-offset-2 section-title">
      <h2>{{ $contactTitle->title }}</h2>
      <p>{{ $contactTitle->description }}</p>
      </div>
      <div class="col-md-8 col-md-offset-2">
        <form name="sentMessage" id="contactForm" novalidate>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" id="name" class="form-control" placeholder="Name" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
            <p class="help-block text-danger"></p>
          </div>
          <div id="success"></div>
          <button type="submit" class="btn btn-default">Send Message</button>
        </form>

        <div class="social">
          <ul>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a href="#"><i class="fa fa-github"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection