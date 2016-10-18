<?php namespace App\Api\V1\Models;

use League\Fractal\TransformerAbstract;

class ApiTransformer extends TransformerAbstract
{
    public function transform(Api $api) {
        return [
            'message' => 'You have reached the root of this API'
        ];
    }
}