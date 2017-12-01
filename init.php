<?php
\Larakit\StaticFiles\Manager::package('larakit/sf-angular-clipboard')
    ->setSourceDir('public')
    ->usePackage('larakit/sf-angular')
    ->jsPackage('angular-clipboard.js');
\Larakit\LkNgModule::register('angular-clipboard');