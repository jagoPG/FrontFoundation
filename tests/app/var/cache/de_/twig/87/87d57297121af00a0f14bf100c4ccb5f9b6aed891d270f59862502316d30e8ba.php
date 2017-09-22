<?php

/* node_modules/core-js/modules/es6.math.fround.js */
class __TwigTemplate_0b679742546e3407ff76596614853c38bccc3ea47a1215692dac673dcf97e7d4 extends Twig_Template
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
        $__internal_a914853b5e6551770143d7d77cd40bc7a0ec4da62c6250dbb8179ff3934cf606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a914853b5e6551770143d7d77cd40bc7a0ec4da62c6250dbb8179ff3934cf606->enter($__internal_a914853b5e6551770143d7d77cd40bc7a0ec4da62c6250dbb8179ff3934cf606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.math.fround.js"));

        // line 1
        echo "// 20.2.2.16 Math.fround(x)
var \$export = require('./_export');

\$export(\$export.S, 'Math', { fround: require('./_math-fround') });
";
        
        $__internal_a914853b5e6551770143d7d77cd40bc7a0ec4da62c6250dbb8179ff3934cf606->leave($__internal_a914853b5e6551770143d7d77cd40bc7a0ec4da62c6250dbb8179ff3934cf606_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.math.fround.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 20.2.2.16 Math.fround(x)
var \$export = require('./_export');

\$export(\$export.S, 'Math', { fround: require('./_math-fround') });
", "node_modules/core-js/modules/es6.math.fround.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.math.fround.js");
    }
}
