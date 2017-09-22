<?php

/* node_modules/es5-ext/test/function/#/not.js */
class __TwigTemplate_11a6ea33ed2982cab3076d6e3dd00ee12feafba713f11ea60561e4a570bea741 extends Twig_Template
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
        $__internal_cd2abcc7b6ec23366defac724aef040691ad765da3066dca163ae784b731864a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd2abcc7b6ec23366defac724aef040691ad765da3066dca163ae784b731864a->enter($__internal_cd2abcc7b6ec23366defac724aef040691ad765da3066dca163ae784b731864a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/function/#/not.js"));

        // line 1
        echo "\"use strict\";

var identity = require(\"../../../function/identity\")
  , noop     = require(\"../../../function/noop\");

module.exports = function (t, a) {
\ta(t.call(identity)(\"\"), true, \"Falsy\");
\ta(t.call(noop)(), true, \"Undefined\");
\ta(t.call(identity)({}), false, \"Any object\");
\ta(t.call(identity)(true), false, \"True\");
};
";
        
        $__internal_cd2abcc7b6ec23366defac724aef040691ad765da3066dca163ae784b731864a->leave($__internal_cd2abcc7b6ec23366defac724aef040691ad765da3066dca163ae784b731864a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/function/#/not.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var identity = require(\"../../../function/identity\")
  , noop     = require(\"../../../function/noop\");

module.exports = function (t, a) {
\ta(t.call(identity)(\"\"), true, \"Falsy\");
\ta(t.call(noop)(), true, \"Undefined\");
\ta(t.call(identity)({}), false, \"Any object\");
\ta(t.call(identity)(true), false, \"True\");
};
", "node_modules/es5-ext/test/function/#/not.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/function/#/not.js");
    }
}
