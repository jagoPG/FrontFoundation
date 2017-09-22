<?php

/* node_modules/es5-ext/object/count.js */
class __TwigTemplate_6fd13244c4cc62cef9ac4dba9b69807b1d65b01e1c0558182b58e698c6357389 extends Twig_Template
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
        $__internal_bd198deda2b253348733f9cc0901344730e55458475caddfa3dde3eb8c2a0d31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd198deda2b253348733f9cc0901344730e55458475caddfa3dde3eb8c2a0d31->enter($__internal_bd198deda2b253348733f9cc0901344730e55458475caddfa3dde3eb8c2a0d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/count.js"));

        // line 1
        echo "\"use strict\";

var keys  = require(\"./keys\");

module.exports = function (obj) {
 return keys(obj).length;
};
";
        
        $__internal_bd198deda2b253348733f9cc0901344730e55458475caddfa3dde3eb8c2a0d31->leave($__internal_bd198deda2b253348733f9cc0901344730e55458475caddfa3dde3eb8c2a0d31_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/count.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var keys  = require(\"./keys\");

module.exports = function (obj) {
 return keys(obj).length;
};
", "node_modules/es5-ext/object/count.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/count.js");
    }
}
