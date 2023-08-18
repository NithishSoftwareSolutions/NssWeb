<?php
class UserController extends BaseController
{
    
    public function addAction()
    {
		
		$userModel = new UserModel();
		if(!empty($userModel->addUser($_REQUEST['firstname'],$_REQUEST['lastname'],$_REQUEST['dob'],$_REQUEST['mobileno'],$_REQUEST['email'],$_REQUEST['poy'],$_REQUEST['qualification'],$_REQUEST['gender'],$_REQUEST['experience'],$_REQUEST['applyfor'],$_REQUEST['file']))) 
		{
			echo "ok";
		}
		else {
			echo "not";
		}
	}

	public function careerAction()
    {
		
		$userModel = new UserModel();
		if(!empty($userModel->addCareer($_REQUEST['firstname'],$_REQUEST['lastname'],$_REQUEST['dob'],$_REQUEST['mobileno'],$_REQUEST['email'],$_REQUEST['poy'],$_REQUEST['qualification'],$_REQUEST['gender'],$_REQUEST['experience'],$_REQUEST['applyfor'],$_REQUEST['file']))) 
		{
			echo "ok";
		}
		else {
			echo "not";
		}
	}

	public function contactAction()
    {	
	 	$userModel = new UserModel();
	 	if(!empty($userModel->addContact($_REQUEST['name'],$_REQUEST['email'],$_REQUEST['subject'],$_REQUEST['message']))) 
		{
			echo "ok";
		}
	 	else
	 	{	
	 		echo "not";
	 	}
	}
}