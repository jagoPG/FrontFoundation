<?php

/* node_modules/core-js/library/modules/es6.date.now.js */
class __TwigTemplate_978ea6dd8183390fe26021ae4c96d28e8318db7cd47f8be8aebe65f4ab3451ce extends Twig_Template
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
        $__internal_ba097be71d30519c8f3f79bd47f6e4ca06c88d78575b06ce637fcf5cc0990d1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba097be71d30519c8f3f79bd47f6e4ca06c88d78575b06ce637fcf5cc0990d1d->enter($__internal_ba097be71d30519c8f3f79bd47f6e4ca06c88d78575b06ce637fcf5cc0990d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.date.now.js"));

        // line 1
        echo "// 20.3.3.1 / 15.9.4.4 Date.now()
var \$export = require('./_export');

\$export(\$export.S, 'Date', { now: function () { return new Date().getTime(); } });
";
        
        $__internal_ba097be71d30519c8f3f79bd47f6e4ca06c88d78575b06ce637fcf5cc0990d1d->leave($__internal_ba097be71d30519c8f3f79bd47f6e4ca06c88d78575b06ce637fcf5cc0990d1d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.date.now.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 20.3.3.1 / 15.9.4.4 Date.now()
var \$export = require('./_export');

\$export(\$export.S, 'Date', { now: function () { return new Date().getTime(); } });
", "node_modules/core-js/library/modules/es6.date.now.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.date.now.js");
    }
}
