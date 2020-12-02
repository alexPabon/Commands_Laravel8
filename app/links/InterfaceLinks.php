<?php
namespace App\links;

interface InterfaceLinks{

    public function alllinks();

    public function make($url,$label,$active);

    public function next_page();

    public function previous_page();

    public function total();
}
