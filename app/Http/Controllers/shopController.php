<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\loginAuth;
use App\room;

class shopController extends Controller
{
   
    public function index()
    {
        //dump(session()->get('user'));
        //dump(session('user'));
      /*  if(session('user') ==! null){
            return view('shop');
        }*/
        //return view('shop');
        $result = DB::table('rooms')
            ->select(
                'rooms.*',
                'rt.name as room_type'
            )
            ->where('rooms.status', '=', 1)
            ->leftJoin('rooms_type as rt', 'rooms.id_type', '=', 'rt.id')
            ->get();

            $count= (int)count($result);
            $pages= ceil($count/9);
            $limit= 9;
            $start=0;
            $page=((int)request()->page);
            if($page>$pages)$page=$pages;
            if(request()->page!==null && request()->page!=="0"){
                $start=($page*$limit)-$limit;
            }
       //  dd($result);
       $result = DB::table('rooms')
            ->select(
                'rooms.*',
                'rt.name as room_type'
            )
            ->where('rooms.status', '=', 1)
            ->leftJoin('rooms_type as rt', 'rooms.id_type', '=', 'rt.id')
            ->skip($start)->take($limit)
            ->get();

       return view('shop', ['results' => $result,
                            'pages' => $pages,
                            'selected' => $page]);
    }

    public function detail(room $room){
        $id=$room->id;
        $room1 = DB::table('rooms')
            ->select(
                'rooms.*',
                'rt.name as room_type'
            )
            ->where('rooms.id', '=', $id)
            ->leftJoin('rooms_type as rt', 'rooms.id_type', '=', 'rt.id')
            ->get();

            $charact = DB::table('room_characteristics')
            ->select(
                'c.*'
            )
            ->where('id_room', '=', $id)
            ->leftJoin('characteristics as c', 'c.id', '=', 'room_characteristics.id_characteristic')
            ->get();

            /*return view('detail', ['rooms' => $rooms,
                            'rooms_type' => $rooms_type]);*/
            return view('detail', ['rooms' => $room1,
                                    'characteristics'=> $charact]);
    }
  
}
