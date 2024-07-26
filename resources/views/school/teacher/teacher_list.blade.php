@extends('school.home.master')
@section('content')
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1>Teachers List</h1>
                            <a href="{{ route('teacher.add') }}" class="btn btn-primary"><i class="ti-plus"></i> New Teacher</a>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                {{-- <div class="col-lg-4 p-l-0 title-margin-left">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Table-Export</li>
                            </ol>
                        </div>
                    </div>
                </div> --}}
                <!-- /# column -->
            </div>
            <!-- /# row -->
            <section id="main-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="bootstrap-data-table-panel">
                                <div class="table-responsive">
                                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Joining Date</th>
                                                <th>Salary</th>
                                                <th>Aciton</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>User-123</td>
                                                <td>John Wick</td>
                                                <td>Head Teacher of Computer Department</td>
                                                <td>12 June, 2016</td>
                                                <td>40,000/=</td>
                                                <td>
                                                    <a href="#"><i class="ti-eye"></i></a>
                                                    <a href="#"><i class="ti-pencil-alt"></i></a>
                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>
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
