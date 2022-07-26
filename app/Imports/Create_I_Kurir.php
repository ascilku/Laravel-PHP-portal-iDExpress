<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

use App\Models\admin\M_I_Kurir                  as Kurir;
use App\Models\M_Akun                           as Akun;

class Create_I_Kurir implements WithHeadingRow, WithCalculatedFormulas, ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        //
        foreach ($collection as $data) {
            // echo $data;
            $date_ = date('Y-m-01');
            $nik_kpi = $data['nik'];

            $regist_email = Akun::where('nik', $data['nik'])->first();

            if (isset($regist_email)) {

                $create_Kurir                = new Kurir();
                    $create_Kurir->id_akun             = $regist_email->id;

                    if ($data['i_delivery'] == '') {
                        $create_Kurir->i_delivery                  = 0;
                    }else {
                        $create_Kurir->i_delivery                  = $data['i_delivery'];
                    }

                    if ($data['i_pickup'] == '') { 
                        $create_Kurir->i_pickup                  = 0;
                    }else {
                        $create_Kurir->i_pickup                  = $data['i_pickup'];
                    }

                    $create_Kurir->date                  = $date_;
                $create_Kurir->save();
            }else{
                
            }
        }
    }
}
