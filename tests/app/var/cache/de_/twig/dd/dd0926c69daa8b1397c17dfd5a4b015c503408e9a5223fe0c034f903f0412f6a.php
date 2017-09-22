<?php

/* node_modules/builtin-modules/index.js */
class __TwigTemplate_f89e47a00f8dd0671423a930fdecfc292007924287fd0a165a60d36a499d5ece extends Twig_Template
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
        $__internal_06057f8eb095125570926077e1443474d8d9b16c3dba37e2d4b57e95b85af590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06057f8eb095125570926077e1443474d8d9b16c3dba37e2d4b57e95b85af590->enter($__internal_06057f8eb095125570926077e1443474d8d9b16c3dba37e2d4b57e95b85af590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/builtin-modules/index.js"));

        // line 1
        echo "'use strict';

var blacklist = [
\t'freelist',
\t'sys'
];

module.exports = Object.keys(process.binding('natives')).filter(function (el) {
\treturn !/^_|^internal|\\//.test(el) && blacklist.indexOf(el) === -1;
}).sort();
";
        
        $__internal_06057f8eb095125570926077e1443474d8d9b16c3dba37e2d4b57e95b85af590->leave($__internal_06057f8eb095125570926077e1443474d8d9b16c3dba37e2d4b57e95b85af590_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/builtin-modules/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var blacklist = [
\t'freelist',
\t'sys'
];

module.exports = Object.keys(process.binding('natives')).filter(function (el) {
\treturn !/^_|^internal|\\//.test(el) && blacklist.indexOf(el) === -1;
}).sort();
", "node_modules/builtin-modules/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/builtin-modules/index.js");
    }
}
