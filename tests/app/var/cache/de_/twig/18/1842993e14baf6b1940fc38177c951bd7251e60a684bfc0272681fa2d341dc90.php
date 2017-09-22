<?php

/* node_modules/core-js/modules/es6.object.set-prototype-of.js */
class __TwigTemplate_8cca083d4b1cd27d507490b43c800cc54609262a3bbb244af3bbef773b8f90cb extends Twig_Template
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
        $__internal_760148bfded8b750930c0400fba6c5c34dfc1c63c11c39b20f6ec442478dea11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_760148bfded8b750930c0400fba6c5c34dfc1c63c11c39b20f6ec442478dea11->enter($__internal_760148bfded8b750930c0400fba6c5c34dfc1c63c11c39b20f6ec442478dea11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.object.set-prototype-of.js"));

        // line 1
        echo "// 19.1.3.19 Object.setPrototypeOf(O, proto)
var \$export = require('./_export');
\$export(\$export.S, 'Object', { setPrototypeOf: require('./_set-proto').set });
";
        
        $__internal_760148bfded8b750930c0400fba6c5c34dfc1c63c11c39b20f6ec442478dea11->leave($__internal_760148bfded8b750930c0400fba6c5c34dfc1c63c11c39b20f6ec442478dea11_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.object.set-prototype-of.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 19.1.3.19 Object.setPrototypeOf(O, proto)
var \$export = require('./_export');
\$export(\$export.S, 'Object', { setPrototypeOf: require('./_set-proto').set });
", "node_modules/core-js/modules/es6.object.set-prototype-of.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.object.set-prototype-of.js");
    }
}
