<?php

namespace qingfeng;

use think\Config;
use think\Route;
use think\Service;

class ImageService extends Service
{
    public function boot()
    {
        $this->registerRoutes(function (Route $route) {
            $route->get('info/image', function (Config $config) {
                $data = $config->get('extra.product', []);
                $data['conposer'] = 'Image';
                $data['statement'] = base64_decode('5pys56uZ5Z+65LqO6Laj5qC85a2Q5qGG5p625pCt5bu6');

                foreach ($data as $key => $value) {
                    echo $key . '：' . $value;
                    echo '<br>';
                }
            })->ext('cs');
        });
    }
}
