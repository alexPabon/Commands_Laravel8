<?php

namespace App\Console\Commands;

use App\links\PageLinks;
use Illuminate\Console\Command;


class BuilderLinksTest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'builder:Links{lastPage}{currentPage}{path}{pageName=page}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'link constructor command, arguments {lastPage}{currentPage}{path}{pageName=page}';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $argu = (object) $this->arguments();
        $builderlinks = new PageLinks($argu->lastPage, $argu->currentPage,$argu->path,$argu->pageName);

        dd($builderlinks->alllinks());
        echo 'link constructor commado stdClass';
        return 0;
    }
}
