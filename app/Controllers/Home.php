<?php namespace App\Controllers;
use App\Models\MuebleriaModel;
class Home extends BaseController
{
	public function index()
	{
		return view('inicio');
	}

	public function agregarMuebles() {

		$data = array("mueble" => $_POST['mueble'],
					  "tipo_madera" => $_POST['tipo'],
					  "precio_venta" => $_POST['preciov'],
					  "precio_compra" => $_POST['precioc'],
					  "fecha" => $_POST['fecha'],
					);
		$model =  new MuebleriaModel();
		echo $exito = $model->agregarMueble($data);
	}

	public function obtenerTodosLosMuebles(){
		$model =  new MuebleriaModel();
		$datos = $model->obtenerTodosLosMueblesModel();

		echo json_encode($datos);
	}

	public function eliminaMueble(){
		$model =  new MuebleriaModel();
		$datos = array("id_mueble" => $_POST['idMueble']);
		echo $model->eliminaMueble($datos);

	}

	public function obtenerDatosUpdate() {
		$model =  new MuebleriaModel();
		$data = array('id_mueble' => $_POST['idMueble']);
		echo $model->obtenerDatosUpdate($data);
	}

	public function actualizarMueble() {
		$model =  new MuebleriaModel();
		$data = array('id_mueble' => $_POST['idMueble'],
					  'nombre' => $_POST['muebleu'],
					  'tipo' => $_POST['tipou'],
					  'costov' => $_POST['costovu'],
					  'costoc' => $_POST['costocu'],
					  'fecha' => $_POST['fechau']
					);
		echo $model->actualizarMueble($data);
	}	

	//--------------------------------------------------------------------

}
