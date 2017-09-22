<?php

/* node_modules/core-js/library/modules/es6.weak-set.js */
class __TwigTemplate_ad9bbaea84f474f3d7be23fec2dded64bde818caff1b3968eef3badd8f6e3b51 extends Twig_Template
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
        $__internal_8243ed7bcc36e191a06c909c6fb8fb17dd6adba66308ac8146865041b02e96ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8243ed7bcc36e191a06c909c6fb8fb17dd6adba66308ac8146865041b02e96ba->enter($__internal_8243ed7bcc36e191a06c909c6fb8fb17dd6adba66308ac8146865041b02e96ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.weak-set.js"));

        // line 1
        echo "'use strict';
var weak = require('./_collection-weak');
var validate = require('./_validate-collection');
var WEAK_SET = 'WeakSet';

// 23.4 WeakSet Objects
require('./_collection')(WEAK_SET, function (get) {
  return function WeakSet() { return get(this, arguments.length > 0 ? arguments[0] : undefined); };
}, {
  // 23.4.3.1 WeakSet.prototype.add(value)
  add: function add(value) {
    return weak.def(validate(this, WEAK_SET), value, true);
  }
}, weak, false, true);
";
        
        $__internal_8243ed7bcc36e191a06c909c6fb8fb17dd6adba66308ac8146865041b02e96ba->leave($__internal_8243ed7bcc36e191a06c909c6fb8fb17dd6adba66308ac8146865041b02e96ba_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.weak-set.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var weak = require('./_collection-weak');
var validate = require('./_validate-collection');
var WEAK_SET = 'WeakSet';

// 23.4 WeakSet Objects
require('./_collection')(WEAK_SET, function (get) {
  return function WeakSet() { return get(this, arguments.length > 0 ? arguments[0] : undefined); };
}, {
  // 23.4.3.1 WeakSet.prototype.add(value)
  add: function add(value) {
    return weak.def(validate(this, WEAK_SET), value, true);
  }
}, weak, false, true);
", "node_modules/core-js/library/modules/es6.weak-set.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.weak-set.js");
    }
}
