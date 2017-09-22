<?php

/* node_modules/es5-ext/object/compact.js */
class __TwigTemplate_c3d4680ab8a69469bf21cd3afff202ebdc53266ab428b59d8ba4c2c6e4d44195 extends Twig_Template
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
        $__internal_ff8c65a9ec341b9f2efe318eb73225abb9c89a1369f217a963a687e252671736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff8c65a9ec341b9f2efe318eb73225abb9c89a1369f217a963a687e252671736->enter($__internal_ff8c65a9ec341b9f2efe318eb73225abb9c89a1369f217a963a687e252671736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/compact.js"));

        // line 1
        echo "\"use strict\";

var filter  = require(\"./filter\")
  , isValue = require(\"./is-value\");

module.exports = function (obj) {
\treturn filter(obj, function (val) {
\t\treturn isValue(val);
\t});
};
";
        
        $__internal_ff8c65a9ec341b9f2efe318eb73225abb9c89a1369f217a963a687e252671736->leave($__internal_ff8c65a9ec341b9f2efe318eb73225abb9c89a1369f217a963a687e252671736_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/compact.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var filter  = require(\"./filter\")
  , isValue = require(\"./is-value\");

module.exports = function (obj) {
\treturn filter(obj, function (val) {
\t\treturn isValue(val);
\t});
};
", "node_modules/es5-ext/object/compact.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/compact.js");
    }
}
