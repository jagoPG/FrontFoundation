<?php

/* node_modules/core-js/library/modules/es6.object.is.js */
class __TwigTemplate_1f3f70146bb883c04413dc7b2af445dc8996aa66bece24ad74ebaf922e3216f2 extends Twig_Template
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
        $__internal_6d8864a9c9db7156e089355225537b842b9d57c2ff1d267680db09c8d7701d61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d8864a9c9db7156e089355225537b842b9d57c2ff1d267680db09c8d7701d61->enter($__internal_6d8864a9c9db7156e089355225537b842b9d57c2ff1d267680db09c8d7701d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.object.is.js"));

        // line 1
        echo "// 19.1.3.10 Object.is(value1, value2)
var \$export = require('./_export');
\$export(\$export.S, 'Object', { is: require('./_same-value') });
";
        
        $__internal_6d8864a9c9db7156e089355225537b842b9d57c2ff1d267680db09c8d7701d61->leave($__internal_6d8864a9c9db7156e089355225537b842b9d57c2ff1d267680db09c8d7701d61_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.object.is.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 19.1.3.10 Object.is(value1, value2)
var \$export = require('./_export');
\$export(\$export.S, 'Object', { is: require('./_same-value') });
", "node_modules/core-js/library/modules/es6.object.is.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.object.is.js");
    }
}
