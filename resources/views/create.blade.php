@extends('layout.master')
@section('title','index')
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container">
 <div class="row justify-content-center p-3 mb-2 bg-dark text-white">
 <h2>Add New Books Form</h2>
<form action="/upload/proses" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
 
					<div class="form-group col-md-4 col-md-offset-5 align-center ">
						<b>Cover Picture</b><br/>
						<input type="file" name="file">
					</div>
					<div class="form-group">
						<b>Title</b>
						<textarea class="form-control" name="title"></textarea>
					</div>
					<div class="form-group">
						<b>Author</b>
						<textarea class="form-control" name="author"></textarea>
					</div>
					<div class="form-group">
						<b>Number of Pages</b>
						<textarea class="form-control" name="pages"></textarea>
					</div>
					<div class="form-group">
						<b>Year of Publish</b>
						<textarea class="form-control" name="year"></textarea>
					</div> 
					<div class="form-group">
						<b>Details</b>
						<textarea class="form-control" name="keterangan"></textarea>
					</div>
					<div class="form-group">
						<b>Borrowing Status</b>
					<select class="form-control" name="borrow_status">
  <option>Borrowed</option>
  <option>Not Borrowed</option>
</select>
</div>
<br></br>
					<input type="submit" value="Submit" class="btn btn-primary">
				</form>
</div>
</div>
@endsection
