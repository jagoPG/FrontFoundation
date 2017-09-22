<?php

/* node_modules/lodash/_stackClear.js */
class __TwigTemplate_3d7abc3f06cdb33dd14f00db7714648ae5f08344cb4dca1b3f7e581d4cd84df5 extends Twig_Template
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
        $__internal_55b8c56020d66dbedbb85585f09b2fc75c5d86e08cb4ab3ed2f9ba3a6019b8f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55b8c56020d66dbedbb85585f09b2fc75c5d86e08cb4ab3ed2f9ba3a6019b8f1->enter($__internal_55b8c56020d66dbedbb85585f09b2fc75c5d86e08cb4ab3ed2f9ba3a6019b8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_stackClear.js"));

        // line 1
        echo "var ListCache = require('./_ListCache');

/**
 * Removes all key-value entries from the stack.
 *
 * @private
 * @name clear
 * @memberOf Stack
 */
function stackClear() {
  this.__data__ = new ListCache;
  this.size = 0;
}

module.exports = stackClear;
";
        
        $__internal_55b8c56020d66dbedbb85585f09b2fc75c5d86e08cb4ab3ed2f9ba3a6019b8f1->leave($__internal_55b8c56020d66dbedbb85585f09b2fc75c5d86e08cb4ab3ed2f9ba3a6019b8f1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_stackClear.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var ListCache = require('./_ListCache');

/**
 * Removes all key-value entries from the stack.
 *
 * @private
 * @name clear
 * @memberOf Stack
 */
function stackClear() {
  this.__data__ = new ListCache;
  this.size = 0;
}

module.exports = stackClear;
", "node_modules/lodash/_stackClear.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_stackClear.js");
    }
}
