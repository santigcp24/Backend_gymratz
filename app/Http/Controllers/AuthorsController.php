<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;


class AuthorsController extends Controller
{
    
    public function index()
    {
        $authors = Author::all();
        return response() -> json($authors);
    }

   

   
    public function store(Request $request)
    {
        $author = new Author();
        $author -> name = $request -> name;
        if ($author -> save()){
            return response() -> json([
                "status"=> "success",
                "message"=> "Author created succesfully"
            ]);

        }else{
            return response() -> json([
                "status"=> "error",
                "message"=> "Author not created"
            ]);    
        }
    }

    
    public function show($id)
    {
        //
    }


    
    public function update(Request $request, $id)
    {
        $author = Author::find($id);
        if (!$author) {
            return response()->json([
                "status" => "error",
                "message" => "Author not found"
            ], 404);
        }
        
        $author->name = $request->input('name', $author->name);
        if ($author->save()) {
            return response()->json([
                "status" => "success",
                "message" => "Author updated successfully"
            ]);
        } else {
            return response()->json([
                "status" => "error",
                "message" => "Author could not be updated"
            ], 500);
        }
    }

    
    public function destroy($id)
    {
        $author = Author::find($id);
        if($author ->delete()){
            return response() ->json ([
                "status"=> "success",
                "message"=> "Deleted succesfully"
            ]);
        } else {
            return response() -> json([
                "status"=> "error",
                "message"=> "Not deleted"
            ]);    
        }
    }
}
