<?php
namespace App\links;

Abstract class BuilderLinks{

    protected $url;
    protected $path;
    protected $currentPage;
    protected $lastPage;
    protected $pageName;


    public function __construct($lastPage,$currentPage,$path, $pageName = 'page')
    {
        $this->lastPage = $lastPage;
        $this->currentPage = $currentPage;
        $this->path = $path;
        $this->pageName = $pageName;
        $this->url = $path."?".$pageName."=";
    }

}
