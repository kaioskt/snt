<?php

namespace Culto\Controller\Plugin;

use Zend\Mvc\Controller\Plugin\AbstractPlugin;

class Mkdir extends AbstractPlugin
{
    public function verifica($diretorio) {
        if (is_dir($diretorio)) {
            return true;
        } else {
            return false;
        }
    }
    
    public function criarDiretorio($diretorio) {
        if (is_dir($diretorio)) {
            return true;
        } else {
            if (mkdir($diretorio, 0777, true)) {
                return true;
            }
        }
        
        return false;
    }
}