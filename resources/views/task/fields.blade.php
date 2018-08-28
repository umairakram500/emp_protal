@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="form-group">

    @php
    echo Form::label('name', 'Company Name'); 
    echo Form::text('name', null, ['class' => 'form-control']);
    if ($errors->has('name')) {
        print_r($errors->first('name'));
    }
    @endphp
</div>
<div class="form-group">
    @php 
    echo Form::label('description', 'Description'); 
    echo Form::textarea('description', null, ['class' => 'form-control', 'rows'=>3]);
    @endphp
</div>
<button type="submit" class="btn btn-primary">Submit</button>