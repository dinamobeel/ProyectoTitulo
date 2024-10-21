<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receta;
use Yajra\DataTables\Facades\DataTables;

class FarmaceuticoController extends Controller
{
    public function index(Request $request)
    {
        return view('farmaceutico');
    }

    public function ModuloA(Request $request)  // Asegúrate de incluir el parámetro aquí
    {
        if ($request->ajax()) {
            $data = Receta::with('paciente', 'medico')
                          ->select('id_receta', 'fecha_creacion', 'id_paciente', 'id_medico')
                          ->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('paciente', function($row) {
                    return $row->paciente->nombre . ' ' . $row->paciente->apellido;
                })
                ->addColumn('medico', function($row) {
                    return $row->medico->nombre;
                })
                ->addColumn('tiempo_solicitud', function($row) {
                    return now()->diffForHumans($row->fecha_creacion);
                })
                ->make(true);
        }
        return view('farmoduloA');
    }

    public function ModuloB(Request $request)  // Asegúrate de incluir el parámetro aquí
    {
        if ($request->ajax()) {
            $data = Receta::with('paciente', 'medico')
                          ->select('id_receta', 'fecha_creacion', 'id_paciente', 'id_medico')
                          ->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('paciente', function($row) {
                    return $row->paciente->nombre . ' ' . $row->paciente->apellido;
                })
                ->addColumn('medico', function($row) {
                    return $row->medico->nombre;
                })
                ->addColumn('tiempo_solicitud', function($row) {
                    return now()->diffForHumans($row->fecha_creacion);
                })
                ->make(true);
        }
        return view('farmoduloB');
    }

    public function ModuloC(Request $request)  // Asegúrate de incluir el parámetro aquí
    {
        if ($request->ajax()) {
            $data = Receta::with('paciente', 'medico')
                          ->select('id_receta', 'fecha_creacion', 'id_paciente', 'id_medico')
                          ->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('paciente', function($row) {
                    return $row->paciente->nombre . ' ' . $row->paciente->apellido;
                })
                ->addColumn('medico', function($row) {
                    return $row->medico->nombre;
                })
                ->addColumn('tiempo_solicitud', function($row) {
                    return now()->diffForHumans($row->fecha_creacion);
                })
                ->make(true);
        }
        return view('farmoduloC');
    }
}
