@extends('layouts.master')
@section('content')
	@include('partials.header')
	<div class="content">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-8 col-xs-10 col-md-offset-3 col-sm-offset-2 col-xs-offset-1">
					<div class="pre-section-header">
						<div class="logo-container">
							<img src="logo.svg" alt="gabedy-logo">	
						</div>
						<h3><strong>Gabedy</strong> <span class="light">tutors</span></h3>
					</div>
					<div class="tutors-section">
						<div class="section-header clearfix">
							<div class="actions">
								<button class="fa fa-list"></button>
								<button class="fa fa-sort"></button>
							</div>
							<div class="search-bar clearfix">
								<div class="search-wrapper clearfix">
									<div class="button">
										<button class="btn search-btn" id="tutors-search-btn"><i class="fa fa-search"></i></button>
									</div>

									<div class="input">
										<input type="text" name="search_query" id="tutors-input" placeholder="find tutor">
									</div>
								</div>
							</div>
						</div>
						<div class="section-body clearfix">
							<ul class="list-group clearfix tutor-list">
								<li class="list-group-item clearfix tutor-list-item">
									<div class="avatar-wrapper">
										<div class="avatar" style="width:50px;height:50px;background: gold">
										</div>
									</div>
									<div class="tutor-info">
										<p class="name">J.K Rowling</p>
										<span class="category">category</span>
										<span class="category-name">fantasy</span>
									</div>
									<a href="" class="see-more-cta">Details <span class="fa fa-caret-right"></span></a>
								</li>
								
								<li class="list-group-item clearfix tutor-list-item">
									<div class="avatar-wrapper">
										<div class="avatar" style="width:50px;height:50px;background: gold">
										</div>
									</div>
									<div class="tutor-info">
										<p class="name">Haruki Murakami</p>
										<span class="category">category</span>
										<span class="category-name">academic</span>
									</div>
									<a href="" class="see-more-cta">Details <span class="fa fa-caret-right"></span></a>
								</li>

								<li class="list-group-item clearfix tutor-list-item">
									<div class="avatar-wrapper">
										<div class="avatar" style="width:50px;height:50px;background: gold">
										</div>
									</div>
									<div class="tutor-info">
										<p class="name">Franz Kafka</p>
										<span class="category">category</span>
										<span class="category-name">philosophy</span>
									</div>
									<a href="" class="see-more-cta">Details <span class="fa fa-caret-right"></span></a>
								</li>

								<li class="list-group-item clearfix tutor-list-item">
									<div class="avatar-wrapper">
										<div class="avatar" style="width:50px;height:50px;background: gold">
										</div>
									</div>
									<div class="tutor-info">
										<p class="name">David G. Mailu</p>
										<span class="category">category</span>
										<span class="category-name">children</span>
									</div>
									<a href="" class="see-more-cta">Details <span class="fa fa-caret-right"></span></a>
								</li>

							</ul>
						</div>
						<div class="section-footer"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection