<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registeration Form</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>
	<div class="container pt-5">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<h2 class="text-center">Registeration Form</h2>
				@foreach ($errors->all() as $error)
					<div class="card bg-danger p-3 text-white mb-3">{{ $error }}</div>
				@endforeach
				@if (session('status'))
					<div class="card bg-success p-3 text-white mb-3">{{ session('status') }}</div>
				@endif
				<form action="{{ route('registeration') }}" method="POST" class="mb-5">
					@csrf
					<div class="form-group">
						<label for="">Full Name</label>
						<input type="text" name="name" placeholder="Full Name" required value="{{ old('name') }}" class="form-control">
						<small class="text-muted">Write your full name</small>
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input type="email" name="email" placeholder="Email" required value="{{ old('email') }}" class="form-control">
						<small class="text-muted">Write valid email</small>
					</div>
					<div class="form-group">
						<label for="">Mobile Number</label>
						<input type="tel" name="phone" placeholder="Mobile Number" required value="{{ old('phone') }}" class="form-control">
						<small class="text-muted">Write valid mobile number</small>
					</div>
					<div class="form-group">
						<label for="">Facebook Link</label>
						<input type="url" name="facebook_link" placeholder="Facebook Link" required value="{{ old('facebook_link') }}" class="form-control">
						<small class="text-muted">Write link like this <a href="#">https://www.facebook.com/your.name</a></small>
					</div>
					<div class="form-group">
						<label for="">University</label>
						<input type="text" name="university" placeholder="University" required value="{{ old('university') }}" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Faculty</label>
						<input type="text" name="faculty" placeholder="Faculty" required value="{{ old('faculty') }}" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Academic Year</label>
						<input type="text" name="academic_year" placeholder="Academic Year" required value="{{ old('academic_year') }}" class="form-control">
						<small class="text-muted">Academic year like first, second, perpratory ...etc.</small>
					</div>
					<div class="form-group">
						<label for="">Why do you register for that training? (objective)</label>
						<textarea name="why" id="" required placeholder="Why do you register for that training? (objective)" class="form-control">{{ old('why') }}</textarea>
					</div>
				    <div class="blockquote-footer">
				        <small>
				          	Make sure that all your data is correct before submitting the form.
				        </small>
				    </div>
					<button class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
	<script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>