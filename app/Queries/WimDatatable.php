<?php

namespace App\Queries;

use App\Models\Wim;

class WimDatatable
{
    public function get()
    {
        return Wim::query();
    }
}
?>
