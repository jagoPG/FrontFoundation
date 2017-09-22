<?php

/* node_modules/core-js/library/modules/es6.date.to-iso-string.js */
class __TwigTemplate_7b759e8ccb4b210f26d00546a35b511f6ed7f11e3a2ccbb4fe00f3fe6b1ed1e3 extends Twig_Template
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
        $__internal_b63b6d12c3163222a6b3a289319d5566d406d19c1e772e45592759d47d1b6896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b63b6d12c3163222a6b3a289319d5566d406d19c1e772e45592759d47d1b6896->enter($__internal_b63b6d12c3163222a6b3a289319d5566d406d19c1e772e45592759d47d1b6896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.date.to-iso-string.js"));

        // line 1
        echo "// 20.3.4.36 / 15.9.5.43 Date.prototype.toISOString()
var \$export = require('./_export');
var toISOString = require('./_date-to-iso-string');

// PhantomJS / old WebKit has a broken implementations
\$export(\$export.P + \$export.F * (Date.prototype.toISOString !== toISOString), 'Date', {
  toISOString: toISOString
});
";
        
        $__internal_b63b6d12c3163222a6b3a289319d5566d406d19c1e772e45592759d47d1b6896->leave($__internal_b63b6d12c3163222a6b3a289319d5566d406d19c1e772e45592759d47d1b6896_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.date.to-iso-string.js";
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
", "node_modules/core-js/library/modules/es6.date.to-iso-string.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.date.to-iso-string.js");
    }
}
