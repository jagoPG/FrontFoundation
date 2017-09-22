<?php

/* node_modules/es6-symbol/is-implemented.js */
class __TwigTemplate_f594dad52b591077cdcbda9f912f99658e6baf1f43e8ecbdedd3f7393e4eb8cd extends Twig_Template
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
        $__internal_ea9c8efb2d465bc3fd2a2f74a232c76cd7666d670ac531e75e9176cff48a2cce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea9c8efb2d465bc3fd2a2f74a232c76cd7666d670ac531e75e9176cff48a2cce->enter($__internal_ea9c8efb2d465bc3fd2a2f74a232c76cd7666d670ac531e75e9176cff48a2cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-symbol/is-implemented.js"));

        // line 1
        echo "'use strict';

var validTypes = { object: true, symbol: true };

module.exports = function () {
\tvar symbol;
\tif (typeof Symbol !== 'function') return false;
\tsymbol = Symbol('test symbol');
\ttry { String(symbol); } catch (e) { return false; }

\t// Return 'true' also for polyfills
\tif (!validTypes[typeof Symbol.iterator]) return false;
\tif (!validTypes[typeof Symbol.toPrimitive]) return false;
\tif (!validTypes[typeof Symbol.toStringTag]) return false;

\treturn true;
};
";
        
        $__internal_ea9c8efb2d465bc3fd2a2f74a232c76cd7666d670ac531e75e9176cff48a2cce->leave($__internal_ea9c8efb2d465bc3fd2a2f74a232c76cd7666d670ac531e75e9176cff48a2cce_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-symbol/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var validTypes = { object: true, symbol: true };

module.exports = function () {
\tvar symbol;
\tif (typeof Symbol !== 'function') return false;
\tsymbol = Symbol('test symbol');
\ttry { String(symbol); } catch (e) { return false; }

\t// Return 'true' also for polyfills
\tif (!validTypes[typeof Symbol.iterator]) return false;
\tif (!validTypes[typeof Symbol.toPrimitive]) return false;
\tif (!validTypes[typeof Symbol.toStringTag]) return false;

\treturn true;
};
", "node_modules/es6-symbol/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-symbol/is-implemented.js");
    }
}
