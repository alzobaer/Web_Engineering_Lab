@extends('layout')

@section('page-content')
    <br>
    <br>
    <h1 class="text-center text-primary">Welcome to Employee information System</h1>

    <a href="{{ route('employee.create') }}" class="btn btn-primary mb-3" style="float: right">Create</a>
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Job Title</th>
            <th>Joining Date</th>
            <th>Salary</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Actoins</th>
        </tr>
        @foreach ($employees as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->job_title }}</td>
                <td>{{ $item->joinning_date }}</td>
                <td>{{ $item->salary }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->mobile_no }}</td>
                <td class="d-flex">
                    <a href="{{ route('employee.edit', $item->id) }}" class="btn btn-warning mr-2">Update</a>
                    <form action="{{ route('employee.destroy', $item->id) }}" method="POST">
                        @csrf
                        <input type="submit" value="Delete" class="btn btn-danger"
                            onclick="return confirm('Are you sure?')">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $employees->links() }}
@endsection
