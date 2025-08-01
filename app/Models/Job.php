<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Job extends Model
{
    /*static public function all(): array
    {
        return [
            [
                "id" => 1,
                "title" => "Software Engineer",
                "description" => "Design and develop high-quality software applications, collaborating with teams and ensuring efficient solutions.",
            ],
            [
                "id" => 2,
                "title" => "Marketing Specialist",
                "description" => "Develop and execute marketing campaigns, conduct market research, and drive brand engagement.",
            ],
            [
                "id" => 3,
                "title" => "Customer Support Representative",
                "description" => "Provide excellent customer service, troubleshoot customer issues, and maintain customer satisfaction.",
            ],
        ];
    }*/

    use HasFactory;

    protected $table = "job_listings"; // Ensure this matches your database table name

    protected $fillable = [
        'title',
        'description',
        'salary',
        'tags',
        'job_type',
        'remote',
        'requirements',
        'benefits',
        'address',
        'city',
        'state',
        'zipcode',
        'contact_email',
        'contact_phone',
        'company_name',
        'company_description',
        'company_logo',
        'company_website',
        'user_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function bookmarkedByUsers(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'job_user_bookmarks')->withTimestamps();
    }
}
