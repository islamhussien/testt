
@extends('layouts.app1')

@section('content')
        {{--<button type="button" class="btn btn-info"><a href="viewresearch/{{$order->id}}">Order details</a></button>--}}
        @if(count($errors)>0)
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        @endif
        <div class="panel-heading" style="background: #DDD;">{{trans('submit.makeQuestion')}}</div>
            <div class="panel-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>{{trans('submit.title')}}</th>
                            <th>{{trans('submit.specialist')}}</th>
                            <th>{{trans('submit.details')}}</th>
                            <th>{{trans('submit.file')}}</th>
                            <th>{{trans('submit.phone')}}</th>
                            <th>{{trans('submit.Email')}}</th>
                            <th>{{trans('submit.deadline')}}</th>
                            <th{{trans('submit.researcherCount')}}></th>
                            <th>{{trans('submit.moqPayment')}}</th>
                            <th>{{trans('submit.hourePrice')}}</th>
                            <th>{{trans('submit.houresCount')}}</th>
                            <th>{{trans('submit.docType')}}</th>
                            <th>{{trans('submit.createdAt')}}</th>
                            <th>{{trans('submit.operation')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                                <td>
                                    {{$question->title}}
                                </td>
                                <td>
                                    {{$question->specialist}}
                                </td>
                                <td>
                                    {{$question->details}}
                                </td>
                                <td>
                                    <img src="{{asset('/file/'.$question->file)}}" style="width: 50px;">
                                </td>
                                <td>
                                    {{$question->phone}}
                                </td>
                                <td>
                                    {{$question->Email}}
                                </td>
                                <td>
                                    {{$question->dead_line}}
                                </td>
                                <td>
                                    {{$question->researcherCount}}
                                </td>
                                <td>
                                    {{$question->moqPayment}}
                                </td>
                                <td>
                                    {{$question->hourePrice}}
                                </td>
                                <td>
                                    {{$question->houresCount}}
                                </td>
                                <td>
                                    {{$question->docType}}
                                </td>
                                <td>
                                    {{$question->created_at}}
                                </td>

                            <td>
                                <a href="/accepted/{{$question->id}}" class="btn btn-default">{{trans('submit.accept')}}</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
@endsection