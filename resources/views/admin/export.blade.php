@extends('layout')

@section('content')
    <div class="container mt-4">
        <h2>Export Users</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{ route('admin.export') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="columns">Select Columns:</label>
                @foreach($columnOptions as $column => $label)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="columns[]" value="{{ $column }}" id="{{ $column }}" {{ in_array($column, old('columns', [])) ? 'checked' : '' }}>
                        <label class="form-check-label" for="{{ $column }}">{{ $label }}</label>
                    </div>
                @endforeach
            </div>

            <div class="form-group">
                <label for="rows">Select Rows:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="rows" value="last" id="last" {{ old('rows') === 'last' ? 'checked' : '' }}>
                    <label class="form-check-label" for="last">Created at Last two days</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="rows" value="all" id="all" {{ old('rows') === 'all' ? 'checked' : '' }}>
                    <label class="form-check-label" for="all">All Users</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Export Users</button>
        </form>
    
    </div>
@endsection
