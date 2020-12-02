<?php

namespace App\Console\Commands;

use App\partial\operations\Advanced_operations;
use App\partial\Operar;
use Carbon\Carbon;
use Illuminate\Console\Command;

class Operations extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'number:calculation{num1}{num2}';


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'this is a command to develop test, arguments {num1}{num2}';

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
        $numbers = (object) $this->arguments();
        $inicio = Carbon::now();

        sleep(5);

        $oper = new Advanced_operations($numbers->num1,$numbers->num2,$inicio);
        $oper->operations_basic();
        $oper->hypotenuse();
        $oper->perimeter();

        dd($oper->operations_basic());
        return 0;
    }
}
