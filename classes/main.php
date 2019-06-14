<?php
	class Main{
		private $controller;
		private $action;
		private $request;

		public function __construct ($request){
			$this->request = $request;
			if ($this->request['controller'] == ""){
				$this->controller = 'home';
			} else {
				$this->controller = $this->request['controller'];
			}

			if ($this->request['action'] == ""){
				$this->action = 'index';
			} else {
				$this->action = $this->request['action'];
			}
		}

		public function createController() {
			// check class
			if (class_exists($this->controller)){
				$parents = class_parents($this->controller);
				// check extended
				if (in_array("Controller", $parents)) {
					if(method_exists($this->controller, $this->action)){
						return new $this->controller($this->action, $this->request);
					} else {
						// method does not exist
						echo '<h3>Method does not exist</h3>';
						return;
					}
				} else {
					// Base controller does not exist
					echo '<h3>base controller class not found</h3>';
					return;
				}
			} else {
				echo '<h3>controller not found</h3>';
				return;
			}
		}

	}
?>