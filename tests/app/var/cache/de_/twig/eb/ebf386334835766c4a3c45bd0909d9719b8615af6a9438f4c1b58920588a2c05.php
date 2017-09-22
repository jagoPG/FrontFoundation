<?php

/* node_modules/core-js/es6/date.js */
class __TwigTemplate_4e25deaedfd96ba7aff11f48dbef91c6f1789fb4a79ca45c7648f5c579d8974d extends Twig_Template
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
        $__internal_a46b280f1db9cbf600aa2ebb91ab8d75eedb4e37fa4633cae4596a20b6595172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a46b280f1db9cbf600aa2ebb91ab8d75eedb4e37fa4633cae4596a20b6595172->enter($__internal_a46b280f1db9cbf600aa2ebb91ab8d75eedb4e37fa4633cae4596a20b6595172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/es6/date.js"));

        // line 1
        echo "require('../modules/es6.date.now');
require('../modules/es6.date.to-json');
require('../modules/es6.date.to-iso-string');
require('../modules/es6.date.to-string');
require('../modules/es6.date.to-primitive');
module.exports = Date;
";
        
        $__internal_a46b280f1db9cbf600aa2ebb91ab8d75eedb4e37fa4633cae4596a20b6595172->leave($__internal_a46b280f1db9cbf600aa2ebb91ab8d75eedb4e37fa4633cae4596a20b6595172_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/es6/date.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es6.date.now');
require('../modules/es6.date.to-json');
require('../modules/es6.date.to-iso-string');
require('../modules/es6.date.to-string');
require('../modules/es6.date.to-primitive');
module.exports = Date;
", "node_modules/core-js/es6/date.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/es6/date.js");
    }
}
