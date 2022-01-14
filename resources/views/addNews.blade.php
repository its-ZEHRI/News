@extends('layout')
@section('content')
    <div class="panel">
         <div class="panel-body">
            <div class="col-md-6 col-sm-12">
                <h3 class="animated fadeInLeft">Add News</h3>
                    <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> Peshawar, Pakistan</p>
			</div>
        </div>
	</div>
	<div class="" style="padding-left:20px;">
		<form action="#" method="POST" style="width: 80%;">
			<div class="form-group">
				<h4>Date</h4>
            		<input type="date" name="" class="form-control " placeholder="Enter Title" style="width: 200px!important">
            </div>
    		<div class="form-group">
				<h4>Title</h4>
            		<input type="text" name="" class="form-control" placeholder="Enter Title">
            </div>
            <div class="form-group">
            	<h4>Discription</h4>
           	 	<textarea class="form-control" rows="5" placeholder="Discription"></textarea>
           	</div>
       		<div class="mb-4">
            	<h4>Select Images</h4>
            	<input type="file" name="">
           	</div>
            <div class="" style="padding-top: 20px;">
            	<input type="Submit" name="" class="btn btn-primary" value="Add News">
            </div>
        </form>
    </div>
@endsection