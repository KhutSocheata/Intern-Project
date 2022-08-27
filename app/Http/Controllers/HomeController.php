<?php
  
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Room;
use App\Models\Property;
 
use Illuminate\Http\Request;
  
class HomeController extends Controller
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
    public function index()
    {
        return view('frontend.welcome');
    } 
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        // dd('12345');

        $user = User::get()->count();
        $room = Room::get()->count();
        $property = Property::get()->count();
       

        return view('backend.layouts.dashboard', compact('room','property','user'));

    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function managerHome()
    {
        return view('agent.layouts.dashboard');
    }
}