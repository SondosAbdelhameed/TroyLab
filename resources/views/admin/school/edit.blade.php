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
					<h1 class="h3 mb-3">Edit School</h1>
<div class="card">
                                <div class="card-header">

                                <div class="card-body">
  <form action="{{route('mschool.update',['mschool'=>$school->id])}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="cat">School Name</span></label>
                <input type="text" class="form-control" name="name" value="{{$school->name}}" required>
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
