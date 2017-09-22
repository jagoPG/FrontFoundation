<?php

/* node_modules/core-js/library/fn/string/virtual/trim.js */
class __TwigTemplate_afdd5dfbd2cfc3bd3624802870f204a450f76b6021e3fcd8899f7b2ae658349f extends Twig_Template
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
        $__internal_22dc2be1860d3b8ce621545ce29965e068ee5e98dafed28910190fe2e68c6d92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22dc2be1860d3b8ce621545ce29965e068ee5e98dafed28910190fe2e68c6d92->enter($__internal_22dc2be1860d3b8ce621545ce29965e068ee5e98dafed28910190fe2e68c6d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/string/virtual/trim.js"));

        // line 1
        echo "require('../../../modules/es6.string.trim');
module.exports = require('../../../modules/_entry-virtual')('String').trim;
";
        
        $__internal_22dc2be1860d3b8ce621545ce29965e068ee5e98dafed28910190fe2e68c6d92->leave($__internal_22dc2be1860d3b8ce621545ce29965e068ee5e98dafed28910190fe2e68c6d92_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/string/virtual/trim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.string.trim');
module.exports = require('../../../modules/_entry-virtual')('String').trim;
", "node_modules/core-js/library/fn/string/virtual/trim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/string/virtual/trim.js");
    }
}
