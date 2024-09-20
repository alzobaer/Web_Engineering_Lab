@extends('layout')

@section('page-content')
    <form action="{{ route('employee.update', $employee->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter email" name="email" value="{{ $employee->email }}">
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Name</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Name" name="name"
                value="{{ $employee->name }}">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Job Title</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Job Title" name="job_title"
                value="{{ $employee->job_title }}">
            @error('job_title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Joinning Date</label>
            <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Jonning Date"
                name="joinning_date" value="{{ $employee->joinning_date }}">
            @error('joinning_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Salary</label>
            <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Salary" name="salary"
                value="{{ $employee->salary }}">
            @error('salary')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Address</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="address" name="address"
                value="{{ $employee->address }}">
            @error('address')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Phone</label>
            <input type="number" class="form-control" id="exampleInputPassword1" placeholder="phone" name="mobile_no"
                value="{{ $employee->mobile_no }}">
            @error('mobile_no')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
