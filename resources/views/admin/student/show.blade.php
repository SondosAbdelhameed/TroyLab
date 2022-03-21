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
																			<h4>Students Data</h4>
																	</div>
								<div class="card-body">

	                            <table class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
																			<th>Student Name</th>
                                        <td>{{$student->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>School Name</th>
                                        <td>{{$student->school->name}}</td>
                                    </tr>

                                    <tr>
																			<th> Status</th>
                                        <td>{{$student->status}}</td>
                                    </tr>
																		<tr>
																		<th> Settings</th>
																			<td>
																				<a href="{{route('mstudent.edit',['mstudent'=>$student->id])}}" class="btn btn-primary m-b-10 m-l-5"><i class="ti-pencil-alt"></i></a>
																				<form action="{{ route('mstudent.destroy', ['mstudent'=>$student->id]) }}" style=" display: inline-block; " method="POST">
																						 @csrf
																						 @method('DELETE')
																						 <button type="submit" class="btn btn-danger m-b-10 m-l-5"><i class="ti-trash"></i></button>
																				 </form>
																			</td>
																	</tr>
                                    </thead>
                                </table>
															</div>
															<!-- /# card -->
													</div>
													<!-- /# column -->
											</div>
											<!-- /# row -->


									</section>
							</div>
						</div>
						</div


			@endsection
