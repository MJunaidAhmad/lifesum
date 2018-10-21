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

                  <br/> {{\Illuminate\Support\Facades\Auth::user()->daily_calories}} KC


                        <div class="row">
                            <div class="column">
                            <a href="{{url('/item')}}" class="btn btn-success">Add Breakfast</a><br/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="column">
                                <a type="button" class="btn btn-success">Add Snacks</a><br/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="column">
                                <a type="button" class="btn btn-success">Add Dinner</a><br/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="column">
                                <a type="button" class="btn btn-success">Add Lunch</a><br/>
                            </div>
                        </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
