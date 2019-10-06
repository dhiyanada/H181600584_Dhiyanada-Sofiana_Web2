<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Berital;
use app\KategoriBerita;
class BeritaController extends Controller
{
    public function index(){
      
        $listBerita=Berita::all(); 
        return view('berital.index',compact('listBerita'));
        
    }
    public function show($id){
        
        $Berita=Berita::find($id);
        return view('berits.show',compact('berita'));
    }
    public function create(){
        $kategoriBerita=KategoriBerita::pluck('nama','id');
        return view('berita.create', compact('kategoriBerita'));
    }
    public function store(Request $request){
        $input= $request->all();
            Berita::create($input);
        return redirect(route('berita.index'));
    }
}