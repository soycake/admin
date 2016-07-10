# คชสาร เว็บเฟรมเวิร์ค (Kotchasan Web Framework)

Workshop เว็บไซต์ตัวอย่าง ที่มีระบบ Login และ ระบบสมาชิกอย่างง่าย เช่นระบบแอดมิน

##การติดตั้ง
###สร้างฐานข้อมูล ```kotchasan``` และ ตารางตามโค้ดด้านล่าง

```
CREATE TABLE `kotchasan_user` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastvisited` int(11) UNSIGNED NOT NULL,
  `visited` int(11) UNSIGNED NOT NULL,
  `session_id` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kotchasan_user`
--

INSERT INTO `kotchasan_user` (`id`, `username`, `password`, `name`, `lastvisited`, `visited`, `session_id`, `ip`, `status`) VALUES
(1, 'admin', 'f6fdffe48c908deb0f4c3bd36c032e72', 'แอดมิน', 0, 0, '', '', 1),
(2, 'demo', 'c514c91e4ed341f263e458d44b3bb0a7', 'ตัวอย่าง', 0, 0, '', '', 0);
```

###แก้ไขค่าติดตั้งของฐานข้อมูลให้ถูกต้อง

```
<?php
/* settings/database.php */
return array(
  'mysql' => array(
    'dbdriver' => 'mysql',
    'username' => 'root',
    'password' => '',
    'dbname' => 'kotchasan',
    'prefix' => 'kotchasan',
  ),
  'tables' => array(
    'user' => 'user'
  )
);
```