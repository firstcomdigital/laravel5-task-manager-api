<?php namespace App\Api\V1\Models;

use League\Fractal\TransformerAbstract;

// http://fractal.thephpleague.com/transformers/

class UserTransformer extends TransformerAbstract
{
    protected $availableIncludes = [];
    protected $defaultIncludes = [];

    public function transform(User $user) {
        return [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email
        ];
    }
}