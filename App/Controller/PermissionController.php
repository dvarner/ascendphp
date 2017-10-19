<?php namespace App\Controller;

use App\Controller\Controller;
use Ascend\Core\Feature\Session;
use Ascend\Core\Request;
use Ascend\Core\Database;
use App\Model\RolePermission;
use App\Model\Permission;

class PermissionController extends Controller
{

    public function __construct()
    {
        // By doing this; rest api is setup for this controller to defaults set by BaseController
        $this->setModel('Permission');
        $this->setPathSub('admin/');
    }

    public function manageList() {
        $userId = Session::get('user.id');

        $sql = "SELECT p.name, r.name as role, rp.* FROM " . Permission::getTableName() . " p 
          JOIN " . RolePermission::getTableName() . " rp ON rp.permission_id = p.id
          JOIN roles r ON r.id = rp.role_id
          ";
        $db = Bootstrap::getDBPDO();
        $db->query($sql);
        $row = $db->resultset();
        return $row;
    }

    public function saveAll(Request $r) {
        $data = $r->all();
        $data = $data['data'];
        foreach($data AS $id => $fields) {
            $table = RolePermission::getTableName();
            $where = ['id' => $id];
            Database::table($table)->update($table, $fields, $where);
        }
        return ['success' => 'Awesome make this actual do this'];
    }
}