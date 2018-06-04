<?php

namespace Imanghafoori\CrudBoosterLogs;

use crocodicstudio\crudbooster\CBCoreModule\Hooks;
use crocodicstudio\crudbooster\controllers\CBController;

class AdminLogsController extends CBController
{
    use Hooks;

    public function cbInit()
    {
        $this->table = 'cms_logs';
        $this->titleField = 'ip_address';

        $this->setButtons();
        $this->makeColumns();

        $this->form = LogsForm::makeForm();
    }

    private function makeColumns()
    {
        $this->col = [
            ['label' => 'Time Access', 'name' => 'created_at'],
            ['label' => 'IP Address', 'name' => 'ip_address'],
            ['label' => 'User', 'name' => 'cms_users_id', 'join' => 'cms_users,name'],
            ['label' => 'Description', 'name' => 'description'],
        ];
    }

    private function setButtons()
    {
        $this->buttonExport = false;
        $this->buttonImport = false;
        $this->buttonAdd = false;
        $this->buttonEdit = false;
    }
}
