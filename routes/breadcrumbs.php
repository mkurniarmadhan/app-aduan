<?php

use App\Models\Aduan;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Aduan', route('pelapor.index'));
});


// Pelapor
Breadcrumbs::for('pelapor.index', function (BreadcrumbTrail $trail) {
    $trail->parent('pelapor');
    $trail->push('Pelapor', route('pelapor.index'));
});

// Pelapor > [Pelapor id]
// Breadcrumbs::for('pelapor.show', function (BreadcrumbTrail $trail, Aduan $aduan) {
//     $trail->parent('pelapor.index');
//     $trail->push($aduan->aduan_id, route('pelapor.show', $aduan->aduan_id));
// });
