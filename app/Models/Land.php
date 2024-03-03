<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Land extends Model
{
    use SoftDeletes;
    
}
$grid = new Grid(new Post);

$grid->id('ID')->sortable();
$grid->title('Title');
$grid->created_at('Created at');
$grid->updated_at('Updated at');

return $grid;