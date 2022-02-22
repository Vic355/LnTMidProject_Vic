@extends('layout.master')
@section('title','index')
@section('content')

<body style="overflow-x: hidden" >
<?php
$a = $book->total();
if($a == 0) {
$t = 0;
}
else{
$t = $book->total() % $book->perPage();

if ($t == 0) {
	$t = 12;
}}
?>
	<div class="row">
		<div class="container" >
		<div
  class="bg-image"
  style="
    background-image: url('https://wallpaperaccess.com/full/1577340.jpg');
    height: 400px;
  "
>
<div class="text-center">
				<br></br>
			<h2 class="text-light display-2">Search Books in the Library Archive</h2>
			<br></br>
			<form action="/upload/find" method="GET">
	<input type="text" name="find" placeholder="Search Book Title...." value="{{ old('find') }}">
	<input type="submit" value="Search">
</form>
</div>
</div>
			<div class="col-lg-8 mx-auto my-5">	
				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif
				<h4 class="my-5">Collection of Books</h4>
				<div class=container>
  <div class="alert alert-warning alert-dismissable">
  <div class="row">
    <div class="col-md-6"><strong>Showing {{$t}} Books From a Total of {{ $book->total() }} Books </strong></div>
    <div class="col-md-6 text-end">  <a href="#" class="text-decoration-none" data-dismiss="alert" >X</a>	</div>
  </div>    	  
</div>
</div>

<div class="row">
 @foreach ($book as $g)
  <!-- col-md-2  -->
    <div class="col-md-4 mt-4">
      <div class="card">
        <div class="card-body">
		<p class="fs-5 fw-bold">"{{$g->title}}"</p>
           <img src="{{ url('/data_file/'.$g->file) }}" img width="150px" class="img-responsive" alt="...">
		   <p class="card-text">Book Author : {{$g->author}}</p>
		   <p class="card-text">Num. Pages : {{$g->pages}}</p>
		   <p class="card-text">Publis. Year : {{$g->year}}</p>  
		   <p class="card-text">Book Status : {{$g->borrow_status}}</p>
		   <a class="btn btn-primary" href="/upload/moredetails/{{ $g->id }}"><img src="/data_file/infoicon.png" alt="" width="30" height="24" class="d-inline-block align-text-top"> More Information</a>
			<div class="btn-group"><a class="btn btn-danger" href="/upload/erase/{{ $g->id }}"><img src="/data_file/removeicon.png" alt="" width="30" height="24" class="d-inline-block align-text-top">Delete</a>
			<a class="btn btn-success" href="/upload/edit/{{ $g->id }}"><img src="/data_file/editicon.png" alt="" width="30" height="24" class="d-inline-block align-text-top">Edit</a></td> 
        </div>
      </div>
    </div>
</div>
    <!-- col-md-2 end -->
 @endforeach
</div>
  </div>
</div>
			</div>
		</div>
	{{ $book->links('pagination::bootstrap-4') }}
	Page {{ $book->currentPage() }}<br/>
</body>
</html>
@endsection