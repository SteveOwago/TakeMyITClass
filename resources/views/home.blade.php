@extends('layouts.backend')

@section('content')
    <!-- Container fluid -->
    <div class="bg-primary pt-10 pb-21"></div>
    <div class="container-fluid mt-n22 px-6">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->
                <div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mb-2 mb-lg-0">
                            <h3 class="mb-0 fw-bold text-white">Orders</h3>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                <!-- card -->
                <div class="card rounded-3">
                    <!-- card body -->
                    <div class="card-body">
                        <!-- heading -->
                        <div class="d-flex justify-content-between align-items-center
                    mb-3">
                            <div>
                                <h4 class="mb-0">Total Orders</h4>
                            </div>
                            <div class="icon-shape icon-md bg-light-primary text-primary
                      rounded-1">
                                <i class="bi bi-briefcase fs-4"></i>
                            </div>
                        </div>
                        <!-- project number -->
                        <div>
                            <h1 class="fw-bold">18</h1>
                            <p class="mb-0"><span class="text-dark me-2">2</span>Completed</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                <!-- card -->
                <div class="card rounded-3">
                    <!-- card body -->
                    <div class="card-body">
                        <!-- heading -->
                        <div class="d-flex justify-content-between align-items-center
                    mb-3">
                            <div>
                                <h4 class="mb-0">Active Orders</h4>
                            </div>
                            <div class="icon-shape icon-md bg-light-primary text-primary
                      rounded-1">
                                <i class="bi bi-list-task fs-4"></i>
                            </div>
                        </div>
                        <!-- project number -->
                        <div>
                            <h1 class="fw-bold">132</h1>
                            <p class="mb-0"><span class="text-dark me-2">28</span>Completed</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                <!-- card -->
                <div class="card rounded-3">
                    <!-- card body -->
                    <div class="card-body">
                        <!-- heading -->
                        <div class="d-flex justify-content-between align-items-center
                    mb-3">
                            <div>
                                <h4 class="mb-0">Completed Orders</h4>
                            </div>
                            <div class="icon-shape icon-md bg-light-primary text-primary
                      rounded-1">
                                <i class="bi bi-people fs-4"></i>
                            </div>
                        </div>
                        <!-- project number -->
                        <div>
                            <h1 class="fw-bold">12</h1>
                            <p class="mb-0"><span class="text-dark me-2">1</span>Completed</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                <!-- card -->
                <div class="card rounded-3">
                    <!-- card body -->
                    <div class="card-body">
                        <!-- heading -->
                        <div class="d-flex justify-content-between align-items-center
                    mb-3">
                            <div>
                                <h4 class="mb-0">Total Amount ($)</h4>
                            </div>
                            <div class="icon-shape icon-md bg-light-primary text-primary
                      rounded-1">
                                <i class="bi bi-bullseye fs-4"></i>
                            </div>
                        </div>
                        <!-- project number -->
                        <div>
                            <h1 class="fw-bold">1000</h1>
                            <p class="mb-0"><span class="text-success me-2">5%</span>Completed</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row  -->
        <div class="row mt-6">
            <div class="col-md-12 col-12">
                <!-- card  -->
                <div class="card">
                    <!-- card header  -->
                    <div class="card-header bg-white border-bottom-0 py-4">
                        <h4 class="mb-0">Active Orders</h4>
                    </div>
                    <!-- table  -->
                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0">
                            <thead class="table-light">
                            <tr>
                                <th>Project Title</th>
                                <th>Type</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Due</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="align-middle">Introduction to Web Technologies</td>
                                <td class="align-middle">Essay</td>
                                <td class="align-middle">Samuel Johns</td>
                                <td class="align-middle">samueljohnes@gmail.com</td>
                                <td class="align-middle">+254713218312</td>
                                <td class="align-middle">1 day 10hrs</td>
                            </tr>
                            <tr>
                                <td class="align-middle">Introduction to Web Technologies</td>
                                <td class="align-middle">Essay</td>
                                <td class="align-middle">Samuel Johns</td>
                                <td class="align-middle">samueljohnes@gmail.com</td>
                                <td class="align-middle">+254713218312</td>
                                <td class="align-middle">1 day 10hrs</td>
                            </tr>
                            <tr>
                                <td class="align-middle">Introduction to Web Technologies</td>
                                <td class="align-middle">Essay</td>
                                <td class="align-middle">Samuel Johns</td>
                                <td class="align-middle">samueljohnes@gmail.com</td>
                                <td class="align-middle">+254713218312</td>
                                <td class="align-middle">1 day 10hrs</td>
                            </tr>
                            <tr>
                                <td class="align-middle">Introduction to Web Technologies</td>
                                <td class="align-middle">Essay</td>
                                <td class="align-middle">Samuel Johns</td>
                                <td class="align-middle">samueljohnes@gmail.com</td>
                                <td class="align-middle">+254713218312</td>
                                <td class="align-middle">1 day 10hrs</td>
                            </tr>
                            <tr>
                                <td class="align-middle">Introduction to Web Technologies</td>
                                <td class="align-middle">Essay</td>
                                <td class="align-middle">Samuel Johns</td>
                                <td class="align-middle">samueljohnes@gmail.com</td>
                                <td class="align-middle">+254713218312</td>
                                <td class="align-middle">1 day 10hrs</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                    <!-- card footer  -->
                    <div class="card-footer bg-white text-center">
                        <a href="#">View All Projects</a>

                    </div>
                </div>

            </div>
        </div>
        <!-- row  -->
        <div class="row my-6">
            <div class="col-xl-4 col-lg-12 col-md-12 col-12 mb-6 mb-xl-0">
                <!-- card  -->
                <div class="card h-100">
                    <!-- card body  -->
                    <div class="card-body">
                        <div class="d-flex align-items-center
                    justify-content-between">
                            <div>
                                <h4 class="mb-0">Tasks Performance </h4>
                            </div>
                            <!-- dropdown  -->
                            <div class="dropdown dropstart">
                                <a class="text-muted text-primary-hover" href="#"
                                   role="button" id="dropdownTask" data-bs-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-xxs" data-feather="more-vertical"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownTask">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <!-- chart  -->
                        <div class="mb-8">
                            <div id="perfomanceChart"></div>
                        </div>
                        <!-- icon with content  -->
                        <div class="d-flex align-items-center justify-content-around">
                            <div class="text-center">
                                <i class="icon-sm text-success"
                                   data-feather="check-circle"></i>
                                <h1 class="mt-3 fw-bold mb-1">76%</h1>
                                <p>Completed</p>
                            </div>
                            <div class="text-center">
                                <i class="icon-sm text-warning"
                                   data-feather="trending-up"></i>
                                <h1 class="mt-3 fw-bold mb-1">32%</h1>
                                <p>In-Progress</p>
                            </div>
                            <div class="text-center">
                                <i class="icon-sm text-danger"
                                   data-feather="trending-down"></i>
                                <h1 class="mt-3 fw-bold mb-1">13%</h1>
                                <p>Behind</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card  -->
            <div class="col-xl-8 col-lg-12 col-md-12 col-12">
                <div class="card h-100">
                    <!-- card header  -->
                    <div class="card-header bg-white border-bottom-0 py-4">
                        <h4 class="mb-0">Latest Customer Queries </h4>
                    </div>
                    <!-- table  -->
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead class="table-light">
                            <tr>
                                <th>Name</th>
                                <th>Subject</th>
                                <th>Email</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($posts as $post)
                            <tr>
                                <td class="align-middle">
                                    <div class="d-flex align-items-center">

                                        <div class="ms-3 lh-1">
                                            <h5 class="fw-bold mb-1">{{$post->name}}</h5>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">{{$post->subject}}</td>
                                <td class="align-middle">{{$post->email}}</td>
                                <td class="align-middle">
                                    <div class="dropdown dropstart">
                                        <a class="text-muted text-primary-hover" href="#"
                                           role="button" id="dropdownTeamOne"
                                           data-bs-toggle="dropdown" aria-haspopup="true"
                                           aria-expanded="false">
                                            <i class="icon-xxs" data-feather="more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu"
                                             aria-labelledby="dropdownTeamOne">
                                            <a class="dropdown-item text-primary" href="#">View</a>
                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <p>No recent customer queries</p>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
