<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = ['name', 'url', 'price', 'description'];

    protected $attributes = [
        'url' => 'plan@plan'
    ];

    public function search($filter = null)
    {
        $results = $this->where('name', 'like', "%{$filter}%")
            ->orWhere('description', 'like', "%{$filter}%")
            ->paginate(1);
        return $results;
    }
}
