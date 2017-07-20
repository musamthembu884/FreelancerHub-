<?php
class Drive{

public function makeDrive($User,$UserType)
	{
		//Create Folders
		
		if($UserType == "Freelancer")
		{
			//Create Freelancer Folder
			mkdir("../UI/freelancer/".$User,0777);
			mkdir("../UI/freelancer/".$User."/propic");
			mkdir("../UI/freelancer/".$User."/media");
			copy("../default.png","../UI/freelancer/".$User."/propic/default.png");
		}
		else
		{
			//Create Customer Folder
			mkdir("../UI/customer/".$User,0777);
			mkdir("../UI/customer/".$User."/propic");
			mkdir("../UI/customer/".$User."/media");
			copy("../default.png","../UI/customer/".$User."/propic/default.png");
		}
	}




}




?>