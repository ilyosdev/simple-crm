<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class MailboxFolder extends Model
    {
        use HasFactory;

        protected $table = "mailbox_folder";
        protected $fillable = ["title", "icon"];
    }
