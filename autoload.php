<?php
    spl_autoload_register(null, false);
    function negociosLoader($clase){
        $filename = $clase . '.php';
        $file ='negocios/' . $filename;
        if (!file_exists($file))
        {
            return false;
        }
        include $file;
        //include "negocios/" . $clase . ".php";        
    }
   
    function datosLoader($clase){
        $filename = $clase . '.php';
        $file ='datos/' . $filename;
        if (!file_exists($file))
        {
            return false;
        }
        include $file;
        //include "datos/" . $clase . ".php";        
    }

    spl_autoload_register('negociosLoader');
    spl_autoload_register('datosLoader');   
   
?>