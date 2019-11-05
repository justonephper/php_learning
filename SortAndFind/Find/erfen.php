1.前提是这个数据有序，然后进行二分查找

function binarySearch($arr, $needle) {
    sort($arr);
    $low = 0;
    $height = count($arr);
    while($low < $height) {
      $middle = int(($low + $height)/2);
      if($arr[$middle] > $needle) {
        $height = $middle - 1;
      } elseif ($arr[$middle] < $needle) {
        $low = $middle + 1;
      } else {
        return true;
      }
    }
}

$arr = [1,3,4,5,6,2,8,7,9,11,10,13,15,14,12];
$res = binarySearch($arr, 12);

//output
bool（true）


