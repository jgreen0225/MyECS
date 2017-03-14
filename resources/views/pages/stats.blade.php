@extends ('app')

@section ('content')
    <h1>Stats</h1>

    <hr/>


    <table class="table table-collapse table-condensed table-striped table-hover table-bordered tablesorter tablesorter-default">
        <thead>
        <tr class="small tablesorter-headerRow">
            <th class="bg-primary tablesorter-header tablesorter-headerUnSorted">Order ID</th>
            <th class="bg-primary tablesorter-header tablesorter-headerUnSorted">System ID</th>
            <th class="bg-primary tablesorter-header tablesorter-headerUnSorted">Type</th>
            <th class="bg-primary tablesorter-header tablesorter-headerUnSorted">Campaign Name</th>
            <th class="bg-primary tablesorter-header tablesorter-headerUnSorted">Client</th>
            <th class="bg-primary tablesorter-header tablesorter-headerUnSorted">Quantity</th>
            <th class="bg-primary tablesorter-header tablesorter-headerUnSorted">Opens</th>
            <th class="bg-primary tablesorter-header tablesorter-headerUnSorted">Opens %</th>
            <th class="bg-primary tablesorter-header tablesorter-headerUnSorted">ITOR</th>
            <th class="bg-primary tablesorter-header tablesorter-headerUnSorted">Clicks</th>
            <th class="bg-primary tablesorter-header tablesorter-headerUnSorted">Clicks Ordered</th>
            <th class="bg-primary tablesorter-header tablesorter-headerUnSorted">Clicks %</th>
            <th class="bg-primary tablesorter-header tablesorter-headerUnSorted">% Complete</th>
            <th class="bg-primary tablesorter-header tablesorter-headerUnSorted">Geo</th>
        </tr>
        </thead>
        @foreach($stats as $stat)
        <tr>
            <td class="text-center"><a href="/stats/{{$stat->id}}/edit">{{$stat->OrderID}}</a></td>
            <td class="text-center">{{$stat->SystemID}}</td>
            <td class="text-center">{{$stat->Type}}</td>
            <td class="text-center">{{$stat->CampaignName}}</td>
            <td class="text-center">{{$stat->Client}}</td>
            <td class="text-center">{{$stat->Quantity}}</td>
            <td class="text-center">{{$stat->Opens}}</td>
            <td class="text-center">{{$stat->oP}}</td>
            <td class="text-center">{{$stat->oN}}</td>
            <td class="text-center">{{$stat->Clicks}}</td>
            <td class="text-center">{{$stat->cO}}</td>
            <td class="text-center">{{$stat->cP}}</td>
            <td class="text-center">{{$stat->Complete}}</td>
            <td class="text-center">{{$stat->Geo}}</td>
        </tr>
    @endforeach
    </table>
    <hr/>


@stop
