<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class ProductModel extends Model
{
    use HasFactory;
    use LogsActivity;

    protected $table = 'products';
    protected $guarded = '';

    /**
     * ActivityLog Properties
     * @var string
     */
    public $logName = 'productEvent';
    public $logOnlyDirty = false;

    /**
     * only the defined event will get logged automatically
     * @var string[]
     */
    protected static $recordEvents = ['created', 'updated', 'deleted'];

}
