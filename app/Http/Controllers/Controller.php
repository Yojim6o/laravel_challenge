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
        $url = $_POST["url"];
        $file = file_get_contents($url);
        $dom = new \DOMDocument();
        @$dom->loadHTML($file);
        $domx = new \DOMXPath($dom);
        $nodeHead = $domx->evaluate("//h1[@class='pg-headline']");
        $nodeArticleLead = $domx->evaluate("//p[@class='zn-body__paragraph']");
        $nodeArticle = $domx->evaluate("//div[@class='zn-body__paragraph']");
        $nodeIMG = $domx->evaluate("//img[@class='media__image media__image--responsive']");

        if (\DB::table('articles')->whereUrl($url)->first() !== null) return 'Already Exists!'.'<a href="#">Back</a>';

        $title = $nodeHead[0]->nodeValue;

        if ($nodeIMG[0]) {
            $i = 0;

            foreach($nodeIMG as $img) {
                $maybeSrc = $img->getAttribute('data-src-full16x9');

                if ($maybeSrc != '') {
                    $src = $maybeSrc;
                    break;
                } elseif(++$i == 5) { break; }

            }
        }

        $body = $nodeArticleLead[0]->nodeValue . ' ';

        foreach ($nodeArticle as $section) {
            $body .= $section->nodeValue . ' ';
        };

        \DB::table('articles')->insert(array('url' => $url, 'title' => $title, 'img' => $src, 'body' => $body));

        return \Redirect::to('/');
    }
}
