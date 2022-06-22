<?php

namespace App\Http\Controllers;

use App\Models\payment;
use App\Models\Rekening;
use Illuminate\Http\Request;
use App\Models\UserDetail;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $rek = Rekening::select('name', 'rekening')->get();
        $rekcount = Rekening::count();
        $paycount = payment::count();
        $statpayment = payment::join('user_details', 'user_details.id', '=', 'payments.id_user')->paginate(5);
        $verif = UserDetail::where('status', '=', 'Sudah diverifikasi')->count();
        $tolak = UserDetail::where('status', '=', 'Berkas Pendaftar Ditolak')->count();
        $pendaftar = UserDetail::where('id_role', '=', 2)->count();
        $userdetail = UserDetail::where('id_role', '=', 2)->paginate(5);
        $namalengkap = UserDetail::where('id', '=', Auth::id())->first();
        $pembayaran = Payment::where('id_user', '=', Auth::id())->first();
        return view('home', compact('rek'), 
        [
            'user' => 'asdasdas', 
            'userdetail' => $userdetail,
            'verif' => $verif,
            'tolak' => $tolak,
            'pendaftar' => $pendaftar,
            'rekcount' => $rekcount,  
            'statpayment' => $statpayment,
            'rek' => $rek,
            'namalengkap' => $namalengkap,
            'pembayaran' => $pembayaran,
            'paycount' => $paycount
        ]);
    }
    public static function status($status)
    {
        return UserDetail::where('id', Auth::id())
            ->where('status', $status)->pluck('status')->first();
    }
    public static function pesan($pesan)
    {
        return UserDetail::where('id', Auth::id())
        ->where('pesan', $pesan)->pluck('pesan')->first();
    }
    public static function payment_status($status)
    {
        return payment::where('id_user', Auth::id())
            ->where('payment_status', $status)->pluck('payment_status')->first();
    }
}
