<?php
/*
 * @filesource index/models/menu.php
 * @link http://www.kotchasan.com/
 * @copyright 2016 Goragod.com
 * @license http://www.kotchasan.com/license/
 */

namespace Index\Menu;

/**
 * รายการเมนู
 *
 * @author Goragod Wiriya <admin@goragod.com>
 *
 * @since 1.0
 */
class Model
{

  /**
   * รายการเมนูของแอดมิน
   *
   * @return object
   */
  public static function adminMenu()
  {
    return array(
      'vpo' => array(
        'text' => 'Dashboard',
        'url' => '?module=dashboard'
      ),
      'member' => array(
        'text' => 'สมาชิก',
        'submenus' => array(
          array(
            'text' => 'รายชื่อสมาชิก',
            'url' => '?module=member'
          ),
          array(
            'text' => 'ลงทะเบียนสมาชิกใหม่',
            'url' => '?module=register'
          )
        ),
      ),
      'logout' => array(
        'text' => 'ออกจากระบบ',
        'url' => '?action=logout'
      )
    );
  }

  /**
   * รายการเมนูของสมาชิก
   *
   * @return object
   */
  public static function memberMenu()
  {
    return array(
      'vpo' => array(
        'text' => 'Dashboard',
        'url' => '?module=dashboard'
      ),
      'login' => array(
        'text' => 'ออกจากระบบ',
        'url' => '?action=logout'
      )
    );
  }
}