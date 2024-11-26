<?php
class Login extends Controller {
    protected $admin;
    protected $email;
    protected $session;

    public function __construct() 
    {
        $this->admin = $this->model('Main');
        $this->session = new Session();
    }

    public function index() 
    {
        // ( !notSession() ) && redirect('/home/user_logged') && exit;

        // if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) 
        // {
        //     $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            

        // } 

        $data = [
            'controller' => strtolower(get_called_class()),
            'page' => __FUNCTION__
        ];

        $this->view('login/index', $data);
                          
    }
 }
    
   


