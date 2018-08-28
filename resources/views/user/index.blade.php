@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <ul>
                @foreach($users as $user)
                <li>
                    <div>{{$user->name}}</div>
                    <ol>
                    @foreach($user->projects as $project)
                    <li>{{$project->name}}</li>
                    @endforeach
                    </ol>
                </li>
                @endforeach
            </ul>
        </div>
    </div>

@endsection

