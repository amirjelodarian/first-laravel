<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['title','body','photo_path'];
    protected $blogPhotosPath = "photos/blog/";
    protected $photoPathSeparator = '<|>';
    protected $photoPaths = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function addPhoto($fileRequest)
    {
        foreach ($fileRequest as $file){
            $photoName = $this->createPhotoName($file->extension());
            array_push($this->photoPaths,$photoName);
            $file->move($this->blogPhotosPath,$photoName);
        }
        return implode($this->photoPathSeparator,$this->photoPaths);
    }

    protected function createPhotoName($fileExtension)
    {
        return  Str::random(2) .
                time() .
                Str::random(4) .
                rand(1,999) .
                Str::random(5) .
                '.' . $fileExtension;
    }
    public function getPhotoPathAttribute($value)
    {
        $photos = explode($this->photoPathSeparator,$value);
        $photosNameAfterInsertFilePath = [];
        foreach ($photos as $photo)
            array_push($photosNameAfterInsertFilePath,$this->blogPhotosPath . $photo);

        return $photosNameAfterInsertFilePath;
    }

    public function getCreatedAtAttribute($value) {
        Carbon::setLocale('fa_IR');
        return Carbon::createFromTimeStamp(strtotime($value))->diffForHumans();
    }

    public function setBodyAttribute($value){
        $this->attributes['body'] = htmlspecialchars($value);
    }

    public function getBodyAttribute($value){
        return nl2br($value);
    }

    public function usernameByBlog($blog)
    {
        $userAttrs = $blog->user()->first();
        return $userAttrs['firstname'] . ' ' . $userAttrs['lastname'];
    }


}
