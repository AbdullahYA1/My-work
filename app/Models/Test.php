<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Contracts\Mail\Attachable;



class Test extends Model implements Attachable
{
    use HasFactory, SoftDeletes ;
    public function toMailAttachment():Attachment{
        Attachment::from(public_path('robots.txt'))->as('new robots text')
    }
}
