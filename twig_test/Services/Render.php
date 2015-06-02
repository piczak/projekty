<?php
/**
 * Render.php
 *
 * @package   
 * @author    Kamil Fornal <k.fornal@3s.pl>
 * @copyright 2015 TKP S.A.
 */

namespace Services;

use Twig_Environment;
use Twig_Loader_Filesystem;

/**
 * @class Render
 */
class Render 
{
    public function test($dir)
    {
        $loader = new Twig_Loader_Filesystem($dir);
        $twig = new Twig_Environment($loader);

        $result = $twig->render('hello.html.twig', array('name' => 'Korki'));

        echo $result;
    }

    public function test2($dir)
    {
        $loader = new Twig_Loader_Filesystem($dir);
        $twig = new Twig_Environment($loader);

        $result = $twig->render('hello2.html.twig', array('name' => 'Korki'));

        echo $result;
    }

}
