<?php

/* node_modules/es5-ext/test/number/epsilon/is-implemented.js */
class __TwigTemplate_3616851c09f3f1732cf10ef87adfbefdc2dc9cb6529280ecc686ab2430efabfc extends Twig_Template
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
        $__internal_030242e652d84df36996b6b945b501c391435b78253b4dd1e21b0ec5ebf8326b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_030242e652d84df36996b6b945b501c391435b78253b4dd1e21b0ec5ebf8326b->enter($__internal_030242e652d84df36996b6b945b501c391435b78253b4dd1e21b0ec5ebf8326b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/number/epsilon/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
";
        
        $__internal_030242e652d84df36996b6b945b501c391435b78253b4dd1e21b0ec5ebf8326b->leave($__internal_030242e652d84df36996b6b945b501c391435b78253b4dd1e21b0ec5ebf8326b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/number/epsilon/is-implemented.js";
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
", "node_modules/es5-ext/test/number/epsilon/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/number/epsilon/is-implemented.js");
    }
}
