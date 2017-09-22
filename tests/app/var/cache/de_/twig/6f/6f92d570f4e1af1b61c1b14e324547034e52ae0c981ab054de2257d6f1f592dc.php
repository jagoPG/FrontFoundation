<?php

/* node_modules/core-js/modules/es6.date.to-iso-string.js */
class __TwigTemplate_b92a3f42078db992fa3b46d806acfc936f7d52abf96fa50258e18cdd04816a98 extends Twig_Template
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
        $__internal_aa583ba0eedefc50501d7442117a63d8349030b06e46b117e19ab0c5f2b5d776 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa583ba0eedefc50501d7442117a63d8349030b06e46b117e19ab0c5f2b5d776->enter($__internal_aa583ba0eedefc50501d7442117a63d8349030b06e46b117e19ab0c5f2b5d776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.date.to-iso-string.js"));

        // line 1
        echo "// 20.3.4.36 / 15.9.5.43 Date.prototype.toISOString()
var \$export = require('./_export');
var toISOString = require('./_date-to-iso-string');

// PhantomJS / old WebKit has a broken implementations
\$export(\$export.P + \$export.F * (Date.prototype.toISOString !== toISOString), 'Date', {
  toISOString: toISOString
});
";
        
        $__internal_aa583ba0eedefc50501d7442117a63d8349030b06e46b117e19ab0c5f2b5d776->leave($__internal_aa583ba0eedefc50501d7442117a63d8349030b06e46b117e19ab0c5f2b5d776_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.date.to-iso-string.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 20.3.4.36 / 15.9.5.43 Date.prototype.toISOString()
var \$export = require('./_export');
var toISOString = require('./_date-to-iso-string');

// PhantomJS / old WebKit has a broken implementations
\$export(\$export.P + \$export.F * (Date.prototype.toISOString !== toISOString), 'Date', {
  toISOString: toISOString
});
", "node_modules/core-js/modules/es6.date.to-iso-string.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.date.to-iso-string.js");
    }
}
