<?php

namespace App\Http\Services;


use Illuminate\Support\Facades\File;
use Phpfastcache\Helper\Psr16Adapter;

class InstagramProvider
{
    public function getPosts() : array
    {
        $instagram = \InstagramScraper\Instagram::withCredentials(new \GuzzleHttp\Client(),  new Psr16Adapter('Files'));
        $instagram->login();
        $instagram->saveSession();
        $account = $instagram->getAccount('fashion_shop_ks');
        $accountMedias = $account->getMedias();
        $instagramPosts = [];
        File::cleanDirectory(public_path('/assets/img/instagram/'));


        foreach ($accountMedias as $key => $accountMedia) {
            $images[$key] = str_replace("&amp;", "&", $accountMedia->getimageHighResolutionUrl());
            $path = $images[$key];
            $imageName = $key . '.png';
            $img = public_path('/assets/img/instagram/') . $imageName;
            $new_img = file_put_contents($img, file_get_contents($path));
            $instagramPosts[] = ['img' => $imageName, 'link' => $accountMedia['link']];

        }
        return $instagramPosts;

    }
}
