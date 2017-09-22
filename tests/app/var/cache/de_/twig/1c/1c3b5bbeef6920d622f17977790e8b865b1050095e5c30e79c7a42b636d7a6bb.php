<?php

/* node_modules/is-extendable/index.js */
class __TwigTemplate_6ab44c455cf8b577e181bc7c9256f5bf12e790600f2f87ba3b09d24b5d00b483 extends Twig_Template
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
        $__internal_9d5b322f33a03ac1057badd9c98c238f57c6b3e4975261198a5be8ded828390f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d5b322f33a03ac1057badd9c98c238f57c6b3e4975261198a5be8ded828390f->enter($__internal_9d5b322f33a03ac1057badd9c98c238f57c6b3e4975261198a5be8ded828390f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/is-extendable/index.js"));

        // line 1
        echo "/*!
 * is-extendable <https://github.com/jonschlinkert/is-extendable>
 *
 * Copyright (c) 2015, Jon Schlinkert.
 * Licensed under the MIT License.
 */

'use strict';

module.exports = function isExtendable(val) {
  return typeof val !== 'undefined' && val !== null
    && (typeof val === 'object' || typeof val === 'function');
};
";
        
        $__internal_9d5b322f33a03ac1057badd9c98c238f57c6b3e4975261198a5be8ded828390f->leave($__internal_9d5b322f33a03ac1057badd9c98c238f57c6b3e4975261198a5be8ded828390f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/is-extendable/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*!
 * is-extendable <https://github.com/jonschlinkert/is-extendable>
 *
 * Copyright (c) 2015, Jon Schlinkert.
 * Licensed under the MIT License.
 */

'use strict';

module.exports = function isExtendable(val) {
  return typeof val !== 'undefined' && val !== null
    && (typeof val === 'object' || typeof val === 'function');
};
", "node_modules/is-extendable/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/is-extendable/index.js");
    }
}
