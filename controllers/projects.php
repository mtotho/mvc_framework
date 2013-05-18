<?php
class projects extends Controller{

	function index(){
		$data['tabProjects'] = "active";
		$this->view->render("view_projects",$data);
	}

}

?>