<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseFormatter;
use App\Models\Crew;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CrewController extends Controller
{
    //
    public function store(Request $request)
    {
        request()->validate([
            'name' => ['required'],
            'divisi' => ['required'],
            'phone' => ['required'],
            'photo' => ['required'],
        ]);

        $name = $request->name;
        $divisi = $request->divisi;
        $phone = $request->phone;
        $photo = $request->photo;

        $namePhoto = null;
        if ($request->has('photo')) {
            $file = $request->file('photo');
            $random = $name;
            $imageName = date('ymdHis') . $random;
            $extension = strtolower($file->getClientOriginalExtension());
            $namePhoto = $imageName . '.' . $extension;

            Storage::putFileAs('public/img/crew/', $file, $namePhoto);
        }


        $crew = new Crew();
        $crew->name = $name;
        $crew->divisi = $divisi;
        $crew->phone = $phone;
        $crew->photo = $namePhoto;
        $crew->save();
        return ResponseFormatter::success(null, 'Success');
    }
}
