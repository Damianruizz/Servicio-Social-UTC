<?php

namespace App\Http\Controllers;

use View;
use App\Company;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class CompanyController extends Controller
{
    public function create()
    {
        return view('company/create');
    }

    public function store(Request $request)
    {
    	$data = [
            'company' => Input::get('dependencia'),
            'responsable1' => Input::get('responsable'),
            'tel1' => Input::get('telefono'),
            'email1' => Input::get('emailu'),
            'address' => Input::get('direccionu')
        ];
        $input = $request->all();
        Company::create($data);
        $companies = Company::all();
        return View::make("admin/hello", array("companies" => $companies));
    }

    public function edit($id)
    {
    	$company = Company::findOrFail($id);
    	return view('company/edit')->withCompany($company);
    }

    public function update(Request $request, $id)
    {
        $company = Company::findOrFail($id);
	    $data = [
            'company' => Input::get('dependencia'),
            'responsable1' => Input::get('responsable'),
            'tel1' => Input::get('telefono'),
            'email1' => Input::get('email'),
            'address' => Input::get('direccion')
        ];

	    $input = $request->all();

	    $company->fill($data)->save();
	    $companies = Company::all();
        return View::make("admin/hello", array("companies" => $companies));
    }

    public function eliminar($id)
    {
        $company = Company::findOrFail($id);

        $company->delete();

        $companies = Company::all();
        return View::make("admin/hello", array("companies" => $companies));
    } 
}