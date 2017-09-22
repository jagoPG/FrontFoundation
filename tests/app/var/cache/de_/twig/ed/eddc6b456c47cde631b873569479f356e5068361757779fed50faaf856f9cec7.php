<?php

/* node_modules/core-js/library/modules/es6.string.includes.js */
class __TwigTemplate_f5ad6d0b07deb7a103bbf7dfbdcb5f8e858a05790e493656a986d79f90bd0021 extends Twig_Template
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
        $__internal_e2b39ba2a9f50195eec79a5234a1a1c52ab5c6050fa9737fb4eaa0ca8815b0d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2b39ba2a9f50195eec79a5234a1a1c52ab5c6050fa9737fb4eaa0ca8815b0d1->enter($__internal_e2b39ba2a9f50195eec79a5234a1a1c52ab5c6050fa9737fb4eaa0ca8815b0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.string.includes.js"));

        // line 1
        echo "// 21.1.3.7 String.prototype.includes(searchString, position = 0)
'use strict';
var \$export = require('./_export');
var context = require('./_string-context');
var INCLUDES = 'includes';

\$export(\$export.P + \$export.F * require('./_fails-is-regexp')(INCLUDES), 'String', {
  includes: function includes(searchString /* , position = 0 */) {
    return !!~context(this, searchString, INCLUDES)
      .indexOf(searchString, arguments.length > 1 ? arguments[1] : undefined);
  }
});
";
        
        $__internal_e2b39ba2a9f50195eec79a5234a1a1c52ab5c6050fa9737fb4eaa0ca8815b0d1->leave($__internal_e2b39ba2a9f50195eec79a5234a1a1c52ab5c6050fa9737fb4eaa0ca8815b0d1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.string.includes.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 21.1.3.7 String.prototype.includes(searchString, position = 0)
'use strict';
var \$export = require('./_export');
var context = require('./_string-context');
var INCLUDES = 'includes';

\$export(\$export.P + \$export.F * require('./_fails-is-regexp')(INCLUDES), 'String', {
  includes: function includes(searchString /* , position = 0 */) {
    return !!~context(this, searchString, INCLUDES)
      .indexOf(searchString, arguments.length > 1 ? arguments[1] : undefined);
  }
});
", "node_modules/core-js/library/modules/es6.string.includes.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.string.includes.js");
    }
}
