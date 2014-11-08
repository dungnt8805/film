<?php

class BaseController extends Controller {

    /**
     * Message bag.
     *
     * @var Illuminate\Support\MessageBag
     */
    protected $messageBag = null;
    public $data = array();

    /**
     * Initializer.
     *
     * @return void
     */
    public function __construct(){
        $curr_time = new DateTime();
        $this->beforeFilter('csrf', array('on' => 'post'));

        //
        $this->data['u'] = $this->u = Sentry::check() ? Sentry::getUser() : null;
        //
        $this->messageBag = new Illuminate\Support\MessageBag;
    }

	/**
	 * Setup the layouts used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
