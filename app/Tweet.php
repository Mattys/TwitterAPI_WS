<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
//	protected $id;
//	protected $id_str;
//	protected $date;
//	protected $text;
//	protected $hastags=array();
//        function __construct($id) {
//            $this->id=$id;
//        }

    protected $fillable = ['id', 'text'];	
}
