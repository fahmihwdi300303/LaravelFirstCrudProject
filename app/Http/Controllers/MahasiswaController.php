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
            'name' => 'unique:mahasiswas',
            'nim' => 'unique:mahasiswas|max:9',
        ]);

        Mahasiswa::create([
            'name' => $request->input('name'),
            'nim' => $request->input('nim'),
            'address' => $request->input('address')],
        );
 
        return redirect()->back()->with('flash_message_success', 'Data successfully added');
    }
 
    public function update(Request $request, $id){
         $this->validate( $request, [
            'nim' => 'unique:mahasiswas|max:9',
        ]);
        $mahasiswa = Mahasiswa::find($id);
        $input = $request->all();
        $mahasiswa->fill($input)->save();
 
        return redirect()->back()->with('flash_message_success', 'Data Successfully updated');
    }
 
    public function delete($id)
    {
        $mahasiswas = Mahasiswa::find($id);
        $mahasiswas->delete();
  
        return redirect()->back()->with('flash_message_success', 'Data deleted');
    }
}