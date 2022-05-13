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
class Brandseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        require_once ('vendor/autoload.php');
        
        DB::table('brands')->delete() ;
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

    }
}