<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;
use App\Models\Cat;
use App\Models\Service;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Facades\DB;
use Image;
use Response;
use Illuminate\Http\Request;
use File;


class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->delete() ;
        Brand::create(['brand_name' => 'WD-40']);
Brand::create(['brand_name' => 'KSEIBI']);
Brand::create(['brand_name' => 'CRC']);
Brand::create(['brand_name' => 'DEWALT']);
Brand::create(['brand_name' => 'MAKITA']);
Brand::create(['brand_name' => 'DURACELL']);
Brand::create(['brand_name' => 'FIRSTAR']);
Brand::create(['brand_name' => 'Workmen']);
Brand::create(['brand_name' => 'WORKMAN']);
Brand::create(['brand_name' => 'TAHA']);
Brand::create(['brand_name' => 'Robinson']);
Brand::create(['brand_name' => 'QUARTZ']);
Brand::create(['brand_name' => 'NORTH']);
Brand::create(['brand_name' => 'Deltaplus']);
Brand::create(['brand_name' => 'TAHA SAFTY']);
Brand::create(['brand_name' => 'FIRST STAR']);
Brand::create(['brand_name' => 'ARMOUR PRODUCTION']);
Brand::create(['brand_name' => 'Power']);
Brand::create(['brand_name' => 'VIZWELL']);
Brand::create(['brand_name' => 'DALTAPLUS']);
Brand::create(['brand_name' => 'Edmund']);
Brand::create(['brand_name' => 'Edmundvalve']);
Brand::create(['brand_name' => 'OME']);
Brand::create(['brand_name' => 'OME Motors']);
Brand::create(['brand_name' => 'Empiral']);
Brand::create(['brand_name' => 'Ameriza']);
Brand::create(['brand_name' => 'TSGC']);
Brand::create(['brand_name' => 'Bulldozer']);
Brand::create(['brand_name' => 'Nomex']);
Brand::create(['brand_name' => 'Gladious']);
Brand::create(['brand_name' => 'Tyvek']);
Brand::create(['brand_name' => '3M']);
Brand::create(['brand_name' => 'Plum']);
Brand::create(['brand_name' => 'Valpro']);
Brand::create(['brand_name' => 'Safetoe']);
Brand::create(['brand_name' => 'MSA']);
Brand::create(['brand_name' => 'Bullard']);
Brand::create(['brand_name' => 'Lifesecure']);
Brand::create(['brand_name' => 'Philips']);
Brand::create(['brand_name' => 'Reliance Medical']);
Brand::create(['brand_name' => 'DM']);
Brand::create(['brand_name' => 'Spencer']);
Brand::create(['brand_name' => 'St John Ambulance']);
Brand::create(['brand_name' => 'Reliwash']);
Brand::create(['brand_name' => 'BW']);
Brand::create(['brand_name' => 'ALTAIR']);
Brand::create(['brand_name' => 'MiniSCAPE']);
Brand::create(['brand_name' => 'Interspiro']);
Brand::create(['brand_name' => 'Dupont Kevlar']);
Brand::create(['brand_name' => 'Ninja']);
Brand::create(['brand_name' => 'Sperian']);
Brand::create(['brand_name' => 'CHIBA']);

        DB::table('cats')->delete() ;
        
        foreach (File::allFiles(public_path('images\Categories')) as $file) {
            $image = Image::make($file->getPath() . '\\' .$file->getFilename());
            Response::make($image->encode('jpeg'));
            $form_data = array(
            'category_name'            =>  substr($file->getfilename(),0,strrpos($file->getfilename(),".")),
            'category_name_ar'            =>  "عربي",
            'cat_image'                 => $image,
           );
           Cat::create($form_data);

        }

        DB::table('services')->delete() ;
        
        foreach (File::allFiles(public_path('images\Services')) as $file) {
            $image = Image::make($file->getPath() . '\\' .$file->getFilename());
            Response::make($image->encode('jpeg'));
            $form_data = array(
            'service_name'            =>  substr($file->getfilename(),0,strrpos($file->getfilename(),".")),
            'service_name'            => "عربي2",
            'serv_image'                 => $image,
           );
           Service::create($form_data);

        }





        DB::table('categories')->delete() ;
        
        foreach (File::allFiles(public_path('images\SubCategories')) as $file) {
            $image = Image::make($file->getPath() . '\\' .$file->getFilename());
            Response::make($image->encode('jpeg'));
            $form_data = array(
            'category_name'          => substr($file ->getPath(),strrpos($file ->getPath(),'\\')+1),
            'subcategory'            =>  substr($file->getfilename(),0,strrpos($file->getfilename(),".")),
            'subcategory_ar'            => "3ع",
            'subcat_image'           => $image,
           );
           Category::create($form_data);

        }


        DB::table('subcategories')->delete() ;
        
        foreach (File::allFiles(public_path('images\SubSubCategories')) as $file) {
            $image = Image::make($file->getPath() . '\\' .$file->getFilename());
            Response::make($image->encode('jpeg'));
            $form_data = array(
            'subcategory'        =>  substr($file ->getPath(),strrpos($file ->getPath(),'\\')+1),
            'sub_subcategory'    =>  substr($file->getfilename(),0,strrpos($file->getfilename(),".")),
            'sub_subcategory_ar'    =>  "عععع",
            'sub_subcat_image'           => $image,
           );
           Subcategory::create($form_data);

        }

    }
}
