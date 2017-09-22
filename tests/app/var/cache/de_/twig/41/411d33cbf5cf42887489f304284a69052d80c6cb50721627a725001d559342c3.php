<?php

/* node_modules/async/internal/getIterator.js */
class __TwigTemplate_5b7d91c4155d45d69d18014192706ad2f0a74ac5ed8caf27006130bb79722a73 extends Twig_Template
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
        $__internal_9355778ee527ad1ece7f5bb4a03849eb9a4367eaab767d319376a6a7cd8e61e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9355778ee527ad1ece7f5bb4a03849eb9a4367eaab767d319376a6a7cd8e61e5->enter($__internal_9355778ee527ad1ece7f5bb4a03849eb9a4367eaab767d319376a6a7cd8e61e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/internal/getIterator.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
    value: true
});

exports.default = function (coll) {
    return iteratorSymbol && coll[iteratorSymbol] && coll[iteratorSymbol]();
};

var iteratorSymbol = typeof Symbol === 'function' && Symbol.iterator;

module.exports = exports['default'];";
        
        $__internal_9355778ee527ad1ece7f5bb4a03849eb9a4367eaab767d319376a6a7cd8e61e5->leave($__internal_9355778ee527ad1ece7f5bb4a03849eb9a4367eaab767d319376a6a7cd8e61e5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/internal/getIterator.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

Object.defineProperty(exports, \"__esModule\", {
    value: true
});

exports.default = function (coll) {
    return iteratorSymbol && coll[iteratorSymbol] && coll[iteratorSymbol]();
};

var iteratorSymbol = typeof Symbol === 'function' && Symbol.iterator;

module.exports = exports['default'];", "node_modules/async/internal/getIterator.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/internal/getIterator.js");
    }
}
