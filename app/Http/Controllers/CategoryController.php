<?php

namespace App\Http\Controllers;

use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;
use App\Classes\ApiResponseClass;

class CategoryController extends Controller
{
    /**
     * Create a new class instance.
     */
    public function __construct(private CategoryRepository $CategoryRepository)
    {
        //
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Categories=$this->CategoryRepository->index();
        return ApiResponseClass::sendResponse($Categories, 'All Categories retrieved successfully.');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
