<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Blog;
use App\Models\BoardMEmber;
use App\Models\ContactUs;
use App\Models\FaqOne;
use App\Models\ImageGallery;
use App\Models\JMCList;
use App\Models\MCList;
use App\Models\NewsAndArticle;
use App\Models\SBPageBanner;
use App\Models\SBPageSticker;
use App\Models\SBPageXBanner;
use App\Models\TeamTop;
use App\Models\Testimonial;
use App\Models\VideoGallery;
use App\Models\WorkoutSection;
use App\Models\WorksAreaDetails;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function home(){
        $blogs = Blog::where('status', true)->where('type', 'primary')->oldest('serial')->get();
        $secondary_blogs = Blog::where('status', true)->where('type', 'secondary')->oldest('serial')->get();
        $featured_news_and_articles = NewsAndArticle::where('status', true)->where('type', 'featured')->oldest('serial')->get();
        $works_areas_details = WorksAreaDetails::where('status', true)->where('type', 'Home Page')->oldest('serial')->get();
        $testimonial = Testimonial::latest('id')->first();
        $workout_section = WorkoutSection::latest('id')->first();

        return view("client.home", compact("blogs", "testimonial", "secondary_blogs", "workout_section", "featured_news_and_articles", "works_areas_details"));
    }

    public function blog(){
        $blogs = Blog::where("status", true)->oldest("serial")->get();

        return view("client.blog", compact("blogs"));
    }
    
    public function singleBlog($slug){
        $main_blog = Blog::where("status", true)->where("slug", $slug)->first();
        $blogs = Blog::where("status", true)->latest("id")->take(3)->get();

        return view("client.single-blog", compact("blogs", "main_blog"));
    }

    public function imageGallery(){
        $image_galleries = ImageGallery::where("status", true)->oldest("serial")->get();
        return view("client.image-gallery", compact("image_galleries"));
    }

    public function videoGallery(){
        $video_galleries = VideoGallery::where("status", true)->oldest("serial")->get();
        return view("client.video-gallery", compact("video_galleries"));
    }

    public function team(){
        $team_banner = TeamTop::latest("id")->first();
        $board_members = BoardMEmber::where("status", true)->oldest("serial")->get();
        $junior_managements = JMCList::where("status", true)->oldest("serial")->get();
        $managements = MCList::where("status", true)->oldest("serial")->get();

        return view("client.team", compact("team_banner", "board_members", "junior_managements", "managements"));
    }

    public function faq(){
        $faqs = FaqOne::where("status", true)->oldest("serial")->get();
        return view("client.faq", compact("faqs"));
    }

    public function contact(){
        $contact = ContactUs::latest('id')->first();

        return view("client.contact", compact("contact"));
    }

    public function about(){
        $about = About::latest('id')->first();
        $about_connections = WorksAreaDetails::where('status', true)->where('type', 'About Page')->oldest('serial')->get();

        return view("client.about", compact("about", "about_connections"));
    }

    public function stickerAndBanner(){
        $banners = SBPageBanner::where("status", true)->oldest("serial")->get();
        $stickers = SBPageSticker::where("status", true)->oldest("serial")->get();
        $x_banners = SBPageXBanner::where("status", true)->oldest("serial")->get();
        return view("client.sticker-and-banner", compact("stickers", "banners", "x_banners"));
    }
}