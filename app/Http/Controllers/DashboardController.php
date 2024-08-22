<?php

// app/Http/Controllers/DashboardController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Mostrar o dashboard do gerente.
     *
     * @return \Illuminate\View\View
     */
    public function managerDashboard()
    {
        return view('manager.dashboard');
    }

    /**
     * Mostrar o dashboard do membro.
     *
     * @return \Illuminate\View\View
     */
    public function memberDashboard()
    {
        return view('member.dashboard');
    }
}

