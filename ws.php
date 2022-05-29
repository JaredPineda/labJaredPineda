<?php
include "vendor/autoload.php";
$server=new nusoap_server;
$server->configureWSDL('server', 'urn:server');
$server->wsdl->schemaTargetNamespace='urn:server';

$server->wsdl->addComplexType(
    'registroalumno',
    'complexType',
    'struct',
    'all',
    '',
    array('Idalu'=>array('name'=>'Idalu','type'=>'xsd:int'),
    'Nombre'=>array('name'=>'Nombre','type'=>'xsd:string'),
    'Laboratorio1'=>array('name'=>'Laboratorio1','type'=>'xsd:float'),
    'Laboratorio2'=>array('name'=>'id_user','type'=>'xsd:float'),
    'Parcial'=>array('name'=>'Parcial','type'=>'xsd:float')
    )
);

$server->register(
    'alumno',
    array('Idalu'=>array('name'=>'Idalu','type'=>'xsd:int'),
    'Nombre'=>array('name'=>'Nombre','type'=>'xsd:string'),
    'Laboratorio1'=>array('name'=>'Laboratorio1','type'=>'xsd:float'),
    'Laboratorio2'=>array('name'=>'id_user','type'=>'xsd:float'),
    'Parcial'=>array('name'=>'Parcial','type'=>'xsd:float')
),
    array('return'=>'tns:registroalumno'),
    'urn:server',
    'urn:server#mayorServer',
    'rpc',
    'encoded',
    'funcion para calcular el promedio de notas'
);

function alumno(){
    $valor=array(
        'Idalu'=>1,
        'Nombre'=>'Jared Pineda',
        'Laboratorio1'=>9.0,
        'Laboratorio2'=>7.0,
        'Parcial'=>10
    );
    return $valor;
};

