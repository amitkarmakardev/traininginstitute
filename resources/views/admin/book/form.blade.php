<div class="control-group">
    {!! Form::label('category', 'Category', ['class' => 'control-label']) !!}
    <div class="controls">
        @if($errors->has('category'))
            @foreach($errors->get('category') as $error)
                <span class="validation-error-text"> &nbsp;&nbsp;&nbsp;&nbsp; - {{ $error }} </span>&nbsp;&nbsp;
            @endforeach
        @endif
        {!! Form::select('category', config('traininginstitute.book.categories'), null, ['class' => 'span8']) !!}
    </div>
</div>
<div class="control-group">
    {!! Form::label('isbn', 'ISBN', ['class' => 'control-label']) !!}
    <div class="controls">
        {!! Form::text('isbn', null, ['class' => 'span8']) !!}
        @if($errors->has('isbn'))
            @foreach($errors->get('isbn') as $error)
                <span class="help-inline"> - {{ $error }} </span>
            @endforeach
        @endif
    </div>
</div>
<div class="control-group">
    {!! Form::label('title', 'Title', ['class' => 'control-label']) !!}
    <div class="controls">
        {!! Form::text('title', null, ['class' => 'span8']) !!}
        @if($errors->has('title'))
            @foreach($errors->get('title') as $error)
                <span class="help-inline"> - {{ $error }} </span>
            @endforeach
        @endif
    </div>
</div>
<div class="control-group">
    {!! Form::label('author_details', 'Author Details', ['class' => 'control-label']) !!}
    <div class="controls">
        {!! Form::textarea('author_details', null, ['class' => 'span8', 'rows' => 5]) !!}
        @if($errors->has('author_details'))
            @foreach($errors->get('author_details') as $error)
                <span class="help-inline"> - {{ $error }} </span>
            @endforeach
        @endif
    </div>
</div>
<div class="control-group">
    {!! Form::label('publish_year', 'Publish Year', ['class' => 'control-label']) !!}
    <div class="controls">
        {!! Form::text('publish_year', null, ['class' => 'span3']) !!}
        @if($errors->has('publish_year'))
            @foreach($errors->get('publish_year') as $error)
                <span class="help-inline"> - {{ $error }} </span>
            @endforeach
        @endif
    </div>
</div>
<div class="control-group">
    {!! Form::label('location', 'Location', ['class' => 'control-label']) !!}
    <div class="controls">
        {!! Form::select('location', $location_options, null, ['class' => 'span8']) !!}
        @if($errors->has('location'))
            @foreach($errors->get('location') as $error)
                <span class="help-inline"> &nbsp;&nbsp;&nbsp;&nbsp; - {{ $error }} </span>&nbsp;&nbsp;
            @endforeach
        @endif
    </div>
</div>
<div class="control-group">
    {!! Form::label('almirah_no', 'Almirah No', ['class' => 'control-label']) !!}
    <div class="controls">
        {!! Form::text('almirah_no', null, ['class' => 'span2']) !!}
        @if($errors->has('almirah_no'))
            @foreach($errors->get('almirah_no') as $error)
                <span class="help-inline"> - {{ $error }} </span>
            @endforeach
        @endif
    </div>
</div>
<div class="control-group">
    {!! Form::label('shelf_no', 'Shelf No', ['class' => 'control-label']) !!}
    <div class="controls">
        {!! Form::text('shelf_no', null, ['class' => 'span2']) !!}
        @if($errors->has('shelf_no'))
            @foreach($errors->get('shelf_no') as $error)
                <span class="help-inline"> - {{ $error }} </span>
            @endforeach
        @endif
    </div>
</div>
<div class="control-group">
    {!! Form::label('rack_no', 'Rack No', ['class' => 'control-label']) !!}
    <div class="controls">
        {!! Form::text('rack_no', null, ['class' => 'span2']) !!}
        @if($errors->has('rack_no'))
            @foreach($errors->get('rack_no') as $error)
                <span class="help-inline"> - {{ $error }} </span>
            @endforeach
        @endif
    </div>
</div>
