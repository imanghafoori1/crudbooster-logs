<?php

namespace Imanghafoori\CrudBoosterLogs;

class LogsRepository
{
    public static function insertLog($description, $uid, $ip = null)
    {
        $log = [
            'created_at' => YmdHis(),
            'ip_address' => $ip ?: request()->ip(),
            'user_agent' => request()->userAgent(),
            'url' => request()->url(),
            'cms_users_id' => $uid,
            'description' => $description
        ];
        \DB::table('cms_logs')->insert($log);
    }
}