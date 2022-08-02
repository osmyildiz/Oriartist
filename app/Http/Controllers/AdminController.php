<?php

namespace App\Http\Controllers;

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
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use function PHPUnit\Framework\exactly;


class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function root()
    {

            return view('admin.index');

    }
    public function home()
    {

        return view('admin.index');

    }
    public function slider()
    {
        $sliders = Slider::get();

        return view('admin.slider',compact('sliders'));

    }
    public function add_slider(Request $request)
    {
        if($request->is_active=="on"){
            $is_active =1;
        }else{
            $is_active =0;
        }
        if($request->is_video=="on"){
            $is_video =1;
        }else{
            $is_video =0;
        }
        $slider = new Slider();
        $slider->uptitle = $request->uptitle;
        $slider->downtitle = $request->downtitle;
        $slider->is_active = $is_active;
        $slider->is_video = $is_video;
        $slider->priority = $request->priority;

        //$slider->slug_tr = Str::slug($request->name_tr);
        //$slider->slug_en = Str::slug($request->name_en);

        if($request->hasFile('url')){
            $id = mt_rand(1000, 9999);
            $imageName = $id."_".time().'.'.$request->url->extension();
            $request->url->move(public_path("/assets1/images/"), $imageName);
            $slider->url = "/assets1/images/".$imageName;
        }


        $save = $slider->save();

        if($save){
            return back()->with('success', 'New slider has been added.');
        }
        return back()->with('danger', 'An unexpected error occured. Please try again.!!');

    }
    public function slider_edit($id)
    {
        $slider = Slider::find($id);

        return view('admin.slider-edit',compact('slider'));

    }
    public function slider_update(Request $request,$id)
    {


        if($request->is_active=="on"){
            $is_active =1;
        }else{
            $is_active =0;
        }
        if($request->is_video=="on"){
            $is_video =1;
        }else{
            $is_video =0;
        }
        $slider =  Slider::find($id);

        $slider->uptitle = $request->uptitle;
        $slider->downtitle = $request->downtitle;
        $slider->is_active = $is_active;
        $slider->is_video = $is_video;
        $slider->priority = $request->priority;

        //$slider->slug_tr = Str::slug($request->name_tr);
        //$slider->slug_en = Str::slug($request->name_en);

        if($request->hasFile('url')){
            $id = mt_rand(1000, 9999);
            $imageName = $id."_".time().'.'.$request->url->extension();
            $request->url->move(public_path("/assets1/images/"), $imageName);
            $slider->url = "/assets1/images/".$imageName;
        }

        //$slider->slug_tr = Str::slug($request->name_tr);
        //$slider->slug_en = Str::slug($request->name_en);


        $save = $slider->save();

        if($save){
            return back()->with('success', 'The slider has been updated.');

        }

        return back()->with('danger', 'An unexpected error occured. Please try again.!!');


    }
    public function slider_delete($id)
    {
        $res = Slider::destroy($id);


        if($res){
            return back()->with('success', 'Selected slider has been deleted.');

        }

        return back()->with('danger', 'An unexpected error occured. Please try again.!');


    }

    public function testimonial()
    {
        $records = Testimonial::get();

        return view('admin.testimonial',compact('records'));

    }

    public function add_testimonial(Request $request)
    {
        if($request->is_active=="on"){
            $is_active =1;
        }else{
            $is_active =0;
        }

        $slider = new Testimonial();
        $slider->name = $request->name;
        $slider->title = $request->title;
        $slider->comment = $request->comment;
        $slider->is_active = $is_active;
        $slider->priority = $request->priority;

        //$slider->slug_tr = Str::slug($request->name_tr);
        //$slider->slug_en = Str::slug($request->name_en);

        if($request->hasFile('img')){
            $id = mt_rand(1000, 9999);
            $imageName = $id."_".time().'.'.$request->img->extension();
            $request->img->move(public_path("/assets1/images/"), $imageName);
            $slider->img = "/assets1/images/".$imageName;
        }


        $save = $slider->save();

        if($save){
            return back()->with('success', 'New record has been added.');
        }
        return back()->with('danger', 'An unexpected error occured. Please try again.!!');

    }
    public function testimonial_edit($id)
    {
        $record = Testimonial::find($id);

        return view('admin.testimonial-edit',compact('record'));

    }
    public function testimonial_update(Request $request,$id)
    {


        if($request->is_active=="on"){
            $is_active =1;
        }else{
            $is_active =0;
        }

        $record =  Testimonial::find($id);

        $record->name = $request->name;
        $record->title = $request->title;
        $record->comment = $request->comment;
        $record->is_active = $is_active;
        $record->priority = $request->priority;

        //$slider->slug_tr = Str::slug($request->name_tr);
        //$slider->slug_en = Str::slug($request->name_en);

        if($request->hasFile('img')){
            $id = mt_rand(1000, 9999);
            $imageName = $id."_".time().'.'.$request->img->extension();
            $request->img->move(public_path("/assets1/images/"), $imageName);
            $record->img = "/assets1/images/".$imageName;
        }

        //$slider->slug_tr = Str::slug($request->name_tr);
        //$slider->slug_en = Str::slug($request->name_en);


        $save = $record->save();

        if($save){
            return back()->with('success', 'The record has been updated.');

        }

        return back()->with('danger', 'An unexpected error occured. Please try again.!!');


    }
    public function testimonial_delete($id)
    {
        $res = Testimonial::destroy($id);


        if($res){
            return back()->with('success', 'Selected record has been deleted.');

        }

        return back()->with('danger', 'An unexpected error occured. Please try again.!');


    }

    public function oriartistmentoring()
    {
        $record = About::find(1);

        return view('admin.oriartistmentoring',compact('record'));

    }
    public function oriartistmentoring_update(Request $request)
    {
        $record =  About::find(1);
        $record->title = $request->title;
        $record->first_paragraph = $request->first_paragraph;
        $record->second_paragraph = $request->second_paragraph;
        $record->meta_title = $request->meta_title;
        $record->meta_keywords = $request->meta_keywords;
        $record->meta_description = $request->meta_description;

        //$slider->slug_tr = Str::slug($request->name_tr);
        //$slider->slug_en = Str::slug($request->name_en);

        if($request->hasFile('img')){
            $id = mt_rand(1000, 9999);
            $imageName = $id."_".time().'.'.$request->img->extension();
            $request->img->move(public_path("/assets1/images/"), $imageName);
            $record->img = "/assets1/images/".$imageName;
        }

        //$slider->slug_tr = Str::slug($request->name_tr);
        //$slider->slug_en = Str::slug($request->name_en);


        $save = $record->save();

        if($save){
            return back()->with('success', 'The record has been updated.');

        }

        return back()->with('danger', 'An unexpected error occured. Please try again.!!');


    }

    public function hello()
    {
        $record = Hello::find(1);

        return view('admin.hello',compact('record'));

    }
    public function hello_update(Request $request)
    {
        $record =  Hello::find(1);
        $record->title = $request->title;
        $record->first_paragraph = $request->first_paragraph;
        $record->second_paragraph = $request->second_paragraph;
        $record->quote = $request->quote;
        $record->meta_title = $request->meta_title;
        $record->meta_keywords = $request->meta_keywords;
        $record->meta_description = $request->meta_description;

        //$slider->slug_tr = Str::slug($request->name_tr);
        //$slider->slug_en = Str::slug($request->name_en);

        if($request->hasFile('sign_url')){
            $id = mt_rand(1000, 9999);
            $imageName = $id."_".time().'.'.$request->sign_url->extension();
            $request->sign_url->move(public_path("/assets1/images/"), $imageName);
            $record->sign_url = "/assets1/images/".$imageName;
        }

        //$slider->slug_tr = Str::slug($request->name_tr);
        //$slider->slug_en = Str::slug($request->name_en);


        $save = $record->save();

        if($save){
            return back()->with('success', 'The record has been updated.');

        }

        return back()->with('danger', 'An unexpected error occured. Please try again.!!');


    }

    public function contact()
    {
        $record = contact::find(1);

        return view('admin.contact',compact('record'));

    }
    public function contact_update(Request $request)
    {
        $record =  contact::find(1);
        $record->phone = $request->phone;
        $record->address = $request->address;
        $record->email = $request->email;
        $record->instagram = $request->instagram;
        $record->facebook = $request->facebook;
        $record->twitter = $request->twitter;
        $record->youtube = $request->youtube;


        $save = $record->save();

        if($save){
            return back()->with('success', 'The record has been updated.');

        }

        return back()->with('danger', 'An unexpected error occured. Please try again.!!');


    }

    public function joinusforms()
    {
        $records = Join::orderBy('id','DESC')->get();

        return view('admin.joinusforms',compact('records'));

    }

    public function joinuspage()
    {
        $record = JoinPage::find(1);

        return view('admin.joinuspage',compact('record'));

    }
    public function joinuspage_update(Request $request)
    {
        $record =  JoinPage::find(1);
        $record->title = $request->title;
        $record->first_paragraph = $request->first_paragraph;
        $record->second_paragraph = $request->second_paragraph;
        $record->meta_title = $request->meta_title;
        $record->meta_keywords = $request->meta_keywords;
        $record->meta_description = $request->meta_description;


        $save = $record->save();

        if($save){
            return back()->with('success', 'The record has been updated.');

        }

        return back()->with('danger', 'An unexpected error occured. Please try again.!!');


    }

    public function contactforms()
    {
        $records = applicant::orderBy('id','DESC')->get();

        return view('admin.contactforms',compact('records'));

    }
    public function bookartistforms()
    {
        $records = Book_artist::orderBy('id','DESC')->get();

        return view('admin.bookartistforms',compact('records'));

    }

    public function bookartistpage()
    {
        $record = BookArtistPage::find(1);

        return view('admin.bookartistpage',compact('record'));

    }
    public function bookartistpage_update(Request $request)
    {
        $record =  BookArtistPage::find(1);
        $record->title = $request->title;
        $record->first_paragraph = $request->first_paragraph;
        $record->second_paragraph = $request->second_paragraph;
        $record->meta_title = $request->meta_title;
        $record->meta_keywords = $request->meta_keywords;
        $record->meta_description = $request->meta_description;

        $save = $record->save();

        if($save){
            return back()->with('success', 'The record has been updated.');

        }

        return back()->with('danger', 'An unexpected error occured. Please try again.!!');


    }


    public function bookoriartistpage()
    {
        $record = Bookoriartistpage::find(1);

        return view('admin.bookoriartistpage',compact('record'));

    }
    public function bookoriartistpage_update(Request $request)
    {
        $record =  Bookoriartistpage::find(1);
        $record->title = $request->title;
        $record->first_paragraph = $request->first_paragraph;
        $record->second_paragraph = $request->second_paragraph;
        $record->meta_title = $request->meta_title;
        $record->meta_keywords = $request->meta_keywords;
        $record->meta_description = $request->meta_description;

        $save = $record->save();

        if($save){
            return back()->with('success', 'The record has been updated.');

        }

        return back()->with('danger', 'An unexpected error occured. Please try again.!!');


    }


    public function service()
    {
        $records = Service::get();

        return view('admin.service',compact('records'));

    }
    public function add_service(Request $request)
    {
        if($request->is_active=="on"){
            $is_active =1;
        }else{
            $is_active =0;
        }

        $slider = new Service();
        $slider->name = $request->name;
        $slider->whom = $request->whom;
        $slider->is_active = $is_active;
        $slider->priority = $request->priority;

        //$slider->slug_tr = Str::slug($request->name_tr);
        //$slider->slug_en = Str::slug($request->name_en);


        $save = $slider->save();

        if($save){
            return back()->with('success', 'New record has been added.');
        }
        return back()->with('danger', 'An unexpected error occured. Please try again.!!');

    }
    public function service_edit($id)
    {
        $record = Service::find($id);

        return view('admin.service-edit',compact('record'));

    }
    public function service_update(Request $request,$id)
    {


        if($request->is_active=="on"){
            $is_active =1;
        }else{
            $is_active =0;
        }

        $record =  Service::find($id);

        $record->name = $request->name;
        $record->whom = $request->whom;
        $record->is_active = $is_active;
        $record->priority = $request->priority;


        $save = $record->save();

        if($save){
            return back()->with('success', 'The record has been updated.');

        }

        return back()->with('danger', 'An unexpected error occured. Please try again.!!');


    }
    public function service_delete($id)
    {
        $res = Service::destroy($id);


        if($res){
            return back()->with('success', 'Selected record has been deleted.');

        }

        return back()->with('danger', 'An unexpected error occured. Please try again.!');


    }

    public function artists()
    {
        $records = Artist::get();

        return view('admin.artists',compact('records'));

    }

    public function add_artist_page()
    {
        $records = Artist::get();

        return view('admin.add_artist_page',compact('records'));

    }


    public function artist_edit($id)
    {
        $photos= Photo::where('artist_id',$id)->get();
        $fields= Field::where('artist_id',$id)->get();
        $categories= Category::all();

        $record = Artist::find($id);
        //echo "<pre>";
        //print_r($photos);
        //echo "</pre>";
        //
        //die();
        $fi=[];
        foreach ($fields as $field){

            array_push($fi,$field->category_id);

        }


        return view('admin.artist-edit',compact('record','photos','fields','categories','fi'));

    }
    public function artist_add_page()
    {
        $categories= Category::all();
        $data = array('success' => '');


        return view('admin.artist-add-page',compact('categories','data'));

    }
    public function artist_update(Request $request,$id)
    {
        $field_no = [];
        for ($i=0;$i<7;$i++){
            $ch = 'checkbox_'.$i;
            if (isset($request->$ch)) {
                print_r($request->$ch);
                array_push($field_no,1);
            }else{
                array_push($field_no,0);
            }

        }


        if($request->is_active=="on"){
            $is_active =1;
        }else{
            $is_active =0;
        }

        $record =  Artist::find($id);

        $record->name = $request->name;
        $record->surname = $request->surname;
        $record->slug = Str::slug($request->name.'-'.$request->surname);
        $record->phone = $request->phone;
        $record->email = $request->email;
        $record->city = $request->city;
        $record->website = $request->website;
        $record->instagram = $request->instagram;
        $record->facebook = $request->facebook;
        $record->youtube = $request->youtube;
        $record->twitter = $request->twitter;
        $record->brief = $request->brief;
        $record->paragraph1 = $request->paragraph1;
        $record->paragraph2 = $request->paragraph2;
        $record->paragraph3 = $request->paragraph3;
        $record->paragraph4 = $request->paragraph4;
        $record->meta_keywords = $request->meta_keywords;
        $record->meta_description = $request->meta_description;
        $record->meta_title = $request->meta_title;
        $record->is_active = $is_active;
        $record->priority = $request->priority;
        if($request->hasFile('cover_img')){
            $id = mt_rand(1000, 9999);
            $imageName = $id."_".time().'.'.$request->cover_img->extension();
            $request->cover_img->move(public_path("/assets1/images/"), $imageName);
            $record->cover_img = "/assets1/images/".$imageName;
        }
        $save = $record->save();

        $delete = Field::where('artist_id',$id)->delete();
        foreach ($field_no as $key=>$fi){
            if($fi==1){
                $field = new Field();
                $field->artist_id = $id;
                $field->category_id=$key+1;
                $field->save();
            }
        }



        if($save){
            return back()->with('success', 'The record has been updated.');

        }

        return back()->with('danger', 'An unexpected error occured. Please try again.!!');


    }
    public function artist_add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',                        // just a normal required validation
            'cover_img' => 'required|image|max:10240',
            'brief' => 'required',


        ],
            [
                'name.required' => 'Name is required!',                        // just a normal required validation
                'brief.required' => 'Brief is required!',                        // just a normal required validation
                'cover_img.required' => 'Please upload an image',// just a normal required validation
                'cover_img.image' => 'The type of the uploaded file should be an image.',
                'cover_img.*.uploaded' => 'Failed to upload an image. The image maximum size is 10MB.',// just a normal required validation

            ]

        );


        if ($validator->fails()) {
            return redirect(url()->previous() .'#startform')
                ->withErrors($validator)
                ->withInput();
        }

        $field_no = [];
        for ($i=0;$i<7;$i++){
            $ch = 'checkbox_'.$i;
            if (isset($request->$ch)) {
                print_r($request->$ch);
                $f = new Field();
                array_push($field_no,1);
            }else{
                array_push($field_no,0);
            }

        }



        $record =  new Artist();

        $record->name = $request->name;
        $record->surname = $request->surname;
        $record->slug = Str::slug($request->name.'-'.$request->surname);
        $record->phone = $request->phone;
        $record->email = $request->email;
        $record->city = $request->city;
        $record->website = $request->website;
        $record->instagram = $request->instagram;
        $record->facebook = $request->facebook;
        $record->youtube = $request->youtube;
        $record->twitter = $request->twitter;
        $record->brief = $request->brief;
        $record->paragraph1 = $request->paragraph1;
        $record->paragraph2 = $request->paragraph2;
        $record->paragraph3 = $request->paragraph3;
        $record->paragraph4 = $request->paragraph4;
        $record->meta_keywords = $request->meta_keywords;
        $record->meta_description = $request->meta_description;
        $record->meta_title = $request->meta_title;
        $record->is_active = 1;
        $record->priority = $request->priority;

        if($request->hasFile('cover_img')){
            $id = mt_rand(1000, 9999);
            $imageName = $id."_".time().'.'.$request->cover_img->extension();
            $request->cover_img->move(public_path("/assets1/images/artists/"), $imageName);
            $record->cover_img = "/assets1/images/artists/".$imageName;
        }
        if($request->hasFile('video_url')){
            $id = mt_rand(1000, 9999);
            $imageName = $id."_".time().'.'.$request->video_url->extension();
            $request->video_url->move(public_path("/assets1/images/artists/videos/"), $imageName);
            $record->video_url = "/assets1/images/artists/videos/".$imageName;
        }
        $save = $record->save();


        if($save){

            $artist = Artist::latest()->first();
            //$artist = Artist::find(2);
            foreach ($field_no as $key=>$fi){
                if($fi==1){
                    $field = new Field();
                    $field->artist_id = $artist->id;
                    $field->category_id=$key+1;
                    $field->save();
                }
            }

            return view('admin.artist-add-photo',compact('artist'));
        }
        return back()->with('danger', 'An unexpected error occured. Please try again.!!');
    }
    public function artist_delete($id)
    {

        $res = Artist::destroy($id);
        $records = Artist::get();

        if($res){

            return view('admin.artists',compact('records'))->with('success', 'The record has been deleted.');;

        }

        return back()->with('danger', 'An unexpected error occured. Please try again.!');


    }
    public function finish()
    {
        $categories= Category::all();
        $data = array('success' => 'A new Artist has been added.');

        return view('admin.artist-add-page',compact('categories','data'));
    }

    public function photo_delete($id)
    {
        $res = Photo::destroy($id);


        if($res){
            return back()->with('success', 'Selected record has been deleted.');

        }

        return back()->with('danger', 'An unexpected error occured. Please try again.!');


    }
    public function add_photos(Request $request,$id)
    {
        $image = $request->file('file');
        $avatarName = $image->getClientOriginalName();
        $image->move(public_path('/assets1/images/artists/'),$avatarName);

        $imageUpload = new Photo();
        $imageUpload->img = "/assets1/images/artists/".$avatarName;
        $imageUpload->artist_id = $id;
        $imageUpload->is_active = 1;
        $imageUpload->save();
        return back()->with('success1', 'The image has been uploaded.');




    }

    public function whatweoffer_client()
    {
        $record = Offer_client::find(1);

        return view('admin.whatweofferclient',compact('record'));

    }
    public function whatweoffer_artist()
    {
        $record = Offer_artist::find(1);

        return view('admin.whatweofferartist',compact('record'));

    }
    public function whatweofferclient_update(Request $request)
    {
        $record =  Offer_client::find(1);
        $record->title = $request->title;
        $record->title2 = $request->title2;
        $record->quote = $request->quote;
        $record->paragraph1 = $request->paragraph1;
        $record->paragraph2 = $request->paragraph2;
        $record->paragraph3 = $request->paragraph3;

        $record->item1 = $request->item1;
        $record->item2 = $request->item2;
        $record->item3 = $request->item3;
        $record->item4 = $request->item4;

        $record->meta_title = $request->meta_title;
        $record->meta_keywords = $request->meta_keywords;
        $record->meta_description = $request->meta_description;

        $save = $record->save();

        if($save){
            return back()->with('success', 'The record has been updated.');

        }

        return back()->with('danger', 'An unexpected error occured. Please try again.!!');


    }
    public function whatweofferartist_update(Request $request)
    {
        $record =  Offer_artist::find(1);
        $record->title = $request->title;
        $record->title2 = $request->title2;
        $record->quote = $request->quote;
        $record->paragraph1 = $request->paragraph1;
        $record->paragraph2 = $request->paragraph2;
        $record->paragraph3 = $request->paragraph3;

        $record->item1 = $request->item1;
        $record->item2 = $request->item2;
        $record->item3 = $request->item3;
        $record->item4 = $request->item4;

        $record->meta_title = $request->meta_title;
        $record->meta_keywords = $request->meta_keywords;
        $record->meta_description = $request->meta_description;


        $save = $record->save();

        if($save){
            return back()->with('success', 'The record has been updated.');

        }

        return back()->with('danger', 'An unexpected error occured. Please try again.!!');


    }
    public function packages_artist()
    {
        $packages =Package::where('packages.is_client',0)->orderBy('priority','ASC')->get();
        $item1 =Package_item::where('package_id',1)->orderBy('priority','ASC')->get();
        $item2 =Package_item::where('package_id',2)->orderBy('priority','ASC')->get();
        $item3 =Package_item::where('package_id',3)->orderBy('priority','ASC')->get();



        return view('admin.packages_artist',compact('packages','item1','item2','item3'));

    }
    public function packages_client()
    {
        $packages =Package::where('packages.is_client',1)->orderBy('priority','ASC')->get();
        $item1 =Package_item::where('package_id',4)->orderBy('priority','ASC')->get();
        $item2 =Package_item::where('package_id',5)->orderBy('priority','ASC')->get();
        $item3 =Package_item::where('package_id',6)->orderBy('priority','ASC')->get();



        return view('admin.packages_client',compact('packages','item1','item2','item3'));

    }
    public function packages_update(Request $request,$id)
    {


        $package =Package::find($id);
        $name = 'packages'.$id.'_name';
        $top = 'packages'.$id.'_top_text';
        $bottom = 'packages'.$id.'_bottom_text';
        $package->name = $request->$name;
        $package->top_text = $request->$top;
        $package->bottom_text = $request->$bottom;


        $item_id = Package_item::selectRaw('id')->where('package_id',$id)->first();

        for($i=$item_id->id;$i<=$item_id->id+7;$i++){
            print_r("id:".$i);
            $item = Package_item::find($i);
            $itemname = 'item_name_'.$i;
            $item->name = $request->$itemname;
            $item->save();
        }


        $save = $package->save();


        if($save){
            return back()->with('success', 'The record has been updated.');

        }

        return back()->with('danger', 'An unexpected error occured. Please try again.!!');

    }


}
