@extends('app')
@section('header')
@stop
@section('content')
    <h1>{{$stats->OrderID}} - {{$stats->CampaignName}}</h1>
    <div class="panel panel-primary" >
        <table class="table table-collapse table-condensed table-striped table-hover table-bordered tablesorter tablesorter-default">
            <thead>
            <tr class="small tablesorter-headerRow">
                <th class="bg-primary tablesorter-header tablesorter-headerUnSorted">Order ID</th>
                <th class="bg-primary tablesorter-header tablesorter-headerUnSorted">System ID</th>
                <th class="bg-primary tablesorter-header tablesorter-headerUnSorted">Type</th>
                <th class="bg-primary tablesorter-header tablesorter-headerUnSorted">Campaign Name</th>
                <th class="bg-primary tablesorter-header tablesorter-headerUnSorted">Client</th>
                <th class="bg-primary tablesorter-header tablesorter-headerUnSorted">Start Date</th>
                <th class="bg-primary tablesorter-header tablesorter-headerUnSorted">Geo</th>
            </tr>
            </thead>
            <tr>
                <td class="tg-yw4l">{{$stats->OrderID}}</td>
                <td class="tg-yw4l">{{$stats->SystemID}}</td>
                <td class="tg-yw4l">{{$stats->Type}}</td>
                <td class="tg-yw4l">{{$stats->CampaignName}}</td>
                <td class="tg-yw4l">{{$stats->Client}}</td>
                <td class="tg-yw4l">{{$stats->Start}}</td>
                <td class="tg-yw4l">{{$stats->Geo}}</td>
            </tr>
        </table>
        <div class="embed-responsive embed-responsive-16by9">

        </div>
        <div class="panel">
            {!! Form::open([ 'method'=>'PUT', 'action' => ['StatsController@update', $stats -> ID]]) !!}
            {{ method_field('PUT') }}
            <div class="form-group col-lg-12">
                {!! Form::label('Geo', 'Updated Geo:') !!}
                {!! Form::input('text','Geo', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group col-lg-12">
                {!! Form::hidden('ID', $stats->ID) !!}
                {!! Form::submit('Update Stats', ['class'=>'btn btn-primary form-control']) !!}
            </div>
            {!! Form::close() !!}
            <div class="col-lg-12">
                <a href="/stats/{{$intID}}"> <button class="btn btn-primary form-control">Next Entry</button></a>
            </div>
        </div>
    </div>

@stop
@section('footer')
@stop