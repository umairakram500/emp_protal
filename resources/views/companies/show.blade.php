@extends('layouts.app') 


@section('content')

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">{{$company->name}}</h1>
        <p class="lead text-muted">{{$company->description}}</p>
        <p>
            <a href="#" class="btn btn-primary my-2">Update Company</a>
            <a href="#" class="btn btn-secondary my-2">Add Task</a>
        </p>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">

            @foreach($company->projects as $project)
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <div class="card-body">
                        <h4 class="card-title">{{$project->name}}</h4>
                        <p class="card-text">{{$project->description}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">{{$project->users()->count()}} Users</small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

</section>

@endsection
