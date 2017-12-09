<?php

namespace App\Console\Commands;

use App\Mail\LowStock;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use App\Mail\OrderMade;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailer;

class StockCheckCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Stock Recheck';

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
     * @return mixed
     */
    public function handle()
    {
        //this function runs daily with respect to the server time

        $mobo = DB::select("SELECT sum(stock) AS total from stock_acc WHERE catagory='motherboard'");
        $ram = DB::select("SELECT sum(stock) AS total from stock_acc WHERE catagory='ram'");
        $processor = DB::select("SELECT sum(stock) AS total from stock_acc WHERE catagory='processor'");
        $memorycard = DB::select("SELECT sum(stock) AS total from stock_acc WHERE catagory='memory_cards'");
        $mouse = DB::select("SELECT sum(stock) AS total from stock_acc WHERE catagory='mouse'");
        $keyboard = DB::select("SELECT sum(stock) AS total from stock_acc WHERE catagory='keyboard'");

        $arr = [$mobo[0]->total, $ram[0]->total, $processor[0]->total, $memorycard[0]->total, $mouse[0]->total, $keyboard[0]->total];

        $a = array(); //this array records the low stock items

        for ($x = 0; $x <= 5; $x++) {
            if ($arr[$x] < 5) {     //current minimum stock level is
                if ($x == 0) {
                    array_push($a, "motherboard");
                } elseif ($x == 1) {
                    array_push($a, "ram");
                } elseif ($x == 2) {
                    array_push($a, "processor");
                } elseif ($x == 3) {
                    array_push($a, "memory_cards");
                } elseif ($x == 4) {
                    array_push($a, "mouse");
                } elseif ($x == 5) {
                    array_push($a, "keyboard");
                }

                Mail::to('admin@pclife.com')->send(New LowStock($a));
            }
        }
    }
}
