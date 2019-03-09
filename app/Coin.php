<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
     protected $guarded = [];

    /*You can manually set the table of the model by defining `protected $table = 'YOUR_NAME';` on the model.
If you don't do that, Laravel will automatically use a naming convention by getting the class name of the model,
 pluralize it and convert it to snake case to determine the SQL table name, you can check out the implementation:*/
    
    // protected $fillable = [
    //         'kiekis','description'
    //     ];
}
