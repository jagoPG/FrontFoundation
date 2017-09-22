<?php

/* node_modules/parsleyjs/src/parsley/multiple.js */
class __TwigTemplate_ad2dfd4e70e734b04d36175688acd7f043990c4265f61927d447615cc80b0982 extends Twig_Template
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
        $__internal_3bd58a709f630c62b10ff950144607ae9066867ca5262bed85d5ffad28795bd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bd58a709f630c62b10ff950144607ae9066867ca5262bed85d5ffad28795bd7->enter($__internal_3bd58a709f630c62b10ff950144607ae9066867ca5262bed85d5ffad28795bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/parsley/multiple.js"));

        // line 1
        echo "import \$ from 'jquery';

var Multiple = function () {
  this.__class__ = 'FieldMultiple';
};

Multiple.prototype = {
  // Add new `\$element` sibling for multiple field
  addElement: function (\$element) {
    this.\$elements.push(\$element);

    return this;
  },

  // See `Field.refreshConstraints()`
  refreshConstraints: function () {
    var fieldConstraints;

    this.constraints = [];

    // Select multiple special treatment
    if (this.element.nodeName === 'SELECT') {
      this.actualizeOptions()._bindConstraints();

      return this;
    }

    // Gather all constraints for each input in the multiple group
    for (var i = 0; i < this.\$elements.length; i++) {

      // Check if element have not been dynamically removed since last binding
      if (!\$('html').has(this.\$elements[i]).length) {
        this.\$elements.splice(i, 1);
        continue;
      }

      fieldConstraints = this.\$elements[i].data('FieldMultiple').refreshConstraints().constraints;

      for (var j = 0; j < fieldConstraints.length; j++)
        this.addConstraint(fieldConstraints[j].name, fieldConstraints[j].requirements, fieldConstraints[j].priority, fieldConstraints[j].isDomConstraint);
    }

    return this;
  },

  // See `Field.getValue()`
  getValue: function () {
    // Value could be overriden in DOM
    if ('function' === typeof this.options.value)
      return this.options.value(this);
    else if ('undefined' !== typeof this.options.value)
      return this.options.value;

    // Radio input case
    if (this.element.nodeName === 'INPUT') {
      if (this.element.type === 'radio')
        return this._findRelated().filter(':checked').val() || '';

      // checkbox input case
      if (this.element.type === 'checkbox') {
        var values = [];

        this._findRelated().filter(':checked').each(function () {
          values.push(\$(this).val());
        });

        return values;
      }
    }

    // Select multiple case
    if (this.element.nodeName === 'SELECT' && null === this.\$element.val())
      return [];

    // Default case that should never happen
    return this.\$element.val();
  },

  _init: function () {
    this.\$elements = [this.\$element];

    return this;
  }
};

export default Multiple;
";
        
        $__internal_3bd58a709f630c62b10ff950144607ae9066867ca5262bed85d5ffad28795bd7->leave($__internal_3bd58a709f630c62b10ff950144607ae9066867ca5262bed85d5ffad28795bd7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/parsley/multiple.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("import \$ from 'jquery';

var Multiple = function () {
  this.__class__ = 'FieldMultiple';
};

Multiple.prototype = {
  // Add new `\$element` sibling for multiple field
  addElement: function (\$element) {
    this.\$elements.push(\$element);

    return this;
  },

  // See `Field.refreshConstraints()`
  refreshConstraints: function () {
    var fieldConstraints;

    this.constraints = [];

    // Select multiple special treatment
    if (this.element.nodeName === 'SELECT') {
      this.actualizeOptions()._bindConstraints();

      return this;
    }

    // Gather all constraints for each input in the multiple group
    for (var i = 0; i < this.\$elements.length; i++) {

      // Check if element have not been dynamically removed since last binding
      if (!\$('html').has(this.\$elements[i]).length) {
        this.\$elements.splice(i, 1);
        continue;
      }

      fieldConstraints = this.\$elements[i].data('FieldMultiple').refreshConstraints().constraints;

      for (var j = 0; j < fieldConstraints.length; j++)
        this.addConstraint(fieldConstraints[j].name, fieldConstraints[j].requirements, fieldConstraints[j].priority, fieldConstraints[j].isDomConstraint);
    }

    return this;
  },

  // See `Field.getValue()`
  getValue: function () {
    // Value could be overriden in DOM
    if ('function' === typeof this.options.value)
      return this.options.value(this);
    else if ('undefined' !== typeof this.options.value)
      return this.options.value;

    // Radio input case
    if (this.element.nodeName === 'INPUT') {
      if (this.element.type === 'radio')
        return this._findRelated().filter(':checked').val() || '';

      // checkbox input case
      if (this.element.type === 'checkbox') {
        var values = [];

        this._findRelated().filter(':checked').each(function () {
          values.push(\$(this).val());
        });

        return values;
      }
    }

    // Select multiple case
    if (this.element.nodeName === 'SELECT' && null === this.\$element.val())
      return [];

    // Default case that should never happen
    return this.\$element.val();
  },

  _init: function () {
    this.\$elements = [this.\$element];

    return this;
  }
};

export default Multiple;
", "node_modules/parsleyjs/src/parsley/multiple.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/parsley/multiple.js");
    }
}
