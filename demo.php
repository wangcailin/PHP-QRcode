<?php
/**
 * Created by PhpStorm.
 * User: wangcailin
 * Date: 2018/3/28
 * Time: 下午2:02
 */

include "qrlib.php";
QRcode :: eps('demo');
//QRcode :: svg('123123123',$elemId = false,$outFile = false,$level = QR_ECLEVEL_L,$width = false,$size = false,$margin = 4,$compress =false);