
@extends('layouts.app1')

@section('content')
        {{--<button type="button" class="btn btn-info"><a href="viewresearch/{{$order->id}}">Order details</a></button>--}}
        @if(count($errors)>0)
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        @endif
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background: grey;">{{trans('qhome.makeQuestion')}}</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" style="max-width: 95%;margin: 0px auto;" action="/question" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="specilaization">{{trans('qhome.Specilaization')}}</label>
                                    <select name="specilaization" class="col-md-4 form-control">
                                        <option value="Engineering" selected>{{trans('qhome.Engineering')}}</option>
                                        <option value="Biology">{{trans('qhome.Biology')}}</option>
                                        <option value="Philosophy">{{trans('qhome.Philosophy')}}</option>
                                        <option value="Science">{{trans('qhome.Science')}}</option>
                                        <option value="Medeicine">{{trans('qhome.Midicine')}}</option>
                                    </select>

                                </div>
                                <div class="col-md-offset-2 col-md-5">
                                    <label for="title">{{trans('qhome.Title')}}</label>
                                    <input type="text" class="form-control" name="title" id="title">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="file">{{trans('qhome.file')}}</label>
                                    <input type="file" id="file" name="file" class="form-control" >
                                </div>

                                <div class="col-md-offset-2 col-md-5">
                                    <label>{{trans('qhome.yourEmail')}}</label>
                                    <input id="email" type="email" class="form-control"  name="email" placeholder="Enter email" >
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-5">
                                <label>{{trans('qhome.yourPhone')}}</label>
                                <input id="phone" type="text" class="form-control"  name="phone"
                                       placeholder="Enter phone" >

                                </div>
                                <div class="col-md-offset-2 col-md-5">
                                    <label>{{trans('qhome.yourdeadline')}}</label>
                                    <input type="date" class="form-control" name="date">

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <label>{{trans('qhome.numberofreshecher')}}</label>
                                    <select name="num_researcher" class="form-control">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>

                                <div class="col-md-offset-2 col-md-5">
                                    <label>{{trans('qhome.Priceoffulltimeproject')}}</label>
                                    <input id="fullpayment" type="number" class="form-control"  name="fullpayment"
                                           placeholder="Enter fullpayment" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                <label>{{trans('qhome.houre')}}</label>
                                    <input id="payment_byhour" type="number" class="form-control"  name="payment_byhour"
                                       placeholder="Enter payment_hour_by $" >
                                </div>
                                <div class="col-md-offset-2 col-md-5">
                                <label>{{trans('qhome.houresProject')}}</label>
                                    <input id="payment_byhour1" type="number" class="form-control"  name="hours"
                                           placeholder="How many houres of project" >
                                </div>
                            </div>
                            <label>{{trans('qhome.typeOfDucoment')}}</label>
                            <div class="row">

                                <div class="col-md-6">
                                    <input type="checkbox" name="ducoment" value="powerpoint">{{trans('qhome.powerPoint')}}<br>
                                    <input type="checkbox" name="ducoment" value="video">{{trans('qhome.Video')}}
                                </div>
                            </div>
                            <div>
                                <label for="detail">{{trans('qhome.Detail')}}</label>
                                <textarea rows="8" id='article-ckeditor' class="form-control" placeholder="Enter detail" name="detail" id="detail">
                                    </textarea>
                            </div>
                            <button class="btn btn-primary">{{trans('qhome.Add')}}</button>

                        </form>

                    </div>
                </div>
            </div>
@endsection