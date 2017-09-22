<?php

/* node_modules/core-js/library/es6/symbol.js */
class __TwigTemplate_ad75c8b349eee9cc6c2f25b9c5ce38aa414920569b16e645cc8132b5a09e9b9e extends Twig_Template
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
        $__internal_f3ff8e1a7843b343cb01232be19f935fa0f68d7a0fb45b5cf57f41373afded29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3ff8e1a7843b343cb01232be19f935fa0f68d7a0fb45b5cf57f41373afded29->enter($__internal_f3ff8e1a7843b343cb01232be19f935fa0f68d7a0fb45b5cf57f41373afded29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/es6/symbol.js"));

        // line 1
        echo "require('../modules/es6.symbol');
require('../modules/es6.object.to-string');
module.exports = require('../modules/_core').Symbol;
";
        
        $__internal_f3ff8e1a7843b343cb01232be19f935fa0f68d7a0fb45b5cf57f41373afded29->leave($__internal_f3ff8e1a7843b343cb01232be19f935fa0f68d7a0fb45b5cf57f41373afded29_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/es6/symbol.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es6.symbol');
require('../modules/es6.object.to-string');
module.exports = require('../modules/_core').Symbol;
", "node_modules/core-js/library/es6/symbol.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/es6/symbol.js");
    }
}
