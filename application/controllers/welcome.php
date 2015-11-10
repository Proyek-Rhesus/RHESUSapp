<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
                $cekMenu = $this->cekMenu();
                $data['noMenu'] = 1;
		$this->load->view('nav');
                $this->load->view('sidebar',$data);
                $this->load->view('home');
                $this->load->view('footer');    
	}
        
        
	public function redirect($namaMenu){
                
            
                $data['noMenu'] = 1;
		$this->load->view('nav');
                $this->load->view('sidebar',$data);
                $halaman = $this->cekContent($namaMenu);
                $this->load->view($halaman);
                $this->load->view('footer');    
	}
        
        public function cekMenu(){
//            $user = $this->session->userdata('level');
            $user = 'kepala';
            $noMenu = 0;
            if ($user == 'kepala'){
                $noMenu = 1;
            }else if ($user == 'adm'){
                $noMenu = 2;
            }else if ($user == 'lab'){
                $noMenu = 3;
            }else if ($user == 'dok'){
                $noMenu = 4;
            }else{
                $noMenu = 0;
            }
            return $noMenu;
            
            
    }
         public function cekContent($namaMenu){
//         $user = $this->session->userdata('level');
         $user = 'kepala';
         $halaman = $namaMenu;
          if ($user == 'kepala'){
                return 'kepala/'.$halaman;
            }else if ($user == 'adm'){
                return 'adm/'.$halaman;
            }else if ($user == 'lab'){
                return 'lab/'.$halaman;
            }else if ($user == 'dok'){
                return 'dok/'.$halaman;
            }else{
                return'';
            }
           
            
            
    
    }
    
    
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */