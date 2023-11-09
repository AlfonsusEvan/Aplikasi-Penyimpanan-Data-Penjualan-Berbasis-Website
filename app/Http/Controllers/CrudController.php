<?php

namespace App\Http\Controllers;

use App\Models\motor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    public function index()
    {
        return view('Admin.AddData');
    }

    public function show(Request $request)
    {
       
        if($request->has('search')) {
            $motors = Motor::where('name','LIKE','%' .$request->search.'%')
            ->orWhere('tahun','LIKE','%' .$request->search.'%')
            ->orWhere('no_polisi','LIKE','%' .$request->search.'%')
            ->orWhere('tgl_pembelian','LIKE','%' .$request->search.'%')
            ->orWhere('status','LIKE','%' .$request->search.'%')
            ->orWhere('modal','LIKE','%' .$request->search.'%')->latest()->paginate(6);
        } else {
            $motors = Motor::latest()->paginate(6);
        }
        return view('Admin.main', compact('motors'));
        
    }

    public function detail($id)
    {
        $motor = Motor::where('id', $id)->first();
        return view('Admin.Detail.detail', compact('motor'));
    }
    
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tahun' => 'required',
            'no_polisi' => 'required',
            'tgl_pembelian' => 'required',
            'status' => 'required',
            'modal' => 'required',
            'deskripsi' => 'required',
            'tgl_terjual'=> 'nullable|date',    
            'hrg_jual' => 'nullable|integer',
            'keuntungan' => 'nullable|integer',
        ]);

        $image = round(microtime(true) * 1000).'-1'.str_replace(' ','-',$request->file('image')->getClientOriginalName());
        $request->file('image')->move(public_path('images'), $image);

        Motor::create([
            'image'         => $image,
            'name'          => $request->name,
            'tahun'         => $request->tahun,
            'no_polisi'     => $request->no_polisi,
            'tgl_pembelian' => $request->tgl_pembelian,
            'status'        => $request->status,
            'tgl_terjual'   => $request->tgl_terjual,
            'modal'         => $request->modal,
            'hrg_jual'      => $request->hrg_jual,
            'keuntungan'    => $request->keuntungan,
            'deskripsi'     => $request->deskripsi
        ]);

        $msg='Data Berhasil Disimpan!';
        return redirect('/dashboard')->with('Success', $msg);
    }

    public function edit($id){

        $data = Motor::findorfail($id);
        return view('Admin.Detail.update', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $ubah = Motor::findOrFail($id);

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('images'), $filename);
            $ubah->image = $filename;
        }

        $ubah->name                 = $request->name;
        $ubah->tahun                = $request->tahun;
        $ubah->no_polisi            = $request->no_polisi;
        $ubah->tgl_pembelian        = $request->tgl_pembelian;
        $ubah->status               = $request->status;
        $ubah->tgl_terjual          = $request->tgl_terjual;
        $ubah->modal                = $request->modal;
        $ubah->hrg_jual             = $request->hrg_jual;
        $ubah->keuntungan           = $request->keuntungan;
        $ubah->deskripsi            = $request->deskripsi;

        $ubah->save();
        return redirect('/dashboard')->with('updated','Data Berhasil DiUpdate');
        
    }

    public function delete($id)
    {
        $hapus = Motor::findOrFail($id);

        $file = public_path('/images/').$hapus->image;
        //cek jika ada gambar
        if (file_exists($file)){
            //Maka hapus file di folder Public/images
            @unlink($file);
        }
        //Hapus data di database
        $hapus->delete();
        return redirect('/dashboard')->with('Deletedd','Data berhasil di hapus');
    }  

}
