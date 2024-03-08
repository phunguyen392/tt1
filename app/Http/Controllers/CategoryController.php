<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
        public function index()
    {
        $items = Category::query()->paginate();
        $params = 
            [
                 'items' => $items,
            ];
        return view('admin.categories.index',$params);

      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $items = $request->all();
        $items = new Category();
        $items->name = $request->name;
        $items->description = $request->name;
        $items->status = $request->status;
        try
        {
            $items->save();
            return redirect()->route('categories.index');
        }
        catch(QueryException $e)
        {
            Log::error($e->getMessage());
            return redirect()->route('categories.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $items = Category::findOrFail($id);
        $params =
        [
            'items' => $items,
        ];
        return view ('admin.categories.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
