<?php

return array(
    'VIEW_PATH'         =>'./Template/mobile/',//改变某个模块的模板文件目录
    'DEFAULT_THEME'     =>'new',//模板名称
    'TMPL_PARSE_STRING' =>array(
        '__STATIC__'   => 'Template/mobile/new/Static',//增加新的image css js  访问路径
    ),
    'DATA_CACHE_TIME'   =>60, //查询缓存时间
);