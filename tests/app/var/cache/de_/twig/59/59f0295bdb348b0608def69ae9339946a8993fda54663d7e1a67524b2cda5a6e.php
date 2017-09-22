<?php

/* node_modules/es5-ext/test/function/#/partial.js */
class __TwigTemplate_cdb4f19b486f630cefcb22f6f1c1c7f54b8701073247df098773fb867e470582 extends Twig_Template
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
        $__internal_4c4a7e57e251fd184c9319a30b8efdfe36aece2f903d43a3113d00ca770ff7bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c4a7e57e251fd184c9319a30b8efdfe36aece2f903d43a3113d00ca770ff7bd->enter($__internal_4c4a7e57e251fd184c9319a30b8efdfe36aece2f903d43a3113d00ca770ff7bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/function/#/partial.js"));

        // line 1
        echo "\"use strict\";

var toArray = require(\"../../../array/to-array\")

  , f = function () {
 return toArray(arguments);
};

module.exports = function (t, a) {
\ta.deep(t.call(f, 1)(2, 3), [1, 2, 3]);
};
";
        
        $__internal_4c4a7e57e251fd184c9319a30b8efdfe36aece2f903d43a3113d00ca770ff7bd->leave($__internal_4c4a7e57e251fd184c9319a30b8efdfe36aece2f903d43a3113d00ca770ff7bd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/function/#/partial.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var toArray = require(\"../../../array/to-array\")

  , f = function () {
 return toArray(arguments);
};

module.exports = function (t, a) {
\ta.deep(t.call(f, 1)(2, 3), [1, 2, 3]);
};
", "node_modules/es5-ext/test/function/#/partial.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/function/#/partial.js");
    }
}
