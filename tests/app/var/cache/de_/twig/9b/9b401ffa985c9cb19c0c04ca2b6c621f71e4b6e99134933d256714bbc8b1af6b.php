<?php

/* node_modules/core-js/library/modules/es6.math.fround.js */
class __TwigTemplate_38c85fdeeba4effdd4db5a0576ad2382426af3813729f248f29198ff21537053 extends Twig_Template
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
        $__internal_66b5c2a93d999fa6847c98a8fbd73945e9fe851a8468e9777444ea655a5f1306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66b5c2a93d999fa6847c98a8fbd73945e9fe851a8468e9777444ea655a5f1306->enter($__internal_66b5c2a93d999fa6847c98a8fbd73945e9fe851a8468e9777444ea655a5f1306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.math.fround.js"));

        // line 1
        echo "// 20.2.2.16 Math.fround(x)
var \$export = require('./_export');

\$export(\$export.S, 'Math', { fround: require('./_math-fround') });
";
        
        $__internal_66b5c2a93d999fa6847c98a8fbd73945e9fe851a8468e9777444ea655a5f1306->leave($__internal_66b5c2a93d999fa6847c98a8fbd73945e9fe851a8468e9777444ea655a5f1306_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.math.fround.js";
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
", "node_modules/core-js/library/modules/es6.math.fround.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.math.fround.js");
    }
}
