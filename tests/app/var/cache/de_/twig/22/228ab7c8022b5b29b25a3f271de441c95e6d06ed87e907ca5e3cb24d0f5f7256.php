<?php

/* node_modules/core-js/library/modules/es7.math.radians.js */
class __TwigTemplate_73dc739f86f943a05ebc07402ceb77e2a814566cdb2c78f8579f24bd0d65677f extends Twig_Template
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
        $__internal_bc8d7afe7cbe9225bc18cfc73559a1246932dc66f410eb9840bc52f9e36e41ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc8d7afe7cbe9225bc18cfc73559a1246932dc66f410eb9840bc52f9e36e41ac->enter($__internal_bc8d7afe7cbe9225bc18cfc73559a1246932dc66f410eb9840bc52f9e36e41ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es7.math.radians.js"));

        // line 1
        echo "// https://rwaldron.github.io/proposal-math-extensions/
var \$export = require('./_export');
var DEG_PER_RAD = Math.PI / 180;

\$export(\$export.S, 'Math', {
  radians: function radians(degrees) {
    return degrees * DEG_PER_RAD;
  }
});
";
        
        $__internal_bc8d7afe7cbe9225bc18cfc73559a1246932dc66f410eb9840bc52f9e36e41ac->leave($__internal_bc8d7afe7cbe9225bc18cfc73559a1246932dc66f410eb9840bc52f9e36e41ac_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es7.math.radians.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// https://rwaldron.github.io/proposal-math-extensions/
var \$export = require('./_export');
var DEG_PER_RAD = Math.PI / 180;

\$export(\$export.S, 'Math', {
  radians: function radians(degrees) {
    return degrees * DEG_PER_RAD;
  }
});
", "node_modules/core-js/library/modules/es7.math.radians.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es7.math.radians.js");
    }
}
