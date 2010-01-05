<?php

class Welcome extends Controller {

	function Welcome()
	{
		parent::Controller();	
	}
	
	function index()
	{
		$this->events->send('thing.created', array('one' => 10, 'another' => 'hi there'));
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */
