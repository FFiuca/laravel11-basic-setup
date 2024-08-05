<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Forms\Anime\AnimeForm;
use App\Functions\Anime\AnimeBase;
use Exception;
use Illuminate\Validation\ValidationException;

class AnimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $form=null;
        $data = $request->input('data');
        try{
            $form = (new AnimeForm)->add($data);
            if($form->valid()==false)
                throw new Exception('error');

            $data = (new AnimeBase())->add($data);
        }catch(ValidationException $e){
            return response()->json([
                'status' => 400,
                'data' => $form->getMessageBag()
            ], 400);
        }catch(Exception $e){
            return response()->json([
                'status' => 500,
                'data' => $e->getMessage()
            ], 500);
        }

        return response()->json($data, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try{
            $form = (new AnimeForm)->detail(['id'=> $id]);
            if($form->valid()==false)
                throw new Exception('error');

            $data = (new AnimeBase())->detail($id);
        }catch(ValidationException $e){
            return response()->json([
                'status' => 400,
                'data' => $form->getMessageBag()
            ], 400);
        }catch(Exception $e){
            return response()->json([
                'status' => 500,
                'data' => $e->getMessage()
            ], 500);
        }

        return response()->json($data, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->input('data');
        $form = null;
        try{
            $form = (new AnimeForm)->update(['id'=> $id, ...$data]);
            if($form->valid()==false)
                throw new Exception('error');

            $data = (new AnimeBase())->update($id, $data);
        }catch(ValidationException $e){
            return response()->json([
                'status' => 400,
                'data' => $form->getMessageBag()
            ], 400);
        }catch(Exception $e){
            return response()->json([
                'status' => 500,
                'data' => $e->getMessage()
            ], 500);
        }

        return response()->json($data, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $form = null;
        $data = null;
        try{
            $form = (new AnimeForm)->delete(['id'=> $id]);
            if($form->valid()==false)
                throw new Exception('error');

            $data = (new AnimeBase())->delete($id);
        }catch(ValidationException $e){
            return response()->json([
                'status' => 400,
                'data' => $form->getMessageBag()
            ], 400);
        }catch(Exception $e){
            return response()->json([
                'status' => 500,
                'data' => $e->getMessage()
            ], 500);
        }

        return response()->json($data, 200);
    }

    public function updateCountStar(Request $request, string $id){
        $data = null;
        try{

        }catch(Exception $e){
            return response()->json([
                'status' => 500,
                'data' => $e->getMessage()
            ], 500);
        }

        return response()->json($data, 200);
    }

}
