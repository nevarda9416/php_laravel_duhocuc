<?php
namespace App\Http\Controllers\Admin;
use App\Core\Controllers\Controller;
use App\Helpers\Activity;
use App\Core\Models\Category;
use App\Core\Models\Posts;
use App\Core\Models\User;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard
     * @return view
     */
    public function index()
    {
        $category_count = Category::count();
        $post_count = Posts::count();
        $user_count = User::count();
        $activities = Activity::listLog(0, 10);
        return view('admin.dashboard', compact(
            'category_count',
            'post_count',
            'user_count',
            'activities'
        ));
    }
}
