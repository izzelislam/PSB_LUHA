<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\Pembayaran;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PembayaranController extends Controller
{
    public function bayar(Request $request)
    {
        $gambar  = $request->file('gambar');
        $user_id = Auth::user()->id;
        
        if (isset($gambar)) {

            $prev = Pembayaran::where('users_id', $user_id)->first();
            $stored = $this->uploadFile($gambar);
            
            if(isset($prev)){
				if (isset($prev->gambar)){
					$this->deleteFile($prev->gambar);
					$prev->update(['gambar' => $stored]);				
				}else {
					Pembayaran::create([
						'users_id' => $user_id,
						'gambar'   => $stored,
						'status'   => 'belum-lunas'
					]);
				}
            }else {
                dd('not athorized ');
            }


            return redirect()->back()->with('berhasil-upload-pembayaran', 'Perhasil upload bukti pembayaran');
        } else {
            return redirect()->back()->with('gagal-upload-pembayaran', 'gagal upload bukti pembayaran');
        }
        
    }

    public function deleteFile($name)
    {
        if (file_exists('file/pembayaran/'.$name)){
            unlink('file/pembayaran/'.$name);
        }
    }

    public function uploadFile($file)
    {
        $newName = uniqid().'.'.$file->getClientOriginalExtension();
        $file->move('file/pembayaran', $newName);
        return $newName;
    }
}
