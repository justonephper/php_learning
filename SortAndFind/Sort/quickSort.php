//快速排序

function quickSort($arr)
{
    $len = count($arr);
    if($len <= 1){
        return $arr;
    }
    $middle = $arr[0];
    $left_arr = [];
    $right_arr = [];
    foreach ($arr as $value){
        if($value > $middle){
            $right_arr[] = $value;
        } elseif ($value < $middle){
            $left_arr[] = $value;
        }
    }
    $left_arr = quickSort($left_arr);
    $right_arr = quickSort($right_arr);
    return array_merge($left_arr,array($middle),$right_arr);
}

$arr = [2, 3, 6, 5, 4, 1, 9, 7, 8];
print_r(quickSort($arr));


//output 
1,2,3,4,5,6,7,8,9
