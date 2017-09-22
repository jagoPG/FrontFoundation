<?php

/* node_modules/parsleyjs/src/parsley/pubsub.js */
class __TwigTemplate_0100a8b23c7024796b579d9142082eb269078cc16a82b06e67c2d3360d08e998 extends Twig_Template
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
        $__internal_5efbbf8f69a73a224439e503427e9d7e6c9e16ecae5a32d3043752a7421fb8d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5efbbf8f69a73a224439e503427e9d7e6c9e16ecae5a32d3043752a7421fb8d6->enter($__internal_5efbbf8f69a73a224439e503427e9d7e6c9e16ecae5a32d3043752a7421fb8d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/parsley/pubsub.js"));

        // line 1
        echo "import \$ from 'jquery';
import Field from './field';
import Form from './form';
import Utils from './utils';

var o = \$({});
var deprecated = function () {
  Utils.warnOnce(\"Parsley's pubsub module is deprecated; use the 'on' and 'off' methods on parsley instances or window.Parsley\");
};

// Returns an event handler that calls `fn` with the arguments it expects
function adapt(fn, context) {
  // Store to allow unbinding
  if (!fn.parsleyAdaptedCallback) {
    fn.parsleyAdaptedCallback = function () {
      var args = Array.prototype.slice.call(arguments, 0);
      args.unshift(this);
      fn.apply(context || o, args);
    };
  }
  return fn.parsleyAdaptedCallback;
}

var eventPrefix = 'parsley:';
// Converts 'parsley:form:validate' into 'form:validate'
function eventName(name) {
  if (name.lastIndexOf(eventPrefix, 0) === 0)
    return name.substr(eventPrefix.length);
  return name;
}

// \$.listen is deprecated. Use Parsley.on instead.
\$.listen = function (name, callback) {
  var context;
  deprecated();
  if ('object' === typeof arguments[1] && 'function' === typeof arguments[2]) {
    context = arguments[1];
    callback = arguments[2];
  }

  if ('function' !== typeof callback)
    throw new Error('Wrong parameters');

  window.Parsley.on(eventName(name), adapt(callback, context));
};

\$.listenTo = function (instance, name, fn) {
  deprecated();
  if (!(instance instanceof Field) && !(instance instanceof Form))
    throw new Error('Must give Parsley instance');

  if ('string' !== typeof name || 'function' !== typeof fn)
    throw new Error('Wrong parameters');

  instance.on(eventName(name), adapt(fn));
};

\$.unsubscribe = function (name, fn) {
  deprecated();
  if ('string' !== typeof name || 'function' !== typeof fn)
    throw new Error('Wrong arguments');
  window.Parsley.off(eventName(name), fn.parsleyAdaptedCallback);
};

\$.unsubscribeTo = function (instance, name) {
  deprecated();
  if (!(instance instanceof Field) && !(instance instanceof Form))
    throw new Error('Must give Parsley instance');
  instance.off(eventName(name));
};

\$.unsubscribeAll = function (name) {
  deprecated();
  window.Parsley.off(eventName(name));
  \$('form,input,textarea,select').each(function () {
    var instance = \$(this).data('Parsley');
    if (instance) {
      instance.off(eventName(name));
    }
  });
};

// \$.emit is deprecated. Use jQuery events instead.
\$.emit = function (name, instance) {
  deprecated();
  var instanceGiven = (instance instanceof Field) || (instance instanceof Form);
  var args = Array.prototype.slice.call(arguments, instanceGiven ? 2 : 1);
  args.unshift(eventName(name));
  if (!instanceGiven) {
    instance = window.Parsley;
  }
  instance.trigger(...args);
};

export default {};
";
        
        $__internal_5efbbf8f69a73a224439e503427e9d7e6c9e16ecae5a32d3043752a7421fb8d6->leave($__internal_5efbbf8f69a73a224439e503427e9d7e6c9e16ecae5a32d3043752a7421fb8d6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/parsley/pubsub.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("import \$ from 'jquery';
import Field from './field';
import Form from './form';
import Utils from './utils';

var o = \$({});
var deprecated = function () {
  Utils.warnOnce(\"Parsley's pubsub module is deprecated; use the 'on' and 'off' methods on parsley instances or window.Parsley\");
};

// Returns an event handler that calls `fn` with the arguments it expects
function adapt(fn, context) {
  // Store to allow unbinding
  if (!fn.parsleyAdaptedCallback) {
    fn.parsleyAdaptedCallback = function () {
      var args = Array.prototype.slice.call(arguments, 0);
      args.unshift(this);
      fn.apply(context || o, args);
    };
  }
  return fn.parsleyAdaptedCallback;
}

var eventPrefix = 'parsley:';
// Converts 'parsley:form:validate' into 'form:validate'
function eventName(name) {
  if (name.lastIndexOf(eventPrefix, 0) === 0)
    return name.substr(eventPrefix.length);
  return name;
}

// \$.listen is deprecated. Use Parsley.on instead.
\$.listen = function (name, callback) {
  var context;
  deprecated();
  if ('object' === typeof arguments[1] && 'function' === typeof arguments[2]) {
    context = arguments[1];
    callback = arguments[2];
  }

  if ('function' !== typeof callback)
    throw new Error('Wrong parameters');

  window.Parsley.on(eventName(name), adapt(callback, context));
};

\$.listenTo = function (instance, name, fn) {
  deprecated();
  if (!(instance instanceof Field) && !(instance instanceof Form))
    throw new Error('Must give Parsley instance');

  if ('string' !== typeof name || 'function' !== typeof fn)
    throw new Error('Wrong parameters');

  instance.on(eventName(name), adapt(fn));
};

\$.unsubscribe = function (name, fn) {
  deprecated();
  if ('string' !== typeof name || 'function' !== typeof fn)
    throw new Error('Wrong arguments');
  window.Parsley.off(eventName(name), fn.parsleyAdaptedCallback);
};

\$.unsubscribeTo = function (instance, name) {
  deprecated();
  if (!(instance instanceof Field) && !(instance instanceof Form))
    throw new Error('Must give Parsley instance');
  instance.off(eventName(name));
};

\$.unsubscribeAll = function (name) {
  deprecated();
  window.Parsley.off(eventName(name));
  \$('form,input,textarea,select').each(function () {
    var instance = \$(this).data('Parsley');
    if (instance) {
      instance.off(eventName(name));
    }
  });
};

// \$.emit is deprecated. Use jQuery events instead.
\$.emit = function (name, instance) {
  deprecated();
  var instanceGiven = (instance instanceof Field) || (instance instanceof Form);
  var args = Array.prototype.slice.call(arguments, instanceGiven ? 2 : 1);
  args.unshift(eventName(name));
  if (!instanceGiven) {
    instance = window.Parsley;
  }
  instance.trigger(...args);
};

export default {};
", "node_modules/parsleyjs/src/parsley/pubsub.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/parsley/pubsub.js");
    }
}
