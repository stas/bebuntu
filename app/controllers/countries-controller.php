<?php
    class countries_controller {
        function index() {
            $this->is_loggedin();
            redirect('countries/all');
        }
        
        function add() {
            $this->is_loggedin();
            $this->title = "Countries";
            $this->message = "Add Countries";
            if($_POST['action'] == 'newcountry')
                if($this->newcountry($_POST))
                    $this->message = "Country added";
                else
                    $this->message = "There was an error";
            pass_var('title', $this->title);
            pass_var('message', $this->message);
        }
        
        function newcountry($data) {
            if($data['name']) {
                $newcountry = new Country;
                $newcountry->name = sqlite_escape_string($data['name']);
                $newcountry->save();
                return true;
            }
            else
                return false;
        }
        
        function delete() {
            $this->is_loggedin();
	    global $runtime;
	    $to_trash = new Country($runtime['ident']);
	    $to_trash->delete();
	    redirect('countries/all');
        }
        
        function all() {
            $this->is_loggedin();
            $this->title = "Countries";
            $this->message = "BeBuntu Countries";
            $all_countries = new Country;
	    pass_var('all_countries', $all_countries->find_all());
            pass_var('title', $this->title);
            pass_var('message', $this->message);
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