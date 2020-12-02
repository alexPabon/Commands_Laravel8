<?php

namespace App\links;

use stdClass;

class PageLinks extends BuilderLinks implements InterfaceLinks
{

    public function alllinks():\stdClass{

        $currentPage = $this->currentPage;
        $total = $this->total();
        $previous = $this->previous_page();
        $next = $this->next_page();

        $links = [$previous];
        $label = 1;

        for ($i=1; $i <=$total ; $i++) {

            if($i==3 && $currentPage-5>=3 && $this->lastPage>13){
                $links[]= $this->make('null','...1',false);
                $label = ($currentPage+5>=$this->lastPage)?$this->lastPage-10:$currentPage-4;
            }
            else if($i==11 && $currentPage+6<$this->lastPage){
                $links[]= $this->make('null','...2',false);
                $label = $this->lastPage-2;
            }
            else{
                $links[]= $this->make($this->url.$label,$label,($currentPage==$label));
            }

            $label++;
        }

        $links[]= $next;

        return (object) $links;

    }

    public function make($url,$label,$active):array{

        return [
            'url' => $url,
            'label' => $label,
            'active' => $active
        ];
    }

    public function next_page():array
    {
        $next = ($this->currentPage+1<=$this->lastPage)?
                    $this->make($this->url.($this->currentPage+1),'Next &raquo;',false) :
                    $this->make('null','Next &raquo;',false);

        return $next;
    }

    public function previous_page():array
    {
        $previous = !($this->currentPage-1<1)?
                        $this->make($this->url.($this->currentPage-1),'&laquo; Previous',false) :
                        $this->make('null','&laquo; Previous',false);

        return $previous;
    }

    public function total():int
    {
        return ($this->lastPage>13)? 13 : $this->lastPage;
    }
}
