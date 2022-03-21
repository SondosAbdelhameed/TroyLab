@extends('admin.layouts.header')

			@section('content')
			<div class="content-wrap">
					<div class="main">
							<div class="container-fluid">
									<section id="main-content">
											<div class="row">
													<div class="col-lg-12">
															<div class="card">
																	<div class="card-title">
																			<h4>Schools Data</h4>
																	</div>
								<div class="card-body">

	                            <table class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
																			<th>School Name</th>
                                        <td>{{$school->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Student Count</th>
                                        <td>{{$school->student_no}}</td>
                                    </tr>

                                    <tr>
																			<th> Status</th>
                                        <td>{{($school->status == 1)? 'active' : 'inactive'}}</td>
                                    </tr>

                                    <tr>
										<th> Change Status</th>
                                        <td>  @if($school->status == 1)
																					<a href="{{route('school_activation',['id'=>$school->id,'status'=>0])}}" class="btn btn-danger btn-flat m-b-10 m-l-5"><i class="ti-na"></i></a>
																					@else
																					<a href="{{route('school_activation',['id'=>$school->id,'status'=>1])}}" class="btn btn-success btn-flat m-b-10 m-l-5"><i class="ti-check"></i></a>
																					@endif
																				</td>
                                    </tr>
																		<tr>
																		<th> Settings</th>
																			<td>
																				<a href="{{route('mschool.edit',['mschool'=>$school->id])}}" class="btn btn-primary m-b-10 m-l-5"><i class="ti-pencil-alt"></i></a>
																				<form action="{{ route('mschool.destroy', ['mschool'=>$school->id]) }}" style=" display: inline-block; " method="POST">
																						 @csrf
																						 @method('DELETE')
																						 <button type="submit" class="btn btn-danger m-b-10 m-l-5"><i class="ti-trash"></i></button>
																				 </form>
																			</td>
																	</tr>

																	<tr>
																		<th>Login Access</th>
																			<td>{{$school->login_access_status}}
																				@if($school->user_id == null)
																				<a href="{{route('login_access.create',['id'=>$school->id])}}"  class="btn btn-primary m-b-10 m-l-5">Add Access</a>
																				@endif
																			</td>
																	</tr>
                                    </thead>
                                </table>
															</div>
															@if($school->user_id != null)
															<br>
															<div class="card">
																<div class="card-header">
																	<h5 class="card-title mb-0">Login Access Info</h5>
																</div>
																<div class="card-body">
																	<table class="table table-striped table-bordered">
																				<thead>
																				<tr>
																				 <th>User Name</th>
																						<td>{{$school->user->name}}</td>
																				</tr>
																				<tr>
																						<th>User Email</th>
																						<td>{{$school->user->email}}</td>
																				</tr>
																				</thead>
																		</table>
																</div>
															</div>
															@endif
															<!-- /# card -->
															<div class="card">
																<div class="card-header">
																	<h5 class="card-title mb-0">Student List</h5>
																</div>
																<div class="card-body">

																							<table class="table table-striped table-bordered">
																										<thead>
																										<tr>
																										<th>#</th>
																										<th>Student Name</th>
																										<th>Student order</th>
																										<th>status</th>
																										</tr>
																										</thead>
																										<tbody>
																										@foreach($school->students as $index=>$student)
																										<tr>
																										<td>{{$index+1}}</td>
																										<td>{{$student->name}}</td>
																										<td>{{$student->order}}</td>
																										<td>{{$student->status}}</td>
																										</tr>
																										@endforeach
																										</tbody>
																								</table>
																</div>
																{{$school->students->links()}}
															</div>

													</div>
													<!-- /# column -->
											</div>
											<!-- /# row -->


									</section>
							</div>
						</div>
						</div


			@endsection
