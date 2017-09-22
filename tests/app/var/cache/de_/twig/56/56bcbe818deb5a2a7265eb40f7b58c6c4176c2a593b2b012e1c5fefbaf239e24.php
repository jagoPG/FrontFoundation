<?php

/* node_modules/core-js/modules/es7.array.includes.js */
class __TwigTemplate_c91e68c4f2c25bb8d84f3809cbbe1920ece69f9c9ae8120ced13698970124780 extends Twig_Template
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
        $__internal_79af0b188b42bdbe932dbb93bfe265e1f14efa313875fdca6f2d31da6833b1b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79af0b188b42bdbe932dbb93bfe265e1f14efa313875fdca6f2d31da6833b1b3->enter($__internal_79af0b188b42bdbe932dbb93bfe265e1f14efa313875fdca6f2d31da6833b1b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es7.array.includes.js"));

        // line 1
        echo "'use strict';
// https://github.com/tc39/Array.prototype.includes
var \$export = require('./_export');
var \$includes = require('./_array-includes')(true);

\$export(\$export.P, 'Array', {
  includes: function includes(el /* , fromIndex = 0 */) {
    return \$includes(this, el, arguments.length > 1 ? arguments[1] : undefined);
  }
});

require('./_add-to-unscopables')('includes');
";
        
        $__internal_79af0b188b42bdbe932dbb93bfe265e1f14efa313875fdca6f2d31da6833b1b3->leave($__internal_79af0b188b42bdbe932dbb93bfe265e1f14efa313875fdca6f2d31da6833b1b3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es7.array.includes.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
// https://github.com/tc39/Array.prototype.includes
var \$export = require('./_export');
var \$includes = require('./_array-includes')(true);

\$export(\$export.P, 'Array', {
  includes: function includes(el /* , fromIndex = 0 */) {
    return \$includes(this, el, arguments.length > 1 ? arguments[1] : undefined);
  }
});

require('./_add-to-unscopables')('includes');
", "node_modules/core-js/modules/es7.array.includes.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es7.array.includes.js");
    }
}
