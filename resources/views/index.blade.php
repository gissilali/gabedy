@extends('layouts.master')
@section('content')
	<div class="container">
		<div class="form-group">
			<a href="#" class="btn __btn-blue btn-lg __btn-cta __btn">Button</a>
		</div>
		<div class="form-group">
			<a href="#" class="btn __btn-blue-outline btn-lg __btn-cta __btn">Button</a>
		</div>
		<div class="form-group">
			<input type="text" name="" id="" class="form-control">
		</div>
		<div class="form-group">
			<textarea name="" id="" cols="30" rows="10" class="form-control __textarea"></textarea>
		</div>
		<div class="form-group">
			<select name="" id="" class="form-control">
				<option value="">Val 1</option>
				<option value="">Val 1</option>
				<option value="">Val 2</option>
			</select>
		</div>
		<div class="form-group">
			<div class="panel panel-default __panel">
				<div class="panel-heading">Heading</div>
				<div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio delectus, laudantium at reiciendis vel animi magni inventore hic similique minima placeat, repudiandae saepe!</div>
				<div class=" panel-footer"></div>
			</div>
		</div>
	</div>
@endsection
@section('title')
	gabedy.com
@endsection