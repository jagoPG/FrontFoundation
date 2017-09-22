<?php

/* node_modules/core-js/library/modules/es7.math.scale.js */
class __TwigTemplate_e6ba68696ec4320171fe8f67c43e09473b3537646efbe440035ec7a8628b9fe7 extends Twig_Template
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
        $__internal_4808bcca3dd37ff182cf7391c9700f80f13851bf7a561504dd49c6e0bb4fe7b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4808bcca3dd37ff182cf7391c9700f80f13851bf7a561504dd49c6e0bb4fe7b9->enter($__internal_4808bcca3dd37ff182cf7391c9700f80f13851bf7a561504dd49c6e0bb4fe7b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es7.math.scale.js"));

        // line 1
        echo "// https://rwaldron.github.io/proposal-math-extensions/
var \$export = require('./_export');

\$export(\$export.S, 'Math', { scale: require('./_math-scale') });
";
        
        $__internal_4808bcca3dd37ff182cf7391c9700f80f13851bf7a561504dd49c6e0bb4fe7b9->leave($__internal_4808bcca3dd37ff182cf7391c9700f80f13851bf7a561504dd49c6e0bb4fe7b9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es7.math.scale.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// https://rwaldron.github.io/proposal-math-extensions/
var \$export = require('./_export');

\$export(\$export.S, 'Math', { scale: require('./_math-scale') });
", "node_modules/core-js/library/modules/es7.math.scale.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es7.math.scale.js");
    }
}
