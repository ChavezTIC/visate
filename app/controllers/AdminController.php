<?php

class AdminController extends BaseController {

	public function index()
	{
		$solicitudes = DB::table('datos_principal')
		->join('pasaporte', 'pasaporte.datos_principal_fk', '=', 'datos_principal.id')
		->get();

		return View::make('admin')
		->with('solicitudes',$solicitudes);	
	}

	public function solicitud($codigo)
	{
		$sol = DB::table('datos_principal')->where('codigo_formulario', '=', $codigo)->first();

		$solicitud = DB::table('datos_principal')
		->join('datos_contacto', 'datos_contacto.datos_principal_fk', '=', 'datos_principal.id')
		->join('pasaporte', 'pasaporte.datos_principal_fk', '=', 'datos_principal.id')
		->join('financiamiento', 'financiamiento.id', '=', 'datos_principal.id')
		->join('ultima_visita', 'ultima_visita.id', '=', 'datos_principal.id')
		->join('familia', 'familia.datos_principal_fk', '=', 'datos_principal.id')
		->join('ocupacion', 'ocupacion.datos_principal_fk', '=', 'datos_principal.id')
		->join('visita', 'visita.datos_principal_fk', '=', 'datos_principal.id')
		->join('seguridad', 'seguridad.datos_principal_fk', '=', 'datos_principal.id')
		->where('datos_principal.id', $sol->id)
		->first();

		return View::make('adminSolicitud')
		->with('solicitud',$solicitud);
	}

	public function destroy($id)
	{

		$Solicitud = Principal::find($id);
		$Solicitud->delete();
		$Solicitud = DatosContacto::find($id);
		$Solicitud->delete();
		$Solicitud = Pasaporte::find($id);
		$Solicitud->delete();
		$Solicitud = Financiamiento::find($id);
		$Solicitud->delete();
		$Solicitud = UltimaVisita::find($id);
		$Solicitud->delete();
		$Solicitud = Visita::find($id);
		$Solicitud->delete();
		$Solicitud = Familia::find($id);
		$Solicitud->delete();
		$Solicitud = Ocupacion::find($id);
		$Solicitud->delete();
		$Solicitud = Seguridad::find($id);
		$Solicitud->delete();

        Session::flash('message', 'Solicitud eliminada!');
        return Redirect::to('admin');
	}
}