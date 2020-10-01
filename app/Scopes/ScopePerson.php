<?php
namespace App\Scopes;

use Illuminate\Database\Eloquent\Scope;
use Illuminate\DAtabase\Eloquent\Model;
use Illuminate\DAtabase\Eloquent\Builder;

class ScopePerson implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        $builder->where('age', '>', 20);
    }
}