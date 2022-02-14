<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $table = 'notifications';
    use HasFactory;
    public function index()
    {
        $comparison = Carbon::now()->subDays(30);
  
        $cid = Notification::where('created_at', '<=', $comparison)->get();
    
        dd($cid);
    }
}
