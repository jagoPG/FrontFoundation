<?php

/* node_modules/builtin-status-codes/build.js */
class __TwigTemplate_5648cca961070b1a459224159305d04e4dcb6c6e8fb76dbbbc8670a1e2685a70 extends Twig_Template
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
        $__internal_b35a93143a56a3f703d8946b17a7421ba2ed0ffe413217aa0465b4f3fef98bb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b35a93143a56a3f703d8946b17a7421ba2ed0ffe413217aa0465b4f3fef98bb4->enter($__internal_b35a93143a56a3f703d8946b17a7421ba2ed0ffe413217aa0465b4f3fef98bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/builtin-status-codes/build.js"));

        // line 1
        echo "'use strict'

var fs = require('fs')
var statusCodes = require('./')

var code = 'module.exports = ' + JSON.stringify(statusCodes, null, 2) + '\\n'

fs.writeFileSync('browser.js', code)
";
        
        $__internal_b35a93143a56a3f703d8946b17a7421ba2ed0ffe413217aa0465b4f3fef98bb4->leave($__internal_b35a93143a56a3f703d8946b17a7421ba2ed0ffe413217aa0465b4f3fef98bb4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/builtin-status-codes/build.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict'

var fs = require('fs')
var statusCodes = require('./')

var code = 'module.exports = ' + JSON.stringify(statusCodes, null, 2) + '\\n'

fs.writeFileSync('browser.js', code)
", "node_modules/builtin-status-codes/build.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/builtin-status-codes/build.js");
    }
}
