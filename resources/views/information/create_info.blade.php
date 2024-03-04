@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card bg-body-secondary ">
                <div class="card-header d-flex  justify-content-between bg-dark bg-opacity-25">
                    <div class="fs-3 text-body-emphasis ">{{ __('ADD EMPLOYEE ') }}</div>
                    <div><a href="{{ route('info.list')}}" class="btn btn-success text-white ">Employee List</a></div>
                </div>

                <div class="card-body bg-success bg-opacity-50">
                <div class="container">
    <h3 class="mt-5 mb-4 ">Employee Registration Form</h3>
    <form action="{{route('store.info')}}" method="post" class="">
        @csrf
        <div class="form-group">
            <label for="employee_id">Employee_ID:</label>
            <input type="number" class="form-control bg-dark bg-opacity-25" name="employee_id" placeholder="Enter your employee_id" required>
          </div>

        <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control bg-dark bg-opacity-25" name="name" placeholder="Enter your name" required>
      </div>

      <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="text" class="form-control bg-dark bg-opacity-25" name="phone" placeholder="Enter your phone number" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control bg-dark bg-opacity-25" name="email" placeholder="Enter your email" required>

        {{-- <select class="form-control bg-dark bg-opacity-25" name="gender" required>
          <option value="">Select</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select> --}}
      </div>
      <div class="form-group">
        <label for="address">Address:</label>
        <input type="tel" class="form-control bg-dark bg-opacity-25" name="address" placeholder="Enter your phone number" required>
      </div>
      <div class="form-group">
        <label for="salary">Salary:</label>
        <input type="text" class="form-control bg-dark bg-opacity-25" name="salary" placeholder="Enter your salary" required>
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
