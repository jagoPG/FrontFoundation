<?php

/* node_modules/parsleyjs/src/parsley/validator.js */
class __TwigTemplate_f98e61d91254f7cfb4b03ad10722f13a61341b5753f1496dd57c56e89660513e extends Twig_Template
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
        $__internal_47b2b138785005eeecf372ee1427c79585194fa8a9da0208d6efacae9b724296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47b2b138785005eeecf372ee1427c79585194fa8a9da0208d6efacae9b724296->enter($__internal_47b2b138785005eeecf372ee1427c79585194fa8a9da0208d6efacae9b724296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/parsley/validator.js"));

        // line 1
        echo "import \$ from 'jquery';
import Utils from './utils';

var convertArrayRequirement = function(string, length) {
  var m = string.match(/^\\s*\\[(.*)\\]\\s*\$/);
  if (!m)
    throw 'Requirement is not an array: \"' + string + '\"';
  var values = m[1].split(',').map(Utils.trimString);
  if (values.length !== length)
    throw 'Requirement has ' + values.length + ' values when ' + length + ' are needed';
  return values;
};

var convertExtraOptionRequirement = function(requirementSpec, string, extraOptionReader) {
  var main = null;
  var extra = {};
  for (var key in requirementSpec) {
    if (key) {
      var value = extraOptionReader(key);
      if ('string' === typeof value)
        value = Utils.parseRequirement(requirementSpec[key], value);
      extra[key] = value;
    } else {
      main = Utils.parseRequirement(requirementSpec[key], string);
    }
  }
  return [main, extra];
};

// A Validator needs to implement the methods `validate` and `parseRequirements`

var Validator = function(spec) {
  \$.extend(true, this, spec);
};

Validator.prototype = {
  // Returns `true` iff the given `value` is valid according the given requirements.
  validate: function(value, requirementFirstArg) {
    if (this.fn) { // Legacy style validator

      if (arguments.length > 3)  // If more args then value, requirement, instance...
        requirementFirstArg = [].slice.call(arguments, 1, -1);  // Skip first arg (value) and last (instance), combining the rest
      return this.fn(value, requirementFirstArg);
    }

    if (Array.isArray(value)) {
      if (!this.validateMultiple)
        throw 'Validator `' + this.name + '` does not handle multiple values';
      return this.validateMultiple(...arguments);
    } else {
      let instance = arguments[arguments.length - 1];
      if (this.validateDate && instance._isDateInput()) {
        arguments[0] = Utils.parse.date(arguments[0]);
        if (arguments[0] === null)
          return false;
        return this.validateDate(...arguments);
      }
      if (this.validateNumber) {
        if (isNaN(value))
          return false;
        arguments[0] = parseFloat(arguments[0]);
        return this.validateNumber(...arguments);
      }
      if (this.validateString) {
        return this.validateString(...arguments);
      }
      throw 'Validator `' + this.name + '` only handles multiple values';
    }
  },

  // Parses `requirements` into an array of arguments,
  // according to `this.requirementType`
  parseRequirements: function(requirements, extraOptionReader) {
    if ('string' !== typeof requirements) {
      // Assume requirement already parsed
      // but make sure we return an array
      return Array.isArray(requirements) ? requirements : [requirements];
    }
    var type = this.requirementType;
    if (Array.isArray(type)) {
      var values = convertArrayRequirement(requirements, type.length);
      for (var i = 0; i < values.length; i++)
        values[i] = Utils.parseRequirement(type[i], values[i]);
      return values;
    } else if (\$.isPlainObject(type)) {
      return convertExtraOptionRequirement(type, requirements, extraOptionReader);
    } else {
      return [Utils.parseRequirement(type, requirements)];
    }
  },
  // Defaults:
  requirementType: 'string',

  priority: 2

};

export default Validator;
";
        
        $__internal_47b2b138785005eeecf372ee1427c79585194fa8a9da0208d6efacae9b724296->leave($__internal_47b2b138785005eeecf372ee1427c79585194fa8a9da0208d6efacae9b724296_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/parsley/validator.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("import \$ from 'jquery';
import Utils from './utils';

var convertArrayRequirement = function(string, length) {
  var m = string.match(/^\\s*\\[(.*)\\]\\s*\$/);
  if (!m)
    throw 'Requirement is not an array: \"' + string + '\"';
  var values = m[1].split(',').map(Utils.trimString);
  if (values.length !== length)
    throw 'Requirement has ' + values.length + ' values when ' + length + ' are needed';
  return values;
};

var convertExtraOptionRequirement = function(requirementSpec, string, extraOptionReader) {
  var main = null;
  var extra = {};
  for (var key in requirementSpec) {
    if (key) {
      var value = extraOptionReader(key);
      if ('string' === typeof value)
        value = Utils.parseRequirement(requirementSpec[key], value);
      extra[key] = value;
    } else {
      main = Utils.parseRequirement(requirementSpec[key], string);
    }
  }
  return [main, extra];
};

// A Validator needs to implement the methods `validate` and `parseRequirements`

var Validator = function(spec) {
  \$.extend(true, this, spec);
};

Validator.prototype = {
  // Returns `true` iff the given `value` is valid according the given requirements.
  validate: function(value, requirementFirstArg) {
    if (this.fn) { // Legacy style validator

      if (arguments.length > 3)  // If more args then value, requirement, instance...
        requirementFirstArg = [].slice.call(arguments, 1, -1);  // Skip first arg (value) and last (instance), combining the rest
      return this.fn(value, requirementFirstArg);
    }

    if (Array.isArray(value)) {
      if (!this.validateMultiple)
        throw 'Validator `' + this.name + '` does not handle multiple values';
      return this.validateMultiple(...arguments);
    } else {
      let instance = arguments[arguments.length - 1];
      if (this.validateDate && instance._isDateInput()) {
        arguments[0] = Utils.parse.date(arguments[0]);
        if (arguments[0] === null)
          return false;
        return this.validateDate(...arguments);
      }
      if (this.validateNumber) {
        if (isNaN(value))
          return false;
        arguments[0] = parseFloat(arguments[0]);
        return this.validateNumber(...arguments);
      }
      if (this.validateString) {
        return this.validateString(...arguments);
      }
      throw 'Validator `' + this.name + '` only handles multiple values';
    }
  },

  // Parses `requirements` into an array of arguments,
  // according to `this.requirementType`
  parseRequirements: function(requirements, extraOptionReader) {
    if ('string' !== typeof requirements) {
      // Assume requirement already parsed
      // but make sure we return an array
      return Array.isArray(requirements) ? requirements : [requirements];
    }
    var type = this.requirementType;
    if (Array.isArray(type)) {
      var values = convertArrayRequirement(requirements, type.length);
      for (var i = 0; i < values.length; i++)
        values[i] = Utils.parseRequirement(type[i], values[i]);
      return values;
    } else if (\$.isPlainObject(type)) {
      return convertExtraOptionRequirement(type, requirements, extraOptionReader);
    } else {
      return [Utils.parseRequirement(type, requirements)];
    }
  },
  // Defaults:
  requirementType: 'string',

  priority: 2

};

export default Validator;
", "node_modules/parsleyjs/src/parsley/validator.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/parsley/validator.js");
    }
}
