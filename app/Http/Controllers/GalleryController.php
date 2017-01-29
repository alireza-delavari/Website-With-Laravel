<?php
/**
 * Created by PhpStorm.
 * User: alireza
 * Date: 1/26/17
 * Time: 12:19 PM
 */

namespace App\Http\Controllers;


class GalleryController extends Controller
{
    function __construct()
    {
        $this->middleware('guest');
    }

    function index()
    {
        return view('gallery');
    }

    function showGallery($id)
    {
        //$directory = "/img/gallery" . $id;
        //echo $directory;
        //$images = glob($directory . "*.jpg");

        $dir = "img/gallery".$id;
        if(!is_dir($dir))
        {
            return view('errors.404');
        }
        $dh  = opendir($dir);
        while (false !== ($filename = readdir($dh))) {
            $files[] = $filename;
        }
        $images=preg_grep ('/\.jpg$/i', $files);


        $data['galleryId'] = $id;
        $data['images'] = $images;
        return view('showGallery', $data);
    }

}