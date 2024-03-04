@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg bg-info bg-opacity-25 ">{{ __('Edit Information') }}</div>

                <div class="card-body bg-success bg-opacity-50">
                <div class="container">
    <h2 class="mt-5 mb-4">Registration Form</h2>
    <form action="{{route('info.update',$id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="employee_id">Employee_id:</label>
            <input type="number" class="form-control bg-dark bg-opacity-25" name="employee_id" value="{{$information->employee_id}}" required>
          </div>

        <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control bg-dark bg-opacity-25" name="name" value="{{$information->name}}" required>
      </div>

      <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="number" class="form-control bg-dark bg-opacity-25" name="phone" value="{{$information->phone}}" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control bg-dark bg-opacity-25" name="email" value="{{$information->email}}" required>

      </div>
      <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" class="form-control bg-dark bg-opacity-25" name="address" value="{{$information->address}}" required>
      </div>
      <div class="form-group">
        <label for="salary">Salary:</label>
        <input type="number" class="form-control bg-dark bg-opacity-25" name="salary" value="{{$information->salary}}">
      </div>
      <button type="submit" class="btn btn-success">Update</button>
    </form>
  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
