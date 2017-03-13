<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stats extends Model
{
    protected $table = 'Stats';

    protected $fillable = [
        'OrderID',
        'SystemID',
        'Type',
        'CampaignName',
        'Client',
        'Start',
        'Geo',
        'ID'
    ];


}
