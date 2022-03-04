<?php

namespace App\Http\Controllers;

use App\Services\BugService;
use Illuminate\Http\Request;

class BugController extends Controller
{
    protected $bugService;

    public function __construct()
    {
        $this->bugService = new BugService();
    }

    public function index()
    {
    }

    public function add()
    {
        return view('bugs.add');
    }

    public function store(Request $request)
    {
        if (!$request->has('description', 'summary')) {
            return response()->json([
                'status'  => 'fail',
                'message' => 'missParam',
            ]);
        }

        if (!$this->bugService->store($request->description, $request->summary)) {
            return response()->json([
                'status'  => 'fail',
                'message' => 'fail',
            ]);
        }

        return response()->json(['status'  => 'success']);
    }
}
