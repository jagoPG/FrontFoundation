<?php

/* node_modules/core-js/library/fn/string/virtual/big.js */
class __TwigTemplate_6a28aea5267521ebaa6f4121a6562367a1bcab1b475f57104e14f76399da82bf extends Twig_Template
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
        $__internal_726f560b73128c840db133c38e07f458dc9dff8af9b135f33c231595be59599f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_726f560b73128c840db133c38e07f458dc9dff8af9b135f33c231595be59599f->enter($__internal_726f560b73128c840db133c38e07f458dc9dff8af9b135f33c231595be59599f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/string/virtual/big.js"));

        // line 1
        echo "require('../../../modules/es6.string.big');
module.exports = require('../../../modules/_entry-virtual')('String').big;
";
        
        $__internal_726f560b73128c840db133c38e07f458dc9dff8af9b135f33c231595be59599f->leave($__internal_726f560b73128c840db133c38e07f458dc9dff8af9b135f33c231595be59599f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/string/virtual/big.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.string.big');
module.exports = require('../../../modules/_entry-virtual')('String').big;
", "node_modules/core-js/library/fn/string/virtual/big.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/string/virtual/big.js");
    }
}
