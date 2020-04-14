<?php

namespace arteam\widgets\dashboard;

use arteam\widgets\DashboardWidget;
use arteam\models\User;

class Info extends DashboardWidget
{
    public function run()
    {
        if (User::hasPermission('viewDashboard')) {
            return $this->render('info',
                [
                    'height' => $this->height,
                    'width' => $this->width,
                    'position' => $this->position,
                ]);
        }
    }
}