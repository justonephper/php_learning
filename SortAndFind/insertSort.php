//插入排序
//将数列分为两部分，默认，第一部分一个元素，从第二个数据开始，依次和第一部分数据倒叙比较，第一部分数据依次后移，直到查找到插入位置

function insertSort($arr)
{
  $len = count($arr);
  if($len <= 1) {
    return $arr;
  }
  for($i = 1; $i <$len; $i++){
    $value = $arr[$i];
    $key = $i - 1;
    while($key >= 0 && $value < $arr[$key]){
      $arr[$key + 1] = $arr[$key];
      $key--;
    }
    $arr[$key+1] = $value;
  }
  return $arr;
}

$arr = [2, 3, 6, 5, 4, 1, 9, 7, 8];
print_r(insertSort($arr));
