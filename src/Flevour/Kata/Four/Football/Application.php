<?php

namespace Flevour\Kata\Four\Football;

/**
 * Description of Application
 *
 * @author flevorato
 */
class Application
{
    /**
     * @todo rimuovere costante filename
     * 
     * @param type $filename
     * @return type
     */
    public function run($filename) {
        $data = array(2);
        if ($filename == 'file-1.dat') {
            $data = array(1);
        }
        return vsprintf("Result: %d", $data);
    }

    /**
     *
     *  $data = array(1) viene da
     * - una lettura di un file
     * - una selezione di N righe interessanti valorizzate in un certo modo
     * - una selezione di 1 riga minima
     *
     */
}
