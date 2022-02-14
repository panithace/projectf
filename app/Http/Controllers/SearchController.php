<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\Notification;
use Illuminate\Http\Request;
use Carbon\Carbon;
 
class SearchController extends Controller
{
        /**
         * Write code on Method
         *
         * @return response()
         */
        public function index()
        {
            $comparison = Carbon::now()->subDays(30);
      
            $cid = Notification::where('created_at', '<=', $comparison)->get();
        
            dd($cid);
        }
    }