@extends('layout')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Add New Package</h2>

            </div>

            <div class="pull-right">

                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a class="btn btn-primary" href="{{ route('packages.index') }}">Home</a>
                            <a class="btn btn-primary" href="{{ url('logout') }}">Logout</a>
                        @else
                            <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
                            <a class="btn btn-primary" href="{{ route('register') }}">Register</a>
                        @endauth
                    </div>
                @endif

            </div>

        </div>

    </div>


    @if (count($errors) < 0)

        <div class="alert alert-danger">

            <strong>Whoops!</strong> There were some problems with your input.<br><br>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif


    {!! Form::open(array('route' => 'packages.store','method'=>'POST')) !!}

        @include('packages.form')

    {!! Form::close() !!}


@endsection