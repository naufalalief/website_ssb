<?php

namespace App\Http\Controllers;

use App\Models\payment;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Notifications\Notifiable;

class UploadController extends Controller
{
    public function index()
    {
        $user = User::select()->where('email', Auth::user()->email)->first();
        $userdetail = UserDetail::select()->where('email', Auth::user()->email)->first();
        $file = UserDetail::where('file')->exists();

        return view('berkas', [
            'user' => $user,
            'userdetail' => $userdetail,
            'file' => $file
        ]);
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'nisn' => ['required', 'integer', 'max:10'],
            'namalengkap' => ['required', 'string', 'max:255'],
            'ttl' => ['required', 'date'],
            'alamat' => ['required', 'string'],
            'nohp' => ['required', 'string', 'min:11', 'max:12'],
            'akunig' => ['required', 'string'],
            'posisibermain' => ['required', 'string'],
            'riwayatssb' => ['required', 'string'],
            'prestasi' => ['required', 'string'],
            'tinggibadan' => ['required', 'integer'],
            'beratbadan' => ['required', 'integer'],
            'namaorangtua' => ['required', 'string'],
            'pekerjaanorangtua' => ['required', 'string'],
            'info ' => ['required', 'string'],
            'file' => ['required', 'max:5000'],


        ]);
    }

    public function save(Request $request)
    {
        $attributeNames = [
            'nisn' => 'NISN',
            'namalengkap' => 'Nama Lengkap',
            'ttl' => 'Tanggal Lahir',
            'alamat' => 'Alamat',
            'nohp' => 'No HP/Whatsapp',
            'akunig' => 'Akun Instagram',
            'posisibermain' => 'Posisi Bermain',
            'riwayatssb' => 'Riwayat SSB',
            'prestasi' => 'Prestasi',
            'tinggibadan' => 'Tinggi Badan',
            'beratbadan' => 'Berat Badan',
            'namaorangtua' => 'Nama Orang tua',
            'pekerjaanorangtua' => 'Pekerjaan Orang tua',
            'info' => 'Informasi',
            'file' => 'File',

        ];
        $validator = Validator::make($request->all(), [
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'nisn' => ['required', 'string', 'min:10'],
            'namalengkap' => ['required', 'string', 'max:255'],
            'ttl' => ['required', 'date'],
            'alamat' => ['required', 'string'],
            'nohp' => ['required', 'string', 'min:11', 'max:12'],
            'akunig' => ['required', 'string'],
            'posisibermain' => ['required', 'string'],
            'riwayatssb' => ['required', 'string'],
            'prestasi' => ['required', 'string'],
            'tinggibadan' => ['required', 'integer'],
            'beratbadan' => ['required', 'integer'],
            'namaorangtua' => ['required', 'string'],
            'pekerjaanorangtua' => ['required', 'string'],
            'info' => ['required', 'string'],
            'file' => ['required', 'max:5000'],
        ], [], $attributeNames);
        if ($validator->fails()) {
            return back()->withInput($request->input())->with('errors', $validator->messages()->all()[0])->withInput();
        }

        $userid = Auth::id();
        $file = $request->file('file');
        // dd($file);
        $ext = $file->getClientOriginalExtension();
        $filenameid = $userid . ' ~ ';
        $foldername = $filenameid . $request->namalengkap;
        $filename = $filenameid . $request->email . '.' . $ext;
        $upload = $file->storeAs('files/berkas/', $filename);
        // dd($upload);
        // $filelocation = $file->storeAs('public/storage/' . $foldername, $filename);
        // dd($filelocation);

        UserDetail::where('email', $request->email)
            ->update([
                'email' => $request->email,
                'nisn' => $request->nisn,
                'namalengkap' => $request->namalengkap,
                'ttl' => $request->ttl,
                'alamat' => $request->alamat,
                'nohp' => $request->nohp,
                'akunig' => $request->akunig,
                'posisibermain' => $request->posisibermain,
                'riwayatssb' => $request->riwayatssb,
                'prestasi' => $request->prestasi,
                'tinggibadan' => $request->tinggibadan,
                'beratbadan' => $request->beratbadan,
                'namaorangtua' => $request->namaorangtua,
                'pekerjaanorangtua' => $request->pekerjaanorangtua,
                'info' => $request->info,
                'file' => $upload,
                'status' => "Belum diverifikasi",
            ]);
        
        return redirect('home')->with('success', 'Berkas berhasil diupload!');
    }
    public function bukti(Request $request){
        $attributeNames = [
            'file' => 'File',
        ];
        $validator = Validator::make($request->all(), [
            'file' => ['required', 'max:5000'],
        ], [], $attributeNames);
        if ($validator->fails()) {
            return back()->withInput($request->input())->with('errors', $validator->messages()->all()[0])->withInput();
        }
        $user_id = Auth::id();
        $username = Auth::user()->email;
        $file = $request->file('file');

        $ext = $file->getClientOriginalExtension();
        $filenameid = $user_id . ' ~ ';
        $filename = $filenameid . $username. ' - Bukti Pembayaran'
         . '.' . $ext;
        $upload = $file->storeAs('files/payments', $filename);
        
        // payment::create([
        //     'payment_status' => "Belum diverifikasi",
        //     'file' => $upload,
        //     'id_user' => $user_id,
        // ]);
        payment::where('id_user', $user_id)
            ->update([
                'file' => $upload,
                'payment_status' => "Belum diverifikasi",
            ]);
        return redirect('home')->with('success', 'Berkas berhasil diupload!');
    }
}
