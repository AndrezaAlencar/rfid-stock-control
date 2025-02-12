<?php

namespace App\Http\Controllers;

use OpenApi\Annotations as OA;
use Illuminate\Http\Request;

class TransationController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/transactions",
     *     summary="Listar todas as transações",
     *     @OA\Response(
     *         response="200",
     *         description="Lista de transações",
     *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Transaction"))
     *     )
     * )
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
