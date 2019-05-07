<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use App\User;
class AutocompleteController extends Controller
{
  //  function index(){
  // return view('menialJobSeekers.frontpage');
  //  }

   // function fetch(Request $request){
   // 	dd($request->get('query'))
   // 	if($request->get('query')){
   // 		$query = $request->get('query');
   // 		$data = DB::table('users')
   //  ->where('state','like','%{query}%')
   //  ->get();
   //  $output = '<ul class="dropdown-menu" 
   //  style="display: block; 
   //  position: relative;">';
   //  foreach ($data as $row) {
   //  	$output.='<li><a href="">'. $row->state.'</a></li> '
   //  }

   // $output .='</ul>';
   // echo $output;
   //  ;
   // 	}
   // }
}
