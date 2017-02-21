<?php

namespace App\Http\Controllers;

use App\Models\Game\Furni;
use App\Models\Game\Room;
use App\Models\Game\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function users($query)
    {
        $dataset = User::where('username', 'LIKE', '%' . $query . '%')->get();
        return $dataset->toJson();
    }

    public function rooms($query)
    {
        $dataset = Room::where('name', 'LIKE', '%' . $query . '%')->get();
        return $dataset->toJson();
    }

    public function furnis($query)
    {
        $dataset = Furni::where('public_name', 'LIKE', '%' . $query . '%')->get();
        return $dataset->toJson();
    }
}
