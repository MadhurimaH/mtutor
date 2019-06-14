<?php
class HomeModel extends Model{
	public function Index(){
		return;
	}

	public function About() {
		return;
	}

	public function Contact() {
		// sanitize post
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		//echo "<pre>";print_r($post);echo "</pre>";
		if ($post['submit']) {
			if ($post['pname'] == '' || $post['email'] == '' || $post['subject'] == '' || $post['message'] == '') {
				Messages::setMsg('Please fill in all fields', 'error');
				return;
			} else {
				Messages::setMsg('Thanks for contacting us', 'success');
				return;				
			}
		} 
		return;
	}

	public function Faq() {
		return;
	}

	public function Terms() {
		return;
	}

	public function PrivPolicy() {
		return;
	}
	
	public function landing(){
		return;
	}

	public function howitworks() {
		return;
	}
}
?>