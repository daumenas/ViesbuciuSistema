<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\review;

class ReviewController extends Controller
{
    public function saveRating($rating, $hotelName){

        DB::table('review')->insert(['hotelName' => $hotelName, 'rating' => $rating]);
        return redirect('hotels');
    }
}
