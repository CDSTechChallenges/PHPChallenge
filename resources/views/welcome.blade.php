@extends('/layouts.main')
@push('head')
<title>Todo List App</title>
@endpush

@section('main-section')
<div class="container">
    <div class="d-flex justify-content-between align-items-center my-5"> <!-- Margin 5-->
        <div class="h2">All Todos</div>
        <a href="{{route("todo.create")}}" class="btn btn-primary btn-lg">Add Todo</a>
    </div>
    <!-- {{print_r($todos)}} -->
    <table class="table table-stripped table-dark">
        <tr>
            <th>Task Name</th>
            <th>Description</th>
            <th>Due date</th>
            <th>Action</th>
        </tr>
        @foreach($todos as $todo)
            <tr valign="middle">
                <td>{{$todo->name}}</td>
                <td>{{$todo->work}}</td>
                <td>{{$todo->duedate}}</td>
                <td>
                    <a href="{{route("todo.edit",$todo->id)}}" class="btn btn-success btn-sm">Update</a>
                </td>
            </tr>
        @endforeach 
    </table>
</div>

@endsection