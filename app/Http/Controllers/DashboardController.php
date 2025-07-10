<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\{
    User,
    Categoria,
    Produto

};

class DashboardController extends Controller
{
    //
    public function index() {

        $usuarios = User::all()->count();
        $usersData = User::select([
            DB::raw('YEAR(created_at) as ano'),
            DB::raw('COUNT(*) as total')
        ])
        ->groupBy('ano')
        ->orderBy('ano', 'asc')
        ->get();

        // preparar arrays
        foreach ($usersData as $users) {
            $ano[] = "'".$users->ano."'";
            $total[] = $users->total;
        }

        // formatar para chart.js
        $userLabel = "'Comparativo de cadastro de usuários'";
        $userAno = implode(',', $ano);
        $userTotal = implode(',', $total);

        //Gráfico 2 - Categória
        // $catData = Categoria::all();
        $catData = Categoria::with('produtos')->get();

        //Preparar array
        foreach ($catData as $cat) {
            # code...
            $catNome[] = "'".$cat->nome."'";
            // $catTotal[] = Produto::where('id_categoria', $cat->id)->count();
            $catTotal[] = $cat->produtos->count();
        }

        // formatar para chart.js
        $catLabel = implode(',', $catNome);
        $catTotal = implode(',', $catTotal);

        // dd($catLabel, $catTotal,  $userAno,  $userTotal);

        return view('admin.dashboard', compact('usuarios', 'userLabel', 'userAno', 'userTotal', 'catLabel', 'catTotal'));
    }
}
