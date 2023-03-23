<?php

namespace domain\Facades;

use Illuminate\Support\Facades\Facade;
use domain\Services\StudentService;

class StudentFacade extends Facade
{
      
      protected static function getFacadeAccessor()
      {
            return StudentService::class;
      }

}