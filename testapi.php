<?php
require '../api/dbconNApi.php';
	$adminName = '13-12053';
	$adminPass = '';
		
			$user     	="13-12053";
			$password 	="";
			$schoolyear ="2013-2014";
			$semester   ="FIRST";
			$campus = 'alangilan';
			$college = 'cics';
			$facultyId = '03210';
			
			//$auth_student = $api->authenticate_student($user,$password);
			$data =$api->fetch_schoolyear();
			//fac_profile = $api->authenticate_faculty('','');
			//$fac_c_listing = $api->fetch_faculty_class_listing('','','');
			//echo $auth_student;
			//echo $data;
			
			echo $data;
			die();
			foreach($data as $d){
				echo $d['code'];
			}
				die();

			//echo $api->fetch_semester();
			//echo $api->fetch_faculty_listing($schoolyear,$semester,$campus,$college);
		
			//var_dump($data);
			if(!empty($data))
			{
					//$token = $data[0]['token'];

					//echo $api->fetch_student_grades($schoolyear,$semester,$user,$token);
					//echo $api->fetch_student_profile('13-12053');

			}
		?>