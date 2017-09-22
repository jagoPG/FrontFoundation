<?php

/* node_modules/es5-ext/array/_is-extensible.js */
class __TwigTemplate_76d74f451d25833400457fe9d470427fc1599761a995ba9849fcfe2f9d9cd150 extends Twig_Template
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
        $__internal_04b5366fbde0a23abcc762b1c5de74d00ab7b6605a43e51c6aeacf610997a10e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04b5366fbde0a23abcc762b1c5de74d00ab7b6605a43e51c6aeacf610997a10e->enter($__internal_04b5366fbde0a23abcc762b1c5de74d00ab7b6605a43e51c6aeacf610997a10e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/_is-extensible.js"));

        // line 1
        echo "\"use strict\";

module.exports = (function () {
\tvar SubArray = require(\"./_sub-array-dummy\"), arr;

\tif (!SubArray) return false;
\tarr = new SubArray();
\tif (!Array.isArray(arr)) return false;
\tif (!(arr instanceof SubArray)) return false;

\tarr[34] = \"foo\";
\treturn arr.length === 35;
}());
";
        
        $__internal_04b5366fbde0a23abcc762b1c5de74d00ab7b6605a43e51c6aeacf610997a10e->leave($__internal_04b5366fbde0a23abcc762b1c5de74d00ab7b6605a43e51c6aeacf610997a10e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/_is-extensible.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = (function () {
\tvar SubArray = require(\"./_sub-array-dummy\"), arr;

\tif (!SubArray) return false;
\tarr = new SubArray();
\tif (!Array.isArray(arr)) return false;
\tif (!(arr instanceof SubArray)) return false;

\tarr[34] = \"foo\";
\treturn arr.length === 35;
}());
", "node_modules/es5-ext/array/_is-extensible.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/_is-extensible.js");
    }
}
