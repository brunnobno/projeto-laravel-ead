<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $cacheKey = 'admin_dashboard_data';
        $content  = \Illuminate\Support\Facades\Cache::remember($cacheKey, 60 /*secs*/, function () use ($request) {
            return [
                'subscriptionsTwentyFour' => rand(100, 9999),
                'activeCoursesCount' => Course::where('active', true)->count(),
                'activeUserCount' => User::count(),
                'newSubscriptions' => User::where('created_at', '>=', date('Y-m-d', strtotime('-1 week')))
                    ->count(), //now()->subDays(7)->forma('Y-m-d')
            ];
        });

        return view('admin.dashboard.index', $content);
    }
}
