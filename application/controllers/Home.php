<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __Construct(){
        

        parent::__Construct();
        $this->load->model('Home_model');
        $this->load->helper('dump');
    }

    public function dashboard(){

        $data['title'] = 'Home';
        $data['products']=$this->Home_model->get_products_data();
        $data['sliders'] = $this->Home_model->get_slider_data();

        $this->load->view('v2/layout/head', $data);
        $this->load->view('v2/layout/header');
        $this->load->view('v2/components/dashboard/dashboard', $data);
    }

    public function Product_details1($id)
    {
        $data['title'] = 'Product detail';
        $data['product']=$this->Home_model->get_product_detail($id);
        $data['sliders'] = $this->Home_model->get_slider_data();
        
        $size_ids = isset($data['r']->size_id) ? explode(', ', $data['r']->size_id) : 0;
        $color_ids = isset($data['r']->color_id) ? explode(', ', $data['r']->color_id) : 0;
        $data['colors'] = $this->Home_model->get_colors($color_ids);
        $data['sizes']= $this->Home_model->get_sizes($size_ids);

        $this->load->view('v2/layout/head', $data);
        $this->load->view('v2/layout/header');
        $this->load->view('v2/components/product_detail/product_detail', $data);
    }

        public function index(){
            
            $data['products']=$this->Home_model->get_products_data();
            //dump($data);
            $this->load->view('Header/header');
            $this->load->view('Top_bar/top_bar');
            $this->load->view('Navbar/navbar');
            $this->load->view('Slider/slider');
            $this->load->view('Body/body',$data);
            $this->load->view('Body_slider/body_slider');
            $this->load->view('Banner/banner');
            $this->load->view('Footer/footer');
             
        }

        public function Product_details($id){

            $data['products']=$this->Home_model->get_product_detail($id);
            $this->load->view('Header/header');
            $this->load->view('Top_bar/top_bar');
            $this->load->view('Navbar/navbar');
            $this->load->view('Products/products_details',$data); 
            $this->load->view('Footer/footer');
        }
    
        public function Add_cart(){
                $data = array(
                // 'product_name'=>$this->input->post('product_name') , 
                // 'product_des'=>$this->input->post('product_des') , 
                // 'product_cat'=>$this->input->post('product_cat') , 
                // 'product_price'=>$this->input->post('product_price') , 
                // 'basic_vol'=>$this->input->post('basic_vol') , 
                // 'booster_com'=>$this->input->post('booster_comission') ,
                // 'qty'=>$this->input->post('qty') , 
                    // 'id' => $this->input->post('id'),
                    //     'name' => $this->input->post('name'),
                    //     'price' => $this->input->post('price'),
                    //     'qty' => $this->input->post('qty')

                      'id' => $this->input->post('product_code') ,
                        'name' => $this->input->post('product_name') , 
                        'price' => $this->input->post('product_price') , 
                        'qty' =>$this->input->post('qty')

                  
                );
             $this->cart->insert($data);
            redirect('Home/Cart');

        }
         
         public function Cart(){
            $this->load->view('Header/header');
            $this->load->view('Top_bar/top_bar');
            $this->load->view('Navbar/navbar');
            $this->load->view('Products/cart'); 
            $this->load->view('Footer/footer');
        }
       public function update_cart(){
            // Recieve post values,calcute them and update
            $cart_info =  $_POST['cart'] ;
            foreach( $cart_info as $id => $cart)
            {   
                $rowid = $cart['rowid'];
                $price = $cart['price'];
                $amount = $price * $cart['qty'];
                $qty = $cart['qty'];

                    $data = array(
                            'rowid'   => $rowid,
                            'price'   => $price,
                            'amount' =>  $amount,
                            'qty'     => $qty
                    );

                    $this->cart->update($data);
            }
            redirect('Home/cart');        
    }
    public  function remove_cart($rowid) {
                   
        if ($rowid==="all"){
                    $this->cart->destroy();
        }else{
                    $data = array(
                'rowid'   => $rowid,
                'qty'     => 0
            );
                    $this->cart->update($data);
        }
                redirect('Home/cart');
    }
        public function Register(){
            
            $this->load->view('Header/header');
            $this->load->view('Top_bar/top_bar');
            $this->load->view('Navbar/navbar');
            $this->load->view('Register/register');
            $this->load->view('Footer/footer');
             
        }
        public function register_validate(){
                    $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|matches[password]');    

            if($this->form_validation->run() == FALSE)
        {
            $this->load->view('Header/header');
            $this->load->view('Top_bar/top_bar');
            $this->load->view('Navbar/navbar');
            $this->load->view('Register/register');
            $this->load->view('Footer/footer');
            }
             
        $parent_id=$this->Home_model->get_parent_id();
        $get_user_parent_id=$this->Home_model->get_user_parent_id($parent_id);
        //print_r($get_user_parent_id); 
        $count_parent_id=$this->Home_model->get_count_parent_id($parent_id);
        $referal_id=$this->input->post('referal_id');
        $get_referal_id=$this->Home_model->get_referal_id($referal_id);
 
        
        $user_id=$this->Home_model->get_user_id();
        if($get_user_parent_id=='0' || $get_user_parent_id <'2' && $referal_id==''){
             
             $user_id=$user_id + 1;
              $data = array(
                'user_id'=>$user_id,
                'parent_id'=>$parent_id,
                'full_name'=>$this->input->post('full_name') , 
                'mobile'=>$this->input->post('mobile') , 
                'email'=>$this->input->post('email') , 
                'password'=>$this->input->post('password'),
                'referal_id'=>$parent_id,
                'type'=>'2'
                
                );
                if($this->Home_model->insertData($data)){                    
                            redirect('Home/Confirm_order',$user_id);
                        }
                        else{
                            echo "ok";
                            //redirect('Home/Confirm_order',$user_id);
                        }
        }
        elseif($count_parent_id=='2' && $referal_id==''){
        $select_min_parent_id=$this->Home_model->select_min_parent_id($parent_id);
        $par_id=$select_min_parent_id[0];
        //print_r($select_min_parent_id);die("par");
            $user_id=$user_id + 1;
              $data = array(
                'user_id'=>$user_id,
                'parent_id'=>$par_id,
                'full_name'=>$this->input->post('full_name') , 
                'mobile'=>$this->input->post('mobile') , 
                'email'=>$this->input->post('email') , 
                'password'=>$this->input->post('password'),
                'referal_id'=>$parent_id,
                'type'=>'2'
                
                );
                if($this->Home_model->insertData($data)){                   
                            redirect('Home/Confirm_order',$user_id);
                        }
                        else{
                             // echo "not ok";
 
            $data['user_id']=$user_id;
            $this->load->view('Header/header');
            $this->load->view('Top_bar/top_bar');
            $this->load->view('Navbar/navbar');
            $this->load->view('Products/checkout',$data); 
            $this->load->view('Footer/footer');

                            //redirect('Home/Confirm_order',$user_id);
                        }
        }
        elseif($get_referal_id=='0' || $get_referal_id <'2'){
        //print_r($par_id);die("pk");
            $user_id=$user_id + 1;
            //print_r($user_id);die();
              $data = array(
                'user_id'=>$user_id,
                'parent_id'=>$referal_id,
                'full_name'=>$this->input->post('full_name') , 
                'mobile'=>$this->input->post('mobile') , 
                'email'=>$this->input->post('email') , 
                'password'=>$this->input->post('password'),
                'referal_id'=>$this->input->post('referal_id'),
                'type'=>'2'
                
                );
                if($this->Home_model->insertData($data)){
                            redirect('Home/Confirm_order',$user_id);
                        }
                        else{
                             //echo "you ok";
            $data['user_id']=$user_id;
            $this->load->view('Header/header');
            $this->load->view('Top_bar/top_bar');
            $this->load->view('Navbar/navbar');
            $this->load->view('Products/checkout',$data); 
            $this->load->view('Footer/footer');
                        }
        }
        else{
           $chk_referal_id=$this->Home_model->chk_referal_id($referal_id);
        $ref_id=$chk_referal_id[0];
        //print_r($ref_id);die("uk");
            $user_id=$user_id + 1;
              $data = array(
                'user_id'=>$user_id,
                'parent_id'=>$ref_id,
                'full_name'=>$this->input->post('full_name') , 
                'mobile'=>$this->input->post('mobile') , 
                'email'=>$this->input->post('email') , 
                'password'=>$this->input->post('password'),
                'referal_id'=>$this->input->post('referal_id'),
                'type'=>'2'
                
                );
                if($this->Home_model->insertData($data)){
                            redirect('Home/Confirm_order',$user_id);
                        }
                        else{
                            //echo "helo ok";
               $data['user_id']=$user_id;
            $this->load->view('Header/header');
            $this->load->view('Top_bar/top_bar');
            $this->load->view('Navbar/navbar');
            $this->load->view('Products/checkout',$data); 
            $this->load->view('Footer/footer');
                        }
        } 
        }       
        public function Confirm_order(){
            $user_id=$this->input->post('user_id');
            //print_r($user_id);die();
            $c_date=date('Y-m-d');
                $CartConts = $this->cart->contents();
                                        if(!empty($CartConts))
                                        {
        $total = 0;
        $qu=0;

        $total_cart=$this->cart->total_items();
        $data=array(
            'userid' =>$user_id ,
            'created_date'=>$c_date,
            'total_cart'=>$total_cart 
        );
        $this->Home_model->insertcart($data);
        $insert_id=$this->db->insert_id();

        // $checkout_id=$this->session->userdata('checkout_id');
        // $this->Checkout_Model->addcheckoutcart($insert_id,$checkout_id,$uid);

        foreach ($this->cart->contents() as $items):
        $ip = $_SERVER['REMOTE_ADDR'];
        $total = $total + (($items['qty']) * ($items['price']));
            $qu = $qu + $items['qty'];
        $this->Home_model->insertcartproductdetail($insert_id,$items['id'],$items['price'],$items['qty'],$user_id,$ip);
        $pid=$items['id'];
          endforeach;
          //print_r($pid);die();

          $upline_users=$this->Home_model->get_upline_users($user_id,$pid);
          $insert_boster=$this->Home_model->insert_boster($user_id,$pid);
          //print_r($upline_users);die();
          $this->cart->destroy();
                                        }

            $this->load->view('Header/header');
            $this->load->view('Top_bar/top_bar');
            $this->load->view('Navbar/navbar');
            $this->load->view('Products/confirm_order'); 
            $this->load->view('Footer/footer');
        }
      
        public function Login(){
            $this->load->view('Header/header');
            $this->load->view('Top_bar/top_bar');
            $this->load->view('Navbar/navbar');
            $this->load->view('Login/login');
            $this->load->view('Footer/footer');
        }
        public function login_validate(){
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $result=$this->Home_model->login($username,$password);
         
         //print_r($result->mobile); die();
        if($result){
                       $sess_array = array(
                        'id'   =>$result->id,
                        'user_id' => $result->user_id,                      
                        'full_name'=>$result->full_name,
                        'username'=>$result->username,
                        'mobile'  => $result->mobile,                        
                        'email'   => $result->email,
                        'password'=> $result->password,
                        'loggedin'=> TRUE
                       );
            
                      $this->session->set_userdata('logged_in', $sess_array);
                 
            if($result->type==1){
                $data['username,email']=$sess_array;
                  
                 redirect ('Admin',$data);
            }
             
            elseif($result->type==2){
                $data['username,full_name,email,user_id,mobile,cnic,city,password']=$sess_array;
               
                 //redirect ('Users',$data);
                redirect ('Shop',$data);
            }
            else{
                $this->session->set_flashdata('account_error', "Your account is not approve");
            redirect('Home/Login');
            }
        }
        else{
            $this->session->set_flashdata('error', "Invalid User name and password");
            redirect('Home/Login');
        }         

    }
    public function about(){
            
            $this->load->view('Header/header');
            $this->load->view('Top_bar/top_bar');
            $this->load->view('Navbar/navbar');
            $this->load->view('About/about');
            $this->load->view('Footer/footer');
             
        }
	
         
        
}
