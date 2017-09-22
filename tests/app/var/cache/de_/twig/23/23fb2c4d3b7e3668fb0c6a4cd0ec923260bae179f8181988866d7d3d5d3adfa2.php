<?php

/* node_modules/parsleyjs/src/parsley/constraint.js */
class __TwigTemplate_ac34f042a98cf4d13cfd97b8e3bdaf2f445ce745e9c917605bcb27287eebd325 extends Twig_Template
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
        $__internal_d512502dd0498ea1438e0c6002ec03baa513435ef2cbfe3c4011130edd1fd921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d512502dd0498ea1438e0c6002ec03baa513435ef2cbfe3c4011130edd1fd921->enter($__internal_d512502dd0498ea1438e0c6002ec03baa513435ef2cbfe3c4011130edd1fd921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/parsley/constraint.js"));

        // line 1
        echo "import Utils from './utils';
import Validator from './validator';

const Constraint = function(parsleyField, name, requirements, priority, isDomConstraint) {
  const validatorSpec = window.Parsley._validatorRegistry.validators[name];
  const validator = new Validator(validatorSpec);
  priority = priority || parsleyField.options[name + 'Priority'] || validator.priority;
  isDomConstraint = (true === isDomConstraint);

  Object.assign(this, {
    validator,
    name,
    requirements,
    priority,
    isDomConstraint
  });
  this._parseRequirements(parsleyField.options);
};

const capitalize = function(str) {
  const cap = str[0].toUpperCase();
  return cap + str.slice(1);
};

Constraint.prototype = {
  validate: function(value, instance) {
    return this.validator.validate(value, ...this.requirementList, instance);
  },

  _parseRequirements: function(options) {
    this.requirementList = this.validator.parseRequirements(this.requirements,
      key => options[this.name + capitalize(key)]
    );
  }
};

export default Constraint;
";
        
        $__internal_d512502dd0498ea1438e0c6002ec03baa513435ef2cbfe3c4011130edd1fd921->leave($__internal_d512502dd0498ea1438e0c6002ec03baa513435ef2cbfe3c4011130edd1fd921_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/parsley/constraint.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("import Utils from './utils';
import Validator from './validator';

const Constraint = function(parsleyField, name, requirements, priority, isDomConstraint) {
  const validatorSpec = window.Parsley._validatorRegistry.validators[name];
  const validator = new Validator(validatorSpec);
  priority = priority || parsleyField.options[name + 'Priority'] || validator.priority;
  isDomConstraint = (true === isDomConstraint);

  Object.assign(this, {
    validator,
    name,
    requirements,
    priority,
    isDomConstraint
  });
  this._parseRequirements(parsleyField.options);
};

const capitalize = function(str) {
  const cap = str[0].toUpperCase();
  return cap + str.slice(1);
};

Constraint.prototype = {
  validate: function(value, instance) {
    return this.validator.validate(value, ...this.requirementList, instance);
  },

  _parseRequirements: function(options) {
    this.requirementList = this.validator.parseRequirements(this.requirements,
      key => options[this.name + capitalize(key)]
    );
  }
};

export default Constraint;
", "node_modules/parsleyjs/src/parsley/constraint.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/parsley/constraint.js");
    }
}
