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
}

