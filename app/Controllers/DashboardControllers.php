<?php

namespace Links\Controllers;
use Links\Models\Links;

class DashboardControllers extends ViewControllers

{
	public function post()
	{
		if (isset($_POST['savelink']))
		{
			
			$link=$_POST['link'];

		     $links=Links::addlink($link);
           if ($links){
                        $this->render("dashboard.html");}
           else{echo "sorry link cant be saved";}

		}

		
	}

	public function get(){
		
		
			$show=Links::showlink();
			
			$this->render('dashboard.html',["links"=>$show]);
			
		
	}
}

?>