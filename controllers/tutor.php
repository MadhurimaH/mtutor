<?php
	class Tutor extends Controller {
		protected function register() {
			if(!isset($_SESSION['is_logged_in'])){
				header('Location: '.ROOT_URL.'user/login');
			} else {
				$viewModel = new TutorModel();
				$this->returnView($viewModel->Register(), true);
			}
			return;
		}

		protected function register2() {
			$viewModel = new TutorModel();
			$this->returnView($viewModel->register2(), true);
			return;
		}
		
		protected function sendMessage() {
			$viewModel = new TutorModel();
			$this->returnView($viewModel->sendMessage(), true);
		}

		protected function dashBoard() {
			$viewModel = new TutorModel();
			$this->returnView($viewModel->dashBoard(), true);
		}

		protected function search() {
			$viewModel = new TutorModel();
			$this->returnView($viewModel->search(), true);
			return;
		}

		protected function profile() {
			$viewModel = new TutorModel();
			$this->returnView($viewModel->profile(), true);
			return;
		}

		protected function searchres() {
			$viewModel = new TutorModel();
			$this->returnView($viewModel->searchres(), true);
			return;
		}

		protected function publicpro() {
			$viewModel = new TutorModel();
			$this->returnView($viewModel->publicpro(), true);
			return;
		}

	}
?>