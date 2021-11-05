<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    public function updatePhoto(Request $request)
    {
        $user= Auth::user();

        $gambar = $request->file('gambar');

        
        if (isset($gambar)){
            if (isset(Auth::user()->gambar)){
                $this->removeFile(Auth::user()->gambar);
            }
            $store_image =$this->uploadFile( $request->file('gambar'));
            $updated     = User::findOrFail($user->id)->update(['gambar' => $store_image]);
            if ($updated){
                return redirect()->back()->with('berhasil-upload', 'gambar berhasil di upload');
            }else {
                return redirect()->back()->with('gagal-upload', 'gagal upload gambar');
            }
        }else{
            return redirect()->back()->with('gagal-upload', 'gagal upload gambar');
        }
    }


    public function uploadFile($file)
    {

        $img = $file;
        $newName = uniqid() . '.' . $img->getClientOriginalExtension();

        $img->move('file/photoProfil', $newName);

        return $newName;
    }

    public function removeFile($name)
    {
        if (file_exists('file/photoProfil/' . $name)) {
            unlink('file/photoProfil/' . $name);
        }
    }

}
