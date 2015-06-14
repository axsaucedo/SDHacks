<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateApplicationRequest;
use App\Application;

use Illuminate\Http\Request;

class ApplicationsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('apply.application');
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateApplicationRequest $request
     * @return Response
     */
	public function store(CreateApplicationRequest $request)
	{
        $profile_fields = ['major', 'phone', 'school', 'gender', 'dob', 'github', 'linkedin', 'website', 'allergies'];

        // Extract profile fields from request
		$profile_input = $request->only($profile_fields);

        // Update user profile
        \Auth::user()->update($profile_input);

        // Extract application fields from request
        $app_input = $request->except($profile_fields);
        $app_input['user_id'] = \Auth::id();

        // Create new application for user
        Application::create($app_input);

        return view('apply.success');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
