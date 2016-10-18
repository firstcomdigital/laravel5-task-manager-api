<?php namespace App\Api\V1\Controllers;

use App\Api\V1\Models\Api;
use App\Api\V1\Models\ApiTransformer;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Dingo\Api\Routing\Helpers;

class ApiController extends Controller
{
    use Helpers;

    public function index(Request $request, Api $api)
    {
        return $this->response->item($api, new ApiTransformer());
    }
}