<?php

/* node_modules/es5-ext/test/object/keys/is-implemented.js */
class __TwigTemplate_f6c642920d1f1fcd73850ba054e5fa26ce09d8d3ed0b4dfd5a7f96811b219a2b extends Twig_Template
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
        $__internal_98916dd02535bc08236efc73b990f9b4ba2ba13ff7ad23bffa379cdaee7ed60d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98916dd02535bc08236efc73b990f9b4ba2ba13ff7ad23bffa379cdaee7ed60d->enter($__internal_98916dd02535bc08236efc73b990f9b4ba2ba13ff7ad23bffa379cdaee7ed60d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/keys/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
";
        
        $__internal_98916dd02535bc08236efc73b990f9b4ba2ba13ff7ad23bffa379cdaee7ed60d->leave($__internal_98916dd02535bc08236efc73b990f9b4ba2ba13ff7ad23bffa379cdaee7ed60d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/keys/is-implemented.js";
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
", "node_modules/es5-ext/test/object/keys/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/keys/is-implemented.js");
    }
}
