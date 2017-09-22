<?php

/* node_modules/core-js/modules/es7.global.js */
class __TwigTemplate_75f337f234b9aa49031560b376da5e39f123849c3b5cdd339ba28718295dffcf extends Twig_Template
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
        $__internal_940a3e6e03eb09a82461e1b61697186481ddc7f6e5d105095f624cee57ee0337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_940a3e6e03eb09a82461e1b61697186481ddc7f6e5d105095f624cee57ee0337->enter($__internal_940a3e6e03eb09a82461e1b61697186481ddc7f6e5d105095f624cee57ee0337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es7.global.js"));

        // line 1
        echo "// https://github.com/tc39/proposal-global
var \$export = require('./_export');

\$export(\$export.G, { global: require('./_global') });
";
        
        $__internal_940a3e6e03eb09a82461e1b61697186481ddc7f6e5d105095f624cee57ee0337->leave($__internal_940a3e6e03eb09a82461e1b61697186481ddc7f6e5d105095f624cee57ee0337_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es7.global.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// https://github.com/tc39/proposal-global
var \$export = require('./_export');

\$export(\$export.G, { global: require('./_global') });
", "node_modules/core-js/modules/es7.global.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es7.global.js");
    }
}
