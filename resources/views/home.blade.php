@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <a href="{{route('product.create')}}" class="btn btn-success float-left">Create Produce</a>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <a href="{{route('product.list')}}" class="btn btn-success float-right">Produce List</a>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
