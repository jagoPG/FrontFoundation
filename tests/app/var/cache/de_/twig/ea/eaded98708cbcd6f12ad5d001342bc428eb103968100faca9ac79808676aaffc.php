<?php

/* node_modules/core-js/modules/_iter-create.js */
class __TwigTemplate_1ecd922b69407e74710cdbb892356a1508a1202d54b1cfc8ff72437257fb278b extends Twig_Template
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
        $__internal_1649d4f8c064cf88d00ddea5ebf44a9c2bb1df943cbdbbe0468bbef299c37583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1649d4f8c064cf88d00ddea5ebf44a9c2bb1df943cbdbbe0468bbef299c37583->enter($__internal_1649d4f8c064cf88d00ddea5ebf44a9c2bb1df943cbdbbe0468bbef299c37583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_iter-create.js"));

        // line 1
        echo "'use strict';
var create = require('./_object-create');
var descriptor = require('./_property-desc');
var setToStringTag = require('./_set-to-string-tag');
var IteratorPrototype = {};

// 25.1.2.1.1 %IteratorPrototype%[@@iterator]()
require('./_hide')(IteratorPrototype, require('./_wks')('iterator'), function () { return this; });

module.exports = function (Constructor, NAME, next) {
  Constructor.prototype = create(IteratorPrototype, { next: descriptor(1, next) });
  setToStringTag(Constructor, NAME + ' Iterator');
};
";
        
        $__internal_1649d4f8c064cf88d00ddea5ebf44a9c2bb1df943cbdbbe0468bbef299c37583->leave($__internal_1649d4f8c064cf88d00ddea5ebf44a9c2bb1df943cbdbbe0468bbef299c37583_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_iter-create.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var create = require('./_object-create');
var descriptor = require('./_property-desc');
var setToStringTag = require('./_set-to-string-tag');
var IteratorPrototype = {};

// 25.1.2.1.1 %IteratorPrototype%[@@iterator]()
require('./_hide')(IteratorPrototype, require('./_wks')('iterator'), function () { return this; });

module.exports = function (Constructor, NAME, next) {
  Constructor.prototype = create(IteratorPrototype, { next: descriptor(1, next) });
  setToStringTag(Constructor, NAME + ' Iterator');
};
", "node_modules/core-js/modules/_iter-create.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_iter-create.js");
    }
}
