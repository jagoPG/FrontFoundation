<?php

/* node_modules/es5-ext/function/#/copy.js */
class __TwigTemplate_d8f2ee309b6c220b0fb09690135d16adbc69c8c995a88e745075219094b0d484 extends Twig_Template
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
        $__internal_4a3b80a5498eed153a81ab758fff1a2981fa013aedb1e6ff2e7630990c3eccfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a3b80a5498eed153a81ab758fff1a2981fa013aedb1e6ff2e7630990c3eccfb->enter($__internal_4a3b80a5498eed153a81ab758fff1a2981fa013aedb1e6ff2e7630990c3eccfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/function/#/copy.js"));

        // line 1
        echo "\"use strict\";

var mixin         = require(\"../../object/mixin\")
  , validFunction = require(\"../valid-function\")
  , re            = /^\\s*function\\s*([\\0-')-\\uffff]+)*\\s*\\(([\\0-(*-\\uffff]*)\\)\\s*\\{/;

module.exports = function () {
\tvar match = String(validFunction(this)).match(re), fn;

\t// eslint-disable-next-line no-new-func
\tfn = new Function(
\t\t\"fn\",
\t\t\"return function \" +
\t\t\tmatch[1].trim() +
\t\t\t\"(\" +
\t\t\tmatch[2] +
\t\t\t\") { return fn.apply(this, arguments); };\"
\t)(this);
\ttry {
\t\tmixin(fn, this);
\t} catch (ignore) {}
\treturn fn;
};
";
        
        $__internal_4a3b80a5498eed153a81ab758fff1a2981fa013aedb1e6ff2e7630990c3eccfb->leave($__internal_4a3b80a5498eed153a81ab758fff1a2981fa013aedb1e6ff2e7630990c3eccfb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/function/#/copy.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var mixin         = require(\"../../object/mixin\")
  , validFunction = require(\"../valid-function\")
  , re            = /^\\s*function\\s*([\\0-')-\\uffff]+)*\\s*\\(([\\0-(*-\\uffff]*)\\)\\s*\\{/;

module.exports = function () {
\tvar match = String(validFunction(this)).match(re), fn;

\t// eslint-disable-next-line no-new-func
\tfn = new Function(
\t\t\"fn\",
\t\t\"return function \" +
\t\t\tmatch[1].trim() +
\t\t\t\"(\" +
\t\t\tmatch[2] +
\t\t\t\") { return fn.apply(this, arguments); };\"
\t)(this);
\ttry {
\t\tmixin(fn, this);
\t} catch (ignore) {}
\treturn fn;
};
", "node_modules/es5-ext/function/#/copy.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/function/#/copy.js");
    }
}
