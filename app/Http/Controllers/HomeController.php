<?php

namespace App\Http\Controllers;

use App\Models\Binhluan;
use App\Models\Category;
use App\Models\like;
use App\Models\PropertiCategory;
use App\Models\Tintuc;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\tin;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    public function index(){
        $xahoi = Category::where('slug','xa-hoi')->first();
        $thegioi = Category::where('slug','the-gioi')->first();
        $congnghe = Category::where('slug','cong-nghe')->first();
        $giaoduc = Category::where('slug','giao-duc')->first();
        $thethao = Category::where('slug','the-thao')->first();
        $congnghe = Category::where('slug','cong-nghe')->first();
        $khoahoc = Category::where('slug','khoa-hoc')->first();
        $doisong = Category::where('slug','doi-song')->first();
        $phapluat = Category::where('slug','phap-luat')->first();
        $giaitri = Category::where('slug','giai-tri')->first();
        $kinhte = Category::where('slug','kinh-te')->first();
      
        
        $duyet = 1;
        $thoisu = 1;
        $nghethuat = 5;
        $category = Category::all();
        $properti = PropertiCategory::all();
        $tintuc = Tintuc::all();
        $user = User::all();

        $f_f_e = Tintuc::orderBy('created_at','DESC')->where('trangthai',$duyet)->take(1)->get();
        $t_s_f = Tintuc::where('id_properticategory',$thoisu)
        ->orderBy('created_at','DESC')
        ->where('trangthai',$duyet)->take(1)->get();

        $e_t_z = Tintuc::where('id_properticategory',$nghethuat)
        ->orderBy('created_at','DESC')
        ->where('trangthai',$duyet)->take(1)->get();

        
        $the_gioi = Tintuc::where('id_category',$thegioi->id)->where('trangthai',$duyet)->orderBy('luotxem','DESC')->take(1)->get();
        $the_gioi2 = Tintuc::where('id_category',$thegioi->id)->where('trangthai',$duyet)->orderBy('created_at','DESC')->take(2)->get();
        $the_gioi3 = Tintuc::where('id_category',$thegioi->id)->where('trangthai',$duyet)->orderBy('created_at','ASC')->take(2)->get();


        $cong_nghe = Tintuc::where('id_category',$congnghe->id)->where('trangthai',$duyet)->orderBy('luotxem','DESC')->take(1)->get();
        $cong_nghe2= Tintuc::where('id_category',$congnghe->id)->where('trangthai',$duyet)->orderBy('created_at','DESC')->take(4)->get();
        
        $giao_duc = Tintuc::where('id_category',$giaoduc->id)->where('trangthai',$duyet)->orderBy('luotxem','DESC')->take(1)->get();
        $giao_duc2 = Tintuc::where('id_category',$giaoduc->id)->where('trangthai',$duyet)->orderBy('created_at','DESC')->take(2)->get();
        $giao_duc3 = Tintuc::where('id_category',$giaoduc->id)->where('trangthai',$duyet)->orderBy('created_at','ASC')->take(2)->get();


        $the_thao = Tintuc::where('id_category',$thethao->id)->where('trangthai',$duyet)->orderBy('luotxem','DESC')->take(1)->get();
        $the_thao2= Tintuc::where('id_category',$thethao->id)->where('trangthai',$duyet)->orderBy('created_at','DESC')->take(2)->get();
        $the_thao3= Tintuc::where('id_category',$thethao->id)->where('trangthai',$duyet)->orderBy('created_at','DESC')->take(2)->get();

        $khoa_hoc = Tintuc::where('id_category',$khoahoc->id)->where('trangthai',$duyet)->orderBy('luotxem','DESC')->take(1)->get();
        $khoa_hoc2= Tintuc::where('id_category',$khoahoc->id)->where('trangthai',$duyet)->orderBy('created_at','DESC')->take(4)->get();
        
        $phap_luat = Tintuc::where('id_category',$phapluat->id)->where('trangthai',$duyet)->orderBy('luotxem','DESC')->take(1)->get();
        $phap_luat2= Tintuc::where('id_category',$phapluat->id)->where('trangthai',$duyet)->orderBy('created_at','DESC')->take(2)->get();
        $phap_luat3= Tintuc::where('id_category',$phapluat->id)->where('trangthai',$duyet)->orderBy('created_at','DESC')->take(2)->get();

        $doi_song = Tintuc::where('id_category',$doisong->id)->where('trangthai',$duyet)->orderBy('luotxem','DESC')->take(1)->get();
        $doi_song2= Tintuc::where('id_category',$doisong->id)->where('trangthai',$duyet)->orderBy('created_at','DESC')->take(4)->get();
        
        $kinh_te = Tintuc::where('id_category',$kinhte->id)->where('trangthai',$duyet)->orderBy('luotxem','DESC')->take(1)->get();
        $kinh_te2= Tintuc::where('id_category',$kinhte->id)->where('trangthai',$duyet)->orderBy('created_at','DESC')->take(3)->get();

        $giai_tri = Tintuc::where('id_category',$giaitri->id)->where('trangthai',$duyet)->orderBy('created_at','DESC')->take(3)->get();
        
        
       

      

        $video  = Tintuc::where('video','!=','null')->where('trangthai',$duyet)->orderBy('luotxem','DESC')->take(1)->get();
        $video2  = Tintuc::where('video','!=','null')->where('trangthai',$duyet)->orderBy('created_at','DESC')->take(4)->get();

        


        return view('home.layouts.home',compact('video2','video','kinh_te2','kinh_te','giai_tri','phap_luat3','phap_luat2','phap_luat','doi_song2','doi_song','khoa_hoc2','khoa_hoc','the_thao3','the_thao2','giao_duc3',
                                    'giao_duc2','the_thao','giao_duc','cong_nghe2','the_gioi3','the_gioi2','cong_nghe','the_gioi','e_t_z',
                                    't_s_f','f_f_e','category','properti','user'));
    }
    public function contact(){
        return view('home.contact');
    }
    public function details($slug){
        $tin = Tintuc::where('slug',$slug)->first();
        $tin->increment('luotxem');
        
        

        $user = User::all();
       // $checkbinhluan = Binhluan::where('id_tintuc',$tin->id)->first();
        $xuhuong = Tintuc::orderBy('created_at','ASC')->take(4)->get();
        //$binhluan = Binhluan::where('id_tintuc',$tin->id)->get();
       // $binhluansibar = Binhluan::orderBy('created_at','DESC')->take(4)->get();
        $ketiep = Tintuc::where('id_category',$tin->id_category)->take(2)->get();
        $luachon = Tintuc::orderBy('luotxem','ASC')->take(4)->get();
        $like = Tintuc::where('id_properticategory',$tin->id_properticategory)->orderBy('luotxem','DESC')->take(2)->get();
        if(Auth::check()){
            $likes = like::where('id_user',Auth::user()->id)->where('id_tintuc',$tin->id)->where('like','1')->first();
            return view('home.post-details',compact('likes','luachon','checkbinhluan','binhluan','like','ketiep','slug','tin','user','xuhuong','binhluansibar'));
        }
        return view('home.post-details',compact('like','luachon','like','ketiep','slug','tin','user','xuhuong'));
    }
    public function profile(){
        return view('home.profile');
    }
}
