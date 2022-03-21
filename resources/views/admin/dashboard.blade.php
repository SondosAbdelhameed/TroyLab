@extends('admin.layouts.header')

@section('content')
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="content-wrap">
                    <div class="main">
                        <div class="container-fluid">
                            <section id="main-content">
                                <div class="row">
                                        <div class="col-lg-3">
                                            <div class="card">
                                                <div class="stat-widget-one">
                                                    <div class="stat-icon dib"><i class="ti-briefcase color-success border-success"></i>
                                                    </div>
                                                    <div class="stat-content dib">
                                                        <div class="stat-text">Total Schools</div>
                                                        <div class="stat-digit">{{$schoolsNo}}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="card">
                                                <div class="stat-widget-one">
                                                    <div class="stat-icon dib"><i class="ti-id-badge color-primary border-primary"></i>
                                                    </div>
                                                    <div class="stat-content dib">
                                                        <div class="stat-text">Total Student</div>
                                                        <div class="stat-digit">{{$studentsNo}}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="card">
                                                <div class="card-title">
                                                    <h4>Fee Collections and Expenses</h4>

                                                </div>
                                                <div class="card-body">
                                                    <div class="ct-bar-chart m-t-30"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="card">

                                                <div class="card-body">
                                                    <div class="ct-pie-chart"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
