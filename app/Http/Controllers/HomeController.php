<?php

namespace App\Http\Controllers;

use App\Http\Controllers\MailController;
use App\Models\About;
use App\Models\applicant;
use App\Models\Artist;
use App\Models\Book_artist;
use App\Models\BookArtistPage;
use App\Models\Bookoriartistpage;
use App\Models\Category;
use App\Models\contact;
use App\Models\Field;
use App\Models\Hello;
use App\Models\Join;
use App\Models\JoinPage;
use App\Models\Offer_artist;
use App\Models\Offer_client;
use App\Models\Package;
use App\Models\Package_item;
use App\Models\Photo;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Testimonial;
use App\Models\Whoweare;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\TwitterCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{

    public function root()
    {
        return view('home');
    }

    public function homepage()
    {

        $sliders = Slider::where('is_active',1)->orderBy('priority','ASC')->get();
        $hello = Hello::find(1);
        $categories = Category::where('is_active',1)->orderBy('priority','ASC')->get();
        $contact = contact::find(1);
        $testimonials = Testimonial::where('is_active',1)->orderBy('priority','ASC')->get();
        $artists = Artist::inRandomOrder()->where('is_active',1)->limit(8)->get();
        $fields = Field::selectRaw('categories.alias,fields.artist_id')
            ->join('categories', 'categories.id', '=', 'fields.category_id')
            ->get();
        //echo "<pre>";
        //print_r($fields);
        //echo "</pre>";
        //die();

        $keywords = explode(',', $hello->meta_keywords);


        SEOMeta::setTitle($hello->meta_title,false);
        SEOMeta::setDescription($hello->meta_description);
        SEOMeta::setCanonical('https://oriartist.co.uk');

        SEOMeta::setKeywords($keywords);
        SEOMeta::addMeta('article:modified_time', date("Y-m-d H:i:s"), 'property');


        OpenGraph::setDescription($hello->meta_description);
        OpenGraph::setTitle('Homepage');
        OpenGraph::setUrl('https://oriartist.co.uk');
        OpenGraph::addProperty('type', 'articles');


        TwitterCard::setTitle($hello->meta_title);
        TwitterCard::setSite('@oriartist');

        JsonLd::setTitle('Homepage');
        JsonLd::setDescription($hello->meta_description);
        JsonLd::addImage('https://oriartists.co.uk/assets1/images/logo.png');



        return view('home',compact('hello','sliders','categories','contact','testimonials','artists','fields'));


    }
    public function whatweofferclient()
    {


        $services =  Service::where('whom','Client')->orderBy('priority','ASC')->get();
        $content = Offer_client::find(1);
        $packages =Package::where('packages.is_client',1)->orderBy('priority','ASC')->get();
        $item1 =Package_item::where('package_id',4)->orderBy('priority','ASC')->get();
        $item2 =Package_item::where('package_id',5)->orderBy('priority','ASC')->get();
        $item3 =Package_item::where('package_id',6)->orderBy('priority','ASC')->get();


        $keywords = explode(',', $content->meta_keywords);


        SEOMeta::setTitle($content->meta_title,false);
        SEOMeta::setDescription($content->meta_description);
        SEOMeta::setCanonical('https://oriartist.co.uk');

        SEOMeta::setKeywords($keywords);
        SEOMeta::addMeta('article:modified_time', date("Y-m-d H:i:s"), 'property');


        OpenGraph::setDescription($content->meta_description);
        OpenGraph::setTitle($content->title);
        OpenGraph::setUrl('https://oriartist.co.uk');
        OpenGraph::addProperty('type', 'articles');


        TwitterCard::setTitle($content->meta_title);
        TwitterCard::setSite('@oriartist');

        JsonLd::setTitle($content->title);
        JsonLd::setDescription($content->meta_description);
        JsonLd::addImage('https://oriartists.co.uk/assets1/images/logo.png');


        return view('whatweofferclient',compact('services','content','packages','item1','item2','item3'));

    }
    public function whatweofferartist()
    {
        $services =  Service::where('whom','Artist')->orderBy('priority','ASC')->get();
        $content = Offer_artist::find(1);
        $packages =Package::where('packages.is_client',0)->orderBy('priority','ASC')->get();
        $item1 =Package_item::where('package_id',1)->orderBy('priority','ASC')->get();
        $item2 =Package_item::where('package_id',2)->orderBy('priority','ASC')->get();
        $item3 =Package_item::where('package_id',3)->orderBy('priority','ASC')->get();


        $keywords = explode(',', $content->meta_keywords);


        SEOMeta::setTitle($content->meta_title,false);
        SEOMeta::setDescription($content->meta_description);
        SEOMeta::setCanonical('https://oriartist.co.uk');

        SEOMeta::setKeywords($keywords);
        SEOMeta::addMeta('article:modified_time', date("Y-m-d H:i:s"), 'property');


        OpenGraph::setDescription($content->meta_description);
        OpenGraph::setTitle($content->title);
        OpenGraph::setUrl('https://oriartist.co.uk');
        OpenGraph::addProperty('type', 'articles');


        TwitterCard::setTitle($content->meta_title);
        TwitterCard::setSite('@oriartist');

        JsonLd::setTitle($content->title);
        JsonLd::setDescription($content->meta_description);
        JsonLd::addImage('https://oriartists.co.uk/assets1/images/logo.png');


        return view('whatweofferartist',compact('services','content','packages','item1','item2','item3'));

    }
    public function oriartistmentoring()
    {
        $content = $record = About::find(1);
        $services = Service::where('is_active',1)->orderBy('priority','ASC')->get();

        $keywords = explode(',', $record->meta_keywords);


        SEOMeta::setTitle($content->meta_title,false);
        SEOMeta::setDescription($content->meta_description);
        SEOMeta::setCanonical('https://oriartist.co.uk');

        SEOMeta::setKeywords($keywords);
        SEOMeta::addMeta('article:modified_time', date("Y-m-d H:i:s"), 'property');


        OpenGraph::setDescription($content->meta_description);
        OpenGraph::setTitle($content->title);
        OpenGraph::setUrl('https://oriartist.co.uk');
        OpenGraph::addProperty('type', 'articles');


        TwitterCard::setTitle($content->meta_title);
        TwitterCard::setSite('@oriartist');

        JsonLd::setTitle($content->title);
        JsonLd::setDescription($content->meta_description);
        JsonLd::addImage('https://oriartists.co.uk/assets1/images/logo.png');


        return view('oriartistmentoring',compact('record','services'));

    }
    public function bookoriartists()
    {
        $content = $record = Bookoriartistpage::find(1);
        $keywords = explode(',', $record->meta_keywords);


        SEOMeta::setTitle($content->meta_title,false);
        SEOMeta::setDescription($content->meta_description);
        SEOMeta::setCanonical('https://oriartist.co.uk');

        SEOMeta::setKeywords($keywords);
        SEOMeta::addMeta('article:modified_time', date("Y-m-d H:i:s"), 'property');


        OpenGraph::setDescription($content->meta_description);
        OpenGraph::setTitle($content->title);
        OpenGraph::setUrl('https://oriartist.co.uk');
        OpenGraph::addProperty('type', 'articles');


        TwitterCard::setTitle($content->meta_title);
        TwitterCard::setSite('@oriartist');

        JsonLd::setTitle($content->title);
        JsonLd::setDescription($content->meta_description);
        JsonLd::addImage('https://oriartists.co.uk/assets1/images/logo.png');


        $artists = Artist::inRandomOrder()->where('is_active',1)->orderBy('priority','ASC')->get();
        $categories = Category::where('is_active',1)->orderBy('priority','ASC')->get();
        $fields = Field::selectRaw('categories.alias,fields.artist_id')
            ->join('categories', 'categories.id', '=', 'fields.category_id')
            ->get();

        return view('bookoriartists',compact('artists','fields','categories','record'));

    }
    public function artistsingle()
    {

        return view('artistsingle');

    }
    public function becomeanoriartist()
    {
        $content=JoinPage::find(1);

        $keywords = explode(',', $content->meta_keywords);


        SEOMeta::setTitle($content->meta_title,false);
        SEOMeta::setDescription($content->meta_description);
        SEOMeta::setCanonical('https://oriartist.co.uk');

        SEOMeta::setKeywords($keywords);
        SEOMeta::addMeta('article:modified_time', date("Y-m-d H:i:s"), 'property');


        OpenGraph::setDescription($content->meta_description);
        OpenGraph::setTitle($content->title);
        OpenGraph::setUrl('https://oriartist.co.uk');
        OpenGraph::addProperty('type', 'articles');


        TwitterCard::setTitle($content->meta_title);
        TwitterCard::setSite('@oriartist');

        JsonLd::setTitle($content->title);
        JsonLd::setDescription($content->meta_description);
        JsonLd::addImage('https://oriartists.co.uk/assets1/images/logo.png');


        return view('becomeanoriartist',compact('content'));

    }
    public function contact()
    {
        $contact = contact::find(1);


        return view('contact',compact('contact'));

    }
    public function bookartist()
    {
        $content=BookArtistPage::find(1);

        $keywords = explode(',', $content->meta_keywords);


        SEOMeta::setTitle($content->meta_title,false);
        SEOMeta::setDescription($content->meta_description);
        SEOMeta::setCanonical('https://oriartist.co.uk');

        SEOMeta::setKeywords($keywords);
        SEOMeta::addMeta('article:modified_time', date("Y-m-d H:i:s"), 'property');


        OpenGraph::setDescription($content->meta_description);
        OpenGraph::setTitle($content->title);
        OpenGraph::setUrl('https://oriartist.co.uk');
        OpenGraph::addProperty('type', 'articles');


        TwitterCard::setTitle($content->meta_title);
        TwitterCard::setSite('@oriartist');

        JsonLd::setTitle($content->title);
        JsonLd::setDescription($content->meta_description);
        JsonLd::addImage('https://oriartists.co.uk/assets1/images/logo.png');


        return view('bookartist',compact('content'));

    }
    public function personal($id,$slug)
    {

        $content = $artist = Artist::find($id);
        $photos = Photo::where('artist_id',$artist->id)->get();
        $keywords = explode(',', $content->meta_keywords);


        SEOMeta::setTitle($content->meta_title,false);
        SEOMeta::setDescription($content->meta_description);
        SEOMeta::setCanonical('https://oriartist.co.uk');

        SEOMeta::setKeywords($keywords);
        SEOMeta::addMeta('article:modified_time', date("Y-m-d H:i:s"), 'property');


        OpenGraph::setDescription($content->meta_description);
        OpenGraph::setTitle($content->title);
        OpenGraph::setUrl('https://oriartist.co.uk');
        OpenGraph::addProperty('type', 'articles');


        TwitterCard::setTitle($content->meta_title);
        TwitterCard::setSite('@oriartist');

        JsonLd::setTitle($content->title);
        JsonLd::setDescription($content->meta_description);
        JsonLd::addImage('https://oriartists.co.uk/assets1/images/logo.png');

        return view('personal',compact('artist','photos'));
    }



    public function contactme(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',                        // just a normal required validation
            'email' => 'required|email|max:100',     // required and must be unique in the ducks table
            'phone' => 'required',
            'city' => 'required',          // required and has to match the password field
            'message' => 'required|max:1000|min:10',          // required and has to match the password field

        ],
            [
                'name.required' => 'Name is required!',                        // just a normal required validation
                'email.required' => 'Email is required!',     // required and must be unique in the ducks table
                'email.email' => 'Please enter a valid email',     // required and must be unique in the ducks table
                'phone.required' => 'Phone is required!',
                'city.required' => 'City is required!',          // required and has to match the password field
                'message.required' => 'Message is required!',          // required and has to match the password field
                'message.min' => 'Message should be minimum 10 characters',          // required and has to match the password field
                'message.max' => 'Message should be maximum 1000 characters',          // required and has to match the password field
            ]

        );

        if ($validator->fails()) {
            return redirect(url()->previous() .'#contactform')
                ->withErrors($validator)
                ->withInput();
        }


        $data = $validator->validated();
        $apply = new applicant();
        $apply->name = $request->name;
        $apply->email = $request->email;
        $apply->phone = $request->phone;
        $apply->city = $request->city;
        $apply->message = $request->message;
        $save = $apply->save();

        //try {
        $subject='New contact form';

        //try {

        MailController::sendApplicantEmail($subject,$apply->name,$apply->email,$apply->phone,$apply->city,$apply->message);

        //} catch (\Exception $e) {

        //    print($e);
        //}


        if ($save) {

            return redirect(url()->previous() .'#contactform')
                ->with('success', 'Success, Your message has been sent.');
        } else {
            return back()->with('danger', 'An unexpected error has occurred please try again later!');
        }


    }
    public function joinusform(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',                        // just a normal required validation
            'email' => 'required|email|max:100',     // required and must be unique in the ducks table
            'phone' => 'required',
            'city' => 'required',          // required and has to match the password field
            'message' => 'required|max:1000|min:10',
            'agreement'=>'required_without_all'

            // required and has to match the password field

        ],
            [
                'name.required' => 'Name is required!',                        // just a normal required validation
                'email.required' => 'Email is required!',     // required and must be unique in the ducks table
                'email.email' => 'Please enter a valid email',     // required and must be unique in the ducks table
                'phone.required' => 'Phone is required!',
                'city.required' => 'City is required!',          // required and has to match the password field
                'message.required' => 'Message is required!',          // required and has to match the password field
                'message.min' => 'Message should be minimum 10 characters',          // required and has to match the password field
                'message.max' => 'Message should be maximum 1000 characters',
                'agreement.required_without_all'=>'You should agree to Oriartist Terms and agreement'
                // required and has to match the password field
            ]

        );



        if ($validator->fails()) {
            return redirect(url()->previous() .'#joinusform')
                ->withErrors($validator)
                ->withInput();
        }




        //$data = $validator->validated();
        $fields=[];
        if($request->has('singer')){
            array_push($fields,'Singer');
        }
        if($request->has('dj')){
            array_push($fields,' DJ');
        }
        if($request->has('dq')){
            array_push($fields,' Drag Queens');
        }
        if($request->has('dancer')){
            array_push($fields,' Dancer');
        }
        if($request->has('musicians')){
            array_push($fields,' Musicians');
        }
        if($request->has('specialacts')){
            array_push($fields,' Special Acts');
        }

        $field = implode(', ', $fields);

        $apply = new Join();
        $apply->name = $request->name;
        $apply->email = $request->email;
        $apply->phone = $request->phone;
        $apply->city = $request->city;
        $apply->message = $request->message;
        $apply->website = $request->website;
        $apply->youtube = $request->youtube;
        $apply->facebook = $request->facebook;
        $apply->instagram = $request->instagram;
        $apply->fields = $field;
        $save = $apply->save();

        //try {
        $subject='New form to join us';

        //try {

        MailController::sendApplicantEmail($subject,$apply->name,$apply->email,$apply->phone,$apply->city,$apply->message);


        //} catch (\Exception $e) {

        //    print($e);
        //}


        if ($save) {

            return redirect(url()->previous() .'#submitmessage')
                ->with('success', 'Success, Your message has been sent.');
        } else {
            return back()->with('danger', 'An unexpected error has occurred please try again later!');
        }


    }
    public function bookartistform(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',                        // just a normal required validation
            'email' => 'required|email|max:100',     // required and must be unique in the ducks table
            'phone' => 'required',
            'city' => 'required',          // required and has to match the password field
            'message' => 'required|max:1000|min:10',
            'agreement'=>'required_without_all'

            // required and has to match the password field

        ],
            [
                'name.required' => 'Name is required!',                        // just a normal required validation
                'email.required' => 'Email is required!',     // required and must be unique in the ducks table
                'email.email' => 'Please enter a valid email',     // required and must be unique in the ducks table
                'phone.required' => 'Phone is required!',
                'city.required' => 'City is required!',          // required and has to match the password field
                'message.required' => 'Message is required!',          // required and has to match the password field
                'message.min' => 'Message should be minimum 10 characters',          // required and has to match the password field
                'message.max' => 'Message should be maximum 1000 characters',
                'agreement.required_without_all'=>'You should agree to Oriartist Terms and agreement'
                // required and has to match the password field
            ]

        );



        if ($validator->fails()) {
            return redirect(url()->previous() .'#bookartistform')
                ->withErrors($validator)
                ->withInput();
        }




        //$data = $validator->validated();
        $fields=[];
        if($request->has('singer')){
            array_push($fields,'Singer');
        }
        if($request->has('dj')){
            array_push($fields,' DJ');
        }
        if($request->has('dq')){
            array_push($fields,' Drag Queens');
        }
        if($request->has('dancer')){
            array_push($fields,' Dancer');
        }
        if($request->has('musicians')){
            array_push($fields,' Musicians');
        }
        if($request->has('specialacts')){
            array_push($fields,' Special Acts');
        }

        $field = implode(', ', $fields);

        $apply = new Book_artist();
        $apply->name = $request->name;
        $apply->email = $request->email;
        $apply->phone = $request->phone;
        $apply->city = $request->city;
        $apply->message = $request->message;
        $apply->event_date = $request->event_date;
        $apply->event_type = $request->event_type;
        $apply->fields = $field;
        $save = $apply->save();
        $subject ="New form of booking an artist";


        //try {
        //$data = [
        //    'subject' => 'New form of booking an artist',
        //    'email1' => $request->email,
        //    'email' => "osmyildiz@gmail.com",
        //    'name' => $request->name,
        //    'phone' => $request->phone,
        //    'message1' => $request->message,
        //    'city' => $request->city,
        //];
        //
        //
        //Mail::send('email', $data, function ($message) use ($data) {
        //    $message->to($data['email'])
        //        ->subject($data['subject']);
        //});
        //
        MailController::sendApplicantEmail($subject,$apply->name,$apply->email,$apply->phone,$apply->city,$apply->message);


        //} catch (\Exception $e) {

        //    print($e);
        //}


        if ($save) {

            return redirect(url()->previous() .'#submitmessage')
                ->with('success', 'Success, Your message has been sent.');
        } else {
            return back()->with('danger', 'An unexpected error has occurred please try again later!');
        }


    }
    public function bookartistform1(Request $request,$id)
    {


        $validator = Validator::make($request->all(), [
            'name' => 'required',                        // just a normal required validation
            'email' => 'required|email|max:100',     // required and must be unique in the ducks table
            'phone' => 'required',
            'city' => 'required',          // required and has to match the password field
            'message' => 'required|max:1000|min:10',
            'agreement'=>'required_without_all'

            // required and has to match the password field

        ],
            [
                'name.required' => 'Name is required!',                        // just a normal required validation
                'email.required' => 'Email is required!',     // required and must be unique in the ducks table
                'email.email' => 'Please enter a valid email',     // required and must be unique in the ducks table
                'phone.required' => 'Phone is required!',
                'city.required' => 'City is required!',          // required and has to match the password field
                'message.required' => 'Message is required!',          // required and has to match the password field
                'message.min' => 'Message should be minimum 10 characters',          // required and has to match the password field
                'message.max' => 'Message should be maximum 1000 characters',
                'agreement.required_without_all'=>'You should agree to Oriartist Terms and agreement'
                // required and has to match the password field
            ]

        );


        if ($validator->fails()) {
            return redirect(url()->previous() .'#bookartistform')
                ->withErrors($validator)
                ->withInput();
        }
        $artist = Artist::find($id);





        //$data = $validator->validated();

        $message = "This form has been filled on ".$artist->name.' '.$artist->surname."'s personal page";



        $apply = new Book_artist();
        $apply->name = $request->name;
        $apply->email = $request->email;
        $apply->phone = $request->phone;
        $apply->city = $request->city;
        $apply->message = $message." message:".$request->message;
        $apply->event_date = $request->event_date;
        $apply->event_type = $request->event_type;
        $apply->fields = "";
        $save = $apply->save();
        $subject ="New form of booking an artist";


        //try {
        //$data = [
        //    'subject' => 'New form of booking an artist',
        //    'email1' => $request->email,
        //    'email' => "osmyildiz@gmail.com",
        //    'name' => $request->name,
        //    'phone' => $request->phone,
        //    'message1' => $request->message,
        //    'city' => $request->city,
        //];
        //
        //
        //Mail::send('email', $data, function ($message) use ($data) {
        //    $message->to($data['email'])
        //        ->subject($data['subject']);
        //});
        //
        MailController::sendApplicantEmail($subject,$apply->name,$apply->email,$apply->phone,$apply->city,$apply->message);


        //} catch (\Exception $e) {

        //    print($e);
        //}


        if ($save) {

            return redirect(url()->previous() .'#submitmessage')
                ->with('success', 'Success, Your message has been sent.');
        } else {
            return back()->with('danger', 'An unexpected error has occurred please try again later!');
        }


    }



}
