<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DoITCloudConsulting\Salesforce\Controllers\Salesforce;


class TestingSalesforce extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $salesforce = new Salesforce();

        $lead = $salesforce->getMeAllUpdated('Case', '08-04-2019', '30-04-2019');
        echo "<pre>";

        print_r($lead);

    }
}
