<?php

/* node_modules/es5-ext/array/#/is-empty.js */
class __TwigTemplate_f453c12e16109a87393dcff9337ea38f843bd816fd6f5e480161b3a2950b2b84 extends Twig_Template
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
        $__internal_b96284f44a7c2b0a72c788c3685b13214f2eeb9518d7b59909c0c128ce0c717c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b96284f44a7c2b0a72c788c3685b13214f2eeb9518d7b59909c0c128ce0c717c->enter($__internal_b96284f44a7c2b0a72c788c3685b13214f2eeb9518d7b59909c0c128ce0c717c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/is-empty.js"));

        // line 1
        echo "\"use strict\";

var ensureArray = require(\"../../object/ensure-array\")
  , firstIndex  = require(\"./first-index\");

module.exports = function () {
\treturn firstIndex.call(ensureArray(this)) === null;
};
";
        
        $__internal_b96284f44a7c2b0a72c788c3685b13214f2eeb9518d7b59909c0c128ce0c717c->leave($__internal_b96284f44a7c2b0a72c788c3685b13214f2eeb9518d7b59909c0c128ce0c717c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/is-empty.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var ensureArray = require(\"../../object/ensure-array\")
  , firstIndex  = require(\"./first-index\");

module.exports = function () {
\treturn firstIndex.call(ensureArray(this)) === null;
};
", "node_modules/es5-ext/array/#/is-empty.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/is-empty.js");
    }
}
