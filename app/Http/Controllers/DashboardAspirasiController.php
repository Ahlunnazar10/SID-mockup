<?php

namespace App\Http\Controllers;

use App\Mail\EmailAspirasiSelesai;
use App\Models\Aspirasi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class DashboardAspirasiController extends Controller
{
    public function index()
    {
        return view('dashboard.easpirasi.index', [
            'easpirasis' => Aspirasi::where('kategori', Auth::user()->id)->get(),
            'easpirasi' => Aspirasi::all()
        ]);
    }

    public function show(Aspirasi $aspirasi)
    {
        return view('dashboard.easpirasi.show', [
            "aspirasi" => $aspirasi
            // Route::get('/dashboard/beritadesa/{artikel:slug}');
        ]);
    }

    public function destroy(Aspirasi $aspirasi)
    {
        if ($aspirasi->ktp) {
            Storage::delete($aspirasi->ktp);
        }
        if ($aspirasi->pendukung) {
            Storage::delete($aspirasi->pendukug);
        }
        Aspirasi::destroy($aspirasi->id);

        $text = [
            'subject' => 'Aspirasi Terkirim!'
        ];
        Mail::to($aspirasi->email)->send(new EmailAspirasiSelesai($text));

        return redirect('/dashboard-easpirasi')->with('success', 'Aspirasi telah selesai diproses! Terimakasih');
    }
}
