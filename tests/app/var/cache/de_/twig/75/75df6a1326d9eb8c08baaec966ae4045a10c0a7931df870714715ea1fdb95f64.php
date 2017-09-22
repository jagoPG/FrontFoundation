<?php

/* node_modules/core-js/fn/object/get-own-property-names.js */
class __TwigTemplate_a95848ad36d858a3ddefd1acc39f5f5e6f2f0bc40bca297133b5ccb26f25fa17 extends Twig_Template
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
        $__internal_0c031a8e501252cd2fd312a72d950af866ab6758d020300d0832d7dd0e6a739d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c031a8e501252cd2fd312a72d950af866ab6758d020300d0832d7dd0e6a739d->enter($__internal_0c031a8e501252cd2fd312a72d950af866ab6758d020300d0832d7dd0e6a739d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/object/get-own-property-names.js"));

        // line 1
        echo "require('../../modules/es6.object.get-own-property-names');
var \$Object = require('../../modules/_core').Object;
module.exports = function getOwnPropertyNames(it) {
  return \$Object.getOwnPropertyNames(it);
};
";
        
        $__internal_0c031a8e501252cd2fd312a72d950af866ab6758d020300d0832d7dd0e6a739d->leave($__internal_0c031a8e501252cd2fd312a72d950af866ab6758d020300d0832d7dd0e6a739d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/object/get-own-property-names.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.object.get-own-property-names');
var \$Object = require('../../modules/_core').Object;
module.exports = function getOwnPropertyNames(it) {
  return \$Object.getOwnPropertyNames(it);
};
", "node_modules/core-js/fn/object/get-own-property-names.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/object/get-own-property-names.js");
    }
}
