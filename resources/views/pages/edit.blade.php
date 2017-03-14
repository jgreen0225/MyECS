@extends('app')
@section('header')
@stop
@section('content')
    <h1>{{$stats->OrderID}} - {{$stats->CampaignName}}</h1>
    <div class="panel-primary" >
        <table class="table table-collapse table-condensed table-striped table-hover table-bordered tablesorter tablesorter-default">
            <thead>
            <tr class="small tablesorter-headerRow">
                <th class="bg-primary tablesorter-header tablesorter-headerUnSorted">Client</th>
                <th class="bg-primary tablesorter-header tablesorter-headerUnSorted">Start Date</th>
                <th class="bg-primary tablesorter-header tablesorter-headerUnSorted">Type</th>
                <th class="bg-primary tablesorter-header tablesorter-headerUnSorted">Open Rate</th>
                <th class="bg-primary tablesorter-header tablesorter-headerUnSorted">Open %</th>
                <th class="bg-primary tablesorter-header tablesorter-headerUnSorted">C/O</th>
                <th class="bg-primary tablesorter-header tablesorter-headerUnSorted">Complete</th>
                <th class="bg-primary tablesorter-header tablesorter-headerUnSorted">Geo</th>
            </tr>
            </thead>
            <tr>
                <td class="tg-yw4l">{{$stats->Client}}</td>
                <td class="tg-yw4l">{{$stats->Start}}</td>
                <td class="tg-yw4l">{{$stats->Type}}</td>
                <td class="tg-yw4l">{{$stats->oN}}</td>
                <td class="tg-yw4l">{{$stats->oP}}</td>
                <td class="tg-yw4l">{{$stats->cO}}</td>
                <td class="tg-yw4l">{{$stats->Complete}}</td>
                <td class="tg-yw4l">{{$stats->Geo}}</td>
            </tr>
        </table>
        <div class="panel">
            {!! Form::open([ 'method'=>'PUT', 'action' => ['StatsController@update', $stats -> id], 'target'=>'_blank']) !!}
            {{ method_field('PUT') }}
            <div class="form-group col-lg-12">
                {!! Form::label('Geo', 'Updated Geo:') !!}
                {!! Form::input('text','Geo', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group col-lg-12">
                {!! Form::hidden('id', $stats->id) !!}
                {!! Form::submit('Update Stats', ['class'=>'btn btn-primary form-control']) !!}
            </div>
            {!! Form::close() !!}
            <div class="col-lg-12">
                <a href="/stats/{{$intID}}"> <button class="btn btn-primary form-control">Next Entry</button></a>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="http://ecampaignstats.com/cp/index.php/campaigns/targeting/{{$stats->SystemID}}"></iframe>
                </div>
            </div>

        </div>


    </div>

@stop
@section('footer')
@stop