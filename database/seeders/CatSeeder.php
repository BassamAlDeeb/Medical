<?php

namespace Database\Seeders;
use Statickidz\GoogleTranslate;
use Illuminate\Database\Seeder;
use App\Models\Brand;
use App\Models\Cat;
use App\Models\Service;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ProductController;
use Image;
use Response;
use Illuminate\Http\Request;
use File;
class CatSeeder extends Seeder
{
    
    public function run()
    {
        require_once ('vendor/autoload.php');
        
    
        DB::table('cats')->delete() ;
        
        foreach (File::allFiles(public_path('images\Categories')) as $file) {
            $image = Image::make($file->getPath() . '\\' .$file->getFilename());
            Response::make($image->encode('jpeg'));
            $source = 'en';
            $target = 'ar';
            $text =  substr($file->getfilename(),0,strrpos($file->getfilename(),"."));
            $trans = new GoogleTranslate();
            $result = $trans->translate($source, $target, $text);
            $form_data = array(
            'category_name'            =>  substr($file->getfilename(),0,strrpos($file->getfilename(),".")),
            'category_name_ar'         =>  $result ,
            'cat_image'                 => $image,
           );
           Cat::create($form_data);
        }
        }
}



/*
    https://artisansweb.net/dynamically-translate-text-using-google-translation-api-in-php/
    https://awesomeopensource.com/project/statickidz/php-google-translate-free    
    composer require statickidz/php-google-translate-free
 
 */
