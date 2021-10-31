@extends('layouts.backend')

@section('content')
    <div class="container-fluid  px-6">
        <!-- row  -->
        <div class="row mt-6">
            <div class="col-md-12 col-12">
                <!-- card  -->
                <div class="card">
                    <!-- card header  -->
                    <div class="card-header bg-white border-bottom-0 py-4">
                        <h4 class="mb-0">Customer Queries</h4>
                    </div>
                    <!-- table  -->
                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0">
                            <thead class="table-light">
                            <tr>
                                <th>Title</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($posts as $post)
                            <tr>
                                <td class="align-middle">{{$post->subject}}</td>
                                <td class="align-middle">{{$post->name}}</td>
                                <td class="align-middle">{{$post->phone}}</td>
                                <td class="align-middle">{{$post->email}}</td>
                                <td class="align-middle">{{$post->created_at}}</td>
                            </tr>

                            @empty
                                <tr>
                                    <p>No Customer queries at the moment!</p>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>

                    </div>
                    <!-- card footer  -->
                    <div class="card-footer bg-white text-center ">
                        <p><strong>{{$posts->links()}}</strong></p>
                    </div>
                </div>

            </div>
        </div>
        <!-- row  -->
    </div>
@endsection


