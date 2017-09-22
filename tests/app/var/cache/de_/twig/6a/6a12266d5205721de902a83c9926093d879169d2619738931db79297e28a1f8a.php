<?php

/* node_modules/es5-ext/test/function/pluck.js */
class __TwigTemplate_5bd344afac3809c5c5b0464f599528147f403a82f0cfef45a165b58cecce30d5 extends Twig_Template
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
        $__internal_634a28c76aa5b452c59f119afab22a2a36d3d0de127c1bbd15a45d9765eb3938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_634a28c76aa5b452c59f119afab22a2a36d3d0de127c1bbd15a45d9765eb3938->enter($__internal_634a28c76aa5b452c59f119afab22a2a36d3d0de127c1bbd15a45d9765eb3938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/function/pluck.js"));

        // line 1
        echo "\"use strict\";

var o = { foo: \"bar\" };

module.exports = function (t, a) {
\ta(t(\"foo\")(o), o.foo);
};
";
        
        $__internal_634a28c76aa5b452c59f119afab22a2a36d3d0de127c1bbd15a45d9765eb3938->leave($__internal_634a28c76aa5b452c59f119afab22a2a36d3d0de127c1bbd15a45d9765eb3938_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/function/pluck.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var o = { foo: \"bar\" };

module.exports = function (t, a) {
\ta(t(\"foo\")(o), o.foo);
};
", "node_modules/es5-ext/test/function/pluck.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/function/pluck.js");
    }
}
