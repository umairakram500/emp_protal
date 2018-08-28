@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12" >

            @if(!isset($company->id))
            {{-- ON Create Company --}}
            {{ Form::open(['route' => 'companies.store']) }}
            
            @else
            {{-- On Update Company --}}
            {{ Form::model($company, array('route' => ['companies.update', $company->id], 'method' => 'PUT')) }}
            @endif

            <div class="form-group">
                {{Form::label('name', 'Company Name')}}
                {{Form::text('name', null, ['class' => 'form-control'])}}
                @if ($errors->has('name'))
                    <div class="alert alert-danger"> {{$errors->first('name')}} </div>
                @endif
            </div>
            <div class="form-group">
                {{Form::label('description', 'Description')}}
                {{Form::textarea('description', null, ['class' => 'form-control', 'rows'=>3])}}
                @if ($errors->has('description'))
                    <div class="alert alert-danger"> {{$errors->first('description')}} </div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

            {{ Form::close() }}
            </div>
        </div>
    </div>

    

@endsection

