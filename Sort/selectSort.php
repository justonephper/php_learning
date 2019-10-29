//选择排序  从第二个数开始，选出最小的数和当前数作比较

function selectSort($arr)
{
    $len = count($arr);
    if ($len <= 1) {
        return $arr;
    }
    for ($i = 0; $i < $len - 1; $i++) {
        //取出第二个数后的最小值
        $min = $i;
        for ($j = $i+1;$j < $len;$j++){
            if($arr[$j] < $arr[$min]){
                $min = $j;
            }
        }
        if($min != $i){
            $temp = $arr[$min];
            $arr[$min] = $arr[$i];
            $arr[$i] = $temp;
        }
    }
    return $arr;
}

$arr = [2, 3, 6, 5, 4, 1, 9, 7, 8];
print_r(selectSort($arr));

//output
1,2,3,4,5,6,7,8,9

