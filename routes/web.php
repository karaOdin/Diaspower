<?php
use App\{Slider,Car,FaqCategory,Faq,Hotel,House};
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Exceptions\Handler;
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

Route::get('/', function () {
	$sliders = Slider::all();
    $houses= House::all();
    $cars = Car::latest()->take(3)->get();
	$hotels = Hotel::latest()->take(3)->get();
    return view('welcome',compact('sliders','cars','hotels','houses'));
});

Route::post('/filter', 'CarController@filterCar');
Route::get('/filter', 'CarController@filterCar');


Route::get('/hotels', function () {
    return view('hotels');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/faq', function () {
	$faqs = FaqCategory::with('faqs')->get();
    return view('faq',compact('faqs'));
});

Route::post('/faq', function(Request $request)
{
	try {

		Mail::send(new ContactMail($request));
    	$notification = array(
                                'message' =>'Your mail has been sent succesfully' ,
                                'alert-type' =>'success' 
                             );

	} catch (\Exception $e) {
		$notification = array(
                                'message' =>'Your email never been sent',
                                'alert-type' =>'error' 
                             );
	}
   
    return redirect()->back()->with($notification);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/test', function () {
    return view('test');
});

Route::post('/contact', function(Request $request) {
	try {

		Mail::send(new ContactMail($request));
    	$notification = array(
                                'message' =>'Your mail has been sent succesfully' ,
                                'alert-type' =>'success' 
                             );

	} catch (\Exception $e) {
		$notification = array(
                                'message' =>'Your email never been sent',
                                'alert-type' =>'error' 
                             );
	}
    return redirect()->back()->with($notification);
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes(['verify' => true]);
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

//cars section

Route::get('/cars','CarController@index')->name('cars.index');
Route::get('/cars/{slug}','CarController@show')->name('cars.show');

//car reservaion

Route::post('/reservation/','ReservationController@store')->name('reservation.store')->middleware('verified');
Route::get('/reservation/','ReservationController@index')->name('reservation.index')->middleware('verified');
Route::delete('/reservation/{id}','ReservationController@destroy')->name('reservation.destroy')->middleware('verified');
//hotels section
Route::get('/hotels','HotelController@index')->name('hotels.index');
Route::get('/hotels/{slug}','HotelController@show')->name('hotels.show');

// Public/Private Hotel reservation

Route::post('/hotelreservation/','HotelReservationController@store')->name('hotel-reservation.store')->middleware('verified');

//Houses section

Route::get('/houses','HouseController@index')->name('houses.index');
Route::get('/houses/{slug}','HouseController@show')->name('houses.show');

//Houses Reservations

Route::post('housereservation', 'HouseReservationController@store')->name('HouseReservations.store')->middleware('verified');

// User routes

Route::get('/profile','UserController@show')->name('profile.show');
Route::patch('/profile/{id}','UserController@edit')->name('profile.edit');

//juridicials section

Route::get('/juridicial',function ()
{
    return view('juridicial');
});

Route::post('/juridicial/','JuridicialController@store')->name('juridicial.store')->middleware('verified');

Route::get('/lawyer/',function()
    {
        return view('lawyer');
    }
);
Route::post('/lawyer/','LawyerController@store')->name('lawyer.store')->middleware('verified');

Route::get('/notary/',function()
    {
        return view('notary');
    }
);
Route::post('/notary/','NotaryController@store')->name('notary.store')->middleware('verified');

//projets

Route::get('/projects','ProjectController@index')->name('projects.index');
Route::post('/projects/','ProjectController@store')->name('projects.store')->middleware('verified');

//Newsletter routes 

Route::post('/newsletter','NewsletterController@store')->name('newsletter.store');