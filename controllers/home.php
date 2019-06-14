<?php
	class Home extends Controller {
		protected function Index() {
			$viewModel = new HomeModel();
			$this->returnView($viewModel->Index(), true);
		}

		protected function About() {
			$viewModel = new HomeModel();
			$this->returnView($viewModel->About(), true);
		}

		protected function Contact() {
			$viewModel = new HomeModel();
			$this->returnView($viewModel->Contact(), true);
		}

		protected function Faq() {
			$viewModel = new HomeModel();
			$this->returnView($viewModel->Faq(), true);
		}

		protected function Terms() {
			$viewModel = new HomeModel();
			$this->returnView($viewModel->Terms(), true);			
		}

		protected function PrivPolicy() {
			$viewModel = new HomeModel();
			$this->returnView($viewModel->PrivPolicy(), true);						
		}

		protected function landing() {
			$viewModel = new HomeModel();
			$this->returnView($viewModel->landing(), true);						
		}

		protected function howitworks() {
			$viewModel = new HomeModel();
			$this->returnView($viewModel->howitworks(), true);						
			return;
		}
	}
?>
