<?php

/* node_modules/is-primitive/index.js */
class __TwigTemplate_959504b961da2a2e1016df88c780049f83f2b8974f6dcee3e3342310eb5a47fd extends Twig_Template
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
        $__internal_5e9b7efc7fa254b401b2a6fc5693c346e6c25d74496cdd928bf40bfd0f6b6309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e9b7efc7fa254b401b2a6fc5693c346e6c25d74496cdd928bf40bfd0f6b6309->enter($__internal_5e9b7efc7fa254b401b2a6fc5693c346e6c25d74496cdd928bf40bfd0f6b6309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/is-primitive/index.js"));

        // line 1
        echo "/*!
 * is-primitive <https://github.com/jonschlinkert/is-primitive>
 *
 * Copyright (c) 2014-2015, Jon Schlinkert.
 * Licensed under the MIT License.
 */

'use strict';

// see http://jsperf.com/testing-value-is-primitive/7
module.exports = function isPrimitive(value) {
  return value == null || (typeof value !== 'function' && typeof value !== 'object');
};
";
        
        $__internal_5e9b7efc7fa254b401b2a6fc5693c346e6c25d74496cdd928bf40bfd0f6b6309->leave($__internal_5e9b7efc7fa254b401b2a6fc5693c346e6c25d74496cdd928bf40bfd0f6b6309_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/is-primitive/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*!
 * is-primitive <https://github.com/jonschlinkert/is-primitive>
 *
 * Copyright (c) 2014-2015, Jon Schlinkert.
 * Licensed under the MIT License.
 */

'use strict';

// see http://jsperf.com/testing-value-is-primitive/7
module.exports = function isPrimitive(value) {
  return value == null || (typeof value !== 'function' && typeof value !== 'object');
};
", "node_modules/is-primitive/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/is-primitive/index.js");
    }
}
