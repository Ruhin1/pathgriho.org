<?php

namespace App\Helper;

use App\Models\AppSettings;
use App\Models\Blog;
use App\Models\ClientNavigationMenu;
use App\Models\Slider;

class AdditionalResources {
  /** 
  * @uses appInfoData get frontend and backend app info data.
  */
  public static function appInfo(string|NULL $key = null){
    $app_info = AppSettings::latest('id')->first();

    $title = isset($app_info->title) ? $app_info->title : 'Laravel';
    $fb_group = isset($app_info->home_title) ? $app_info->home_title : '';
    $fb_iframe_title = isset($app_info->faq_title) ? $app_info->faq_title : '';
    $contact_title = isset($app_info->services_title) ? $app_info->services_title : '';
    $about_title = isset($app_info->about_title) ? $app_info->about_title : '';
    $cp_reserver = isset($app_info->search_title) ? $app_info->search_title : '';
    $app_name = isset($app_info->basic_title_five) ? $app_info->basic_title_five : '';
    $services_title_one = isset($app_info->services_title_one) ? $app_info->services_title_one : '';
    $services_title_two = isset($app_info->services_title_two) ? $app_info->services_title_two : '';
    $secondary_email = isset($app_info->basic_title_one) ? $app_info->basic_title_one : '';
    $fb_group_iframe = isset($app_info->basic_title_two) ? $app_info->basic_title_two : '';
    $address = isset($app_info->basic_title_three) ? $app_info->basic_title_three : '';
    $footer_description = isset($app_info->basic_title_four) ? $app_info->basic_title_four : '';

    $logo = isset($app_info->logo) ? asset($app_info->logo) : '';
    $blog_bg_image = isset($app_info->secondary_logo) ? asset($app_info->secondary_logo) : '';
    $favicon = isset($app_info->favicon) ? asset($app_info->favicon) : '';
    $banner_image = isset($app_info->banner_image) ? asset($app_info->banner_image) : '';
    $running_bike_image = isset($app_info->banner_animation_image) ? asset($app_info->banner_animation_image) : '';
    $map_image = isset($app_info->map_image) ? asset($app_info->map_image) : '';
    $footer_image = isset($app_info->footer_image) ? asset($app_info->footer_image) : '';
    $footer_bg_image = isset($app_info->footer_animation_image) ? asset($app_info->footer_animation_image) : '';

    $threads = isset($app_info->threads) ? $app_info->threads : '';
    $instagram = isset($app_info->instagram) ? $app_info->instagram : '';
    $facebook = isset($app_info->facebook) ? $app_info->facebook : '';
    $youtube = isset($app_info->youtube) ? $app_info->youtube : '';
    $whatsapp = isset($app_info->whatsapp) ? $app_info->whatsapp : '';
    $twitter = isset($app_info->twitter) ? $app_info->twitter : '';
    $linkedin = isset($app_info->linkedin) ? $app_info->linkedin : '';
    $pinterest = isset($app_info->pinterest) ? $app_info->pinterest : '';
    $map_url = isset($app_info->map_url) ? $app_info->map_url : '';
    $primary_phone = isset($app_info->phone_one) ? $app_info->phone_one : '';
    $secondary_phone = isset($app_info->phone_two) ? $app_info->phone_two : '';
    $primary_email = isset($app_info->email) ? $app_info->email : '';
    $meta_title = isset($app_info->meta_title) ? $app_info->meta_title : '';
    $meta_keyword = isset($app_info->meta_keyword) ? $app_info->meta_keyword : '';
    $meta_description = isset($app_info->meta_description) ? $app_info->meta_description : '';

    $data = ['title'=> $title, 'threads'=> $threads, 'instagram'=> $instagram, 'fb_group'=> $fb_group, 'fb_iframe_title'=> $fb_iframe_title, 'contact_title'=> $contact_title, 'about_title'=> $about_title, 'cp_reserver'=> $cp_reserver, 'app_name'=> $app_name, 'services_title_one'=> $services_title_one, 'services_title_two'=> $services_title_two, 'address'=> $address, 'fb_group_iframe'=> $fb_group_iframe, 'secondary_email'=> $secondary_email, 'footer_description'=> $footer_description, 'logo'=> $logo, 'blog_bg_image'=> $blog_bg_image, 'favicon'=> $favicon, 'banner_image'=> $banner_image, 'footer_bg_image'=> $footer_bg_image, 'map_image'=> $map_image, 'footer_image'=> $footer_image, 'running_bike_image'=> $running_bike_image, 'facebook'=> $facebook, 'youtube'=> $youtube, 'whatsapp'=> $whatsapp, 'twitter'=> $twitter, 'linkedin'=> $linkedin, 'pinterest'=> $pinterest, 'map_url'=> $map_url, 'primary_phone'=> $primary_phone, 'secondary_phone'=> $secondary_phone, 'primary_email'=> $primary_email, 'meta_title'=> $meta_title, 'meta_keyword'=> $meta_keyword, 'meta_description'=> $meta_description];

    if($key){
      return isset($data[$key]) ? $data[$key] : 'undefined';
    }

    return $data;
  } 

  /**
   * @uses self::function ClientsRoute
   */
  public static function ClientsRoute(){}

  /**
   * @uses self::function ClientNavigation Menu
   */
  public static function ClientNavigationMenu(string|int|null $id = 0, string $type = "parent"){
    $data = ['status'=> false, 'message'=> 'There has no data founded!', 'data'=> null];

    if($type == "parent"){
      $data['status'] = true;
      $data['data'] = ClientNavigationMenu::where("parent_id", null)->oldest('serial')->get();
      return $data;
    }
    
    if($type == "parent_id"){

      if(!$id) $data['message'] = 'The id has must required to get the child/parent/children menu!';
      $data = ClientNavigationMenu::where($type, $id)->where("child_id", null)->oldest('serial')->get();
      return $data;
    }

    if($type == "child_id"){

      if(!$id) $data['message'] = 'The id has must required to get the child/parent/children menu!';
      $data = ClientNavigationMenu::where($type, $id)->oldest('serial')->get();
      return $data;
    }

    return $data;
  }

  public static function HomePageSlider(){
    return Slider::oldest('serial')->get();
  }

  public static function Blog(string $type){
    return Blog::where('type', $type)->first();
  }
}