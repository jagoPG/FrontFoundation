<?php

/* node_modules/lodash/_isMasked.js */
class __TwigTemplate_58fbb41ebe765f3b1005a9f5a945916dd70d46cdb751b48ac867923cba7d38af extends Twig_Template
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
        $__internal_c2b8a0d6489e1e0e5c0f2bc17ebced38c6f99264dbcbac3472698345e420a83f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2b8a0d6489e1e0e5c0f2bc17ebced38c6f99264dbcbac3472698345e420a83f->enter($__internal_c2b8a0d6489e1e0e5c0f2bc17ebced38c6f99264dbcbac3472698345e420a83f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_isMasked.js"));

        // line 1
        echo "var coreJsData = require('./_coreJsData');

/** Used to detect methods masquerading as native. */
var maskSrcKey = (function() {
  var uid = /[^.]+\$/.exec(coreJsData && coreJsData.keys && coreJsData.keys.IE_PROTO || '');
  return uid ? ('Symbol(src)_1.' + uid) : '';
}());

/**
 * Checks if `func` has its source masked.
 *
 * @private
 * @param {Function} func The function to check.
 * @returns {boolean} Returns `true` if `func` is masked, else `false`.
 */
function isMasked(func) {
  return !!maskSrcKey && (maskSrcKey in func);
}

module.exports = isMasked;
";
        
        $__internal_c2b8a0d6489e1e0e5c0f2bc17ebced38c6f99264dbcbac3472698345e420a83f->leave($__internal_c2b8a0d6489e1e0e5c0f2bc17ebced38c6f99264dbcbac3472698345e420a83f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_isMasked.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var coreJsData = require('./_coreJsData');

/** Used to detect methods masquerading as native. */
var maskSrcKey = (function() {
  var uid = /[^.]+\$/.exec(coreJsData && coreJsData.keys && coreJsData.keys.IE_PROTO || '');
  return uid ? ('Symbol(src)_1.' + uid) : '';
}());

/**
 * Checks if `func` has its source masked.
 *
 * @private
 * @param {Function} func The function to check.
 * @returns {boolean} Returns `true` if `func` is masked, else `false`.
 */
function isMasked(func) {
  return !!maskSrcKey && (maskSrcKey in func);
}

module.exports = isMasked;
", "node_modules/lodash/_isMasked.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_isMasked.js");
    }
}
