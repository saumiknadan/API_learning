<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
class DeviceController extends Controller
{
    function list()
    {
        return Device::all();
    }

    function para($id)
    {
        return Device::find($id);
    }

    function para2($id=null)
    {
        return $id?Device::find($id):Device::all();
    }


    // POST api: send data to database

    function add(Request $request)
    {
        $device = new Device;
        $device->name = $request->name;
        $device->member_id = $request->member_id;

        $result = $device->save();

        if($result)
        {
            return ["Result"=>"Data has been sent successfully"];
        }
        else
        {
            return ["Result"=>"Data sent failed"];
        }
    }
}

