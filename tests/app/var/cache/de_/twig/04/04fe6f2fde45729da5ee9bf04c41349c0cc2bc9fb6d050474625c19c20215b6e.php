<?php

/* node_modules/es5-ext/object/keys/index.js */
class __TwigTemplate_b801b5608147ead29bd768c0518209f532220cd0dcf6ff9cd2cb511b7049622a extends Twig_Template
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
        $__internal_0ab1e559d9ce8d18e76fb0dd798c03fcddfde144b7f211cf7e1a332c954d0b39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ab1e559d9ce8d18e76fb0dd798c03fcddfde144b7f211cf7e1a332c954d0b39->enter($__internal_0ab1e559d9ce8d18e76fb0dd798c03fcddfde144b7f211cf7e1a332c954d0b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/keys/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Object.keys
\t: require(\"./shim\");
";
        
        $__internal_0ab1e559d9ce8d18e76fb0dd798c03fcddfde144b7f211cf7e1a332c954d0b39->leave($__internal_0ab1e559d9ce8d18e76fb0dd798c03fcddfde144b7f211cf7e1a332c954d0b39_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/keys/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Object.keys
\t: require(\"./shim\");
", "node_modules/es5-ext/object/keys/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/keys/index.js");
    }
}
