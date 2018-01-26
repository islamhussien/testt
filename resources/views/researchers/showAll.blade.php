@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default" style="overflow: scroll;">
                <div class="panel-heading">{{trans('showAll.OfferedOrders')}}</div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>{{trans('showAll.title')}}</th>
                            <th>{{trans('showAll.specialist')}}</th>
                            <th>{{trans('showAll.details')}}</th>
                            <th>{{trans('showAll.file')}}</th>
                            <th>{{trans('showAll.phone')}}</th>
                            <th>{{trans('showAll.Email')}}</th>
                            <th>{{trans('showAll.deadline')}}</th>
                            <th>{{trans('showAll.researcherCount')}}</th>
                            <th>{{trans('showAll.moqPayment')}}</th>
                            <th>{{trans('showAll.hourePrice')}}</th>
                            <th>{{trans('showAll.houresCount')}}</th>
                            <th>{{trans('showAll.docType')}}</th>
                            <th>{{trans('showAll.createdAt')}}</th>
                            <th>{{trans('showAll.operation')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=0;?>
                        @foreach($questions as $key => $value)
                        <tr>
                            <td>
                                <?php
                                  $i++;
                                ?>
                                {{$questions[$key][0]['title']}}
                            </td>
                            <td>
                                {{$questions[$key][0]['specialist']}}
                            </td>
                            <td>
                                {{$questions[$key][0]['details']}}
                            </td>
                            <td>
                                <img src="{{asset('/file/'.$questions[$key][0]['file'])}}" style="width: 50px;">
                            </td>
                            <td>
                                {{$questions[$key][0]['phone']}}
                            </td>
                            <td>
                                {{$questions[$key][0]['Email']}}
                            </td>
                            <td>
                                {{$questions[$key][0]['dead_line']}}
                            </td>
                            <td>
                                {{$questions[$key][0]['researcherCount']}}
                            </td>
                            <td>
                                {{$questions[$key][0]['moqPayment']}}
                            </td>
                            <td>
                                {{$questions[$key][0]['hourePrice']}}
                            </td>
                            <td>
                                {{$questions[$key][0]['houresCount']}}
                            </td>
                            <td>
                                {{$questions[$key][0]['docType']}}
                            </td>
                            <td>
                                {{$questions[$key][0]['created_at']}}
                            </td>

                            <td>
                                <a href="/approval/{{$questions[$key][0]['id']}}/{{$i}}" class="btn btn-default">{{trans('showAll.accept')}}</a>
                                <a href="/refuse/{{$questions[$key][0]['id']}}/{{$i}}" class="btn btn-default">{{trans('showAll.refuse')}}</a>
                            </td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
