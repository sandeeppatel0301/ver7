<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Log;
use Str;

class Item extends Model
{
    use SoftDeletes;
    
    public $fillable = ['title','description'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public static function boot() {
  
        parent::boot();
  
        /**
         * Write code on Method
         *
         * @return response()
         */
        static::creating(function($item) {            
            Log::info('Creating event call: '.$item);   
        });
  
        /** 
         * Write code on Method
         *
         * @return response()
         */
        static::created(function($item) {           
            Log::info('Created event call: '.$item);
        });
  
        /**
         * Write code on Method
         *
         * @return response()
         */
        static::updating(function($item) {            
            Log::info('Updating event call: '.$item); 
        });
  
        /**
         * Write code on Method
         *
         * @return response()
         */
        static::updated(function($item) {  
            Log::info('Updated event call: '.$item);
        });
  
        /**
         * Write code on Method
         *
         * @return response()
         */
        static::deleting(function($item) {            
            if ($item->id ==1 ) {
                Log::info('Deleting event call: '.$item);
            }         
        });

        static::deleted(function($item) {            
            if ($item->id ==1 ) {
                Log::info('Deleted event call: '.$item); 
            }
        });
    }
}
