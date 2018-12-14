@extends('layout')

@section('content')
<style>
	.uper {
		margin-top: 40px;
	}
</style>

<div class="card uper">
	<div class="card-header">
		<h3>Add Share</h3>
	</div>

	<div class="card-body">
		@if($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div> <br />
		@endif


		<form method="POST" action= "{{ route('shares.store') }}">
			{{ csrf_field() }}

			<div class="form-group">
				<label for="name">Share name:</label>
				<input type="text" class="form-control" name="share_name" />
			</div>
			<div class="form-group">
				<label for="price">Share price:</label>
				<input type="text" class="form-control" name="share_price" />
			</div>
			<div class="form-group">
				<label for="quantity">Share Quantity:</label>
              	<input type="text" class="form-control" name="share_qty"/>
			</div>
			 <button type="submit" class="btn btn-primary">Add</button>
			 <a href="{{ route('shares.index') }}" class="btn btn-default">Go Back</a>
		</form>

	</div>

</div>

@endsection