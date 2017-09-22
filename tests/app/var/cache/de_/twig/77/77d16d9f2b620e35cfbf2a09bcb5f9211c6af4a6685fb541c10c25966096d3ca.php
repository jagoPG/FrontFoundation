<?php

/* node_modules/is-buffer/index.js */
class __TwigTemplate_52b774d9528cc596bd83fe293ae9e301de125662650fefd99a19f0737af09f35 extends Twig_Template
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
        $__internal_62a1aa4e5654bc8796033d5d326d335dba64ac68632c3a58004e310ad6b3b3ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62a1aa4e5654bc8796033d5d326d335dba64ac68632c3a58004e310ad6b3b3ee->enter($__internal_62a1aa4e5654bc8796033d5d326d335dba64ac68632c3a58004e310ad6b3b3ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/is-buffer/index.js"));

        // line 1
        echo "/*!
 * Determine if an object is a Buffer
 *
 * @author   Feross Aboukhadijeh <feross@feross.org> <http://feross.org>
 * @license  MIT
 */

// The _isBuffer check is for Safari 5-7 support, because it's missing
// Object.prototype.constructor. Remove this eventually
module.exports = function (obj) {
  return obj != null && (isBuffer(obj) || isSlowBuffer(obj) || !!obj._isBuffer)
}

function isBuffer (obj) {
  return !!obj.constructor && typeof obj.constructor.isBuffer === 'function' && obj.constructor.isBuffer(obj)
}

// For Node v0.10 support. Remove this eventually.
function isSlowBuffer (obj) {
  return typeof obj.readFloatLE === 'function' && typeof obj.slice === 'function' && isBuffer(obj.slice(0, 0))
}
";
        
        $__internal_62a1aa4e5654bc8796033d5d326d335dba64ac68632c3a58004e310ad6b3b3ee->leave($__internal_62a1aa4e5654bc8796033d5d326d335dba64ac68632c3a58004e310ad6b3b3ee_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/is-buffer/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*!
 * Determine if an object is a Buffer
 *
 * @author   Feross Aboukhadijeh <feross@feross.org> <http://feross.org>
 * @license  MIT
 */

// The _isBuffer check is for Safari 5-7 support, because it's missing
// Object.prototype.constructor. Remove this eventually
module.exports = function (obj) {
  return obj != null && (isBuffer(obj) || isSlowBuffer(obj) || !!obj._isBuffer)
}

function isBuffer (obj) {
  return !!obj.constructor && typeof obj.constructor.isBuffer === 'function' && obj.constructor.isBuffer(obj)
}

// For Node v0.10 support. Remove this eventually.
function isSlowBuffer (obj) {
  return typeof obj.readFloatLE === 'function' && typeof obj.slice === 'function' && isBuffer(obj.slice(0, 0))
}
", "node_modules/is-buffer/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/is-buffer/index.js");
    }
}
