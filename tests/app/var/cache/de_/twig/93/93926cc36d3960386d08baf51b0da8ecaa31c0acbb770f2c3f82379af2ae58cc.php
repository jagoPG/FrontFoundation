<?php

/* node_modules/es5-ext/function/identity.js */
class __TwigTemplate_9985895f4d5ac6d8ddc825e238676fbb0f1fdae2417ae1b242bb58ce7d54f587 extends Twig_Template
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
        $__internal_457be1fead98f5cd9e33c64bb204cc83762b8ea0e0ade6fe851c21de57ec88bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_457be1fead98f5cd9e33c64bb204cc83762b8ea0e0ade6fe851c21de57ec88bd->enter($__internal_457be1fead98f5cd9e33c64bb204cc83762b8ea0e0ade6fe851c21de57ec88bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/function/identity.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (value) {
\treturn value;
};
";
        
        $__internal_457be1fead98f5cd9e33c64bb204cc83762b8ea0e0ade6fe851c21de57ec88bd->leave($__internal_457be1fead98f5cd9e33c64bb204cc83762b8ea0e0ade6fe851c21de57ec88bd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/function/identity.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (value) {
\treturn value;
};
", "node_modules/es5-ext/function/identity.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/function/identity.js");
    }
}
