//归并排序
//分为知之思想，递归拆分，直至不能拆分，两两比较，最后合并

function merge($arr1,$arr2)
{
  $arr3 = [];
  while(count($arr1) && count($arr2)){
    $arr3[] = $arr1[0] < $arr2[0] ? array_shift($arr1) : array_shift($arr2);
  }
  return array_merge($arr3,$arr1,$arr2);
}

function devide_func($arr)
{
  $len = count($arr);
  if($len <=1 ){
    return $arr;
  }
  $middle = intval($len / 2);
  $left_arr = array_slice($arr, 0 ,$middle);
  $right_arr = array_slice($arr, $middle);
  $left_arr = devide_func($left_arr);
  $right_arr = devide_func($right_arr);
  return merge($left_arr, $right_arr);
}

$arr = [2, 3, 6, 5, 4, 1, 9, 7, 8];
print_r(devide_func($arr));



//output:
1,2,3,4,5,6,7,8,9
