@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row justify-content-center ">
        <div class="col-md-10">
            <div class="card ">
                <div class="card-header d-flex justify-content-between bg-dark bg-opacity-25">
                    <div class="fs-3">{{ __('EMPLOYEE LIST') }}</div>
                    <div><a href="{{ route('create.info')}}" class="btn btn-success text-white">Add New Employee</a></div>
                </div>
                <div class="card-body bg-success bg-opacity-50">
                    <div class="table-responsive">
                        <table class="table table-striped table-success ">
                            <thead>
                                <tr >
                                    <th>Employee_id</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Salary</th>
                                    <th>Created By</th>
                                    <th>Action</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($informations as $information)
                                <tr>
                                    <td>{{$information->employee_id}}</td>
                                    <td>{{$information->name}}</td>
                                    <td>{{$information->phone}}</td>
                                    <td>{{$information->email}}</td>
                                    <td>{{$information->address}}</td>
                                    <td>{{$information->salary}}</td>
                                    <td>{{$information->user->name}}</td>
                                    <td>
                                        <a href="{{route('info.edit',$information->id)}}" class="btn btn-success">Edit</a>
                                    </td>
                                    <td>
                                        <Form action="{{route('info.delete',$information->id)}}" method="post">
                                            @csrf
                                            @method('Delete')
                                            <button type="submit" class="btn btn-danger">Delete</button>

                                        </Form>
                                    </td>


                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
