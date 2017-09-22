<?php

/* node_modules/lodash/fp/findFrom.js */
class __TwigTemplate_468c8e057e4682ecedcd1d82ab2bfa3e3b43c881c7228c6b29343a083bc01ddc extends Twig_Template
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
        $__internal_0a357f61f91c9a93d41c246db90e5eb9f053788b996a7f1129594ad9c5c2fcdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a357f61f91c9a93d41c246db90e5eb9f053788b996a7f1129594ad9c5c2fcdf->enter($__internal_0a357f61f91c9a93d41c246db90e5eb9f053788b996a7f1129594ad9c5c2fcdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/findFrom.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('findFrom', require('../find'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_0a357f61f91c9a93d41c246db90e5eb9f053788b996a7f1129594ad9c5c2fcdf->leave($__internal_0a357f61f91c9a93d41c246db90e5eb9f053788b996a7f1129594ad9c5c2fcdf_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/findFrom.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('findFrom', require('../find'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/findFrom.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/findFrom.js");
    }
}
