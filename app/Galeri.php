<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Galeri;

class Galeri extends Model
{
    protected $table ='galeri';
    protected $fillable=['nama','path','keterangan','kategori_galeri_id','users_id'];
    protected $casts=[
    ];
}