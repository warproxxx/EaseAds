<?php
class Payment extends CI_Controller {
	 
	public function __construct(){
		parent::__construct();
		$this->load->library("paypal");
		$this->load->library('session');
		$this->load->helper(array("url", "page_helper"));
		$this->load->model(array('advertiser_model'));
	}


	public function index(){

		$this->load->view("index");
		return;

	}


	public function subscribe(){

		if ( !empty($_POST["plan_name"]) && !empty($_POST["plan_description"]) ) {

			$this->paypal->set_api_context();

			$this->paypal->set_plan( $_POST["plan_name"], $_POST["plan_description"], "INFINITE" );

			$definition = "Regular Payments";
			$type       = "REGULAR";
			$frequency  = "MONTH";
			$frequncy_interval = '1';
			$cycles = 0;
			$price = "49";

			$this->paypal->set_billing_plan_definition( $definition, $type, $frequency, $frequncy_interval, $cycles, $price );

			$returnurl = base_url()."index.php/payment/success";
			$cancelurl = base_url()."index.php/payment/cancel";

			$this->paypal->set_merchant_preferences( $returnurl, $cancelurl );

			$line1 = "Street - 1, Sector - 1";
			$city  = "Dhaka";
			$state = "Dhaka";
			$postalcode = "12345";
			$country = "AU";

			$this->paypal->set_shipping_address( $line1, $city, $state, $postalcode, $country );

			$agreement_name = "Payment Agreement Name";
			$agreement_description = "Payment Agreement Description";

			$this->paypal->create_and_activate_billing_plan( $agreement_name, $agreement_description );

		}

	}

	public function cancel(){
		$this->index();
		return;
	}

	//After successfully create an agreement we will be redirected to this function
	public function success(){

		if ( !empty( $_GET['token'] ) ) {

		    $token = $_GET['token'];
		    $this->paypal->execute_agreement( $token );
		    $this->index();

		}

		return;

	}

	public function create_payment($amount){

		$this->paypal->set_api_context();

		$payment_method = "paypal";
		$return_url     = base_url()."/payment/success_payment";
		$cancel_url     = base_url()."/advertiser_dashboard/payment";
		$total          = $amount;
		$description    = "Deposit to EaseAds";
		$intent         = "sale";

		$this->paypal->create_payment( $payment_method, $return_url, $cancel_url, 
        $total, $description, $intent );

        return;

	}

	//After creating a payment successfully we will be redirected here
	public function success_payment(){

		if ( !empty( $_GET['paymentId'] ) && !empty( $_GET['PayerID'] ) ) {

			try{
				$result = $this->paypal->execute_payment( $_GET['paymentId'], $_GET['PayerID'] );
				$result = json_decode($result, true);
				$paidAmount = $result['transactions'][0]['amount']['total'];
				
				if ($this->advertiser_model->check_exist($paymentId) == FALSE)
				{
					$user=$this->advertiser_model->get_advertiser_by_id($_SESSION['id']);
					$previous_bal = $user['account_bal'];
					$new_bal = $paidAmount+$previous_bal;
					$this->advertiser_model->credit_balance(array('account_bal' =>$new_bal ));
					$this->advertiser_model->insert_to_payment_record(array('method'=>'paypal',
					'payment_type'=>'deposit','amount'=> $paidAmount,'user_type'=>'advertiser','user_id' => $_SESSION['id'],
					'time'=>time(), 'txn_id'=>$_GET['paymentId'], 'payer_id'=>$_GET['PayerID'], 'payment_token'=>$_GET['token']));


					$_SESSION['action_status_report'] ="<span class='w3-text-green'>Payment Successfully Processed</span>";
					$this->session->mark_as_flash('action_status_report');
					show_page("advertiser_dashboard/payment");
				}
				else
				{
					$_SESSION['action_status_report'] ="<span class='w3-text-red'>Payment Failed. The transaction already exist.</span>";
					$this->session->mark_as_flash('action_status_report');
					show_page("advertiser_dashboard/payment");
				}
			}
			catch (Exception $e)
			{
				$_SESSION['action_status_report'] ="<span class='w3-text-red'>Payment Failed. Error is: " . $e->getMessage() . "</span>";
				$this->session->mark_as_flash('action_status_report');
				show_page("advertiser_dashboard/payment");
			}

		}

		return;

	}
	
}