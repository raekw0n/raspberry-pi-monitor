<?php

namespace RaspiMon\Controllers;

/**
 * Settings controller class.
 */
class SettingsController extends CoreController
{
    /**
     * Render the settings page.
     *
     * @param array $data
     *
     * @return mixed
     */
    public function view(array $data = [])
    {
        return $this->setViewData($data)->render('settings');
    }
}
