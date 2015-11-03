<?php

// Namespace
namespace App\Http\Controllers;

use App\Business\Interfaces\IRafflesService;
use App\Business\Interfaces\IProductsService;
use App\Business\Models\WebResponseModel;

class TicketsController extends NoAuthBaseController {

	protected $_ts;

	public function __construct(ITicketsService $ts)
    {
    	//parent::__construct();
    	$this->_ts = $ts;
    }

    public function PurchaseTicket() {

    }

    public function RefundTicket() {

    }
}

?>