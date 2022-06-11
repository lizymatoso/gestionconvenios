<?php

namespace Database\Seeders;

use App\Models\Convenio;
use Illuminate\Database\Seeder;

class ConvenioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $convenio = new Convenio();

        $convenio-> tipo_convenio = "ratifica";
        $convenio-> año = "2022";
        $convenio-> pais = "argentina";
        $convenio-> expediente = "10-2022-001556";
        $convenio-> descripcion = "ratifica convenio con dpec";
        $convenio-> resolucion = "015/22";

        $convenio->save();

        $convenio2 = new Convenio();

        $convenio2-> tipo_convenio = "aprueba";
        $convenio2-> año = "2022";
        $convenio2-> pais = "argentina";
        $convenio2-> expediente = "10-2022-001577";
        $convenio2-> descripcion = "aprueba conveno marco especifico con el ministerio";
        $convenio2-> resolucion = "016/22";

        $convenio2->save();

        $convenio4 = new Convenio();

        $convenio4-> tipo_convenio = "aprueba";
        $convenio4-> año = "2022";
        $convenio4-> pais = "argentina";
        $convenio4-> expediente = "10-2022-001577";
        $convenio4-> descripcion = "aprueba conveno marco especifico con el ministerio";
        $convenio4-> resolucion = "016/22";

        $convenio4->save();
        
        $convenio5 = new Convenio();

        $convenio5-> tipo_convenio = "ratifica";
        $convenio5-> año = "2022";
        $convenio5-> pais = "argentina";
        $convenio5-> expediente = "10-2022-001556";
        $convenio5-> descripcion = "ratifica convenio con dpec";
        $convenio5-> resolucion = "015/22";

        $convenio5->save();

        $convenio6 = new Convenio();

        $convenio6-> tipo_convenio = "aprueba";
        $convenio6-> año = "2022";
        $convenio6-> pais = "argentina";
        $convenio6-> expediente = "10-2022-001577";
        $convenio6-> descripcion = "aprueba conveno marco especifico con el ministerio";
        $convenio6-> resolucion = "016/22";

        $convenio6->save();

        $convenio7 = new Convenio();

        $convenio7-> tipo_convenio = "aprueba";
        $convenio7-> año = "2022";
        $convenio7-> pais = "argentina";
        $convenio7-> expediente = "10-2022-001577";
        $convenio7-> descripcion = "aprueba conveno marco especifico con el ministerio";
        $convenio7-> resolucion = "016/22";

        $convenio7->save();


    }
}
