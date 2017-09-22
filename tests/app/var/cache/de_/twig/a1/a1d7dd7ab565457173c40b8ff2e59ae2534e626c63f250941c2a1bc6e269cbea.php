<?php

/* node_modules/es5-ext/test/math/trunc/implement.js */
class __TwigTemplate_a1ae4cb9a95d7fdc6cab216396f45ec6a6024e7609181b32816324dbd71a4fa8 extends Twig_Template
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
        $__internal_8b9c67133f2834312ce55124855ef61119dc217a81ea333a8aa60a85ebc5f908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b9c67133f2834312ce55124855ef61119dc217a81ea333a8aa60a85ebc5f908->enter($__internal_8b9c67133f2834312ce55124855ef61119dc217a81ea333a8aa60a85ebc5f908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/trunc/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../math/trunc/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_8b9c67133f2834312ce55124855ef61119dc217a81ea333a8aa60a85ebc5f908->leave($__internal_8b9c67133f2834312ce55124855ef61119dc217a81ea333a8aa60a85ebc5f908_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/trunc/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../math/trunc/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/math/trunc/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/trunc/implement.js");
    }
}
