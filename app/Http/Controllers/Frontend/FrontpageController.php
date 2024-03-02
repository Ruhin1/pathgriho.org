<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BoardMEmber;
use App\Models\Faq;
use App\Models\FaqOne;
use App\Models\ImageGallery;
use App\Models\JMCList;
use App\Models\MCList;
use App\Models\TeamTop;
use App\Models\VideoGallery;

class FrontpageController extends Controller
{
    public function home(){
        return view('layouts.frontend.app');
    }

    // Photo Gallery Page 
    public function photoGallery(){
        $datas = ImageGallery::select('id','title','image')->latest()->get();
        return view('frontend.photogallery',['datas'=>$datas]);
    }
    // Video Gallery Page 
    public function videoGallery(){
        $datas = VideoGallery::select('id','title','iframe')->latest()->get();
        return view('frontend.videogallery',['datas'=>$datas]);
    }
    // Team Page 
    public function teamPage(){
         $datatops = TeamTop::select('id','title','description','image')->latest()->first();
        $mclist = MCList::select('id','name','image','position')->latest()->get();
        $jmclist = JMCList::select('id','name','image','position')->latest()->get();
        $bordmember = BoardMEmber::select('id','name','image','position')->latest()->get();
        return view('frontend.teampage',['datatops'=>$datatops,'mclist'=>$mclist,'jmclist'=>$jmclist,'bordmember'=>$bordmember]);
    }
    // Faq Page 
    public function faqPage(){
        $totaldata = FaqOne::count();
        $halfcount = ceil($totaldata / 2);
        $data1 = FaqOne::take($halfcount)->get();
        $data2 = FaqOne::skip($halfcount)->take($halfcount)->get();
        return view('frontend.faq',['data1'=>$data1,'data2'=>$data2]);
    }
    // Contac Us Page
    public function contactUsPage(){
        
        return view('frontend.contactus');
    }
}