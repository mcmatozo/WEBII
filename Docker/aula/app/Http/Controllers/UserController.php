<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\CursoRepository;
use App\Repositories\RoleRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{

    protected $repository;

    public function __construct() {
        $this->repository = new UserRepository();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->repository->selectAllWith(['role', 'curso']);
        return $data;
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
        $objCurso = (new CursoRepository())->findById($request->curso_id);
        $objRole = (new RoleRepository())->findById($request->role_id); 
        
        if(isset($objCurso) && isset($objRole)) {
            $obj = new User();
            $obj->nome = $request->nome;
            $obj->email = $request->email;
            $obj->password = $request->password;
            $obj->curso()->associate($objCurso);
            $obj->role()->associate($objRole);
            $this->repository->save($obj);
            return "<h1>Store - OK!</h1>";
        }
        return "<h1>Store - ERRO!</h1>";
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
