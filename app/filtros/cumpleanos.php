<?php

class filtroCumpleanos{
	public function filter($ruta, $peticion, $fecha)
	{
		if (date('d/m')==$fecha) {
			return View::make('cumpleanos');
		}
	}
}