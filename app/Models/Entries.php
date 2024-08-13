<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Entries extends Model
{
    use HasFactory;

    protected $fillable = [
        'f_name',
        'l_name',
        'address',
        'province',
        'city',
        'mobile',
        'email',
        'birthday'
    ];

    private static $ncr = array('Metro Manila');

    private static $luzon = array(
        'Abra', 
        'Albay', 
        'Apayao', 
        'Aurora', 
        'Bataan', 
        'Batanes', 
        'Batangas', 
        'Benguet', 
        'Bulacan', 
        'Cagayan', 
        'Camarines Norte', 
        'Camarines Sur', 
        'Catanduanes', 
        'Cavite', 
        'Ifugao', 
        'Ilocos Norte', 
        'Ilocos Sur', 
        'Isabela', 
        'Kalinga', 
        'La Union', 
        'Laguna', 
        'Marinduque', 
        'Masbate', 
        'Mountain Province', 
        'Nueva Ecija', 
        'Nueva Vizcaya', 
        'Occidental Mindoro', 
        'Oriental Mindoro', 
        'Palawan', 
        'Pampanga', 
        'Pangasinan', 
        'Quezon', 
        'Quirino', 
        'Rizal', 
        'Romblon', 
        'Tarlac', 
        'Zambales');

    private static $visayas = array(
        'Aklan', 
        'Antique', 
        'Biliran', 
        'Bohol', 
        'Capiz', 
        'Cebu', 
        'Eastern Samar', 
        'Guimaras', 
        'Iloilo', 
        'Leyte', 
        'Negros Occidental', 
        'Negros Oriental', 
        'Northern Samar', 
        'Samar', 
        'Siquijor', 
        'Sorsogon', 
        'Southern Leyte');

    private static $mindanao = array(
        'Agusan del Norte', 
        'Agusan del Sur', 
        'Basilan', 
        'Bukidnon', 
        'Camiguin', 
        'Compostela Valley', 
        'Cotabato', 
        'Davao del Norte', 
        'Davao del Sur', 
        'Davao Oriental', 
        'Dinagat Islands', 
        'Lanao del Norte', 
        'Lanao del Sur', 
        'Maguindanao', 
        'Misamis Occidental', 
        'Misamis Oriental', 
        'Sarangani', 
        'Shariff Kabunsuan', 
        'South Cotabato', 
        'Sultan Kudarat', 
        'Sulu', 
        'Surigao del Norte', 
        'Surigao del Sur', 
        'Tawi-Tawi', 
        'Zamboanga del Norte', 
        'Zamboanga del Sur', 
        'Zamboanga Sibugay');

    // promo functions

    // add user entry
    public function join($request)
    {
        // receipt uploader
        $receipt = $request->file('receipt');
        $ext = $receipt->getClientOriginalExtension();
        $filename = time() . '.' . $ext;
        $receipt->move('receipts/', $filename);

        DB::table('entries')->insert([
            'mobile'      => $request->input('mobile'),
            'email'       => $request->input('email'),
            'name'        => $request->input('f_name') . ' ' . $request->input('l_name'),
            'address'     => $request->input('address'),
            'province'    => $request->input('province'),
            'city'        => $request->input('city'),
            'location'    => Entries::getProvinceLocation($request->input('province')),
            'birthday'    => $request->input('birthday'),
            'has_racing'  => $request->input('racing'),
            'has_super'   => $request->input('super'),
            'receipt_img' => $filename
        ]);
    }

    private function getProvinceLocation($province){
        if(in_array($province, static::$ncr)){
            return 'ncr';

        } elseif(in_array($province, static::$luzon)){
            return 'luzon';

        } elseif(in_array($province, static::$visayas)){
            return 'visayas';

        } elseif(in_array($province, static::$mindanao)){
            return 'mindanao';
        }
    }

    // add entry to raffle
    public function acceptEntry($id)
    {
        $purchases = Entries::getPurchaseQuantity($id);
        $racing    = $purchases->has_racing;
        $super     = $purchases->has_super;
    
        if($racing > 0 || $super > 0 ){
            if($racing > 0){
                $limit = 2 * $racing;
                for($r = 0; $r < $limit; $r++){
                    DB::table('approved_entries')->insert(['entry_id' => $id]);
                }
            }
        
            if($super > 0){
                for($s = 0; $s < $super; $s++){
                    DB::table('approved_entries')->insert(['entry_id' => $id]);
                }
            }

            Entries::where('id', $id)->update(['status' => '1']);
        }  
    }
    
    // get quantity of purchased products based on entry id
    private function getPurchaseQuantity($entry_id){
        return DB::table('entries')
                    ->select('has_racing', 'has_super')
                    ->where('id', $entry_id)
                    ->first();
    }
}
