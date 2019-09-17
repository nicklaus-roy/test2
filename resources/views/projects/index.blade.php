@extends('layouts.master')
@section('content')
    <a href = '/projects/add' class="btn btn-primary">Add Project</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Due Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->description }}</td>
                    <td>{{ $project->due_date }}</td>
                </tr>
            @endforeach
        </tbody>    
    </table>
@endsection