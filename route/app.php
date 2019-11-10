<?php

Route::group('app', function () {

    Route::get('hello', function () {
        return 'hello,app';
    });

});