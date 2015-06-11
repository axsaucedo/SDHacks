<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateApplicationRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return \Auth::check();
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
            'major' => 'required',
            'phone' => 'required',
            'school' => 'required',
            'gender' => '',
            'dob' => 'required',
            'github' => 'url',
            'linkedin' => 'url',
            'website' => 'url',
            'allergies' => '',
            'traveling' => 'boolean',
            'reimbursement' => 'boolean',
            'busing' => 'boolean'
        ];
	}

}
