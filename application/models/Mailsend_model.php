<?php

class Mailsend_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('email');
    }

    /*
        public function SendActivationMail($email = '', $mailBody = '')
        {
            if ($email != '') {
                $this->email->initialize(array(
                    'protocol' => 'smtp',
                    'smtp_host' => 'smtp.sendgrid.net',
                    'smtp_user' => MAIL_USER,
                    'smtp_pass' => MAIL_PWD,
                    'smtp_port' => 587,
                    'mailtype' => 'html',
                    'crlf' => "\r\n",
                    'newline' => "\r\n"
                ));

                $this->email->from('noreply@takeoftogeorgia.ge', 'Take Of To Georgia');
                $this->email->to($email);
                //$this->email->cc('another@another-example.com');
                //$this->email->bcc('them@their-example.com');
                $this->email->subject('Take Of To Georgia Activation Mail');
                $this->email->message($mailBody);
                $this->email->send();

                return true;
            }

            return false;
        }
        */

    /*
    public function SendForgottenPassword($email = '', $mailBody = '')
    {

        if ($email != '') {
            $this->email->initialize(array(
                'protocol' => 'smtp',
                'smtp_host' => 'smtp.sendgrid.net',
                'smtp_user' => MAIL_USER,
                'smtp_pass' => MAIL_PWD,
                'smtp_port' => 587,
                'mailtype'  => 'html',
                'crlf' => "\r\n",
                'newline' => "\r\n"
            ));

            $this->email->from('noreply@janashiastore.com', 'JANASHIASTORE');
            $this->email->to($email);
            $this->email->subject('JANASHIASTORE New Password');
            $this->email->message($mailBody);
            $this->email->send();

            return true;
        }

        return false;
    }
    */
    public function SendContactData($fromEmail = '', $fullName = '', $message = '')
    {

        if ($fromEmail != '' && $fullName != '' && $message != '') {
            $this->email->initialize(array(
                'protocol' => 'smtp',
                'smtp_host' => 'smtp.sendgrid.net',
                'smtp_user' => MAIL_USER,
                'smtp_pass' => MAIL_PWD,
                'smtp_port' => 587,
                'mailtype' => 'html',
                'crlf' => "\r\n",
                'newline' => "\r\n"
            ));

            $this->email->from($fromEmail, 'Take Of To Georgia Contact Form');
            $this->email->to('info@takeoftogeorgia.ge');
            $this->email->cc('admin@smartit.ge');
            $this->email->subject('Take Of To Georgia Contact Form');
            $this->email->message('<p>Fullname: ' . $fullName . ' <br /> Client Message: ' . $message . '</p>');
            $this->email->send();

            return true;
        }

        return false;
    }

    public function SendContactDataLocal($fromEmail = '', $fullName = '', $phone = '', $message = '')
    {

        if ($fromEmail != '' && $fullName != '' && $message != '') {

            $to = "admin@smartit.ge"; //, delimiter mail list
            $subject = "Take Off To Georgia";

            $message = "
            <html>
<head>
<title>take off to Georggia Contact Form</title>
</head>
<body>
<p>Contact Email from website</p>
<table>
<tr>
<td>Contact person name:</td><td>" . $fullName . "</td>
</tr>
<tr>
<td>Phone:</td><td>" . $phone . "</td>
</tr>
<tr>
<td>Person Email:</td><td>" . $fromEmail . "</td>
</tr>
<tr>
<td>Message</td><td>" . $message . "</td>
</tr>
</table>
</body>
</html>";

// Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
            $headers .= 'From: <noreply@takeofftogeorgia.com>' . "\r\n";

            mail($to, $subject, $message, $headers);

        }

        return false;
    }

    public function SubscribeMailLocal($mail = false)
    {


        $querySubscribe = "CALL Subscribe('" . $mail . "');";
        $resultSubscribe = $this->db->query($querySubscribe);
        //$res = $resultSubscribe->result_array();
        // $resultSubscribe->next_result();


        return true;

    }

    /*
    public function SendPostPurchase($fromEmail = '', $message = '', $toEmail = '')
        {

            if ($fromEmail != '' ) {
                $this->email->initialize(array(
                    'protocol' => 'smtp',
                    'smtp_host' => 'smtp.sendgrid.net',
                    'smtp_user' => MAIL_USER,
                    'smtp_pass' => MAIL_PWD,
                    'smtp_port' => 587,
                    'mailtype'  => 'html',
                    'crlf' => "\r\n",
                    'newline' => "\r\n"
                ));

                $this->email->from($fromEmail, 'Janashia Store Purchase Mail');
                $this->email->to('idarase@gmail.com');
                $this->email->cc('admin@smartit.ge');
                $this->email->subject('Janashia Store Purchase Mail');
                $this->email->message($message);
                $this->email->send();

                return true;
            }

            return false;
        }
    */

}