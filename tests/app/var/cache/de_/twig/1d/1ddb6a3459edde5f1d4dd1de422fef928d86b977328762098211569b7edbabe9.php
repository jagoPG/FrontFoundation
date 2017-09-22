<?php

/* node_modules/es6-set/is-implemented.js */
class __TwigTemplate_1d9554e852ca0345665f665d9fdf5cde0be1680e64f80b3343e41cd41be22247 extends Twig_Template
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
        $__internal_857f79e30994ccc11aa1c5cfdc06248fc57cdc28947b9e6f57fe90685853f2ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_857f79e30994ccc11aa1c5cfdc06248fc57cdc28947b9e6f57fe90685853f2ab->enter($__internal_857f79e30994ccc11aa1c5cfdc06248fc57cdc28947b9e6f57fe90685853f2ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-set/is-implemented.js"));

        // line 1
        echo "'use strict';

module.exports = function () {
\tvar set, iterator, result;
\tif (typeof Set !== 'function') return false;
\tset = new Set(['raz', 'dwa', 'trzy']);
\tif (String(set) !== '[object Set]') return false;
\tif (set.size !== 3) return false;
\tif (typeof set.add !== 'function') return false;
\tif (typeof set.clear !== 'function') return false;
\tif (typeof set.delete !== 'function') return false;
\tif (typeof set.entries !== 'function') return false;
\tif (typeof set.forEach !== 'function') return false;
\tif (typeof set.has !== 'function') return false;
\tif (typeof set.keys !== 'function') return false;
\tif (typeof set.values !== 'function') return false;

\titerator = set.values();
\tresult = iterator.next();
\tif (result.done !== false) return false;
\tif (result.value !== 'raz') return false;

\treturn true;
};
";
        
        $__internal_857f79e30994ccc11aa1c5cfdc06248fc57cdc28947b9e6f57fe90685853f2ab->leave($__internal_857f79e30994ccc11aa1c5cfdc06248fc57cdc28947b9e6f57fe90685853f2ab_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-set/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

module.exports = function () {
\tvar set, iterator, result;
\tif (typeof Set !== 'function') return false;
\tset = new Set(['raz', 'dwa', 'trzy']);
\tif (String(set) !== '[object Set]') return false;
\tif (set.size !== 3) return false;
\tif (typeof set.add !== 'function') return false;
\tif (typeof set.clear !== 'function') return false;
\tif (typeof set.delete !== 'function') return false;
\tif (typeof set.entries !== 'function') return false;
\tif (typeof set.forEach !== 'function') return false;
\tif (typeof set.has !== 'function') return false;
\tif (typeof set.keys !== 'function') return false;
\tif (typeof set.values !== 'function') return false;

\titerator = set.values();
\tresult = iterator.next();
\tif (result.done !== false) return false;
\tif (result.value !== 'raz') return false;

\treturn true;
};
", "node_modules/es6-set/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-set/is-implemented.js");
    }
}
