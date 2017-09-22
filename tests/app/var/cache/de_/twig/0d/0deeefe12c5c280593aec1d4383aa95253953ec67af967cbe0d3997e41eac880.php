<?php

/* node_modules/es5-ext/array/#/last-index.js */
class __TwigTemplate_76c1080b16b4427e19a949f7b30ce19484ba20520df1a6474cc38f3c2b925043 extends Twig_Template
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
        $__internal_0bdd6e1c5de7d195ee30d45f1d55b16c365c4a84388747440b91611c6b794c0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bdd6e1c5de7d195ee30d45f1d55b16c365c4a84388747440b91611c6b794c0b->enter($__internal_0bdd6e1c5de7d195ee30d45f1d55b16c365c4a84388747440b91611c6b794c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/last-index.js"));

        // line 1
        echo "\"use strict\";

var toPosInt          = require(\"../../number/to-pos-integer\")
  , value             = require(\"../../object/valid-value\")
  , objHasOwnProperty = Object.prototype.hasOwnProperty;

module.exports = function () {
\tvar i, length;
\tif (!(length = toPosInt(value(this).length))) return null;
\ti = length - 1;
\twhile (!objHasOwnProperty.call(this, i)) {
\t\tif (--i === -1) return null;
\t}
\treturn i;
};
";
        
        $__internal_0bdd6e1c5de7d195ee30d45f1d55b16c365c4a84388747440b91611c6b794c0b->leave($__internal_0bdd6e1c5de7d195ee30d45f1d55b16c365c4a84388747440b91611c6b794c0b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/last-index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var toPosInt          = require(\"../../number/to-pos-integer\")
  , value             = require(\"../../object/valid-value\")
  , objHasOwnProperty = Object.prototype.hasOwnProperty;

module.exports = function () {
\tvar i, length;
\tif (!(length = toPosInt(value(this).length))) return null;
\ti = length - 1;
\twhile (!objHasOwnProperty.call(this, i)) {
\t\tif (--i === -1) return null;
\t}
\treturn i;
};
", "node_modules/es5-ext/array/#/last-index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/last-index.js");
    }
}
