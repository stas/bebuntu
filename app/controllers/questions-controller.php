<?php
    class questions_controller {
        function index() {
            $this->is_loggedin();
            redirect('questions/all');
        }
        
        function all() {
            $this->is_loggedin();
            $this->title = "Questions";
            $this->message = "BeBuntu Questions";
            $all_questions = new Question;
            pass_var('all_questions', $all_questions->find_all());
            pass_var('title', $this->title);
            pass_var('message', $this->message);
        }
        
        function add() {
            $this->is_loggedin();
            $this->title = "Add Questions";
            $this->message = "Add a new question";
            if($_POST['action'] == 'newquestion')
                if($this->newquestion($_POST))
                    $this->message = "Question added";
                else
                    $this->message = "There was an error";
            pass_var('title', $this->title);
            pass_var('message', $this->message);
        }
        
        function newquestion($data) {
            if($data['title'] && $data['explanation']) {
                $newquestion = new Question;
                $newquestion->title = $data['title'];
                $newquestion->explanation = sqlite_escape_string($data['explanation']);
                $newquestion->save();
                return true;
            }
            else
                return false;
        }
        
        function delete() {
            $this->is_loggedin();
	    global $runtime;
	    $to_trash = new Question($runtime['ident']);
	    $to_trash->delete();
	    redirect('questions/all');
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