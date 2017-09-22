<?php

/* node_modules/es6-symbol/is-native-implemented.js */
class __TwigTemplate_fa314e16cf915e9da69ff4a6fde86ff61fc8fc2cc695f52327b0a2d1da2dbd72 extends Twig_Template
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
        $__internal_36e4347fdb120f5a499a26bcd6bbf765ec6dfcb25660c1f4ef32bb6e825e4eb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36e4347fdb120f5a499a26bcd6bbf765ec6dfcb25660c1f4ef32bb6e825e4eb1->enter($__internal_36e4347fdb120f5a499a26bcd6bbf765ec6dfcb25660c1f4ef32bb6e825e4eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-symbol/is-native-implemented.js"));

        // line 1
        echo "// Exports true if environment provides native `Symbol` implementation

'use strict';

module.exports = typeof Symbol === 'function' && typeof Symbol() === 'symbol';
";
        
        $__internal_36e4347fdb120f5a499a26bcd6bbf765ec6dfcb25660c1f4ef32bb6e825e4eb1->leave($__internal_36e4347fdb120f5a499a26bcd6bbf765ec6dfcb25660c1f4ef32bb6e825e4eb1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-symbol/is-native-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Exports true if environment provides native `Symbol` implementation

'use strict';

module.exports = typeof Symbol === 'function' && typeof Symbol() === 'symbol';
", "node_modules/es6-symbol/is-native-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-symbol/is-native-implemented.js");
    }
}
