<?php

namespace App\Console\Commands;

use App\Servises\PostService;
use Illuminate\Console\Command;

class AddNewPost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:add-new-post{--topic=}{--text=}{--user_id=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(PostService $service)
    {
        $service->create($this->option('topic'),$this->option('text'),$this->option('user_id'));
    }
}
