<?php


namespace App\Controllers;
use App\Models\LineasTelefonicasModel;
class LineasTelefonicas extends BaseController
{
    public function LineasTelefonicas(): string
    {
        //creado un objeto de tipo RegionesModel
        $LineasTelefonicas = new LineasTelefonicasModel();
        $Datos['datos']=$LineasTelefonicas->findAll();

        $Datos['datos']=($LineasTelefonicas->findAll());
        //findAll()= selec * from regiones;/ esto haria

        
        return view ('lineas_telefonicas',$Datos);
    }
}