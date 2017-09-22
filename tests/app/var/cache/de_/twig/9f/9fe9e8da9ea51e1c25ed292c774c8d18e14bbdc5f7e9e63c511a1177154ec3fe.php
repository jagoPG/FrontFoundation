<?php

/* node_modules/core-js/library/modules/es6.math.asinh.js */
class __TwigTemplate_9f5f9c64a50030dd864801095dbd7f42eaf6e7bd85bf40004ef1810011652de9 extends Twig_Template
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
        $__internal_c86d857176a76cc52cdb1eac776cbd2640af3cb815403787ede5447808a142d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c86d857176a76cc52cdb1eac776cbd2640af3cb815403787ede5447808a142d3->enter($__internal_c86d857176a76cc52cdb1eac776cbd2640af3cb815403787ede5447808a142d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.math.asinh.js"));

        // line 1
        echo "// 20.2.2.5 Math.asinh(x)
var \$export = require('./_export');
var \$asinh = Math.asinh;

function asinh(x) {
  return !isFinite(x = +x) || x == 0 ? x : x < 0 ? -asinh(-x) : Math.log(x + Math.sqrt(x * x + 1));
}

// Tor Browser bug: Math.asinh(0) -> -0
\$export(\$export.S + \$export.F * !(\$asinh && 1 / \$asinh(0) > 0), 'Math', { asinh: asinh });
";
        
        $__internal_c86d857176a76cc52cdb1eac776cbd2640af3cb815403787ede5447808a142d3->leave($__internal_c86d857176a76cc52cdb1eac776cbd2640af3cb815403787ede5447808a142d3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.math.asinh.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 20.2.2.5 Math.asinh(x)
var \$export = require('./_export');
var \$asinh = Math.asinh;

function asinh(x) {
  return !isFinite(x = +x) || x == 0 ? x : x < 0 ? -asinh(-x) : Math.log(x + Math.sqrt(x * x + 1));
}

// Tor Browser bug: Math.asinh(0) -> -0
\$export(\$export.S + \$export.F * !(\$asinh && 1 / \$asinh(0) > 0), 'Math', { asinh: asinh });
", "node_modules/core-js/library/modules/es6.math.asinh.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.math.asinh.js");
    }
}
