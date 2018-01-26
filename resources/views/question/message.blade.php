
@extends('layouts.app1')

@section('content')
        {{--<button type="button" class="btn btn-info"><a href="viewresearch/{{$order->id}}">Order details</a></button>--}}
        @if(count($errors)>0)
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        @endif
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background: grey;">{{trans('message.approval')}}</div>

                    <div class="panel-body">
                        {{$message}}
                        <a class="btn btn-default" href="/question">{{trans('message.newOrder')}}</a>
                        <a class="btn btn-default" href="/">{{trans('message.Home')}}</a>
                    </div>
                </div>
            </div>
@endsection