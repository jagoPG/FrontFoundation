<?php

/* node_modules/es6-map/is-native-implemented.js */
class __TwigTemplate_6f199eb391cb12792b9922364a4789c99a8dcfd6fefc17a5ef4b06baaadf0e69 extends Twig_Template
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
        $__internal_22eb62d373d20a6c129420940b8a0a167cb51e6cdbe9942cee491e464f631590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22eb62d373d20a6c129420940b8a0a167cb51e6cdbe9942cee491e464f631590->enter($__internal_22eb62d373d20a6c129420940b8a0a167cb51e6cdbe9942cee491e464f631590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-map/is-native-implemented.js"));

        // line 1
        echo "// Exports true if environment provides native `Map` implementation,
// whatever that is.

'use strict';

module.exports = (function () {
\tif (typeof Map === 'undefined') return false;
\treturn (Object.prototype.toString.call(new Map()) === '[object Map]');
}());
";
        
        $__internal_22eb62d373d20a6c129420940b8a0a167cb51e6cdbe9942cee491e464f631590->leave($__internal_22eb62d373d20a6c129420940b8a0a167cb51e6cdbe9942cee491e464f631590_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-map/is-native-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Exports true if environment provides native `Map` implementation,
// whatever that is.

'use strict';

module.exports = (function () {
\tif (typeof Map === 'undefined') return false;
\treturn (Object.prototype.toString.call(new Map()) === '[object Map]');
}());
", "node_modules/es6-map/is-native-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-map/is-native-implemented.js");
    }
}
