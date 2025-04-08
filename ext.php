<?php
return new \Flarum\Extend\[
  (new \Flarum\Extend\Frontend('forum'))
    ->css(__DIR__ . '/resources/less/theme.less')
    ->js(__DIR__ . '/js/dist/forum.js'),
  (new \Flarum\Extend\Frontend('admin'))
    ->js(__DIR__ . '/js/dist/admin.js')
];
