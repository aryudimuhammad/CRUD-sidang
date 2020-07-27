<?php

namespace App\Http\Controllers;

use PDF;
use App\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index()
    {
        $data = Crud::get();

        return view('welcome', compact('data'));
    }

    public function store(Request $request)
    {
        $data = new Crud;
        $data->nama = $request->nama;
        $data->nama1 = $request->nama1;
        $data->alamat = $request->alamat;
        if ($request->gambar) {
            $request->file('gambar')->move('images/profile/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        } else {
            $data->gambar = $data->gambar;
        }
        $data->save();

        return back();
    }

    public function edit($id)
    {
        $data = Crud::find($id);

        return view('formedit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Crud::find($id);
        $data->nama = $request->nama;
        $data->nama1 = $request->nama1;
        $data->alamat = $request->alamat;
        if ($request->gambar) {
            $request->file('gambar')->move('images/profile/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->update();
        } else {
            $data->gambar = $data->gambar;
        }
        $data->update();

        return redirect('/');
    }

    public function delete($id)
    {
        $data = Crud::find($id);
        $data->delete();

        return back();
    }

    public function cetak()
    {
        $data = Crud::get();

        $pdf = PDF::loadview('cetak', compact('data'));
        return $pdf->stream('cetak-pdf');
    }

    public function cetaks($id)
    {
        $data = Crud::where('id', $id)->get();

        $pdf = PDF::loadview('cetak', compact('data'));
        return $pdf->stream('cetak-pdf');
    }
}
