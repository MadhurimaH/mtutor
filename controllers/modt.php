<?php
	class modt extends Controller {
		protected function dashboard() {
			$viewModel = new ModtModel();
			$this->returnView($viewModel->dashboard(), true);
			return;
		}
	}

?>