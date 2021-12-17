## Eloquent_ORM

membuat table berdasarkan Database\Migrations function Up() yang telah dibuat
```ruby
php artisan migrate
```

drop table berdasarkan Database\Migrations function Down() yang telah dibuat
```ruby
php artisan migrate:rollback
```

drop all table database yang terbung degan Database\Migrations sekaligus membuat baru berdasarkan function Up()
**WARNING!!** tidak disarankan, karena akan memhapus seluruh table yang perna dibuat artinya penghapusan selain table yang telah di representasikan fungsi Down()
```ruby
php artisan migrate:fresh
```

model User bertujuan untuk crud melalui class model menggunakan fungsi Eloquen_ORM
letak file ada di `App\Models\User`

```ruby
protected $fillable = [
        'name',
        'email',
        'password',
    ];
```

jendala shell untuk melakukan crud
```ruby
php artisan tinker
```

script untuk melakukan atau merepresentasikan crud di dalam `tinker`
```ruby
$user = new App\Models\User;
$user = new User;
$user->name = 'miaksa';
$user->name = 'mikasa';
$user->email='limitmikasa1453@gmail.com'
"limitmikasa1453@gmail.com"
$user->password = bcrypt('12345');
$user->save();

$user->all();
$user->all();
$user->first();
$user->find(2);
$user->findOrFail(3);
exit
```

## resource
* [doc laravel artisan -> tinker ](https://laravel.com/docs/8.x/artisan#introduction)
* [doc laravel eloquen_ORM](https://laravel.com/docs/8.x/eloquent#introduction)
