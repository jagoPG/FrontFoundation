<?php

/* node_modules/es6-weak-map/is-native-implemented.js */
class __TwigTemplate_3d095cc5086b280157f4b20940fab432f9c226bfc4189dcb8a0285f38e964811 extends Twig_Template
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
        $__internal_148ba6752e6254978b5fd8fe54a78f5ec404ceabf874e3f1a44d6fba8cdaaed8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_148ba6752e6254978b5fd8fe54a78f5ec404ceabf874e3f1a44d6fba8cdaaed8->enter($__internal_148ba6752e6254978b5fd8fe54a78f5ec404ceabf874e3f1a44d6fba8cdaaed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-weak-map/is-native-implemented.js"));

        // line 1
        echo "// Exports true if environment provides native `WeakMap` implementation, whatever that is.

'use strict';

module.exports = (function () {
\tif (typeof WeakMap !== 'function') return false;
\treturn (Object.prototype.toString.call(new WeakMap()) === '[object WeakMap]');
}());
";
        
        $__internal_148ba6752e6254978b5fd8fe54a78f5ec404ceabf874e3f1a44d6fba8cdaaed8->leave($__internal_148ba6752e6254978b5fd8fe54a78f5ec404ceabf874e3f1a44d6fba8cdaaed8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-weak-map/is-native-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Exports true if environment provides native `WeakMap` implementation, whatever that is.

'use strict';

module.exports = (function () {
\tif (typeof WeakMap !== 'function') return false;
\treturn (Object.prototype.toString.call(new WeakMap()) === '[object WeakMap]');
}());
", "node_modules/es6-weak-map/is-native-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-weak-map/is-native-implemented.js");
    }
}
