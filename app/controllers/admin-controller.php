<?php
    class admin_controller {
        
        function index() {
            $this->user = new Session;
            $this->title = "Administration panel";
            
            if($nickname = $this->user->get('nickname')) {
                $this->message = "Welcome ".$nickname;
                pass_var('message', $this->message);
            }
            else
                redirect("login/"); 
            
            pass_var('title', $this->title);
        }

	function add() {
		$this->is_loggedin();
		$this->title = "Add new administrators";
                $this->message = "Add a new administrator to the database";
                if($_POST['action'] == 'newuser') {
                    if($this->newuser($_POST))
                        $this->message = $_POST['nickname']." added.";
                }
            	pass_var('title', $this->title);
                pass_var('message', $this->message);
	}
        
        function all() {
            $this->is_loggedin();
            $this->title = "List of all administrators.";
            $this->message = "All Administrators";
            $admins = new Admin;
            pass_var('title', $this->title);
            pass_var('all_admins', $admins->find_all());
            pass_var('message', $this->message);
        }
        
        function newuser($data) {
            if($data['nickname'] && $data['email']) {
                $newuser = new Admin;
                $newuser->nickname = $_POST['nickname'];
                $newuser->email = $_POST['email'];
                $newuser->fullname = $_POST['fullname'];
                $newuser->save();
                return true;
            }
            else
                return false;
        }
        
        function delete() {
            $this->is_loggedin();
	    global $runtime;
	    $to_trash = new Admin($runtime['ident']);
	    $to_trash->delete();
	    redirect('admin/all');
        }
        
	function is_loggedin() {
		$this->user = new Session;
		if(!$this->user->get('nickname'))
			redirect("login/logout");
		else
			return $this->user->get("nickname");
	}
    }
?>
