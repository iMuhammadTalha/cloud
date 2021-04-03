<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $data['solution'] = '0';
        $this->load->view('welcome_message',$data);
	}

	public function calculateSolution(){
        $this->load->library('form_validation');
        $this->load->helper('file');

        $result=$this->input->post('result');
        $solution = eval('return '.$result.';');

        $date = date('d-m-y h:i:s');

        $ipAddress = $this->input->ip_address();
        $logData = 'IP Address'.$ipAddress.', Date Time= '.$date.' , Input= '.$result.' , Output= '.$solution."\n";
        if ( ! write_file('./log.txt', $logData, 'a'))
        {
//            log_message('debug',print_r('no'), TRUE);
        }
        else
        {
//           log_message('debug',print_r($date), TRUE);
        }

//        log_message('debug',print_r($solution), TRUE);
            $data['solution'] = $solution;
            $this->load->view('welcome_message',$data);

    }
}
