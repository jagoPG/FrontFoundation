<?php

/* node_modules/parsleyjs/src/parsley/base.js */
class __TwigTemplate_0413979e42f768685d18229371e9cd57110d695b0d5b828b7385ffc75b6600cc extends Twig_Template
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
        $__internal_7779675491ed6ea294e4ee194fcfbfdcdb3190bbce9d5221942764a8bd8e511b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7779675491ed6ea294e4ee194fcfbfdcdb3190bbce9d5221942764a8bd8e511b->enter($__internal_7779675491ed6ea294e4ee194fcfbfdcdb3190bbce9d5221942764a8bd8e511b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/parsley/base.js"));

        // line 1
        echo "import \$ from 'jquery';
import Utils from './utils';

var Base = function () {
  this.__id__ = Utils.generateID();
};

Base.prototype = {
  asyncSupport: true, // Deprecated

  _pipeAccordingToValidationResult: function () {
    var pipe = () => {
      var r = \$.Deferred();
      if (true !== this.validationResult)
        r.reject();
      return r.resolve().promise();
    };
    return [pipe, pipe];
  },

  actualizeOptions: function () {
    Utils.attr(this.element, this.options.namespace, this.domOptions);
    if (this.parent && this.parent.actualizeOptions)
      this.parent.actualizeOptions();
    return this;
  },

  _resetOptions: function (initOptions) {
    this.domOptions = Utils.objectCreate(this.parent.options);
    this.options = Utils.objectCreate(this.domOptions);
    // Shallow copy of ownProperties of initOptions:
    for (var i in initOptions) {
      if (initOptions.hasOwnProperty(i))
        this.options[i] = initOptions[i];
    }
    this.actualizeOptions();
  },

  _listeners: null,

  // Register a callback for the given event name
  // Callback is called with context as the first argument and the `this`
  // The context is the current parsley instance, or window.Parsley if global
  // A return value of `false` will interrupt the calls
  on: function (name, fn) {
    this._listeners = this._listeners || {};
    var queue = this._listeners[name] = this._listeners[name] || [];
    queue.push(fn);

    return this;
  },

  // Deprecated. Use `on` instead
  subscribe: function(name, fn) {
    \$.listenTo(this, name.toLowerCase(), fn);
  },

  // Unregister a callback (or all if none is given) for the given event name
  off: function (name, fn) {
    var queue = this._listeners && this._listeners[name];
    if (queue) {
      if (!fn) {
        delete this._listeners[name];
      } else {
        for (var i = queue.length; i--; )
          if (queue[i] === fn)
            queue.splice(i, 1);
      }
    }
    return this;
  },

  // Deprecated. Use `off`
  unsubscribe: function(name, fn) {
    \$.unsubscribeTo(this, name.toLowerCase());
  },

  // Trigger an event of the given name
  // A return value of `false` interrupts the callback chain
  // Returns false if execution was interrupted
  trigger: function (name, target, extraArg) {
    target = target || this;
    var queue = this._listeners && this._listeners[name];
    var result;
    var parentResult;
    if (queue) {
      for (var i = queue.length; i--; ) {
        result = queue[i].call(target, target, extraArg);
        if (result === false) return result;
      }
    }
    if (this.parent) {
      return this.parent.trigger(name, target, extraArg);
    }
    return true;
  },

  asyncIsValid: function (group, force) {
    Utils.warnOnce(\"asyncIsValid is deprecated; please use whenValid instead\");
    return this.whenValid({group, force});
  },

  _findRelated: function () {
    return this.options.multiple ?
      \$(this.parent.element.querySelectorAll(`[\${this.options.namespace}multiple=\"\${this.options.multiple}\"]`))
    : this.\$element;
  }
};

export default Base;
";
        
        $__internal_7779675491ed6ea294e4ee194fcfbfdcdb3190bbce9d5221942764a8bd8e511b->leave($__internal_7779675491ed6ea294e4ee194fcfbfdcdb3190bbce9d5221942764a8bd8e511b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/parsley/base.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("import \$ from 'jquery';
import Utils from './utils';

var Base = function () {
  this.__id__ = Utils.generateID();
};

Base.prototype = {
  asyncSupport: true, // Deprecated

  _pipeAccordingToValidationResult: function () {
    var pipe = () => {
      var r = \$.Deferred();
      if (true !== this.validationResult)
        r.reject();
      return r.resolve().promise();
    };
    return [pipe, pipe];
  },

  actualizeOptions: function () {
    Utils.attr(this.element, this.options.namespace, this.domOptions);
    if (this.parent && this.parent.actualizeOptions)
      this.parent.actualizeOptions();
    return this;
  },

  _resetOptions: function (initOptions) {
    this.domOptions = Utils.objectCreate(this.parent.options);
    this.options = Utils.objectCreate(this.domOptions);
    // Shallow copy of ownProperties of initOptions:
    for (var i in initOptions) {
      if (initOptions.hasOwnProperty(i))
        this.options[i] = initOptions[i];
    }
    this.actualizeOptions();
  },

  _listeners: null,

  // Register a callback for the given event name
  // Callback is called with context as the first argument and the `this`
  // The context is the current parsley instance, or window.Parsley if global
  // A return value of `false` will interrupt the calls
  on: function (name, fn) {
    this._listeners = this._listeners || {};
    var queue = this._listeners[name] = this._listeners[name] || [];
    queue.push(fn);

    return this;
  },

  // Deprecated. Use `on` instead
  subscribe: function(name, fn) {
    \$.listenTo(this, name.toLowerCase(), fn);
  },

  // Unregister a callback (or all if none is given) for the given event name
  off: function (name, fn) {
    var queue = this._listeners && this._listeners[name];
    if (queue) {
      if (!fn) {
        delete this._listeners[name];
      } else {
        for (var i = queue.length; i--; )
          if (queue[i] === fn)
            queue.splice(i, 1);
      }
    }
    return this;
  },

  // Deprecated. Use `off`
  unsubscribe: function(name, fn) {
    \$.unsubscribeTo(this, name.toLowerCase());
  },

  // Trigger an event of the given name
  // A return value of `false` interrupts the callback chain
  // Returns false if execution was interrupted
  trigger: function (name, target, extraArg) {
    target = target || this;
    var queue = this._listeners && this._listeners[name];
    var result;
    var parentResult;
    if (queue) {
      for (var i = queue.length; i--; ) {
        result = queue[i].call(target, target, extraArg);
        if (result === false) return result;
      }
    }
    if (this.parent) {
      return this.parent.trigger(name, target, extraArg);
    }
    return true;
  },

  asyncIsValid: function (group, force) {
    Utils.warnOnce(\"asyncIsValid is deprecated; please use whenValid instead\");
    return this.whenValid({group, force});
  },

  _findRelated: function () {
    return this.options.multiple ?
      \$(this.parent.element.querySelectorAll(`[\${this.options.namespace}multiple=\"\${this.options.multiple}\"]`))
    : this.\$element;
  }
};

export default Base;
", "node_modules/parsleyjs/src/parsley/base.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/parsley/base.js");
    }
}
