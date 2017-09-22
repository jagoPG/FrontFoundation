<?php

/* node_modules/core-js/library/modules/es7.array.includes.js */
class __TwigTemplate_018251e0e81c7eee26c83b3f96e76fb945d8760854688a2f81f606582cfc54d3 extends Twig_Template
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
        $__internal_9efcd2f94ccf5afae50f4739b84a5f6aa3ecbfce5ae6e36297e1477405835052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9efcd2f94ccf5afae50f4739b84a5f6aa3ecbfce5ae6e36297e1477405835052->enter($__internal_9efcd2f94ccf5afae50f4739b84a5f6aa3ecbfce5ae6e36297e1477405835052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es7.array.includes.js"));

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
        
        $__internal_9efcd2f94ccf5afae50f4739b84a5f6aa3ecbfce5ae6e36297e1477405835052->leave($__internal_9efcd2f94ccf5afae50f4739b84a5f6aa3ecbfce5ae6e36297e1477405835052_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es7.array.includes.js";
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
", "node_modules/core-js/library/modules/es7.array.includes.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es7.array.includes.js");
    }
}
