<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class MailboxAttachment extends Model
    {
        use HasFactory;

        protected $table = "mailbox_attachment";
        protected $fillable = ["mailbox_id", "attachment"];
    }
