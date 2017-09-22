<?php

/* node_modules/cross-spawn/lib/util/escapeCommand.js */
class __TwigTemplate_8a531894c1849e2df245352f58a8da62aff665de156439ff509c9df780fbdda7 extends Twig_Template
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
        $__internal_4edabd3fc34e7751724d5df0283ebd3a7e28d9d025abb08272ca0b7da8939148 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4edabd3fc34e7751724d5df0283ebd3a7e28d9d025abb08272ca0b7da8939148->enter($__internal_4edabd3fc34e7751724d5df0283ebd3a7e28d9d025abb08272ca0b7da8939148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/cross-spawn/lib/util/escapeCommand.js"));

        // line 1
        echo "'use strict';

var escapeArgument = require('./escapeArgument');

function escapeCommand(command) {
    // Do not escape if this command is not dangerous..
    // We do this so that commands like \"echo\" or \"ifconfig\" work
    // Quoting them, will make them unaccessible
    return /^[a-z0-9_-]+\$/i.test(command) ? command : escapeArgument(command, true);
}

module.exports = escapeCommand;
";
        
        $__internal_4edabd3fc34e7751724d5df0283ebd3a7e28d9d025abb08272ca0b7da8939148->leave($__internal_4edabd3fc34e7751724d5df0283ebd3a7e28d9d025abb08272ca0b7da8939148_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/cross-spawn/lib/util/escapeCommand.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var escapeArgument = require('./escapeArgument');

function escapeCommand(command) {
    // Do not escape if this command is not dangerous..
    // We do this so that commands like \"echo\" or \"ifconfig\" work
    // Quoting them, will make them unaccessible
    return /^[a-z0-9_-]+\$/i.test(command) ? command : escapeArgument(command, true);
}

module.exports = escapeCommand;
", "node_modules/cross-spawn/lib/util/escapeCommand.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/cross-spawn/lib/util/escapeCommand.js");
    }
}
