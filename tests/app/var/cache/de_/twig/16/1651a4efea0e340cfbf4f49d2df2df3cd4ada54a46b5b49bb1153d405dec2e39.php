<?php

/* node_modules/es5-ext/array/#/copy-within/index.js */
class __TwigTemplate_12a143f9476c7fd192aed9d4092f8f41ecdfdcf70ea5f376701773b206d7fa32 extends Twig_Template
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
        $__internal_a9fd5a800c145a7896174c688eedef9f8bd436fb7299f8fcadf52fbfbd804f72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9fd5a800c145a7896174c688eedef9f8bd436fb7299f8fcadf52fbfbd804f72->enter($__internal_a9fd5a800c145a7896174c688eedef9f8bd436fb7299f8fcadf52fbfbd804f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/copy-within/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t\t? Array.prototype.copyWithin : require(\"./shim\");
";
        
        $__internal_a9fd5a800c145a7896174c688eedef9f8bd436fb7299f8fcadf52fbfbd804f72->leave($__internal_a9fd5a800c145a7896174c688eedef9f8bd436fb7299f8fcadf52fbfbd804f72_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/copy-within/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t\t? Array.prototype.copyWithin : require(\"./shim\");
", "node_modules/es5-ext/array/#/copy-within/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/copy-within/index.js");
    }
}
