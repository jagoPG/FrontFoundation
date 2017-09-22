<?php

/* node_modules/lodash/fp/object.js */
class __TwigTemplate_d39ed03a8f196068e1cde4e59bcae31cdf3ba00c54055805d69e3f82ef077b3c extends Twig_Template
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
        $__internal_7f59003e800bdc31e1e272bb27d032fe39a2d209500b8d52b8b869fbb8187302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f59003e800bdc31e1e272bb27d032fe39a2d209500b8d52b8b869fbb8187302->enter($__internal_7f59003e800bdc31e1e272bb27d032fe39a2d209500b8d52b8b869fbb8187302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/object.js"));

        // line 1
        echo "var convert = require('./convert');
module.exports = convert(require('../object'));
";
        
        $__internal_7f59003e800bdc31e1e272bb27d032fe39a2d209500b8d52b8b869fbb8187302->leave($__internal_7f59003e800bdc31e1e272bb27d032fe39a2d209500b8d52b8b869fbb8187302_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/object.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert');
module.exports = convert(require('../object'));
", "node_modules/lodash/fp/object.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/object.js");
    }
}
