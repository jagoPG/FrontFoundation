<?php

/* node_modules/cross-spawn/lib/util/readShebang.js */
class __TwigTemplate_1ebf1e554a99c81e86697a4ddda49f0573ccebb29dde9bd152a705264823761a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14c40c46d4d0b4cfaf98a82084a6f69990318efdcfadadbbb73b0a065276fa04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14c40c46d4d0b4cfaf98a82084a6f69990318efdcfadadbbb73b0a065276fa04->enter($__internal_14c40c46d4d0b4cfaf98a82084a6f69990318efdcfadadbbb73b0a065276fa04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/cross-spawn/lib/util/readShebang.js"));

        // line 1
        echo "'use strict';

var fs = require('fs');
var LRU = require('lru-cache');
var shebangCommand = require('shebang-command');

var shebangCache = new LRU({ max: 50, maxAge: 30 * 1000 });  // Cache just for 30sec

function readShebang(command) {
    var buffer;
    var fd;
    var shebang;

    // Check if it is in the cache first
    if (shebangCache.has(command)) {
        return shebangCache.get(command);
    }

    // Read the first 150 bytes from the file
    buffer = new Buffer(150);

    try {
        fd = fs.openSync(command, 'r');
        fs.readSync(fd, buffer, 0, 150, 0);
        fs.closeSync(fd);
    } catch (e) { /* empty */ }

    // Attempt to extract shebang (null is returned if not a shebang)
    shebang = shebangCommand(buffer.toString());

    // Store the shebang in the cache
    shebangCache.set(command, shebang);

    return shebang;
}

module.exports = readShebang;
";
        
        $__internal_14c40c46d4d0b4cfaf98a82084a6f69990318efdcfadadbbb73b0a065276fa04->leave($__internal_14c40c46d4d0b4cfaf98a82084a6f69990318efdcfadadbbb73b0a065276fa04_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/cross-spawn/lib/util/readShebang.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var fs = require('fs');
var LRU = require('lru-cache');
var shebangCommand = require('shebang-command');

var shebangCache = new LRU({ max: 50, maxAge: 30 * 1000 });  // Cache just for 30sec

function readShebang(command) {
    var buffer;
    var fd;
    var shebang;

    // Check if it is in the cache first
    if (shebangCache.has(command)) {
        return shebangCache.get(command);
    }

    // Read the first 150 bytes from the file
    buffer = new Buffer(150);

    try {
        fd = fs.openSync(command, 'r');
        fs.readSync(fd, buffer, 0, 150, 0);
        fs.closeSync(fd);
    } catch (e) { /* empty */ }

    // Attempt to extract shebang (null is returned if not a shebang)
    shebang = shebangCommand(buffer.toString());

    // Store the shebang in the cache
    shebangCache.set(command, shebang);

    return shebang;
}

module.exports = readShebang;
", "node_modules/cross-spawn/lib/util/readShebang.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/cross-spawn/lib/util/readShebang.js");
    }
}
