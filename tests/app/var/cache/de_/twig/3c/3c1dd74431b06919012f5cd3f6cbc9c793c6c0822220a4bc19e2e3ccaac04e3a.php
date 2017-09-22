<?php

/* node_modules/core-js/library/modules/es7.math.deg-per-rad.js */
class __TwigTemplate_67b752ebe0b0f47b2c99ee43df4b5149cbbb1cb3411986bc76a334ac483b8a02 extends Twig_Template
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
        $__internal_ec96260a950fa1cd160402acdec2aec2c556e3b485908098696e20b22db80fce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec96260a950fa1cd160402acdec2aec2c556e3b485908098696e20b22db80fce->enter($__internal_ec96260a950fa1cd160402acdec2aec2c556e3b485908098696e20b22db80fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es7.math.deg-per-rad.js"));

        // line 1
        echo "// https://rwaldron.github.io/proposal-math-extensions/
var \$export = require('./_export');

\$export(\$export.S, 'Math', { DEG_PER_RAD: Math.PI / 180 });
";
        
        $__internal_ec96260a950fa1cd160402acdec2aec2c556e3b485908098696e20b22db80fce->leave($__internal_ec96260a950fa1cd160402acdec2aec2c556e3b485908098696e20b22db80fce_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es7.math.deg-per-rad.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// https://rwaldron.github.io/proposal-math-extensions/
var \$export = require('./_export');

\$export(\$export.S, 'Math', { DEG_PER_RAD: Math.PI / 180 });
", "node_modules/core-js/library/modules/es7.math.deg-per-rad.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es7.math.deg-per-rad.js");
    }
}
