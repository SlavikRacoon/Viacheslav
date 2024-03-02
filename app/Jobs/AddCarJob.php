<?php

namespace App\Jobs;

use App\Models\Car;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class AddCarJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private string $model;
    private int $mechanic_id;

    /**
     * Create a new job instance.
     */
    public function __construct(string $model, int $mechanic_id)
    {
        $this->model = $model;
        $this->mechanic_id = $mechanic_id;

    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $new_car_model = new Car();
        $new_car_model->model = $this->model;
        $new_car_model->mechanic_id = $this->mechanic_id;
        $new_car_model->save();
    }
}
