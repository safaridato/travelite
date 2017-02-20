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