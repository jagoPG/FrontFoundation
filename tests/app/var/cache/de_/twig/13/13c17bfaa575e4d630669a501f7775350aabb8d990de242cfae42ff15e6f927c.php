<?php

/* node_modules/es5-ext/array/#/fill/index.js */
class __TwigTemplate_6f0ba13e053521f785fcee722e5020a72b4c83a1148553d208575c8189430730 extends Twig_Template
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
        $__internal_b8bdac954aa69bcbb3e8f988705c655ac2d5031ae875b4bd5056c314402be6a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8bdac954aa69bcbb3e8f988705c655ac2d5031ae875b4bd5056c314402be6a1->enter($__internal_b8bdac954aa69bcbb3e8f988705c655ac2d5031ae875b4bd5056c314402be6a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/fill/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t\t? Array.prototype.fill : require(\"./shim\");
";
        
        $__internal_b8bdac954aa69bcbb3e8f988705c655ac2d5031ae875b4bd5056c314402be6a1->leave($__internal_b8bdac954aa69bcbb3e8f988705c655ac2d5031ae875b4bd5056c314402be6a1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/fill/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t\t? Array.prototype.fill : require(\"./shim\");
", "node_modules/es5-ext/array/#/fill/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/fill/index.js");
    }
}
