@extends('admin.layouts.header')

@section('content')
<style>
th , td {
  text-align : left !important;
}
</style>
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <section id="main-content">
                  <a href="{{route('mschool.create')}}" class="btn btn-success">Add School</a>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Schools Data</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Student Count</th>
                                                    <th>Status</th>
                                                    <th>Settings</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              @foreach($schools as $key => $school)
                                                <tr>
                                                  <td>{{$key+1}}</td>
                                                  <td>{{$school->name}}</td>
                                                  <td>{{$school->student_no}}</td>
                                                  <td> <span class="{{($school->status == 1)?'green_circle':'red_circle'}}"></span> {{($school->status == 1)? 'active' : 'inactive' }}</td>
                                                    <td>
                                                      <a href="{{route('mschool.show',['mschool'=>$school->id])}}" class="btn btn-info m-b-10 m-l-5"><i class="ti-eye"></i></a>
                                                      <a href="{{route('mschool.edit',['mschool'=>$school->id])}}" class="btn btn-primary m-b-10 m-l-5"><i class="ti-pencil-alt"></i></a>
                                                      @if($school->status == 1)
                                                      <a href="{{route('school_activation',['id'=>$school->id,'status'=>0])}}" class="btn btn-dark m-b-10 m-l-5"><i class="ti-na"></i></a>
                                                      @else
                                                      <a href="{{route('school_activation',['id'=>$school->id,'status'=>1])}}" class="btn btn-success m-b-10 m-l-5"><i class="ti-check"></i></a>
                                                      @endif
                                                     <form action="{{ route('mschool.destroy', ['mschool'=>$school->id]) }}" style=" display: inline-block; " method="POST">
                                                          @csrf
                                                          @method('DELETE')
                                                          <button type="submit" class="btn btn-danger m-b-10 m-l-5"><i class="ti-trash"></i></button>
                                                      </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    {{$schools->links()}}
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
