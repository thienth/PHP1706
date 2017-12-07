<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Faker;
use App\User;
use Hash;
class UserGenerate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // {params1} => Tham số bắt buộc | lấy ra bằng $this->argument('params1') 
    // {params2?} => Tham số không bắt buộc | lấy ra bằng $this->argument('params2') nếu k điền gì thì bằng null
    // {--param3=} Tham số không bắt buộc được đặt tên | lấy ra bằng $this->options('params3')
    protected $signature = 'z:user-generate {email?} {--role=100}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Tu tao them 1 nguoi dung random trong csdl';

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
        $faker = Faker\Factory::create();
        $user = new User;
        $user->name = $faker->name();
        $user->email = $this->argument('email') == "" ? $faker->email() : $this->argument('email');
        $user->password = Hash::make('123456');
        $user->role = $this->option('role');

        if($user->save()){
            $this->info("success!");
            $this->info("$user->email/123456");
        }else{
            
            $this->info("fail!");
        }
    }
}
