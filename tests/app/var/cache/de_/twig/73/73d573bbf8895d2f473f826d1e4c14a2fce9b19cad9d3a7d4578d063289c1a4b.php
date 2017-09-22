<?php

/* node_modules/parsleyjs/src/vendor/inputevent.js */
class __TwigTemplate_2d98ae4bb97f10e7506cd73c1f6a907edad24699c692d035f50c0c16b6aa2779 extends Twig_Template
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
        $__internal_83029ade03c142fb2da5fab6f20e02a2ef41d68d6b266d67d568556a735d8e65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83029ade03c142fb2da5fab6f20e02a2ef41d68d6b266d67d568556a735d8e65->enter($__internal_83029ade03c142fb2da5fab6f20e02a2ef41d68d6b266d67d568556a735d8e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/vendor/inputevent.js"));

        // line 1
        echo "/**
 * inputevent - Alleviate browser bugs for input events
 * https://github.com/marcandre/inputevent
 * @version v0.0.3 - (built Thu, Apr 14th 2016, 5:58 pm)
 * @author Marc-Andre Lafortune <github@marc-andre.ca>
 * @license MIT
 */

import \$ from 'jquery';

function InputEvent() {
  let globals = window || global;

  // Slightly odd way construct our object. This way methods are force bound.
  // Used to test for duplicate library.
  Object.assign(this, {

    // For browsers that do not support isTrusted, assumes event is native.
    isNativeEvent: evt => {
      return evt.originalEvent && evt.originalEvent.isTrusted !== false;
    },

    fakeInputEvent: evt => {
      if (this.isNativeEvent(evt)) {
        \$(evt.target).trigger('input');
      }
    },

    misbehaves: evt => {
      if (this.isNativeEvent(evt)) {
        this.behavesOk(evt);
        \$(document)
          .on('change.inputevent', evt.data.selector, this.fakeInputEvent);
        this.fakeInputEvent(evt);
      }
    },

    behavesOk: evt => {
      if (this.isNativeEvent(evt)) {
        \$(document) // Simply unbinds the testing handler
          .off('input.inputevent', evt.data.selector, this.behavesOk)
          .off('change.inputevent', evt.data.selector, this.misbehaves);
      }
    },

    // Bind the testing handlers
    install: () => {
      if (globals.inputEventPatched) {
        return;
      }
      globals.inputEventPatched = '0.0.3';
      for (let selector of ['select', 'input[type=\"checkbox\"]', 'input[type=\"radio\"]', 'input[type=\"file\"]']) {
        \$(document)
          .on('input.inputevent', selector, {selector}, this.behavesOk)
          .on('change.inputevent', selector, {selector}, this.misbehaves);
      }
    },

    uninstall: () => {
      delete globals.inputEventPatched;
      \$(document).off('.inputevent');
    }

  });
};

export default new InputEvent();
";
        
        $__internal_83029ade03c142fb2da5fab6f20e02a2ef41d68d6b266d67d568556a735d8e65->leave($__internal_83029ade03c142fb2da5fab6f20e02a2ef41d68d6b266d67d568556a735d8e65_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/vendor/inputevent.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * inputevent - Alleviate browser bugs for input events
 * https://github.com/marcandre/inputevent
 * @version v0.0.3 - (built Thu, Apr 14th 2016, 5:58 pm)
 * @author Marc-Andre Lafortune <github@marc-andre.ca>
 * @license MIT
 */

import \$ from 'jquery';

function InputEvent() {
  let globals = window || global;

  // Slightly odd way construct our object. This way methods are force bound.
  // Used to test for duplicate library.
  Object.assign(this, {

    // For browsers that do not support isTrusted, assumes event is native.
    isNativeEvent: evt => {
      return evt.originalEvent && evt.originalEvent.isTrusted !== false;
    },

    fakeInputEvent: evt => {
      if (this.isNativeEvent(evt)) {
        \$(evt.target).trigger('input');
      }
    },

    misbehaves: evt => {
      if (this.isNativeEvent(evt)) {
        this.behavesOk(evt);
        \$(document)
          .on('change.inputevent', evt.data.selector, this.fakeInputEvent);
        this.fakeInputEvent(evt);
      }
    },

    behavesOk: evt => {
      if (this.isNativeEvent(evt)) {
        \$(document) // Simply unbinds the testing handler
          .off('input.inputevent', evt.data.selector, this.behavesOk)
          .off('change.inputevent', evt.data.selector, this.misbehaves);
      }
    },

    // Bind the testing handlers
    install: () => {
      if (globals.inputEventPatched) {
        return;
      }
      globals.inputEventPatched = '0.0.3';
      for (let selector of ['select', 'input[type=\"checkbox\"]', 'input[type=\"radio\"]', 'input[type=\"file\"]']) {
        \$(document)
          .on('input.inputevent', selector, {selector}, this.behavesOk)
          .on('change.inputevent', selector, {selector}, this.misbehaves);
      }
    },

    uninstall: () => {
      delete globals.inputEventPatched;
      \$(document).off('.inputevent');
    }

  });
};

export default new InputEvent();
", "node_modules/parsleyjs/src/vendor/inputevent.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/vendor/inputevent.js");
    }
}
