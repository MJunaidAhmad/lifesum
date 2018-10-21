@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <div class="form-group">
                            <label for="sel1">Select Food:</label>
                            <select class="form-control" id="item">
                                <option value="0">None</option>
                               @foreach($items as $item)
                                <option value="{{$item->id}}"> {{$item->name . '(' . $item->calories . 'kc)'}}</option>
                                @endforeach
                            </select>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
