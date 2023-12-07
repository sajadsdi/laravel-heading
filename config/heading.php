<?php

return [
    'title'           => config('app.name'),
    'title_separator' => '-',
    'description'     => "description here...",
    'robots'          => config('app.env') == 'production' ? "index, follow" : "noindex, nofollow",
];
