<?php


namespace App\Controllers;
use App\Models\PlanesModel;
class Planes extends BaseController
{
    public function Planes(): string
    {
        //creado un objeto de tipo RegionesModel
        $Planes = new PlanesModel();
        $Datos['datos']=$Planes->findAll();

        $Datos['datos']=($Planes->findAll());
        //findAll()= selec * from regiones;/ esto haria

        
        return view ('planes',$Datos);
    }
}