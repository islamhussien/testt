@extends('layouts.app')

@section('content')
        <div class="col-md-12">
            <div class="panel panel-default" style="overflow: scroll;">
                <div class="panel-heading">{{trans('showSelected.OfferedOrders')}}</div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <th>
                                {{trans('showSelected.title')}}
                            </th>
                            <th>
                                {{trans('showSelected.DeadLine')}}
                            </th>
                        </thead>
                        <tbody>
                        @foreach($questions as $key => $value)
                            <tr>
                                <td>
                                    {{$questions[$key][0]['title']}}
                                </td>
                                <td>
                                    {{$questions[$key][0]['dead_line']}}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection
