<?php

namespace App\Controllers;

class Menu extends BaseController
{
    protected $_table   = 'menu';
    protected $_table2  = 'sub_menu';
    protected $_table3  = 'sub_sub_menu';

    public function index()
    {

        $menu = $this->db->table($this->_table)->get()->getResult();
        $submenu = $this->db->table($this->_table2)
                    ->select('sub_menu.*,menu.name as parent_name')
                    ->join($this->_table, 'sub_menu.parent_id = menu.id')
                    ->get()->getResult();
        $subsubmenu = $this->db->table($this->_table3)
                    ->select('sub_sub_menu.*,sub_menu.name as sub_parent_name,menu.name as parent_name')
                    ->join($this->_table2, 'sub_sub_menu.parent_sub_id = sub_menu.id')
                    ->join($this->_table, 'sub_menu.parent_id = menu.id')
                    ->get()->getResult();

        $arrData = [
            'menu'          => $menu,
            'submenu'       => $submenu,
            'subsubmenu'    => $subsubmenu
        ];
       return view('menu/list_menu', $arrData);
    }

    public function create (){
        return view('menu/partial');
    }
}
