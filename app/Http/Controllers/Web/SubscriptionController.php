<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function index()
    {
        $subscriptions = User::orderBy('id', 'DESC')->Paginate(20);

        return view('admin.subscriptions.index', [
            'subscriptions' => $subscriptions,
        ]);
    }

    public function show(Request $request, $name)
    {
        $subscription = User::where('name', $name)->first();

        if(!$subscription) {
            return redirect()->route('subscription')->with('error', 'Usuário não encontrado!');
        }

        return view('admin.subscriptions.show', [
            'subscription' => $subscription,
        ]);
    }

    public function create()
    {
        return view('admin.subscriptions.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function edit(Request $request, $name)
    {
        $subscription = User::where('name', $name)->first();

        if(!$subscription) {
            return redirect()->route('subscription')->with('error', 'Usuário não encontrado!');
        }

        return view('admin.subscriptions.edit', [
            'subscription' => $subscription,
        ]);
    }

}


