<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Redirector;
use PhpMqtt\Client\Facades\MQTT;


class ElderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    private function getElders(): array
    {
        return DB::select('select * , mac_adress as mac from bracelet');
    }

    function index()
    {
        return view('elderList', ['elders' => $this->getElders()]);
    }

    function edit()
    {
        return view('editProfiles', ['elders' => $this->getElders()]);
    }

    function emergencyCall()
    {
//        $mqtt = MQTT::connection();
//        $mqtt->subscribe('topic', function (string $topic, string $message) {
//            echo sprintf('Received QoS level 1 message on topic [%s]: %s', $topic, $message);
//        }, 1);
//        $mqtt->loop(true);

        $mqtt = MQTT::connection();
        $mqtt->publish('eldercare/testas/1', 'foo', 1);
        $mqtt->publish('eldercare/testas/2', 'bar', 2, true); // Retain the message
        $mqtt->loop(true);

        //MQTT::publish('testtopic/1', 'Hello World!');
        return redirect()->route('/elder-list');
    }
}
