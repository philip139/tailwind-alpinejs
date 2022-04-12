<?php
namespace App\Models;
use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasAvatar;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
class Post extends Model   implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $fillable = [
        'title',
        'image',
        'user_id',
    ];
    // protected $appends = ['postImage'];
    public function author()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    // public function getPostImageAttribute(): ?string
    // {
    //     $bath = 'storage/app/livewire-tmp/';
    //     return $bath.''.$this->image;
    // }
}