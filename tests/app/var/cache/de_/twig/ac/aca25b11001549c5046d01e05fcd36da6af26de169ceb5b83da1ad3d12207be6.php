<?php

/* node_modules/parsleyjs/bower_components/bootstrap/js/button.js */
class __TwigTemplate_a9107e580c6cb73d74f960959ce9e43145a566e711f1ff44c22139d644d0b686 extends Twig_Template
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
        $__internal_f4c039ed95fe9f1dfc9d6f05304350b4a9bc9033ecbd4e5f2828ab2c84e2dee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4c039ed95fe9f1dfc9d6f05304350b4a9bc9033ecbd4e5f2828ab2c84e2dee6->enter($__internal_f4c039ed95fe9f1dfc9d6f05304350b4a9bc9033ecbd4e5f2828ab2c84e2dee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/bootstrap/js/button.js"));

        // line 1
        echo "/* ========================================================================
 * Bootstrap: button.js v3.0.3
 * http://getbootstrap.com/javascript/#buttons
 * ========================================================================
 * Copyright 2013 Twitter, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the \"License\");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an \"AS IS\" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * ======================================================================== */


+function (\$) { \"use strict\";

  // BUTTON PUBLIC CLASS DEFINITION
  // ==============================

  var Button = function (element, options) {
    this.\$element = \$(element)
    this.options  = \$.extend({}, Button.DEFAULTS, options)
  }

  Button.DEFAULTS = {
    loadingText: 'loading...'
  }

  Button.prototype.setState = function (state) {
    var d    = 'disabled'
    var \$el  = this.\$element
    var val  = \$el.is('input') ? 'val' : 'html'
    var data = \$el.data()

    state = state + 'Text'

    if (!data.resetText) \$el.data('resetText', \$el[val]())

    \$el[val](data[state] || this.options[state])

    // push to event loop to allow forms to submit
    setTimeout(function () {
      state == 'loadingText' ?
        \$el.addClass(d).attr(d, d) :
        \$el.removeClass(d).removeAttr(d);
    }, 0)
  }

  Button.prototype.toggle = function () {
    var \$parent = this.\$element.closest('[data-toggle=\"buttons\"]')
    var changed = true

    if (\$parent.length) {
      var \$input = this.\$element.find('input')
      if (\$input.prop('type') === 'radio') {
        // see if clicking on current one
        if (\$input.prop('checked') && this.\$element.hasClass('active'))
          changed = false
        else
          \$parent.find('.active').removeClass('active')
      }
      if (changed) \$input.prop('checked', !this.\$element.hasClass('active')).trigger('change')
    }

    if (changed) this.\$element.toggleClass('active')
  }


  // BUTTON PLUGIN DEFINITION
  // ========================

  var old = \$.fn.button

  \$.fn.button = function (option) {
    return this.each(function () {
      var \$this   = \$(this)
      var data    = \$this.data('bs.button')
      var options = typeof option == 'object' && option

      if (!data) \$this.data('bs.button', (data = new Button(this, options)))

      if (option == 'toggle') data.toggle()
      else if (option) data.setState(option)
    })
  }

  \$.fn.button.Constructor = Button


  // BUTTON NO CONFLICT
  // ==================

  \$.fn.button.noConflict = function () {
    \$.fn.button = old
    return this
  }


  // BUTTON DATA-API
  // ===============

  \$(document).on('click.bs.button.data-api', '[data-toggle^=button]', function (e) {
    var \$btn = \$(e.target)
    if (!\$btn.hasClass('btn')) \$btn = \$btn.closest('.btn')
    \$btn.button('toggle')
    e.preventDefault()
  })

}(jQuery);
";
        
        $__internal_f4c039ed95fe9f1dfc9d6f05304350b4a9bc9033ecbd4e5f2828ab2c84e2dee6->leave($__internal_f4c039ed95fe9f1dfc9d6f05304350b4a9bc9033ecbd4e5f2828ab2c84e2dee6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/bootstrap/js/button.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/* ========================================================================
 * Bootstrap: button.js v3.0.3
 * http://getbootstrap.com/javascript/#buttons
 * ========================================================================
 * Copyright 2013 Twitter, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the \"License\");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an \"AS IS\" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * ======================================================================== */


+function (\$) { \"use strict\";

  // BUTTON PUBLIC CLASS DEFINITION
  // ==============================

  var Button = function (element, options) {
    this.\$element = \$(element)
    this.options  = \$.extend({}, Button.DEFAULTS, options)
  }

  Button.DEFAULTS = {
    loadingText: 'loading...'
  }

  Button.prototype.setState = function (state) {
    var d    = 'disabled'
    var \$el  = this.\$element
    var val  = \$el.is('input') ? 'val' : 'html'
    var data = \$el.data()

    state = state + 'Text'

    if (!data.resetText) \$el.data('resetText', \$el[val]())

    \$el[val](data[state] || this.options[state])

    // push to event loop to allow forms to submit
    setTimeout(function () {
      state == 'loadingText' ?
        \$el.addClass(d).attr(d, d) :
        \$el.removeClass(d).removeAttr(d);
    }, 0)
  }

  Button.prototype.toggle = function () {
    var \$parent = this.\$element.closest('[data-toggle=\"buttons\"]')
    var changed = true

    if (\$parent.length) {
      var \$input = this.\$element.find('input')
      if (\$input.prop('type') === 'radio') {
        // see if clicking on current one
        if (\$input.prop('checked') && this.\$element.hasClass('active'))
          changed = false
        else
          \$parent.find('.active').removeClass('active')
      }
      if (changed) \$input.prop('checked', !this.\$element.hasClass('active')).trigger('change')
    }

    if (changed) this.\$element.toggleClass('active')
  }


  // BUTTON PLUGIN DEFINITION
  // ========================

  var old = \$.fn.button

  \$.fn.button = function (option) {
    return this.each(function () {
      var \$this   = \$(this)
      var data    = \$this.data('bs.button')
      var options = typeof option == 'object' && option

      if (!data) \$this.data('bs.button', (data = new Button(this, options)))

      if (option == 'toggle') data.toggle()
      else if (option) data.setState(option)
    })
  }

  \$.fn.button.Constructor = Button


  // BUTTON NO CONFLICT
  // ==================

  \$.fn.button.noConflict = function () {
    \$.fn.button = old
    return this
  }


  // BUTTON DATA-API
  // ===============

  \$(document).on('click.bs.button.data-api', '[data-toggle^=button]', function (e) {
    var \$btn = \$(e.target)
    if (!\$btn.hasClass('btn')) \$btn = \$btn.closest('.btn')
    \$btn.button('toggle')
    e.preventDefault()
  })

}(jQuery);
", "node_modules/parsleyjs/bower_components/bootstrap/js/button.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/bootstrap/js/button.js");
    }
}
