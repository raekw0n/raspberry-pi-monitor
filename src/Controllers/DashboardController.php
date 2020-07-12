<?php

namespace RaspiMon\Controllers;

/**
 * Dashboard controller class.
 */
class DashboardController extends CoreController
{
    /**
     * Render the dashboard.
     *
     * @param array $data
     *
     * @return mixed
     */
    public function view(array $data = [])
    {
        return $this->setViewData($data)->render('dashboard');
    }
}
