<?php

/* node_modules/core-js/library/modules/es6.reflect.is-extensible.js */
class __TwigTemplate_1006fdf28b155e226054f49bba9b21239911f66b59528e558cf4af69de3fdaab extends Twig_Template
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
        $__internal_db9b5e545ea87fb29605767848e96ce734e6f939e3937a8944ed938bc7c60f58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db9b5e545ea87fb29605767848e96ce734e6f939e3937a8944ed938bc7c60f58->enter($__internal_db9b5e545ea87fb29605767848e96ce734e6f939e3937a8944ed938bc7c60f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.reflect.is-extensible.js"));

        // line 1
        echo "// 26.1.10 Reflect.isExtensible(target)
var \$export = require('./_export');
var anObject = require('./_an-object');
var \$isExtensible = Object.isExtensible;

\$export(\$export.S, 'Reflect', {
  isExtensible: function isExtensible(target) {
    anObject(target);
    return \$isExtensible ? \$isExtensible(target) : true;
  }
});
";
        
        $__internal_db9b5e545ea87fb29605767848e96ce734e6f939e3937a8944ed938bc7c60f58->leave($__internal_db9b5e545ea87fb29605767848e96ce734e6f939e3937a8944ed938bc7c60f58_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.reflect.is-extensible.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 26.1.10 Reflect.isExtensible(target)
var \$export = require('./_export');
var anObject = require('./_an-object');
var \$isExtensible = Object.isExtensible;

\$export(\$export.S, 'Reflect', {
  isExtensible: function isExtensible(target) {
    anObject(target);
    return \$isExtensible ? \$isExtensible(target) : true;
  }
});
", "node_modules/core-js/library/modules/es6.reflect.is-extensible.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.reflect.is-extensible.js");
    }
}
