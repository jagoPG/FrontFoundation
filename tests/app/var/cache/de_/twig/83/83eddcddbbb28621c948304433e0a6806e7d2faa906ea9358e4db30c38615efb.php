<?php

/* node_modules/cross-spawn/lib/util/resolveCommand.js */
class __TwigTemplate_7717179ba762d1fea7a363902052aa5a31c0075c76bb58259c5248cad41d062b extends Twig_Template
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
        $__internal_eaacb58399443d219489e9add7b43d9489c73a85c8b10aad50bb7d0dcfba3da8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaacb58399443d219489e9add7b43d9489c73a85c8b10aad50bb7d0dcfba3da8->enter($__internal_eaacb58399443d219489e9add7b43d9489c73a85c8b10aad50bb7d0dcfba3da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/cross-spawn/lib/util/resolveCommand.js"));

        // line 1
        echo "'use strict';

var path = require('path');
var which = require('which');
var LRU = require('lru-cache');

var commandCache = new LRU({ max: 50, maxAge: 30 * 1000 });  // Cache just for 30sec

function resolveCommand(command, noExtension) {
    var resolved;

    noExtension = !!noExtension;
    resolved = commandCache.get(command + '!' + noExtension);

    // Check if its resolved in the cache
    if (commandCache.has(command)) {
        return commandCache.get(command);
    }

    try {
        resolved = !noExtension ?
            which.sync(command) :
            which.sync(command, { pathExt: path.delimiter + (process.env.PATHEXT || '') });
    } catch (e) { /* empty */ }

    commandCache.set(command + '!' + noExtension, resolved);

    return resolved;
}

module.exports = resolveCommand;
";
        
        $__internal_eaacb58399443d219489e9add7b43d9489c73a85c8b10aad50bb7d0dcfba3da8->leave($__internal_eaacb58399443d219489e9add7b43d9489c73a85c8b10aad50bb7d0dcfba3da8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/cross-spawn/lib/util/resolveCommand.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var path = require('path');
var which = require('which');
var LRU = require('lru-cache');

var commandCache = new LRU({ max: 50, maxAge: 30 * 1000 });  // Cache just for 30sec

function resolveCommand(command, noExtension) {
    var resolved;

    noExtension = !!noExtension;
    resolved = commandCache.get(command + '!' + noExtension);

    // Check if its resolved in the cache
    if (commandCache.has(command)) {
        return commandCache.get(command);
    }

    try {
        resolved = !noExtension ?
            which.sync(command) :
            which.sync(command, { pathExt: path.delimiter + (process.env.PATHEXT || '') });
    } catch (e) { /* empty */ }

    commandCache.set(command + '!' + noExtension, resolved);

    return resolved;
}

module.exports = resolveCommand;
", "node_modules/cross-spawn/lib/util/resolveCommand.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/cross-spawn/lib/util/resolveCommand.js");
    }
}
