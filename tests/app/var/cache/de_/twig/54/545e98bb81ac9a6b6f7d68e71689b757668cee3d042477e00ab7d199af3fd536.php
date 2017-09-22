<?php

/* node_modules/core-js/fn/weak-set/index.js */
class __TwigTemplate_7fa4ab6a7d6d23e7107a005cd6510ff66299c9a07dda5e51c80341a0e293c154 extends Twig_Template
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
        $__internal_dc0ce1a52c393860e7deecfc63ecd03dcb19930b0d139d78926200f51bc8725a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc0ce1a52c393860e7deecfc63ecd03dcb19930b0d139d78926200f51bc8725a->enter($__internal_dc0ce1a52c393860e7deecfc63ecd03dcb19930b0d139d78926200f51bc8725a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/weak-set/index.js"));

        // line 1
        echo "require('../../modules/es6.object.to-string');
require('../../modules/web.dom.iterable');
require('../../modules/es6.weak-set');
require('../../modules/es7.weak-set.of');
require('../../modules/es7.weak-set.from');
module.exports = require('../../modules/_core').WeakSet;
";
        
        $__internal_dc0ce1a52c393860e7deecfc63ecd03dcb19930b0d139d78926200f51bc8725a->leave($__internal_dc0ce1a52c393860e7deecfc63ecd03dcb19930b0d139d78926200f51bc8725a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/weak-set/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.object.to-string');
require('../../modules/web.dom.iterable');
require('../../modules/es6.weak-set');
require('../../modules/es7.weak-set.of');
require('../../modules/es7.weak-set.from');
module.exports = require('../../modules/_core').WeakSet;
", "node_modules/core-js/fn/weak-set/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/weak-set/index.js");
    }
}
