<?php

    require LIBRARY_DIR . "RainLoader.php";

    // init loader
    $loader = new RainLoader();

    RainLoader::configure("module_extension", AJAX_MODULE_EXTENSION);
    RainLoader::configure("module_class_name", AJAX_MODULE_CLASS_NAME);

    $loader->ajax_mode();

    $loader->init_session();

    $loader->init_db();

    $loader->init_settings();

    $loader->init_language();

    $loader->auth_user();

    $loader->init_theme();

    $loader->auto_load_module();

    // -- end