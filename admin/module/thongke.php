<?php
include('../config/config.php');
require('../carbon/autoload.php');

use Carbon\Carbon;
use Carbon\CarbonInterval;

$subdays = Carbon::now('Asia/Ho_Chi_Minh')->subDays(365)->toDateString();
$now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

$sql = "SELECT * FROM thongke WHERE ngaydat BETWEEN '$subdays' AND '$now' ORDER BY 'ngaydat' ASC";
$sql_query = mysqli_query($links, $sql);

while ($val = mysqli_fetch_array($sql_query)) {
    $chart_data[] = array(
        'date' => $val['ngaydat'],
        'order' => $val['donhang'],
        'sales' => $val['doanhthu'],
        'quantity' => $val['soluongban']
    );
}
echo $data = json_encode($chart_data);