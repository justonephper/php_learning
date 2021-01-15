## gt

```
  问题描述：
    
    1. 比较两个字段
            $validator = Validator::make($params, [
                'price' => ['required', 'numeric', 'gte:0'],
                'amount' => ['required', 'numeric', 'gt:price'],
              ]
            );
        
    2. 本来以为都已经是数字类型了，比较肯定没有错，但是还是错了
    
        price = 0.11,amount=110;
    
    3. 框架报错：The values under comparison must be of the same type
    
        意思是不是同类型的数据进行了比较（恩，校验还挺严苛）
    
        打印数据之后，发现一个 folat类型，一个是int类型
        
        数据处理：
        //bug修复 gt:price 必须保证两个字段同类型 float == int(将会报错)
        $params['price'] = (float)$params['price'];
        $params['amount'] = (float)$params['amount'];
        
    4. 校验通过
    
```
