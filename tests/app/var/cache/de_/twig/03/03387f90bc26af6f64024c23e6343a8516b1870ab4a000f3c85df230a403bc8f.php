<?php

/* node_modules/to-fast-properties/index.js */
class __TwigTemplate_8644134990000a350445f076d94944dc176adca2815961770db80c656f4b799f extends Twig_Template
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
        $__internal_4c9d6da86192de613402ba285353b0319ae0072a4e6e1b3c10a21b298c44e565 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c9d6da86192de613402ba285353b0319ae0072a4e6e1b3c10a21b298c44e565->enter($__internal_4c9d6da86192de613402ba285353b0319ae0072a4e6e1b3c10a21b298c44e565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/to-fast-properties/index.js"));

        // line 1
        echo "'use strict';
module.exports = function toFastproperties(o) {
\tfunction Sub() {}
\tSub.prototype = o;
\tvar receiver = new Sub(); // create an instance
\tfunction ic() { return typeof receiver.foo; } // perform access
\tic(); 
\tic();
\treturn o;
\teval(\"o\" + o); // ensure no dead code elimination
}
";
        
        $__internal_4c9d6da86192de613402ba285353b0319ae0072a4e6e1b3c10a21b298c44e565->leave($__internal_4c9d6da86192de613402ba285353b0319ae0072a4e6e1b3c10a21b298c44e565_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/to-fast-properties/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
module.exports = function toFastproperties(o) {
\tfunction Sub() {}
\tSub.prototype = o;
\tvar receiver = new Sub(); // create an instance
\tfunction ic() { return typeof receiver.foo; } // perform access
\tic(); 
\tic();
\treturn o;
\teval(\"o\" + o); // ensure no dead code elimination
}
", "node_modules/to-fast-properties/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/to-fast-properties/index.js");
    }
}
