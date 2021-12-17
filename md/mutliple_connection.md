## Multiple Connection Database
* ### set yout file `.env` 
```ruby
...
DB_CONNECTION=mysql_dcs
DB_DATABASE=dcs
DB_DATABASE_LARAVEL=laravel8
...
```

* ### set `config/database.php`. 
note : `'default' => env('DB_CONNECTION')` akan memanggil `DB_CONNECTION` default pada file `.env` _jika_ pada query_builder/schema/eloquent tidak di `set` paramater conncections nya
```php
return [ 
  'default' => env('DB_CONNECTION'),
  ...
  ...

  'connections' => [
      'mysql_dcs' => [
            ...
            'database' => env('DB_DATABASE'),
            ...
        ],

        'mysql_laravel' => [ 
             ...
            'database' => env('DB_DATABASE_LARAVEL'),
            ...
        ],
  ]
]
```

* ### Schema
To specify which connection to use, simply run the connection() method
```php
Schema::connection('mysql_laravel')->create('some_table', function($table)
{
    $table->increments('id'):
});
```

* ### Query Builder
```php
$users = DB::connection('mysql2')->select(...);
```

* ### Eloquent
Set the $connection variable in your model
```php
class SomeModel extends Eloquent {
    protected $connection = 'mysql2';
}
```

### resource
* [multiple connections database](https://stackoverflow.com/questions/31847054/how-to-use-multiple-databases-in-laravel)
