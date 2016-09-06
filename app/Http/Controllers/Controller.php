<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController {
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    public function get_data() {
        $file = file_get_contents('http://www.cnn.com/2016/09/05/hotels/dubai-rosemont-hotel-rainforest/index.html');
        $dom = new \DOMDocument();
        @$dom->loadHTML($file);
        $domx = new \DOMXPath($dom);
        $nodeHead = $domx->evaluate("//h1[@class='pg-headline']");
        $nodeArticleLead = $domx->evaluate("//p[@class='zn-body__paragraph']");
        $nodeArticle = $domx->evaluate("//div[@class='zn-body__paragraph']");
        $nodeIMG = $domx->evaluate("//img[@class='media__image media__image--responsive']");

        echo $nodeHead[0]->nodeValue;

        echo '<br>';

        if ($nodeIMG[0]) {
            $i = 0;

            foreach($nodeIMG as $img) {
                $src = $img->getAttribute('data-src-full16x9');

                if ($src != '') {
                    echo '<img style="width:200px" src="'.$src.'" />';
                    break;
                } elseif(++$i == 5) { break; }

            }
        }

        echo '<br>';

        echo $nodeArticleLead[0]->nodeValue;

        foreach ($nodeArticle as $section) {
            echo $section->nodeValue . ' ';
        };
    }
}
