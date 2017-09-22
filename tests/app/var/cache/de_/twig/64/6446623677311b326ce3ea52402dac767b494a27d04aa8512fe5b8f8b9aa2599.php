<?php

/* node_modules/core-js/library/modules/_entry-virtual.js */
class __TwigTemplate_f5d46277e504bff4f931db726aa5d7e11cbce456429cb24c68b0126ae94ff7ee extends Twig_Template
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
        $__internal_72ab8cfba7bff81fcbc88014045c8b38bcf23aca573434205293dc99e4f20e41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72ab8cfba7bff81fcbc88014045c8b38bcf23aca573434205293dc99e4f20e41->enter($__internal_72ab8cfba7bff81fcbc88014045c8b38bcf23aca573434205293dc99e4f20e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_entry-virtual.js"));

        // line 1
        echo "var core = require('./_core');
module.exports = function (CONSTRUCTOR) {
  var C = core[CONSTRUCTOR];
  return (C.virtual || C.prototype);
};
";
        
        $__internal_72ab8cfba7bff81fcbc88014045c8b38bcf23aca573434205293dc99e4f20e41->leave($__internal_72ab8cfba7bff81fcbc88014045c8b38bcf23aca573434205293dc99e4f20e41_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_entry-virtual.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var core = require('./_core');
module.exports = function (CONSTRUCTOR) {
  var C = core[CONSTRUCTOR];
  return (C.virtual || C.prototype);
};
", "node_modules/core-js/library/modules/_entry-virtual.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_entry-virtual.js");
    }
}
