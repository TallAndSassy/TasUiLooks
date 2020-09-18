<?php
/*
[ ] Add the following line to your packages/eleganttechnologies/grok/routes/web.php file...... oh, there must be a more laravel-ish way
require_once(base_path('path to here/routes/web.php'));
*/



Route::get('/grok/tas/ui-looks',function () {return view('tas::groks/index');})->name('grok.tas-ui-looks');
