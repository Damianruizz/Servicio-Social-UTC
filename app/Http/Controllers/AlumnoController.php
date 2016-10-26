<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;
use App\Company;
use App\Alumno;
use Auth;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class AlumnoController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $companies = Company::all();
            $alumnos = Alumno::all();
            return View::make("admin/asignacion", array("companies" => $companies, "alumnos" => $alumnos));
        } else {

            $companies = Company::all();
            return View::make("welcome", array("companies" => $companies));
        }
    }

    public function show($id)
    {
        if (Auth::check()) {

            $company = Company::find($id);
            $alumnos = Company::find($id)->alumnos;
            return View::make("admin/showcompany", array("company" => $company, "alumnos" => $alumnos));
        } else {

            $companies = Company::all();
            return View::make("welcome", array("companies" => $companies));
        }
    }

    public function asignar($id)
    {   
        if (Auth::check()) {

            $company = Company::find($id);
            $alumnos = Alumno::where('company_id', '0')->get();
            return View::make("admin/asigalumno", array("company" => $company, "alumnos" => $alumnos));
        } else {

            $companies = Company::all();
            return View::make("welcome", array("companies" => $companies));            
        }
    }

    public function asignacion()
    {
        if (Auth::check()) {

            //Realizar asignacion de alumnos seleccionados        
            $cantidad = Input::get('cantidad');
            $company_id = Input::get('company_id');

            for ($counter=0; $counter < $cantidad; $counter++) { 

                if ($alumno = Input::get('id_alumno'.$counter)){
                    
                    $find_alumno = Alumno::findOrFail($alumno);

                    $find_alumno->company_id = $company_id;
                    $find_alumno->save();
                }            
            }
            
            $companies = Company::all();
            $alumnos = Alumno::all();
            return View::make("admin/asignacion", array("companies" => $companies, "alumnos" => $alumnos));
        } else {

            $companies = Company::all();
            return View::make("welcome", array("companies" => $companies));
        }
    }

    public function quitar($id)
    {   
        if (Auth::check()) {

            $alumno = Alumno::findOrFail($id);
            $alumno->company_id = "0";
            $alumno->save();

            $companies = Company::all();
            $alumnos = Alumno::all();
            return View::make("admin/asignacion", array("companies" => $companies, "alumnos" => $alumnos));
        } else {

            $companies = Company::all();
            return View::make("welcome", array("companies" => $companies));            
        }
    }
}
