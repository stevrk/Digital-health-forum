<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class AbstractSubmission extends Model
{
    use HasFactory;

    // Specify the table name if it doesn't follow Laravel's naming convention
    protected $table = 'abstracts';

    protected $fillable = [
        'name', 'phone', 'email', 'organization', 'title', 'abstract', 'download_status',
    ];

    // Accessor for the abstract path
    public function getAbstractUrlAttribute()
    {
        return Storage::url('abstracts/' . $this->abstract);
    }
}
