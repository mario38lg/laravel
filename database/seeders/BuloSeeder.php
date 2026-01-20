<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bulo;

class BuloSeeder extends Seeder
{
    public function run(): void
    {
        $bulos = [
            [
                'textobulo' => 'Los hombres conducen mejor que las mujeres.',
                'texto_desmentido' => 'Los datos de la DGT muestran que los hombres protagonizan la mayoría de accidentes graves y mortales.',
                'imagen' => 'https://lh5.googleusercontent.com/proxy/T95LA4l2vP0GgqZnNYVdEwD_ZvcfsPEcndvNq3W8Vr3duhk1tby4U1LLt1AXYQtEu_Ylgz2qXThatllebhA_WrM8q0tvL1Nw0WAXbdaJ9Rqmk5E7n-akSD-rOLeUzqASqywncHxM669J7vlg2Gyfyoofk-R4',
            ],
            [
                'textobulo' => 'Las mujeres no lideran sectores tecnológicos.',
                'texto_desmentido' => 'Cada vez más mujeres lideran proyectos en biotecnología, medicina e ingeniería.',
                'imagen' => 'https://gcdn.emol.cl/hombres/files/2015/07/machismo-2.jpg',
            ],
            [
                'textobulo' => 'La igualdad de género ya está conseguida.',
                'texto_desmentido' => 'La brecha salarial y la desigualdad estructural siguen siendo una realidad documentada.',
                'imagen' => 'https://i.pinimg.com/564x/8b/9a/7b/8b9a7bd303db6f89311d32f38ce92424.jpg',
            ],
        ];

        foreach ($bulos as $bulo) {
            Bulo::create($bulo);
        }
    }
}
