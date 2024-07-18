<?php


namespace App\Controllers;
use App\Models\ClientesModel;
class Clientes extends BaseController
{
    public function Clientes(): string
    {
        //creado un objeto de tipo RegionesModel
        $Clientes = new ClientesModel();
        $Datos['datos']=$Clientes->findAll();

        $Datos['datos']=($Clientes->findAll());
        //findAll()= selec * from regiones;/ esto haria

        
        return view ('clientes',$Datos);
    }
}