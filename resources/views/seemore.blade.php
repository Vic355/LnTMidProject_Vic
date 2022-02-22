@extends('layout.master')
@section('title','index')
@section('content')

<body style="overflow-x: hidden">
	<div class="row">
		<div class="container">
			<div class="col-lg-8 mx-auto my-5">	
 
				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif

				@foreach($book as $g)
				@endforeach
<div class="container-fluid">
<div class="row justify-content-center p-3 mb-2 bg-dark text-white">
    <div class="col-sm-3 sidenav">
      <h4>Book Cover</h4>
	  <td><img class="img-fluid" img width="150px" src="{{ url('/data_file/'.$g->file) }}"></td>
    </div>

    <div class="col-sm-9">
      <h4><small>Information for "{{$g->title}}" </small></h4>
      <hr>
	  <h5>Book ID : {{$g->id}}</h5>
      <h5>Book Title : {{$g->title}}</h5>
      <h5>Book Author : {{$g->author}}</h5>
	  <h5>Number of Pages in the Book : {{$g->pages}}</h5>
      <h5>Publishing Year : {{$g->year}}</h5>
      <h5>Book Borrow Status : {{$g->borrow_status}}</h5>
	  <h5>Book Details :</h5>
	  <br>
      <p>{{$g->keterangan}}</p>
      <br><br>
      
 
        </div>
      </div>
    </div>
  </div>
</div>

</div>
</div>
</body>
</html>
@endsection