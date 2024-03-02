<?php

namespace App\Jobs;

use App\Models\Mechanic;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CreateMechanicJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private string $name;

    /**
     * Create a new job instance.
     */
    public function __construct(string $name)
    {
        $this->name = $name;

    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $new_mechanic = new Mechanic();
        $new_mechanic->name = $this->name;
        $new_mechanic->save();
    }
}
