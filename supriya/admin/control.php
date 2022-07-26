<?php
include_once('model.php');  // step 1 : model load

class control extends model  // step 2 extend model class in control class
{ 
	function __construct()
	{
		session_start();
		model::__construct();// step 3  call model __construct() in control class
		
		$path=$_SERVER['PATH_INFO']; 	// GET URL PATH 
		
		switch($path)
		{
			case '/index':
				if(isset($_REQUEST['submit']))
			{
				$Username=$_REQUEST['Username'];
				$Password=$_REQUEST['Password'];
				$enc_pass=md5($Password); 
				
				$where=array("Username"=>$Username,"Password"=>$enc_pass);
					
				$res=$this->select_where('admin',$where);
				
				$chk=$res->num_rows; // check cond by row and give ans in true or false
				if($chk==1)  // 1 means true
				{
					$fetch=$res->fetch_object();
					$_SESSION['Admin_id']=$fetch->Admin_id;
					$_SESSION['Username']=$fetch->Username;
					echo "<script>
					
					alert('Login success');
					window.location='dashboard';
					
					</script>";
					
				}
				else
				{
					echo "<script>
					
					alert('Login Failed');
					window.location='index';
					
					</script>";
					
				}		
					
			}
			include_once('index.php');
			break;

			case '/admin_logout':
			
				unset($_SESSION['aid']);
				unset($_SESSION['unm']);
				echo "<script>
				alert('Logout success');
				window.location='index';
				</script>";
				
				break;

			case '/profile':
				$Admin_id=$_SESSION['Admin_id'];// user_id
				$where=array("Admin_id"=>$Admin_id);
				$res=$this->select_where('admin',$where);
				$fetch=$res->fetch_object();
				include_once('profile.php');
				break;

			
		    case '/dashboard':		
 			include_once('dashboard.php');
			break;

			case '/delete':
				if(isset($_REQUEST['btn_Contact_id']))
				{
					$Contact_id=$_REQUEST['btn_Contact_id'];
					$where=array("Contact_id"=>$Contact_id);
					$res=$this->delete_where('contact',$where);
					if($res)
					{
						echo "<script>
						alert('Contact Delete success');
						window.location='manage_contact';
						</script>";
					}
				}

				if(isset($_REQUEST['btn_Employee_id']))
				{
					$Employee_id=$_REQUEST['btn_Employee_id'];
					$where=array("Employee_id"=>$Employee_id);
					$res=$this->delete_where('Employee',$where);
					if($res)
					{
						echo "<script>
						alert('Employee Delete success');
						window.location='manage_emp';
						</script>";
					}
				}

				if(isset($_REQUEST['btn_Cartype_id']))
				{
					$Cartype_id=$_REQUEST['btn_Cartype_id'];
					$where=array("Cartype_id"=>$Cartype_id);
					$res=$this->delete_where('car_type',$where);
					if($res)
					{
						echo "<script>
						alert ('Cartype Delete success');
						window.location='Manage_car_type';
						</script>";
					}
				}

				if(isset($_REQUEST['btn_Loca_id']))
				{
					$Loca_id=$_REQUEST['btn_Loca_id'];
					$where=array("Loca_id"=>$Loca_id);
					$res=$this->delete_where('location',$where);
					if($res)
					{
						echo "<script>
						alert ('delete location sucess');
						window.location='Manage Location';
						</script>";
					}
				}

				if(isset($_REQUEST['btn_client_id']))
				{
					$client_id=$_REQUEST['btn_client_id'];
					$where=array("client_id"=>$client_id);
					$res=$this->delete_where('client',$where);
					if($res)
					{
						echo "<script>
						alert ('delete client sucess');
						window.location='Manage client';
						</script>";


					}
				}			
					
				break;
				
				case '/delete':
					if(isset($_REQUEST['btn_Caradv_id']))
					{
						$Caradv_id=$_REQUEST['btn_Caradv_id'];
						$where=array("Caradv_id"=>$Caradv_id);
						$res=$this->delete_where('car_adv',$where);
						if($res)
						{
							echo "<script>
							alert('caradv Delete success');
							window.location='manage_caradv';
							</script>";
						}
					}
					
			case '/manage_caradv':
			$caradv_arr=$this->select('car_adv');
			include_once('manage_caradv.php');
			break;

			case '/about':
			include_once('about.php');
			break;
			
			case '/add_employee':
			if(isset($_REQUEST['submit']))
			{
				
				$unm=$_REQUEST['Username'];
				$pass=$_REQUEST['Password'];
				$enc_pass=md5($pass); // encripted pass
				$Fname=$_REQUEST['First_name'];
				$Lname=$_REQUEST['Last_name'];
				$date=$_REQUEST['Birth_of_date'];
				$gen=$_REQUEST['Gender'];
				$email=$_REQUEST['Email'];
				$mno=$_REQUEST['Mobile_no'];
				$Jtitle=$_REQUEST['Job_title'];
				$sal=$_REQUEST['Salary'];
				$add=$_REQUEST['Address'];
                date_default_timezone_set('asia/calcutta');
				$cur_date_time=date("Y-m-d H:i:s");
				
				$arr=array("Username"=>$unm,
				"Password"=>$enc_pass,
				"First_name"=>$Fname,
				"Last_name"=>$Lname,
				"Birth_of_date"=>$date,
				"Gender"=>$gen,
				"Email"=>$email,
				"Mobile_no"=>$mno,
				"Job_title"=>$Jtitle,
				"Salary"=>$sal,
				"Address"=>$add,
                "created_dt"=>$cur_date_time,
				"updated_dt"=>$cur_date_time);
				
				$run=$this->insert('employee',$arr);
				if($run)
				{
					echo "<script>
					
					alert('employee Add success');
					window.location='add_employee';
					</script>";
				}
				else
				{
					echo "<script>
					
					alert('employee not success');
					window.location='add_employee';
					</script>";
				}
			}
			
			
			include_once('add_employee.php');
			break;
			
			case '/edit_caradv':
				if(isset($_REQUEST['btn_Caradv_id']))
				{
					$Caradv_id=$_REQUEST['btn_Caradv_id'];
					$where=array("Caradv_id"=>$Caradv_id);
					$res=$this->select_where('car_adv',$where);
					$fetch=$res->fetch_object();	
					
					$old_Img=$fetch->Img;
				if(isset($_REQUEST['update']))
				{
					$Title=$_REQUEST['Title'];
					$Description=$_REQUEST['Description'];
					$price=$_REQUEST['price'];
					$Car_status=$_REQUEST['Car_status'];
					
					if($_FILES['Img']['size']>0)
					{
						$Img=$_FILES['Img']['name'];
						$path='upload/caradv/'.$Img;
						$dup_Img=$_FILES['Img']['tmp_name'];
						move_uploaded_file($dup_Img,$path);
						
						date_default_timezone_set('asia/calcutta');
						$cur_date_time=date("Y-m-d H:i:s");
						
						$arr=array("Title"=>$Title,
						"Description"=>$Description,
						"price"=>$price,
						"Car_status"=>$Car_status,);
						
						$res=$this->update_where('car_adv',$arr,$where);
						if($res)
						{
							unlink('upload/caradv/'.$old_Img);
							echo "<script>
							alert('Update success');
							window.location='profile';
							</script>";
						}
					}
					else
					{
						date_default_timezone_set('asia/calcutta');
						$cur_date_time=date("Y-m-d H:i:s");
						
						$arr=array("Title"=>$Title,
						"Description"=>$Description,
						"price"=>$price,
						"Car_status"=>$Car_status,);
						$res=$this->update_where('car_adv',$arr,$where);
						if($res)
						{
							echo "<script>
							alert('Update success');
							window.location='manage_caradv';
							</script>";
						}
						
					}
					
					
					
					
				}
				
				
			}
			include_once('edit_caradv.php');
			break;


			

			case '/manage_emp':
			$emp_arr=$this->select('employee');
			include_once('manage_emp.php');
			break;
			
			case '/car_type':
			
			if(isset($_REQUEST['submit']))
			{
				$Title=$_REQUEST['Title'];
				$images=$_FILES['Img']['name'];
				$path='upload/car_type/'.$images;
				$dup_img=$_FILES['Img']['tmp_name'];
				move_uploaded_file($dup_img,$path);
				
				date_default_timezone_set('asia/calcutta');
				$cur_date_time=date("Y-m-d H:i:s");
				
				$arr=array("Title"=>$Title,
				"Img"=>$images,
				"created_dt"=>$cur_date_time,
				"updated_dt"=>$cur_date_time);

				$run=$this->insert('car_type',$arr);
				if($run)
				{
					echo "<script>
					
					alert('car_type Add success');
					window.location='add_cartype';
					</script>";
				}
				else
				{
					echo "Not success";
				}


			}
			include_once('car_type.php');
			break;

			case '/car_adv':
			if(isset($_REQUEST['submit']))
			{
				$cust=$_REQUEST['Cust_id'];
				$cartype=$_REQUEST['Cartype_id'];
				$loca=$_REQUEST['Loca_id'];
				$car=$_REQUEST['Car_no'];
				$rc=$_REQUEST['RC_no'];
				$title=$_REQUEST['Title'];
				$images=$_FILES['Img']['name'];
				$path='upload/car_adv/'.$images;
				$dup_img=$_FILES['Img']['tmp_name'];
				move_uploaded_file($dup_img,$path);
				$dec=$_REQUEST['Description'];
				$price=$_REQUEST['price_type'];
				$pri=$_REQUEST['price'];
				$terms=$_REQUEST['Terms_cond'];
				$status=$_REQUEST['Post_status'];
				$car_status=$_REQUEST['Car_status'];
				
				date_default_timezone_set('asia/calcutta');
				$cur_date_time=date("Y-m-d H:i:s");
				

				$arr=array("Cust_id"=>$cust,
				"Cartype_id"=>$cartype,
				"Loca_id"=>$loca,
				"Car_no"=>$car,
				"RC_no"=>$rc,
				"Title"=>$title,
				"Img"=>$images,
				"Description"=>$dec,
				"price_type"=>$price,
				"price"=>$pri,
				"Terms_cond"=>$terms,
				"Post_status"=>$status,
				"Car_status"=>$car_status,
				"created_dt"=>$cur_date_time,
				"updated_dt"=>$cur_date_time);

				$run=$this->insert('car_adv',$arr);
				if($run)
				
					{
						echo "<script>
						
						alert('car_adv Add success');
						window.location='add_car_adv';
						</script>";
					}

					else
				{
					echo "Not success";
				}

				
            }
			include_once('add_car_adv.php');
			break;

			case '/location':
			
				if(isset($_REQUEST['submit']))
				{
					$location=$_REQUEST['Loca_id'];
					$name=$_REQUEST['Name'];
					
					
					date_default_timezone_set('asia/calcutta');
					$cur_date_time=date("Y-m-d H:i:s");
					
					$arr=array("Loca_id"=>$location,
					"Name"=>$name,
					"created_dt"=>$cur_date_time,
					"updated_dt"=>$cur_date_time);
	
					$run=$this->insert('location',$arr);
					if($run)
					{
						echo "<script>
						
						alert('location Add success');
						window.location='location';
						</script>";
					}
					else
					{
						echo "Not success";
					}
	
	
				}
				include_once('location.php');
				break;

				case '/booking':
			
					if(isset($_REQUEST['submit']))
					{
						$title=$_REQUEST['Title'];
						$images=$_FILES['Img']['name'];
				$path='upload/booking/'.$images;
				$dup_img=$_FILES['Img']['tmp_name'];
				move_uploaded_file($dup_img,$path);
                       $dec=$_REQUEST['Description'];
						$price=$_REQUEST['Price'];
						$term=$_REQUEST['Terms_cond'];
						
						
						date_default_timezone_set('asia/calcutta');
						$cur_date_time=date("Y-m-d H:i:s");
						
						$arr=array("Title"=>$title,
						"Img"=>$images,
						"Description"=>$dec,
						"Price"=>$price,
						"Terms_cond"=>$term,
						"created_dt"=>$cur_date_time,
						"updated_dt"=>$cur_date_time);
		
						$run=$this->insert('booking',$arr);
						if($run)
						{
							echo "<script>
							
							alert('Booking success');
							window.location='booking';
							</script>";

							
						
						}
						else
						{
							echo "Booking not success";
						}
		
		
					}
					include_once('booking.php');
					break;


					case '/edit_employee':
						if(isset($_REQUEST['btn_Employee_id']))
						{
							$Employee_id=$_REQUEST['btn_Employee_id'];
							$where=array("Employee_id"=>$Employee_id);
							$res=$this->select_where('employee',$where);
						    $fetch=$res->fetch_object();
						
						
							
							if(isset($_REQUEST['update']))
							{
								$First_name=$_REQUEST['First_name'];
								$Last_name=$_REQUEST['Last_name'];
								$Birth_of_date=$_REQUEST['Birth_of_date'];
								$Gender=$_REQUEST['Gender'];
								$Email=$_REQUEST['Email'];
								$Mobile_no=$_REQUEST['Mobile_no'];
											
								$arr=array("First_name"=>$First_name,
								"Last_name"=>$Last_name,
								"Birth_of_date"=>$Birth_of_date,
								"Gender"=>$Gender,
								"Email"=>$Email,
								"Mobile_no"=>$Mobile_no,
								"updated_dt"=>$cur_date_time);
								
									$res=$this->update_where('Employee',$arr,$where);
									if($res)
									{
										
										echo "<script>
										alert('Update success');
										window.location='dashboard';
										</script>";
									}
										
								}
							}
						
							
										
								
									
							include_once('edit_employee.php');
							break;


					  


								case '/edit_location':
									if(isset($_REQUEST['btn_Loca_id']))
									{
										$Loca_id=$_REQUEST['btn_Loca_id'];
										$where=array("Loca_id"=>$Loca_id);
										$res=$this->select_where('location',$where);
										$fetch=$res->fetch_object();	
										if(isset($_REQUEST['update']))
										{
											$Name=$_REQUEST['Name'];
											
														
											$arr=array("Name"=>$Name,
											
											);
											
												$res=$this->update_where('location',$arr,$where);
												if($res)
												{
												echo "<script>
												alert('Update success');
												window.location='dashboard';
												</script>";
												}
													
											}
										}
													
											
												
										include_once('edit_location.php');
										break;
						
			case '/edit_cartype':
				
				if(isset($_REQUEST['btn_Cartype_id']))
				{
					$Cartype_id=$_REQUEST['btn_Cartype_id'];
					$where=array("Cartype_id"=>$Cartype_id);
					$res=$this->select_where('car_type',$where);
					$fetch=$res->fetch_object();	
					
					$old_img=$fetch->Img;
					if(isset($_REQUEST['update']))
					{
						$Title=$_REQUEST['Title'];
						
						
						if($_FILES['Img']['size']>0)
						{
							$img=$_FILES['Img']['name'];
							$path='upload/car_type/'.$img;
							$dup_img=$_FILES['Img']['tmp_name'];
							move_uploaded_file($dup_img,$path);
							
							date_default_timezone_set('asia/calcutta');
							$cur_date_time=date("Y-m-d H:i:s");
							
							$arr=array("Title"=>$Title,
						    "Img"=>$img,
							"updated_dt"=>$cur_date_time);
							
							$res=$this->update_where('car_type',$arr,$where);
							if($res)
							{
								unlink('/upload/car_type/'.$old_img);
								echo "<script>
								alert('Update success');
								window.location='manage_car_type';
								</script>";
							}
						}
						else
						{
							date_default_timezone_set('asia/calcutta');
							$cur_date_time=date("Y-m-d H:i:s");
							
							$arr=array("Title"=>$Title,
						    "Img"=>$img,
							"updated_dt"=>$cur_date_time);
							
							$res=$this->update_where('car_type',$arr,$where);
							if($res)
							{
								echo "<script>
								alert('Update success');
								window.location='manage_car_type';
								</script>";
							}
							
						}
						
						
						
						
					}
					
					
				}
				include_once('edit_cartype.php');
				break;
				
			
								
								
								
	

			
			

			case '/manage car_type':
			$car_type_arr=$this->select('car_type');
			include_once('manage car_type.php');
			break;

			case '/manage_location':
			$location_arr=$this->select('location');
			include_once('manage_location.php');
			break;

			
			case '/manage_client':
				$client_arr=$this->select('client');
				include_once('manage_client.php');
				break;
	

			
	
				
			
			case '/blog-single':
			include_once('blog-single.php');
			break;
			case '/car-single':
			include_once('car-single.php');
			break;

			case '/car':
			include_once('car.php');
			break;

			case '/add_contact':
			if (isset($_REQUEST['submit']))
			{
				$email=$_REQUEST['Email'];
				$Phone=$_REQUEST['Phone_no'];
				$Des=$_REQUEST['Description'];
				date_default_timezone_set('asia/calcutta');
				$cur_date_time=date("Y-m-d H:i:s");

				$arr=array("Email"=>$email,
				"Phone_no"=>$Phone,
				"Description"=>$Des,
				"created_dt"=>$cur_date_time,
				"updated_dt"=>$cur_date_time);
				$run=$this->insert('contact',$arr);
				if($run)
				{
					echo "<script>
					
					alert('contact Add success');
					window.location='add_contact';
					</script>";
				}
				else
				{
					echo "<script>
					
					alert('contact not success');
					window.location='add_contact';
					</script>";
				}
			}
			

			include_once('add_contact.php');
			break;
			case '/view_contact':
			$contact_arr=$this->select('contact');
			include_once('view_contact.php');
			break;

			case '/view_booking':
			$booking_arr=$this->select('booking');
			include_once('view_booking.php');
			break;

			case '/add_customer':
            if (isset($_REQUEST['submit']))
			{
				$Adharcard=$_REQUEST['Adharcard_no'];
				$Liacence=$_REQUEST['Liacence_no'];
				$name=$_REQUEST['Name'];
				$Mobile=$_REQUEST['Mobile_no'];
				$email=$_REQUEST['Email'];
				$username=$_REQUEST['User_name'];
				$password=$_REQUEST['Password'];
				$enc_password=md5($password); // encripted pass
				$images=$_FILES['Img']['name'];
				$path='upload/customer/'.$images;
				$dup_img=$_FILES['Img']['tmp_name'];
				move_uploaded_file($dup_img,$path);
				date_default_timezone_set('asia/calcutta');
				$cur_date_time=date("Y-m-d H:i:s");

				$arr=array("Adharcard_no"=>$Adharcard,
				"Liacence_no"=>$Liacence,
				"Name"=>$name,
				"Mobile_no"=>$Mobile,
				"Email"=>$email,
				"User_name"=>$username,
				"Password"=>$enc_password,
				"Img"=>$images,
				"created_dt"=>$cur_date_time,
				"updated_dt"=>$cur_date_time);

				$run=$this->insert('customer',$arr);
				if($run)
				{
					echo "<script>
					
					alert('customer Add success');
					window.location='customer';
					</script>";
				}
				else
				{
					echo "Not success";
				}
			}
			
			
			include_once('add_customer.php');
			break;

			case '/add_client':
				if (isset($_REQUEST['submit']))
				{
					$Adharcard=$_REQUEST['Adharcard_no'];
					$Liacence=$_REQUEST['Liacence_no'];
					$car=$_REQUEST['Car_no'];
					$Rc=$_REQUEST['Rc_no'];
					$name=$_REQUEST['Name'];
					$mobile=$_REQUEST['Mobile_no'];
					$email=$_REQUEST['Email'];
					$username=$_REQUEST['User_name'];
					$password=$_REQUEST['Password'];
					$enc_password=md5($password); // encripted pass
					$images=$_FILES['img']['name'];
					$path='upload/client/'.$images;
					$dup_img=$_FILES['img']['tmp_name'];
					move_uploaded_file($dup_img,$path);
					date_default_timezone_set('asia/calcutta');
					$cur_date_time=date("Y-m-d H:i:s");
	
					$arr=array("Adharcard_no"=>$Adharcard,
					"Liacence_no"=>$Liacence,
					"Car_no"=>$car,
					"Rc_no"=>$Rc,
					"Name"=>$name,
					"Mobile_no"=>$mobile,
					"Email"=>$email,
					"User_name"=>$username,
					"Password"=>$enc_password,
					"img"=>$images,
					"created_dt"=>$cur_date_time,
					"updated_dt"=>$cur_date_time);
	
					$run=$this->insert('client',$arr);
					if($run)
					{
						echo "<script>
						
						alert('client Add success');
						window.location='index';
						</script>";
					}
					else
					{
						
						echo "<script>
						
						alert('client registration failed');
						window.location='add_client';
						</script>";
					}
				}
				
				
				
				include_once('add_client.php');
				break;


			case '/manage_customer':
				$customer_arr=$this->select('customer');
				include_once('manage_customer.php');
				break;

			case '/footer':
			include_once('footer.php');
			break;

			case '/header':
		    include_once('header.php');
		    break;


			case '/main':
			include_once('main.php');
			break;

		    case '/pricing':
			include_once('pricing.php');
			break;

			case '/services':
			include_once('services.php');
			break;

			case '/status':
				
					if(isset($_REQUEST['status_client_id']))
					{
						$client_id=$_REQUEST['status_client_id'];
						$where=array("client_id"=>$client_id);
						$run=$this->select_where("client",$where);
						$fetch=$run->fetch_object();
						$status=$fetch->status;
						
						if($status=="Block")
						{
							$arr=array("status"=>"Unblock");
							$res=$this->update_where('client',$arr,$where);
							if($res)
							{
								echo "<script>
								alert('User Unblock success');
								window.location='manage_client';
								</script>";

							}
						}
						else
						{
							$arr=array("status"=>"Block");
							$res=$this->update_where('client',$arr,$where);
							if($res)
							{
								unset($_SESSION['client_id']);
								unset($_SESSION['name']);

								

echo "<script>
alert('User Unblock success');
window.location='manage_client';
</script>";
								
								
								
								
							}
						}
					}
					
					break;

			default:
			echo "Page Not Found";
			break;
			
		}
	}
	
}
$obj=new control;

?>