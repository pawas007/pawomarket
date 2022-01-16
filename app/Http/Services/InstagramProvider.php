<?php

namespace App\Http\Services;


use Phpfastcache\Helper\Psr16Adapter;

class InstagramProvider
{
    private $name;
    private $password;
    private $account;

    public function __construct($name,$password,$account)
    {
        $this->password = $password;
        $this->name = $name;
        $this->account = $account;
    }

    public function getPosts(): array
    {


        $instagram = \InstagramScraper\Instagram::withCredentials(new \GuzzleHttp\Client(), $this->name, $this->password, new Psr16Adapter('Files'));
        $instagram->login();
        $instagram->saveSession();
        $account = $instagram->getAccount($this->account);
        $accountMedias = $account->getMedias();
        $instagramPosts = [];


        foreach ($accountMedias as $key => $accountMedia) {
            $images[$key] = str_replace("&amp;", "&", $accountMedia->getimageHighResolutionUrl());
            $path = $images[$key];
            $imageName = $key . '.png';
            $img = public_path('/assets/img/instagram/') . $imageName;
            $new_img = file_put_contents($img, file_get_contents($path));
            $instagramPosts[] = ['img' => '/assets/img/instagram/'. $imageName , 'link' => $accountMedia['link']];

        }
        return $instagramPosts;




    }
}
