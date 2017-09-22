<?php

/* node_modules/es5-ext/test/object/set-prototype-of/is-implemented.js */
class __TwigTemplate_9faeb69657f64b2971a7e128c03b2c2c6b9436bfca47959963c3d4fb4b70cd6b extends Twig_Template
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
        $__internal_f3e369bde859fce1753d70e64ddf83b01d384b27b979de6a31ff9163cf3999d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3e369bde859fce1753d70e64ddf83b01d384b27b979de6a31ff9163cf3999d1->enter($__internal_f3e369bde859fce1753d70e64ddf83b01d384b27b979de6a31ff9163cf3999d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/set-prototype-of/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
";
        
        $__internal_f3e369bde859fce1753d70e64ddf83b01d384b27b979de6a31ff9163cf3999d1->leave($__internal_f3e369bde859fce1753d70e64ddf83b01d384b27b979de6a31ff9163cf3999d1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/set-prototype-of/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
", "node_modules/es5-ext/test/object/set-prototype-of/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/set-prototype-of/is-implemented.js");
    }
}
