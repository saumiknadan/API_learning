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

    // PUT api for update data
    function update(Request $request)
    {
        $device = Device::find($request->id);
        $device->name = $request->name;
        $device->member_id = $request->member_id;

        $result = $device->save();

        if($result)
        {
            return ["Result"=>"Data has been updated successfully"];
        }
        else
        {
            return ["Result"=>"Data update failed"];
        }
    }

    // search element from the database
    function search($name)
    {
        // for search with exact name
        // return Device::where('name',$name)->get();

        // for search with any letter or group of letter
        return Device::where('name','like','%'.$name.'%')->get();

    }

    function delete($id)
    {
        $device = Device::find($id);
        $result = $device->delete();
        if($result)
        {
            return ["Result"=>"Data has been deleted successfully".$id];
        }
        else
        {
            return ["Result"=>"Data deleted failed"];
        }
    }
}


