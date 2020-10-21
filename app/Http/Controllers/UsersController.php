<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, Hash};
use App\Models\{User, Lesson};
use App\Http\Resources\LessonCollection;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function login(Request $request){
        $user = User::where('email', $request->email)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            // Authentication passed...
            return response([
                'logged_in' => true,
                'user' => $user,
                'message'=> 'Welcome'
            ]);
        } else {
            return response([
                'logged_in' => false,
                'error' => 'The user you entered does not exist',
            ], 404);
        }
    }

    public function getLessons(Request $request){
        $lessons = new LessonCollection(Lesson::where('teacher_id', $request->teacher)->get());
        if ($lessons->isNotEmpty()) {
            // Authentication passed...
            return $lessons;
        } else {
            return response([
                'error' => 'You have not registered any lessons',
            ], 204);
        }
    }
}
