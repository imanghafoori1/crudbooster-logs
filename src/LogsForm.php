<?php

namespace Imanghafoori\CrudBoosterLogs;

class LogsForm
{
    public static function makeForm()
    {
        return [
            ['label' => 'Time Access', 'name' => 'created_at', 'readonly' => true],
            ['label' => 'IP Address', 'name' => 'ip_address', 'readonly' => true],
            ['label' => 'User Agent', 'name' => 'user_agent', 'readonly' => true],
            ['label' => 'URL', 'name' => 'url', 'readonly' => true],
            ['label' => 'User', 'name' => 'cms_users_id', 'type' => 'select', 'datatable' => 'cms_users,name', 'readonly' => true],
            ['label' => 'Description', 'name' => 'description', 'readonly' => true],
        ];
    }
}