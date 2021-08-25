@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Companies</div>

                <!-- new btn row -->
                <div class='row'>
                    <a href="/company/create" class="btn btn-success mx-4 mt-2">Create New Company</a>

                </div>
                <!--/ new btn row -->

                <div class="card-body">
                    <!--  tbl holder -->
                    <div class="card">
                        <div class="card-header">Companies List</div>

                        <div class="card-body">

                            <table class="table table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Company</th>
                                        <th scope="col">e-mail</th>

                                        <th scope="col">website</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $number = 0; ?>
                                    @foreach ($companies as $company)

                                    <tr>
                                        <td>{{$company->name}}</td>
                                        <td>{{$company->email}}</td>

                                        <td>{{$company->website}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="/company/edit/{{$company->id}}" class="btn  btn-sm btn-light ">Edit</a>
                                                <a href="/company/delete/{{$company->id}}" class="btn btn-sm  btn-danger ">Delete</a>

                                            </div>
                                        </td>
                                    </tr>

                                    @endforeach

                                </tbody>
                            </table>
                            {{ $companies->links() }}
                        </div>
                    </div>
                    <!-- end tbl holder -->
                </div>
            </div>
        </div>
    </div>
</div>


@endsection