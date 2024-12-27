<?php

namespace App\Http\Controllers;

use App\Models\PendaftarQurban;
use App\Models\RT;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PendaftarQurbanController extends Controller
{
    public function index()
    {
        $qurbans = PendaftarQurban::latest();

        if (request('search')) {
            $qurbans->where('nama', 'like', '%' . request('search') . '%')
                ->orWhere('jenis_hewan', 'like', '%' . request('search') . '%')
                ->orWhere('hak_pengqurban', 'like', '%' . request('search') . '%')
                ->orWhere('biaya', 'like', '%' . request('search') . '%')
                ->orwhere('status_pembayaran', 'like', '%' . request('search') . '%')
                ->orWhereHas('RTWarga', function ($query) {
                    $query->where('nomor_RT', 'like', '%' . request('search') . '%');
                });
        }

        return view(
            'admin.qurban.pendaftarQurban.dashboard',
            [
                'qurbans' => $qurbans->get()
            ]
        );
    }

    public function create()
    {
        return view('admin.qurban.pendaftarQurban.create', [
            'rt' => RT::all(),
        ]);
    }

    public function store(Request $request)
    {

        $tahun = date('Y');

        $nomorAntrian = PendaftarQurban::where('tahun', $tahun)->count() + 1;

        $qurban = new PendaftarQurban();

        $qurban->nama = $request->nama;
        $qurban->nomor_antrian = $nomorAntrian;
        $qurban->tahun = $tahun;
        $qurban->jenis_hewan = $request->jenis_hewan;
        $qurban->tujuan_pahala = $request->tujuan_pahala;
        $qurban->hak_pengqurban = $request->hak_pengqurban;
        $qurban->biaya = $request->biaya;
        $qurban->id_RT = $request->id_RT;
        $qurban->status_pembayaran = $request->status_pembayaran;
        $qurban->pembuatData_id = Auth::id();
        $qurban->save();

        session()->flash('success', 'Data Pendaftar qurban ' . $qurban->nama . ' ditambahkan');
        return redirect('/admin/qurban/pendaftarQurban')->with('success', 'Data Pendaftar Qurban Berhasil ditambahkan');
    }
    public function detail($id)
    {
        return view('admin.qurban.pendaftarQurban.detail', [
            'qurban' => PendaftarQurban::where('id_pendaftar_qurban', $id)->first()
        ]);
    }

    public function edit($id)
    {
        return view('admin.qurban.pendaftarQurban.edit', [
            'qurban' => PendaftarQurban::where('id_pendaftar_qurban', $id)->first(),
            'rt' => RT::all(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $qurban = PendaftarQurban::findOrfail($id);
        if ($qurban) {
            $qurban->update([
                'nama' => $request->nama,
                'jenis_hewan' => $request->jenis_hewan,
                'tujuan_pahala' => $request->tujuan_pahala,
                'hak_pengqurban' => $request->hak_pengqurban,
                'biaya' => $request->biaya,
                'id_RT' => $request->id_RT,
                'status_pembayaran' => $request->status_pembayaran
            ]);
        }
        session()->flash('success', 'Data pendaftar qurban berhasil diubah');

        return redirect()->route('pendaftarQurban.index');
    }

    public function delete($id)
    {
        $qurban = PendaftarQurban::findOrfail($id);
        if ($qurban) {
            $qurban->delete();
        }

        session()->flash('success', 'Data pendaftar qurban berhasil dihapus');
        return redirect()->route('pendaftarQurban.index');
    }
}
