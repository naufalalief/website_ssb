<?php

namespace App\Http\Controllers;

use App\Models\payment;
use App\Models\Rekening;
use Illuminate\Http\Request;
use App\Models\UserDetail;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //

    public function index()
    {
        $userdetail = UserDetail::where('id_role', '=', 2)->paginate(5);   
        return view('admin.list-pendaftar.verifikasi', compact('userdetail'));
    }

    public function notverifikasi(){
        $userdetail = UserDetail::where('id_role', '=', 2)->where('status', '=', 'Belum diverifikasi')->paginate(5);   
        return view('admin.list-pendaftar.belumverifikasi', compact('userdetail'));
    }

    public function download($l)
    {
        $book = UserDetail::where('id', $l)->firstOrFail();
        $pathToFile = public_path('storage/' . $book->file);
        return response()->download($pathToFile);
    }
    public function verifikasi($id)
    {
        UserDetail::where('id', $id)->update(
            [
                'status' => "Sudah diverifikasi",
            ]
        );

        payment::where('id_user', $id)->update(
            [
                'payment_status' => 'Belum Bayar',
            ]
        );

        return redirect()->back();
    }
    public function tolak($id)
    {
        UserDetail::where('id', $id)->update(
            [
                'status' => "Berkas pendaftar ditolak",
            ]
        );

        return redirect()->back();
    }
    public function rekening()
    {
        $rek = Rekening::all();

        return view('admin.list-rekening.rekening', compact('rek'));
    }
    public function addrekening()
    {
        return view('admin.add');
    }
    public function insert(Request $request)
    {
        DB::table('rekenings')->insert(
            [
                'name' => $request->input('name'),
                'rekening' => $request->input('rekening'),

            ]
        );
        return redirect('admin/rekening');
    }
    
    public function delete($id)
    {
        DB::table('rekenings')->where('id', $id)->delete();
        return redirect()->back();
    }
    
    public function acc()
    {
        $userdetail = UserDetail::where('status', 'sudah diverifikasi')->paginate(5);
        return view('admin.list-pendaftar.listacc', compact('userdetail'));
    }
    public function dec()
    {
        $userdetail = UserDetail::where('status', 'Berkas pendaftar ditolak')->paginate(5);
        return view('admin.list-pendaftar.listdec', compact('userdetail'));
    }

    public function payment()
    {
        $payment = payment::join('user_details', 'user_details.id', '=', 'payments.id_user')->paginate(5);

        return view('admin.pembayaran.pembayaran', compact('payment'));
    }
    public function paymentdownload($l)
    {
        $book = payment::where('id_user', $l)->firstOrFail();
        $pathToFile = public_path('storage/' . $book->file);
        // dd($pathToFile);    
        return response()->download($pathToFile);
    }
    public function payment_acc($id)
    {
        payment::where('id_user', $id)->update(
            [
                'payment_status' => "Bukti pembayaran telah diverifikasi",
            ]
        );

        return redirect()->back();
    }
    public function payment_dec($id)
    {
        payment::where('id_user', $id)->update(
            [
                'payment_status' => "Bukti pembayaran ditolak",
            ]
        );

        return redirect()->back();
    }
}
