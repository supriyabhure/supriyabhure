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
				$User_name=$_REQUEST['User_name'];
				$Password=$_REQUEST['Password'];
				$enc_pass=md5($Password); 
				
				$where=array("User_name"=>$User_name,"Password"=>$enc_pass);
					
				$res=$this->select_where('customer',$where);
				
				$chk=$res->num_rows; // check cond by row and give ans in true or false
				if($chk==1)  // 1 means true
				{
					$fetch=$res->fetch_object();
					$_SESSION['Cust_id']=$fetch->Cust_id;
					$_SESSION['User_name']=$fetch->User_name;
					echo "<script>
					
					alert('Login success');
					window.location='dashboard';
					
					</script>";
					
				}
				else
				{
					echo "<script>
					
					alert('Login failed');
					window.location='index';
					</script>";
					
				}		
					
			}
			include_once('index.php');
			break;

			case '/customer_logout':
			
				unset($_SESSION['Cust_id']);
				unset($_SESSION['User_name']);
				echo "<script>
				alert('Logout success');
				window.location='index';
				</script>";
				
				break;

			case '/profile':
				$Cust_id=$_SESSION['Cust_id'];
				$where=array("Cust_id"=>$Cust_id);
				$res=$this->select_where('customer',$where);
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
			break;

			case '/edit_customer':
				
				if(isset($_REQUEST['btn_Cust_id']))
				{
					$Cust_id=$_REQUEST['btn_Cust_id'];
					$where=array("Cust_id"=>$Cust_id);
					$res=$this->select_where('customer',$where);
					$fetch=$res->fetch_object();	
					
					$old_Img=$fetch->Img;
					if(isset($_REQUEST['update']))
					{
						$name=$_REQUEST['Name'];
						$Mobile_no=$_REQUEST['Mobile_no'];
						$Email=$_REQUEST['Email'];
						$User_name=$_REQUEST['User_name'];
						 
						if($_FILES['Img']['size']>0)
						{
							$Img=$_FILES['Img']['name'];
							$path='upload//'.$Img;
							$dup_Img=$_FILES['Img']['tmp_name'];
							move_uploaded_file($dup_Img,$path);
							
							date_default_timezone_set('asia/calcutta');
							$cur_date_time=date("Y-m-d H:i:s");
							
							$arr=array("Name"=>$name,
							"Mobile_no"=>$Mobile_no,
							"Email"=>$Email,
							"User_name"=>$User_name,
							
							"Img"=>$Img,
							"updated_dt"=>$cur_date_time);
							
							$res=$this->update_where('customer',$arr,$where);
							if($res)
							{
								unlink('upload/customer/'.$old_img);
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
							
							$arr=array("Name"=>$name,
							"Mobile_no"=>$Mobile_no,
							"Email"=>$Email,
							"User_name"=>$User_name,
							"Cust_id"=>$Cust_id,
							"updated_dt"=>$cur_date_time);
							
							$res=$this->update_where('customer',$arr,$where);
							if($res)
							{
								echo "<script>
								alert('Update success');
								window.location='profile';
								</script>";
							}
							
						}
						
						
						
						
					}
					
					
				}
				include_once('edit_customer.php');
				break;
			
				
			
			
			
			case '/about':
			include_once('about.php');
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

			

			case '/manage car_type':
			$car_type_arr=$this->select('car_type');
			include_once('manage car_type.php');
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
			case '/manage_contact':
			$emp_arr=$this->select('contact');
			include_once('manage_contact.php');
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
					
					alert('Register customer Add success');
					window.location='index';
					</script>";
				}
				else
				{
					
					echo "<script>
					
					alert('Register customer registration failed');
					window.location='index';
					</script>";
				}
			}
			
			
			include_once('add_customer.php');
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

			default:
			echo "Page Not Found";
			break;
			
		}
	}
	
}
$obj=new control;

?>