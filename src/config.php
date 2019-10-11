<?php
return [
    'title' => "API接口文档",                           //文档title
    'version'=>'1.0.0',                                  //文档版本
    'copyright'=>'520国际（中国）集团公司',            //版权信息
    'password' => '',                                   //访问密码，为空不需要密码
    'static_path' => '',                                //可将assets目录拷贝到public下面，具体路径可自行配置
    'controller' => [
        'app\index\controller\demo'                     //需要生成文档的类
    ],
    'filter_method' => [
        '_empty'                                        //过滤 不解析的方法名称
    ],
    'return_format' => [                                 //数据格式
        'status' => "200/300/301/302",
        'message' => "提示信息",
    ],
    'public_header' => [                                 //全局公共头部参数
                                                         //如：['name'=>'version', 'require'=>1, 'default'=>'', 'desc'=>'版本号(全局)']
    ],
    'public_param' => [                                  //全局公共请求参数，设置了所以的接口会自动增加次参数
                                                         //如：['name'=>'token', 'type'=>'string', 'require'=>1, 'default'=>'', 'other'=>'' ,'desc'=>'验证（全局）')']
    ],
];
