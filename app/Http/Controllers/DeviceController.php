<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    public function index()
    {
        return Device::all();
    }

    public function store(Request $request)
    {
        //create new device
        return Device::create($request->all());
    }

    public function show($id)
    {
        //return device for id
        return Device::findOrFail($id);
    }

    public function update(Request $requet, $id)
    {
        $device = Device::findOrFail($id);
        $device->update($requet->all());
        return $device;
    }
    public function destroy($id)
    {
        $device = Device::findOrFail($id);
        $device->delete();
        return response()->json(['message' => 'Device deleted successfully']);
    }
}
