@extends('layouts.app')

@section('content')

<ul>
    @foreach($projects as $project)
    <li>
        <div>{{$project->name}}</div>
        <ol>
        @foreach($project->users as $user)
        <li>{{$user->name}}</li>
        @endforeach
        </ol>
    </li>
    @endforeach
</ul>

@endsection