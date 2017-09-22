<?php

/* node_modules/escape-string-regexp/index.js */
class __TwigTemplate_88093f4b27c4a2eb027bf67cebfe68ba25e7cb635f83122a08466a7caa681007 extends Twig_Template
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
        $__internal_b8a911bbbeffddd308ef506b79be898663d2e639e784469ca846e415fdeaa95d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a911bbbeffddd308ef506b79be898663d2e639e784469ca846e415fdeaa95d->enter($__internal_b8a911bbbeffddd308ef506b79be898663d2e639e784469ca846e415fdeaa95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/escape-string-regexp/index.js"));

        // line 1
        echo "'use strict';

var matchOperatorsRe = /[|\\\\{}()[\\]^\$+*?.]/g;

module.exports = function (str) {
\tif (typeof str !== 'string') {
\t\tthrow new TypeError('Expected a string');
\t}

\treturn str.replace(matchOperatorsRe, '\\\\\$&');
};
";
        
        $__internal_b8a911bbbeffddd308ef506b79be898663d2e639e784469ca846e415fdeaa95d->leave($__internal_b8a911bbbeffddd308ef506b79be898663d2e639e784469ca846e415fdeaa95d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/escape-string-regexp/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var matchOperatorsRe = /[|\\\\{}()[\\]^\$+*?.]/g;

module.exports = function (str) {
\tif (typeof str !== 'string') {
\t\tthrow new TypeError('Expected a string');
\t}

\treturn str.replace(matchOperatorsRe, '\\\\\$&');
};
", "node_modules/escape-string-regexp/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/escape-string-regexp/index.js");
    }
}
