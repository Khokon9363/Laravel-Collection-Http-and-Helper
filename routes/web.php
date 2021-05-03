<?php

use App\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/collection', function () {
    // $user1 = User::take(4)->get(['name', 'email']);
    // $user2 = User::take(2)->get(['name', 'email']);
    // $user3 = User::take(2)->get(['name', 'email']);

/*       ! LARAVEL COLLECTION !
    return collect($user1)->all(); // return all data
    
    return collect([10, 17, 30])->avg(); // return avrage

    return collect($user1)->chunk(4); // breaks the collection into multiple

    return collect([$user1, $user2])->collapse(); // collapses a collection of arrays (infinite) into a single array
    return collect([$user1, $user2, $user3])->collapse();

    return collect($user1)->concat($user3); // appends the given arrays (2) into one array

    return collect($user1)->diff($user2); // return the diff

    return collect($user1)->duplicates(); // return the duplicates

    return collect($user1)->filter(function($val, $key){
        return $val->name != 'Johnathan Willms';  // filter the data using key or value
    });
    return collect([1, 2, 3, null, false, '', 0, []])->filter()->all(); // return 1 2 3

    return collect($user1)->implode('name', ','); // return names as string separated by user defiend sign
    return collect($user1)->implode('email', ','); // return emails as string separated by user defiend sign
    return collect($user1)->implode('name', ' - '); // return names as string separated by user defiend sign

    return collect([1, 2, 3, 4, 5])->min(); // 1
    return collect([1, 2, 3, 4, 5])->max(); // 5
    return collect([1, 2, 3, 4, 5])->median(); // 3
    return collect([1, 2, 3, 4, 5])->sum(); // 15

    return collect(collect($user1)->merge($user2))->merge($user3); // merge VS collapse

    return collect($user1)->pad(10, "No data"); // return 10 results vy filling with 0
    return collect($user1)->pad(-10, "No data"); // return 10 results vy filling with 0

    return collect(1, 2, 3, 4, 5)->pop(); // remove last item

    return collect(1, 2, 3, 4, 5)->shift(); // remove first item

    return collect(1, 2, 3, 4, 5)->prepend(0); // add a item at the beginning

    return collect(1, 2, 3, 4, 5)->push(6); // add a item at the end (put method for push key & value)

    return collect(1, 2, 3, 4, 5)->search(2); // return true if found

    return collect([1, 2, 3, 4, 5, 6, 7, 8, 9, 10])->slice(4); // [5, 6, 7, 8, 9, 10]

    return collect($user1)->toArray(); // return a plain array
    return collect($user1)->toJson(); // return a plain json

    return collect([1, 1, 2, 2, 3, 4, 2])->unique()->all(); // unique

    return collect([1, 2, 3])when( 1 == 1, function ($collection) {
        return $collection->push(4);
    }); // return [1, 2, 3, 4]

    return collect($user1)->whereBetween('balance', [100, 200])->all(); // whereBetween & whereNotBetween
    return collect($user1)->whereIn('balance', [100, 200])->all(); // whereIn & whereNotIn

    // whereNotNull , whereNull //
*/
});

Route::get('/http', function(){
//    return Http::get('https://jsonplaceholder.typicode.com/posts');
});

Route::get('/helpers', function(){
    $user1 = User::take(5)->get();
    $user2 = User::skip(5)->take(5)->get();
/* --------------------------- Arr (like collections)-----------------------
    return Arr::collapse([$user1, $user2]); // collapses a collection of arrays (infinite) into a single array

    return Arr::add($user1, 'Name', 'Test name'); // add a element at the last

    return last([1, 2, 3, 4, 5]); // 5
    return head([1, 2, 3, 4, 5]); // 1
*/
/* ---------------------- Path -------------------------
    app_path(); // app directory path
    base_path(); // base path of the application
    config_path(); // config folder path
    database_path(); // database folder path
    mix(); // public path
    public_path(); // public path
    resource_path(); // resources folder path
    storage_path(); // storage folder path
*/
/* ---------------------- STR --------------------------------
    return Str::after('I live in Asia', 'live'); // return in Asia
    return Str::before('I live in Asia', 'live'); // return I
    return Str::between('I live in Asia', 'live', 'Asia'); // return in

    return Str::camel('I Love Asia'); // return iLoveAsia
    return Str::kebab('iLoveAsia'); // return i-love-asia

    return Str::contains('I live in Asia', 'live'); // return true
    return Str::contains('I live in Asia', ['live', 'Asia]); // return true if 1 matched
    return Str::containsAll('I live in Asia', ['live', 'Asia]); // return true if all matched

    return Str::endsWith('This is my name', 'name'); // return true

    return Str::length('Laravel'); // 7
    return Str::limit('I live in asia', 2, '....'); // return I....
    return Str::of('The quick brown fox jumps over the lazy dog')->limit(20, '...'); // return The quick brown fox...
    return Str::lower('LARAVEL', 2, '....'); // return laravel

    return Str::padLeft('I live in Asia', 20, ' '); // left margin 20 pad
    return Str::padRight('I live in Asia', 20, ' '); // right margin 20 pad
    return Str::padBoth('I live in Asia', 20, ' '); // left right margin 20 pad

    return Str::singuler('cars'); // return car
    return Str::plural('car'); // return cars (pluralStudly is better)

    return Str::random(40);

    return Str::remove('e', 'I live in Asia'); // return I liv in Asia (It's on Laravel 8)

    return Str::replace('8', '9', 'Laravel 8'); // Laravel 9

    return Str::of('I live in Asia')->explode(' '); // return [I, live, in, Asia]


    return Str::of('  ')->trim()->isEmpty(); // return true
    return Str::of('Laravel')->trim()->isEmpty(); // return false || We've also isNotEmpty()

    return Str::of('framework')->prepend('Laravel '); // return Laravel Framework
    return Str::of('Laravel framework')->remove('Laravel'); // return framework

    return Str::of('Laravel Framework')->slug('-'); // return laravel-framework

    return Str::of('fooBar')->snake(); // return foo_bar

    return Str::of('a nice title uses the correct case')->title(); // return A Nice Title Uses The Correct Case

    return Str::of('    Laravel    ')->trim(); // return Laravel
    return Str::of('/Laravel/')->trim('/'); // return Laravel

    return Str::of('foo bar')->ucfirst(); // return Foo bar
    return Str::of('foo bar')->upper(); // return FOO BAR

    return Str::of('Hello, world!')->wordCount(); // 2

    Str::of('Perfectly balanced, as all things should be.')->words(3, ' ...'); // return Perfectly balanced, as ...
*/
/* ----------------- Miscellaneous / build in traits --------------
    app()
    auth()

    back()
    bcrypt()
    broadcast() The broadcast function broadcasts the given event to its listeners

    collect() collection class
    cache()
    config()
    cookie()
    csrf_field()
    csrf_token()

    dd()
    dump()
    dispatch() The dispatch function pushes the given job onto the Laravel job queue

    env()
    event() The event function dispatches the given event to its listeners

    info('User login attempt failed.', ['id' => $user->id])

    logger('User has logged in.', ['id' => $user->id])

    method_field('DELETE')

    now()

    old('value', 'default')

    redirect()->route('home')
    redirect('/home')
    report('Something went wrong.') The report function will report an exception using your exception handler
    response()->json($data, 200, $headers)

    session()

    today()

    view()

    with()
*/ 
});