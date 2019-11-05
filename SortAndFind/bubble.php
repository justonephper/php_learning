<?php
//desc
//从第一个数字开始，两两比较，取出最小


function bubbleSort($arr)
{
  $len = count($arr);
  if($len <= 1) {
    return $arr;
  }
  for($i = 0; $i < $len ; $i++){
    for($j = $i+1; $j < $len ; $j++){
      if($arr[$i] > $arr[$j]){
        $tmp = $arr[$i];
        $arr[$i] = $arr[$j];
        $arr[$j] = $tmp;
      }
    }
  }
  return $arr;
}



$arr = [2, 3, 6, 5, 4, 1, 9, 7, 8];
print_r(bubbleSort($arr));


//output:
1,2,3,4,5,6,7,8,9
