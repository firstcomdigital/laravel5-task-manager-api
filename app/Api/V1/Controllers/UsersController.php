<?php namespace App\Api\V1\Controllers;

use App\Api\V1\Models\User;
use App\Api\V1\Models\UserTransformer;
use Illuminate\Http\Request;

class UsersController extends BaseController
{
    public function __construct(UserTransformer $transformer, User $model)
    {
        parent::__construct($transformer, $model);
    }
}