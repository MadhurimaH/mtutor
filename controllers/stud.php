<?php
	class Stud extends Controller {
		protected function register() {
			if(!isset($_SESSION['is_logged_in'])){
				header('Location: '.ROOT_URL.'user/login');
			} else {
				$viewModel = new StudModel();
				$this->returnView($viewModel->register(), true);				
			}
			return;
		}

		protected function dashboard() {
			$viewModel = new StudModel();
			$this->returnView($viewModel->dashboard(), true);
			return;
		}

		protected function search() {
			$viewModel = new StudModel();
			$this->returnView($viewModel->search(), true);
			return;			
		}

		protected function update() {
			$viewModel = new StudModel();
			$this->returnView($viewModel->update(), true);
			return;						
		}
	}
?>