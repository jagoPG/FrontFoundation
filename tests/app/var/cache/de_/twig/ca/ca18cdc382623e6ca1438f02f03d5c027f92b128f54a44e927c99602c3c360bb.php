<?php

/* node_modules/parsleyjs/src/extra/plugin/bind.js */
class __TwigTemplate_52e759deb88a8ae166fc058f1dd7789ffa8c4305d5551324ab54e3f0c552a6f7 extends Twig_Template
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
        $__internal_2b75bf090a9f4c751b3c5ce52714303ba7cf31591124649d717f4c48326c4baf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b75bf090a9f4c751b3c5ce52714303ba7cf31591124649d717f4c48326c4baf->enter($__internal_2b75bf090a9f4c751b3c5ce52714303ba7cf31591124649d717f4c48326c4baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/extra/plugin/bind.js"));

        // line 1
        echo "// This plugin replace Parsley default form behavior that auto bind its fields children
// With this plugin you must register in constructor your form's fields and their constraints
// You have this way a total javascript control over your form validation, and nothing needed in DOM

import jQuery from 'jquery'; // Remove this line in ES3

(function (\$) {

  window.ParsleyConfig = \$.extend(true, window.ParsleyConfig, {autoBind: false});
  window.ParsleyExtend = window.ParsleyExtend || {};

  window.ParsleyExtend = Object.assign(window.ParsleyExtend, {
    // { '#selector' : { constraintName1: value, constraintName2: value2 }, #selector2: { constraintName: value } }
    // { '#selector' : { constraintName1: { requirements: value, priority: value }, constraintName2: value2 } }
    _bindFields: function () {
      window.Parsley.Utils.warnOnce(\"Parsley's extra/bind is deprecated. Please see https://github.com/guillaumepotier/Parsley.js/issues/1180\");
      if ('Form' !== this.__class__)
        throw new Error('`_bindFields` must be called on a form instance');

      if ('undefined' === typeof this.options.fields)
        throw new Error('bind.js plugin needs to have Parsley instantiated with fields');

      var field;
      this.fields = [];

      for (var selector in this.options.fields) {
        if (0 === \$(selector).length)
          continue;

        field = \$(selector).parsley();

        for (var name in this.options.fields[selector]) {
          if ('object' === typeof this.options.fields[selector][name] && !(this.options.fields[selector][name] instanceof Array))
            field.addConstraint(name.toLowerCase(), this.options.fields[selector][name].requirements, this.options.fields[selector][name].priority || 32);
          else
            field.addConstraint(name.toLowerCase(), this.options.fields[selector][name]);
        }
      }

      this.fields.push(field);

      return this;
    },

    // Do nothing
    _bindConstraints: function () {
      return this;
    }
  });

})(jQuery);
";
        
        $__internal_2b75bf090a9f4c751b3c5ce52714303ba7cf31591124649d717f4c48326c4baf->leave($__internal_2b75bf090a9f4c751b3c5ce52714303ba7cf31591124649d717f4c48326c4baf_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/extra/plugin/bind.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// This plugin replace Parsley default form behavior that auto bind its fields children
// With this plugin you must register in constructor your form's fields and their constraints
// You have this way a total javascript control over your form validation, and nothing needed in DOM

import jQuery from 'jquery'; // Remove this line in ES3

(function (\$) {

  window.ParsleyConfig = \$.extend(true, window.ParsleyConfig, {autoBind: false});
  window.ParsleyExtend = window.ParsleyExtend || {};

  window.ParsleyExtend = Object.assign(window.ParsleyExtend, {
    // { '#selector' : { constraintName1: value, constraintName2: value2 }, #selector2: { constraintName: value } }
    // { '#selector' : { constraintName1: { requirements: value, priority: value }, constraintName2: value2 } }
    _bindFields: function () {
      window.Parsley.Utils.warnOnce(\"Parsley's extra/bind is deprecated. Please see https://github.com/guillaumepotier/Parsley.js/issues/1180\");
      if ('Form' !== this.__class__)
        throw new Error('`_bindFields` must be called on a form instance');

      if ('undefined' === typeof this.options.fields)
        throw new Error('bind.js plugin needs to have Parsley instantiated with fields');

      var field;
      this.fields = [];

      for (var selector in this.options.fields) {
        if (0 === \$(selector).length)
          continue;

        field = \$(selector).parsley();

        for (var name in this.options.fields[selector]) {
          if ('object' === typeof this.options.fields[selector][name] && !(this.options.fields[selector][name] instanceof Array))
            field.addConstraint(name.toLowerCase(), this.options.fields[selector][name].requirements, this.options.fields[selector][name].priority || 32);
          else
            field.addConstraint(name.toLowerCase(), this.options.fields[selector][name]);
        }
      }

      this.fields.push(field);

      return this;
    },

    // Do nothing
    _bindConstraints: function () {
      return this;
    }
  });

})(jQuery);
", "node_modules/parsleyjs/src/extra/plugin/bind.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/extra/plugin/bind.js");
    }
}
