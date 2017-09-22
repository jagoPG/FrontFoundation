<?php

/* node_modules/es5-ext/test/number/is-finite/is-implemented.js */
class __TwigTemplate_bf91850e9dc93c6101c4829313340d8ab9919cb3ba1ecf155513538db4d77554 extends Twig_Template
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
        $__internal_02ff684a8cbe862823c3fa9e08006731feda803e24ebca35cf87930bd6059a48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02ff684a8cbe862823c3fa9e08006731feda803e24ebca35cf87930bd6059a48->enter($__internal_02ff684a8cbe862823c3fa9e08006731feda803e24ebca35cf87930bd6059a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/number/is-finite/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
";
        
        $__internal_02ff684a8cbe862823c3fa9e08006731feda803e24ebca35cf87930bd6059a48->leave($__internal_02ff684a8cbe862823c3fa9e08006731feda803e24ebca35cf87930bd6059a48_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/number/is-finite/is-implemented.js";
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
", "node_modules/es5-ext/test/number/is-finite/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/number/is-finite/is-implemented.js");
    }
}
