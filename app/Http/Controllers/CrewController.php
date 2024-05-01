<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseFormatter;
use App\Models\Crew;
use App\Models\Volunteer;
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
    public function store_cv(Request $request)
    {
        request()->validate([
            'name' => ['required'],
            'phone' => ['required'],
            'cv' => ['required', 'max:5120'],
        ]);

        $name = $request->name;
        $phone = $request->phone;
        $reason = $request->reason;
        $divisi = $request->divisi;
        $namecv = null;
        if ($request->has('cv')) {
            $file = $request->file('cv');
            $random = $name;
            $imageName = date('ymdHis') . $random;
            $extension = strtolower($file->getClientOriginalExtension());
            $namecv = $imageName . '.' . $extension;

            Storage::putFileAs('public/cv/', $file, $namecv);
        }


        $volunteer = new Volunteer();
        $volunteer->name = $name;
        $volunteer->cv = $namecv;
        $volunteer->phone = $phone;
        $volunteer->divisi = $divisi;
        $volunteer->reason = $reason;
        $volunteer->save();
        return ResponseFormatter::success(null, 'Success');
    }
}
