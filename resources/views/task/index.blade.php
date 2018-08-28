@extends('layouts.app') 


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="float-left">List of Companies</h1>
            <a href="{{route('companies.create')}}" class="btn btn-primary float-right ">Add New</a> @if(Session::has('message'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Success!</strong> {{ Session::get('message') }}
            </div>
            @endif

        </div>
    </div>

    
    <h1>Projects</h1>
    <div class="row">

        @foreach($companies as $company)

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{$company->name}}</h4>
                    <p class="card-text">{{$company->description}}</p>

                    {{ Form::open(['method' => 'DELETE', 'route' => ['companies.destroy', $company->id]]) }}

                    <a href="{{route('companies.show', [$company->id])}}" class="btn btn-primary">See Profile</a>
                    <a href="{{route('companies.edit', [$company->id])}}" class="btn btn-primary">Edit</a>

                    <button class="btn btn-primary" id="accDel">Delete</button>

                    {{ Form::close() }}
                </div>
                <h3>Project</h3>
                <ul class="list-group list-group-flush">
                    @foreach($company->projects as $project)
                    <li class="list-group-item">{{$project->name}}</li>
                    @endforeach
                </ul>

            </div>

        </div>

        @endforeach
    </div>


</div>

@endsection