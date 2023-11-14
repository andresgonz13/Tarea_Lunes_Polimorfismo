<?php
	class convertir {
		public $tasa = 34.88;
		function convertirdolar($montobs) {
			return $montobs / $this -> tasa;
	}
	}
	class operaciones extends convertir{
		public function sumar ($cantidad) {
			return $cantidad + 100;
		}
		public function convertirdolar ($montobs) {
		return "Yo soy polimorfismo, Andres Gonzalez 30.343.149 T2-INF-1";
		}
	}