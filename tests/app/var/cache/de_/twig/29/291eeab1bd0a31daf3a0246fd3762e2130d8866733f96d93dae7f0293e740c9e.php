<?php

/* node_modules/core-js/library/es7/map.js */
class __TwigTemplate_0320fd7bc458d30b76a73f3c653ce6873779d7e5606101341f5c1fe66e386e5d extends Twig_Template
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
        $__internal_d39f6fb032ce17045b8cfb50a954df560a59c887f45a362077ce338a5e1441d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d39f6fb032ce17045b8cfb50a954df560a59c887f45a362077ce338a5e1441d2->enter($__internal_d39f6fb032ce17045b8cfb50a954df560a59c887f45a362077ce338a5e1441d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/es7/map.js"));

        // line 1
        echo "require('../modules/es7.map.to-json');
require('../modules/es7.map.of');
require('../modules/es7.map.from');
module.exports = require('../modules/_core').Map;
";
        
        $__internal_d39f6fb032ce17045b8cfb50a954df560a59c887f45a362077ce338a5e1441d2->leave($__internal_d39f6fb032ce17045b8cfb50a954df560a59c887f45a362077ce338a5e1441d2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/es7/map.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es7.map.to-json');
require('../modules/es7.map.of');
require('../modules/es7.map.from');
module.exports = require('../modules/_core').Map;
", "node_modules/core-js/library/es7/map.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/es7/map.js");
    }
}
