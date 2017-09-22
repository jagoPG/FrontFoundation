<?php

/* node_modules/es5-ext/string/#/plain-replace.js */
class __TwigTemplate_b46ff832b9cd0c85d211f70209cdc7e07e54525e9327b2f6063594b75a3539bd extends Twig_Template
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
        $__internal_5d17a13bc65d924af324cf34172e7b22551027507fc5a1c098e3ae1e26d022e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d17a13bc65d924af324cf34172e7b22551027507fc5a1c098e3ae1e26d022e7->enter($__internal_5d17a13bc65d924af324cf34172e7b22551027507fc5a1c098e3ae1e26d022e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/#/plain-replace.js"));

        // line 1
        echo "\"use strict\";

var indexOf = String.prototype.indexOf, slice = String.prototype.slice;

module.exports = function (search, replace) {
\tvar index = indexOf.call(this, search);
\tif (index === -1) return String(this);
\treturn slice.call(this, 0, index) + replace +
\t\tslice.call(this, index + String(search).length);
};
";
        
        $__internal_5d17a13bc65d924af324cf34172e7b22551027507fc5a1c098e3ae1e26d022e7->leave($__internal_5d17a13bc65d924af324cf34172e7b22551027507fc5a1c098e3ae1e26d022e7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/#/plain-replace.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var indexOf = String.prototype.indexOf, slice = String.prototype.slice;

module.exports = function (search, replace) {
\tvar index = indexOf.call(this, search);
\tif (index === -1) return String(this);
\treturn slice.call(this, 0, index) + replace +
\t\tslice.call(this, index + String(search).length);
};
", "node_modules/es5-ext/string/#/plain-replace.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/#/plain-replace.js");
    }
}
