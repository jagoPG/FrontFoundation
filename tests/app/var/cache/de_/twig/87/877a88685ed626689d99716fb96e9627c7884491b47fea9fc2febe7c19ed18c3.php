<?php

/* node_modules/es5-ext/array/#/first-index.js */
class __TwigTemplate_22c6dcb6b8b5df366acb78725732b070f00aa3b701e303cd7e281e7c7075c9fe extends Twig_Template
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
        $__internal_0c3ff22edbb0b9593051b74bb9ed1cf3dab4be807e14e1c79e28a961187190cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c3ff22edbb0b9593051b74bb9ed1cf3dab4be807e14e1c79e28a961187190cd->enter($__internal_0c3ff22edbb0b9593051b74bb9ed1cf3dab4be807e14e1c79e28a961187190cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/first-index.js"));

        // line 1
        echo "\"use strict\";

var toPosInt          = require(\"../../number/to-pos-integer\")
  , value             = require(\"../../object/valid-value\")
  , objHasOwnProperty = Object.prototype.hasOwnProperty;

module.exports = function () {
\tvar i, length;
\tif (!(length = toPosInt(value(this).length))) return null;
\ti = 0;
\twhile (!objHasOwnProperty.call(this, i)) {
\t\tif (++i === length) return null;
\t}
\treturn i;
};
";
        
        $__internal_0c3ff22edbb0b9593051b74bb9ed1cf3dab4be807e14e1c79e28a961187190cd->leave($__internal_0c3ff22edbb0b9593051b74bb9ed1cf3dab4be807e14e1c79e28a961187190cd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/first-index.js";
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
\ti = 0;
\twhile (!objHasOwnProperty.call(this, i)) {
\t\tif (++i === length) return null;
\t}
\treturn i;
};
", "node_modules/es5-ext/array/#/first-index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/first-index.js");
    }
}
