<?php

namespace App\Http\Controllers;

use View;
use App\Company;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class CompanyController extends Controller
{
    public function create()
    {   
        if (Auth::check()) {

            return view('company/create');
        } else {

            $companies = Company::all();
            return View::make("welcome", array("companies" => $companies));            
        }
    }


    public function store(Request $request)
    {
        $companies = Company::all();

        if (Auth::check()) {
        	$data = [
                'company' => Input::get('dependencia'),
                'responsable1' => Input::get('responsable'),
                'tel1' => Input::get('telefono'),
                'email1' => Input::get('emailu'),
                'address' => Input::get('direccionu')
            ];
            $input = $request->all();
            Company::create($data);
            return View::make("admin/hello", array("companies" => $companies));
        } else {

            return View::make("welcome", array("companies" => $companies));               
        }
    }

    public function edit($id)
    {
        if (Auth::check()) {
        	$company = Company::findOrFail($id);
        	return view('company/edit')->withCompany($company);
        } else {

            $companies = Company::all();
            return View::make("welcome", array("companies" => $companies));                        
        }
    }

    public function update(Request $request, $id)
    {
        $companies = Company::all();

        if (Auth::check()) {
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
            return View::make("admin/hello", array("companies" => $companies));
        } else {

            return View::make("welcome", array("companies" => $companies));                           
        }
    }

    public function eliminar($id)
    {
        $companies = Company::all();

        if (Auth::check()) {

            $company = Company::findOrFail($id);
            $company->delete();

            return View::make("admin/hello", array("companies" => $companies));
        } else {

            return View::make("welcome", array("companies" => $companies));                           
        }
    } 
}