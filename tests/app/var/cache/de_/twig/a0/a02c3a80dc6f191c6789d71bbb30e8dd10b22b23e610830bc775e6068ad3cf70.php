<?php

/* node_modules/right-align/index.js */
class __TwigTemplate_7fdd03f3b41fad1f937884b0d75aa0d8282ae5758a3e52c1a87518394d87d670 extends Twig_Template
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
        $__internal_ee013f27cf14a0a052ae84da574623c78900cf3b84cd454d173a2c5159c10e2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee013f27cf14a0a052ae84da574623c78900cf3b84cd454d173a2c5159c10e2a->enter($__internal_ee013f27cf14a0a052ae84da574623c78900cf3b84cd454d173a2c5159c10e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/right-align/index.js"));

        // line 1
        echo "/*!
 * right-align <https://github.com/jonschlinkert/right-align>
 *
 * Copyright (c) 2015, Jon Schlinkert.
 * Licensed under the MIT License.
 */

'use strict';

var align = require('align-text');

module.exports = function rightAlign(val) {
  return align(val, function (len, longest) {
    return longest - len;
  });
};
";
        
        $__internal_ee013f27cf14a0a052ae84da574623c78900cf3b84cd454d173a2c5159c10e2a->leave($__internal_ee013f27cf14a0a052ae84da574623c78900cf3b84cd454d173a2c5159c10e2a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/right-align/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*!
 * right-align <https://github.com/jonschlinkert/right-align>
 *
 * Copyright (c) 2015, Jon Schlinkert.
 * Licensed under the MIT License.
 */

'use strict';

var align = require('align-text');

module.exports = function rightAlign(val) {
  return align(val, function (len, longest) {
    return longest - len;
  });
};
", "node_modules/right-align/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/right-align/index.js");
    }
}
