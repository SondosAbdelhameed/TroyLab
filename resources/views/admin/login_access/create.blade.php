@extends('admin.layouts.header')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <section id="main-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
					<h1 class="h3 mb-3">Create Access</h1>
<div class="card">
                                <div class="card-header">

                                <div class="card-body">
  <form action="{{route('login_access.store')}}" method="post">
            @csrf
            <input type="hidden" class="form-control" value="{{$school->id}}" name="school_id">
            <div class="form-group">
                <label for="cat">School Name</span></label>
                <input type="text" class="form-control" value="{{$school->name}}" disabled>
            </div>
            <div class="form-group">
                <label for="cat">User Name<span style="color:red">*</span></label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group">
                <label for="cat">User Email<span style="color:red">*</span></label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group">
                <label for="cat">Password<span style="color:red">*</span></label>
                <input type="password" class="form-control" name="password" id="cat" required>
            </div>
             <br>
            <button type="submit" class="btn btn-primary">Save</button>
      </form>
	</div>
    </div>
  </div>
  <!-- /# card -->
</div>
<!-- /# column -->
</div>
<!-- /# row -->
</section>
</div>
</div>
</div>

@endsection
