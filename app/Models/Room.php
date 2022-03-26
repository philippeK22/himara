<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    public function categorie_room()
    {
        return $this->belongsTo(CategorieRoom::class, 'categorie_room_id');
    }
    public function tag_Rooms()
    {
        return $this->belongsToMany(RoomTag::class, "tag_rooms", "room_id", "tag_room_id");
    }

    public function features()
    {
        return $this->belongsToMany(Statut::class, "statut_room_features", "room_id" ,"feature_id");
    }
}
