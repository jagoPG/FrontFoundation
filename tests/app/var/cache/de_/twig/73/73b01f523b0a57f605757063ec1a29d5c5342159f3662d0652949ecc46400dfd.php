<?php

/* node_modules/cross-spawn/lib/util/hasEmptyArgumentBug.js */
class __TwigTemplate_b32ca27f2bd4ed6af76a79a408cb5e824b9f52302be6ee040b94774609774556 extends Twig_Template
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
        $__internal_0270c69db91b0e1ae886e70e2d51c297073145a918e7f5b6e9228aa32dcc3780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0270c69db91b0e1ae886e70e2d51c297073145a918e7f5b6e9228aa32dcc3780->enter($__internal_0270c69db91b0e1ae886e70e2d51c297073145a918e7f5b6e9228aa32dcc3780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/cross-spawn/lib/util/hasEmptyArgumentBug.js"));

        // line 1
        echo "'use strict';

// See: https://github.com/IndigoUnited/node-cross-spawn/pull/34#issuecomment-221623455
function hasEmptyArgumentBug() {
    var nodeVer;

    if (process.platform !== 'win32') {
        return false;
    }

    nodeVer = process.version.substr(1).split('.').map(function (num) {
        return parseInt(num, 10);
    });

    return (nodeVer[0] === 0 && nodeVer[1] < 12);
}

module.exports = hasEmptyArgumentBug();
";
        
        $__internal_0270c69db91b0e1ae886e70e2d51c297073145a918e7f5b6e9228aa32dcc3780->leave($__internal_0270c69db91b0e1ae886e70e2d51c297073145a918e7f5b6e9228aa32dcc3780_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/cross-spawn/lib/util/hasEmptyArgumentBug.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

// See: https://github.com/IndigoUnited/node-cross-spawn/pull/34#issuecomment-221623455
function hasEmptyArgumentBug() {
    var nodeVer;

    if (process.platform !== 'win32') {
        return false;
    }

    nodeVer = process.version.substr(1).split('.').map(function (num) {
        return parseInt(num, 10);
    });

    return (nodeVer[0] === 0 && nodeVer[1] < 12);
}

module.exports = hasEmptyArgumentBug();
", "node_modules/cross-spawn/lib/util/hasEmptyArgumentBug.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/cross-spawn/lib/util/hasEmptyArgumentBug.js");
    }
}
