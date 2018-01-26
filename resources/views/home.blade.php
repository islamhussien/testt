@extends('layouts.app')

@section('content')
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">{{trans('home.Dashboard')}}</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{trans('home.Youareloggedin')}}
                </div>
            </div>
        </div>
@endsection
