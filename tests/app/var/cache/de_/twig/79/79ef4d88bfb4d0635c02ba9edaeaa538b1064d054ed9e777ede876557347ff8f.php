<?php

/* node_modules/core-js/library/fn/object/prevent-extensions.js */
class __TwigTemplate_db37007c6ca67ee5dba00fe918e2202418059f332fa5aaad461b756e65f9fe09 extends Twig_Template
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
        $__internal_c27f93c4902f196a9dd57370276f0d53ef970ee770743f24ddcab0b3908d0b71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c27f93c4902f196a9dd57370276f0d53ef970ee770743f24ddcab0b3908d0b71->enter($__internal_c27f93c4902f196a9dd57370276f0d53ef970ee770743f24ddcab0b3908d0b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/object/prevent-extensions.js"));

        // line 1
        echo "require('../../modules/es6.object.prevent-extensions');
module.exports = require('../../modules/_core').Object.preventExtensions;
";
        
        $__internal_c27f93c4902f196a9dd57370276f0d53ef970ee770743f24ddcab0b3908d0b71->leave($__internal_c27f93c4902f196a9dd57370276f0d53ef970ee770743f24ddcab0b3908d0b71_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/object/prevent-extensions.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.object.prevent-extensions');
module.exports = require('../../modules/_core').Object.preventExtensions;
", "node_modules/core-js/library/fn/object/prevent-extensions.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/object/prevent-extensions.js");
    }
}
