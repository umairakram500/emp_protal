@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        {{__("test.name")}}
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul>
                        
                    @foreach($companies as $company)
                        <li><a href="{{route('companies.show', $company->id)}}">{{$company->name}}</a></li>
                    @endforeach
                    </ul>

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
