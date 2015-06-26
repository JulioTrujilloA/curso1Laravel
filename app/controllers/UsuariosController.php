<?php

class UsuariosController extends BaseController {

	/*
	 * Muestra la lista con todos los usuarios
	 */
	public function mostrarUsuarios()
	{
		$usuarios = Usuario::all();
		// var_dump($usuarios);

		// Con el método all() le estamos pidiendo al modelo de Usuario
		// que busque todos los registros contenidos en esa tabla y los devuelva en un Array

		return View::make('usuarios.lista', array('usuarios'=>$usuarios));

		// El método make de la clase View indica cual vista vamos a mostrar al usuario y también
		// pasa como parámetro los datos que queramos pasar a la vista.
		// En este caso le estamos pasando un array con todos los usuarios.
	}

}

/* End of file UsuariosController.php */
/* Location: .//C/wamp/www/Dropbox/pruebaslaravel/app/controllers/UsuariosController.php */