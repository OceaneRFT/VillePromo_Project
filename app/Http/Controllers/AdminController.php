<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class AdminController extends Controller
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
    
    public function isAdmin()
    {
        if (Auth::user()->isadmin > 0) {
            return true;
        }
        return false;
    }

    public function isSeller()
    {
        if (Auth::user()->isseller = 0) {
            return true;
        }
        return false;
    }

    public function index()
    {
        if (!$this->isAdmin()) {
            return redirect()->route('homepage');
        }
        return view('admin');
       
    }


    public function get()
    {
        if (!$this->isAdmin()) {
            return redirect()->route('homepage');
        }
        if (empty($_POST)) {
            $POST = (array) json_decode(file_get_contents("php://input"));
        } else {
            $POST = $_POST;
        }


        $table = $POST["table"];
        $page = $POST['page'];
        $limit = $POST['nbr_ligne'];

        $query = DB::table($table)
            ->get();
        $total = DB::table($table)->count();

        $query = DB::table($table)
            ->offset(($limit * $page) - $limit)->limit($limit)->get();
        
        foreach ($query as $database) {
            $data[] = $database;
        }
        return json_encode(array("data" => $data, "total" => $total));
        die;
      
    }

    public function edit()
    {
        if (!$this->isAdmin()) {
            return redirect()->route('homepage');
        }
        if (empty($_POST)) {
            $POST = (array) json_decode(file_get_contents("php://input"));
        } else {
            $POST = $_POST;
        }

        $table = $POST["table"];
        //check erreur
        if (empty($POST)) {
            return json_encode(array("erreur" => true, "etat" => 0));
            die;
        }
        //update
        $toEdit = $POST['toEdit'];

        $etat = DB::table($table)
            ->where('id', $toEdit->id)
            ->update((array)$toEdit);

        return json_encode(array("erreur" => false, "etat" => $etat));
        die;
    }


    public function add()
    {
        if (!$this->isAdmin()) {
            return redirect()->route('homepage');
        }
        if (empty($_POST)) {
            $POST = (array) json_decode(file_get_contents("php://input"));
        } else {
            $POST = $_POST;
        }
        $table = $POST["table"];
        //check erreur
        if (empty($POST)) {
            return json_encode(array("erreur" => true, "etat" => 0));
            die;
        }
        //update
        $add = $POST['toAdd'];
        DB::table($table)->insert((array)$add);
        return json_encode(array("erreur" => false, "etat" => null));
        die;
    }


    public function delete()
    {
        if (!$this->isAdmin()) {
            return redirect()->route('homepage');
        }
        if (empty($_POST)) {
            $POST = (array) json_decode(file_get_contents("php://input"));
        } else {
            $POST = $_POST;
        }
        $table = $POST["table"];
        //check erreur
        if (empty($POST)) {
            return json_encode(array("erreur" => true, "etat" => 0));
            die;
        }
        //update
        $delete = $POST['toDelete'];  
        DB::table($table)->delete((array)$delete);
        $etat = DB::table($table)
            ->where('id', $delete->id)
            ->delete((array)$delete);

        return json_encode(array("erreur" => false, "etat" => $etat));
        die;
    }
}
