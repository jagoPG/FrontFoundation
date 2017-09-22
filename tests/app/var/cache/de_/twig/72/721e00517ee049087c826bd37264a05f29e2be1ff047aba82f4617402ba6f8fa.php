<?php

/* node_modules/core-js/modules/es6.function.bind.js */
class __TwigTemplate_3e3975d1621ceb06166208ac5adbf663b11e3cc3d86d06e24ee4b477ac4fd6ee extends Twig_Template
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
        $__internal_cdb7c3dd5f5794897d4e35281630ba05908ac3f82bd816726c70a1d5608597b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdb7c3dd5f5794897d4e35281630ba05908ac3f82bd816726c70a1d5608597b4->enter($__internal_cdb7c3dd5f5794897d4e35281630ba05908ac3f82bd816726c70a1d5608597b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.function.bind.js"));

        // line 1
        echo "// 19.2.3.2 / 15.3.4.5 Function.prototype.bind(thisArg, args...)
var \$export = require('./_export');

\$export(\$export.P, 'Function', { bind: require('./_bind') });
";
        
        $__internal_cdb7c3dd5f5794897d4e35281630ba05908ac3f82bd816726c70a1d5608597b4->leave($__internal_cdb7c3dd5f5794897d4e35281630ba05908ac3f82bd816726c70a1d5608597b4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.function.bind.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 19.2.3.2 / 15.3.4.5 Function.prototype.bind(thisArg, args...)
var \$export = require('./_export');

\$export(\$export.P, 'Function', { bind: require('./_bind') });
", "node_modules/core-js/modules/es6.function.bind.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.function.bind.js");
    }
}
