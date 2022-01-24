@extends('layouts.app')

@section('contents')
    <a href="{{ url('/tasks/create') }}" class="btn btn-success"> Add New Task</a>

    <hr>
    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Details</th>
            <th>Category</th>
            <th>Deadline</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        @foreach ($tasks as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->details }}</td>
                <td>{{ $item->category1->name }}</td>
                <td>{{ $item->dateline }}</td>
                <td>{{ App\Enums\TaskStatus::getDescription($item->status) }}</td>
                <td>
                    <a href="{{ url("/tasks/$item->id/edit") }}" class="btn btn-warning btn-sm">Update</a>
                    
                    <form action="{{ url("/tasks/$item->id") }}" method="POST" onsubmit="return confirm('Do you really want to delete this task?');">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection