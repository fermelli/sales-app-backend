<?php

namespace Infrastructure\Abstracts;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use one2tek\larapi\Controllers\LaravelController;

abstract class Controller extends LaravelController
{
    use AuthorizesRequests;
    use DispatchesJobs;
    use ValidatesRequests;
}
