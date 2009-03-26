<?php
    class login_controller {
        
        function index() {
            $user = new Session;
            $this->title = "Login";
            $this->message = "Welcome to BeBuntu!";
            
            if(($_POST['openid_action'] || $_GET['openid_mode'] || $_GET['openid_mode'] ) && ($user->get('nickname') == null)) {
                $this->login();
            }
            else if($user->get('nickname') != null) {
                redirect('admin/');
            }
            else
                $this->message .= " Please login.";
            print_r($user);
            pass_var('message', $this->message);
            pass_var('title', $this->title);
        }
        
        // OpenID Login
        function login() {
            if ($_POST['openid_action'] == "login"){
                $openid = new OpenID;
                $openid->SetIdentity($_POST['openid_url']);
                $openid->SetTrustRoot('http://' . $_SERVER["HTTP_HOST"]);
                $openid->SetRequiredFields(array('nickname','email','fullname'));
                //$openid->SetOptionalFields(array('dob','gender','postcode','country','language','timezone'));
                if ($openid->GetOpenIDServer()){
                        $openid->SetApprovedURL('http://' . $_SERVER["HTTP_HOST"] . $_SERVER["PATH_INFO"]); 
                        $openid->Redirect();
                }else{
                        $error = $openid->GetError();
                        $this->message = "ERROR CODE: " . $error['code'] . "<br/>";
                        $this->message .= "ERROR DESCRIPTION: " . $error['description'] . "<br/>";
                }
                exit;
            }
            else if($_GET['openid_mode'] == 'id_res'){ 
                $openid = new OpenID;
                $openid->SetIdentity($_GET['openid_identity']);
                $openid_validation_result = $openid->ValidateWithServer();
                if ($openid_validation_result == true){
                        $user->set('nickname', $_GET['openid_sreg_nickname']);
                        $user->set('identity', $_GET['openid_identity']);
                        $this->message = "Welcome ".$user->get('nickname');
                }else if($openid->IsError() == true){
                        $error = $openid->GetError();
                        $this->message = "ERROR CODE: " . $error['code'] . "<br/>";
                        $this->message .= "ERROR DESCRIPTION: " . $error['description'] . "<br/>";
                }else{	
                        $this->message = "INVALID AUTHORIZATION";
                }
            }else if ($_GET['openid_mode'] == 'cancel'){
                $this->message = "USER CANCELED REQUEST";
            }
        }
        
        // Logout
        function logout() {
            $user->destroy();
            $this->message = "Good buy!";
            pass_var('message', $this->message);
        }
        
    }
?>