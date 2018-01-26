@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default" style="overflow: scroll;max-height: 550px;">
                <div class="panel-heading">{{trans('myProject.MyProjects')}}</div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>{{trans('myProject.title')}}</th>
                            <th>{{trans('myProject.specialist')}}</th>
                            <th>{{trans('myProject.details')}}</th>
                            <th>{{trans('myProject.file')}}</th>
                            <th>{{trans('myProject.phone')}}</th>
                            <th>{{trans('myProject.Email')}}</th>
                            <th>{{trans('myProject.deadline')}}</th>
                            <th>{{trans('myProject.researcherCount')}}</th>
                            <th>{{trans('myProject.moqPayment')}}</th>
                            <th>{{trans('myProject.hourePrice')}}</th>
                            <th>{{trans('myProject.houresCount')}}</th>
                            <th>{{trans('myProject.docType')}}</th>
                            <th>{{trans('myProject.createdAt')}}</th>
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
                                {{$questions[$key][0]['dead_line_user']}}
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
