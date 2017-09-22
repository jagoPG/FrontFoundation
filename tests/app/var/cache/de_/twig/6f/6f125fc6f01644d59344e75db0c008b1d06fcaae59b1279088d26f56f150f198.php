<?php

/* node_modules/core-js/library/fn/string/virtual/starts-with.js */
class __TwigTemplate_ecb34f6350701ee19ab3703af1d3680e17d689c66c853d22e312723f143956eb extends Twig_Template
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
        $__internal_f7e811e6d449dda1329e1210c9b084bcb748039cf5f18d8c11fc3722790e3816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7e811e6d449dda1329e1210c9b084bcb748039cf5f18d8c11fc3722790e3816->enter($__internal_f7e811e6d449dda1329e1210c9b084bcb748039cf5f18d8c11fc3722790e3816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/string/virtual/starts-with.js"));

        // line 1
        echo "require('../../../modules/es6.string.starts-with');
module.exports = require('../../../modules/_entry-virtual')('String').startsWith;
";
        
        $__internal_f7e811e6d449dda1329e1210c9b084bcb748039cf5f18d8c11fc3722790e3816->leave($__internal_f7e811e6d449dda1329e1210c9b084bcb748039cf5f18d8c11fc3722790e3816_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/string/virtual/starts-with.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.string.starts-with');
module.exports = require('../../../modules/_entry-virtual')('String').startsWith;
", "node_modules/core-js/library/fn/string/virtual/starts-with.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/string/virtual/starts-with.js");
    }
}
