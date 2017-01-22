<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Homepage for our app
	 */
	public function index()
	{
		// this is the view we want shown
		$this->data['pagebody'] = 'homepage';

		// build the list of authors, to pass on to our view
		$source = $this->quotes->all();
		$authors = array ();
		foreach ($source as $record)
		{
			$authors[] = array ('who' => $record['who'], 'mug' => $record['mug'], 'href' => $record['where']);
		}
		$this->data['authors'] = $authors;

		$this->render();
	}
        	public function random()
	{
		// this is the view we want shown
		$this->data['pagebody'] = 'homepage';

		// build the list of authors, to pass on to our view
		$source = $this->quotes->all();
		$authors = array ();
		$quote = '';
                $i = rand(1, 7);
                
                foreach ($source as $record)
		{

		$authors[] = array ('who' => $record['who'], 'mug' => $record['mug'], 'href' => $record['where']);
                    if($record['id'] == $i){
                        $quote = $record['what'];
                    }
		}
		$this->data['quote'] = $quote;

		$this->render();
	}

}
