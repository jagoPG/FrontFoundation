<?php

/* node_modules/lodash/fp/seq.js */
class __TwigTemplate_2f5cf3624a52f1c2e25bcdab5f47ca7487688a3f5596889d918a89047c0139fb extends Twig_Template
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
        $__internal_9a1c5f9eb78820ff7fb35c91005af9f9039903ff0e5f0f5b197f475dd58a976a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a1c5f9eb78820ff7fb35c91005af9f9039903ff0e5f0f5b197f475dd58a976a->enter($__internal_9a1c5f9eb78820ff7fb35c91005af9f9039903ff0e5f0f5b197f475dd58a976a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/seq.js"));

        // line 1
        echo "var convert = require('./convert');
module.exports = convert(require('../seq'));
";
        
        $__internal_9a1c5f9eb78820ff7fb35c91005af9f9039903ff0e5f0f5b197f475dd58a976a->leave($__internal_9a1c5f9eb78820ff7fb35c91005af9f9039903ff0e5f0f5b197f475dd58a976a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/seq.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert');
module.exports = convert(require('../seq'));
", "node_modules/lodash/fp/seq.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/seq.js");
    }
}
