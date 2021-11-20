<?php

namespace App\Http\Controllers;

use App\Traits\Caching;
use App\Traits\Responder;

class BaseController extends Controller
{
    use Responder;
}
