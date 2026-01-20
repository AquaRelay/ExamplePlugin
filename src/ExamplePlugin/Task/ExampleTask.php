<?php

/*
 *                            _____      _
 *     /\                    |  __ \    | |
 *    /  \   __ _ _   _  __ _| |__) |___| | __ _ _   _
 *   / /\ \ / _` | | | |/ _` |  _  // _ \ |/ _` | | | |
 *  / ____ \ (_| | |_| | (_| | | \ \  __/ | (_| | |_| |
 * /_/    \_\__, |\__,_|\__,_|_|  \_\___|_|\__,_|\__, |
 *             |_|                                |___/
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author AquaRelay Team
 * @link https://www.aquarelay.dev/
 *
 */

namespace ExamplePlugin\Task;

use aquarelay\task\Task;
use ExamplePlugin\ExamplePlugin;

class ExampleTask extends Task {

    const TASK_ID = 1;

    public function __construct(private ExamplePlugin $plugin)
    {
        parent::__construct(self::TASK_ID);
    }
    
    public function onRun() : void
    {
        $this->plugin->getServer()->getLogger()->info("ExampleTask is running... id: " . $this->getTaskId() . " Time: " . date('H:i:s'));
        $this->cancel(); // Cancel the task after running once
    }
}