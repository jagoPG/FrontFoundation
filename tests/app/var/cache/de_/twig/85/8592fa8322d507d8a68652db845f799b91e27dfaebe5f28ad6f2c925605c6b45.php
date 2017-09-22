<?php

/* node_modules/core-js/library/modules/_iter-create.js */
class __TwigTemplate_27576f953d9810dfeb6102c3d0426b444199589f14d056a7bc6ad49a93ec8c4c extends Twig_Template
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
        $__internal_527af8579112c020af7f1ecbab771bbe67c2d922d7fbe13dd95285b004100aed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_527af8579112c020af7f1ecbab771bbe67c2d922d7fbe13dd95285b004100aed->enter($__internal_527af8579112c020af7f1ecbab771bbe67c2d922d7fbe13dd95285b004100aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_iter-create.js"));

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
        
        $__internal_527af8579112c020af7f1ecbab771bbe67c2d922d7fbe13dd95285b004100aed->leave($__internal_527af8579112c020af7f1ecbab771bbe67c2d922d7fbe13dd95285b004100aed_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_iter-create.js";
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
", "node_modules/core-js/library/modules/_iter-create.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_iter-create.js");
    }
}
