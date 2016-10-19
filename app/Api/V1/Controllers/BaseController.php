<?php namespace App\Api\V1\Controllers;

use Dingo\Api\Routing\Helpers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    use Helpers;

    const PAGINATION_LIMIT = 100;

    protected $model;
    protected $transformer;

    public function __construct($transformer, $model)
    {
        $this->model = new $model();
        $this->transformer = new $transformer();
    }

    public function index(Request $request)
    {
        $pagination_options = $this->makePaginationOptions($request);
        $data = $this->model->paginate($pagination_options['limit'], ['*'], "page['offset']", $pagination_options['offset']);
        return $this->response->paginator($data, $this->transformer);
    }

    public function show(Request $request, $id)
    {
        $data = $this->model->findOrFail($id);
        return $this->response->item($data, $this->transformer);
    }

    protected function makePaginationOptions(Request $request)
    {
        $page = $request->query('page');

        $result = [
            'limit' => self::PAGINATION_LIMIT,
            'offset' => 1,
        ];

        if (is_null($page)) {
            return $result;
        }

        if (array_key_exists('limit', $page) && (int) $page['limit'] < self::PAGINATION_LIMIT) {
            $result['limit'] = (int) $page['limit'];
        }

        if (array_key_exists('offset', $page)) {
            $result['offset'] = (int) $page['offset'];
        }

        return $result;
    }
}