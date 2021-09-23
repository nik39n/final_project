<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResetController extends Controller
{
    public function reset()
    {
        foreach(['categories','products'] as $folder){
            Storage::deleteDirectory('categories');
            Storage::makeDirectory('categories');
    
            $files = Storage::disk('reset')->files($folder);
    
            foreach ($files as $file) {
                Storage::put($file, Storage::disk('reset')->get($file));
            }
        }
        return redirect()->route('index');

        

    }
}
