<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Mahasiswa; //add Mahasiswa Models
 
class MahasiswaController extends Controller
{
    public function index(){
        return view('show');
    }
 
    public function getMahasiswas(){
        $mahasiswas = Mahasiswa::all();
 
        return view('show')->with('mahasiswas', $mahasiswas);
    }
 
    public function save(Request $request){
        $this->validate( $request, [
            'name' => 'required',
            'nim' => 'required|unique:mahasiswas|max:9',
            'address' => 'required',
        ]);

        Mahasiswa::create([
            'name' => $request->input('name'),
            'nim' => $request->input('nim'),
            'address' => $request->input('address')],
        );
 
        return redirect()->back()->with('flash_message_success', 'Data Successfully added');
    }
 
    public function update(Request $request, $id){
        $mahasiswa = Mahasiswa::find($id);
        $input = $request->all();
        $mahasiswa->fill($input)->save();
 
        return redirect('/');
    }
 
    public function delete($id)
    {
        $mahasiswas = Mahasiswa::find($id);
        $mahasiswas->delete();
  
        return redirect('/');
    }
}