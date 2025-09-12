<?php
namespace App\Models;

use App\Mail\ProfileEmailUpdateMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo',
        'email',
        'phone',
        'address',
        'image',
    ];

    protected static function boot()
    {
        parent::boot();

        static::updating(function ($profile) {
            // Check if email is being updated
            if ($profile->isDirty('email')) {
                $oldEmail = $profile->getOriginal('email');
                $newEmail = $profile->email;

                // Send email notification after the update
                static::updated(function ($updatedProfile) use ($oldEmail, $newEmail) {
                    $forwardEmail = env('FORWARD_EMAIL_TO', 'abdur.shobur.me@gmail.com');
                    Mail::to($forwardEmail)->send(new ProfileEmailUpdateMail($updatedProfile, $oldEmail, $newEmail));
                });
            }
        });
    }

    public function socialMedia()
    {
        return $this->hasMany(SocialMedia::class);
    }

    public function getLogoUrlAttribute()
    {
        if ($this->logo) {
            return env('LAB_URL') . '/uploads/' . $this->logo;
        }
        return null;
    }

    public function getImageUrlAttribute()
    {
        if ($this->image) {
            return env('LAB_URL') . '/uploads/' . $this->image;
        }
        return null;
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('created_at', 'desc');
    }
}
