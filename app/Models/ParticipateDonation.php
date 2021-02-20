<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParticipateDonation extends Model
{
    use HasFactory;
    protected $table = 'participate_donation';
    protected $fillable = ['idDonation', 'idParticipant', 'comment'];
}