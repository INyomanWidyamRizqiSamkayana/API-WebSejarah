<?php


namespace App\Http\Controllers;
use App\Models\History;
use App\Models\Kategori;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $History = new History;

        if (isset($_GET['s'])) {
            $s = $_GET['s'];
            $History = $History->where('sjrh_nama', 'like', "%$s%");
        }

        if (isset($_GET['kategori_id']) && $_GET['kategori_id'] != '') {
            $History = $History->where('kategori_id', $_GET['kategori_id']);
        }

        $History = $History->get();
        $Kategori = Kategori::all();

        return view('home', compact( 'History', 'Kategori'));
    }
    
    function detail(){
        return view('detail');
    }
}
