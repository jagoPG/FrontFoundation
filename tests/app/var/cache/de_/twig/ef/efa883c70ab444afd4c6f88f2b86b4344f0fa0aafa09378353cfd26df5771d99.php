<?php

/* node_modules/parsleyjs/bower_components/bootstrap/js/alert.js */
class __TwigTemplate_49e3ce4d694ed5f0b005ae3aa35984a1f9b1e03487145a42c0b1b53a76e96d19 extends Twig_Template
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
        $__internal_02ed996d641105c62fc93577ef63dcc737ef88fc3590ad46b7f1993f08626aef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02ed996d641105c62fc93577ef63dcc737ef88fc3590ad46b7f1993f08626aef->enter($__internal_02ed996d641105c62fc93577ef63dcc737ef88fc3590ad46b7f1993f08626aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/bootstrap/js/alert.js"));

        // line 1
        echo "/* ========================================================================
 * Bootstrap: alert.js v3.0.3
 * http://getbootstrap.com/javascript/#alerts
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

  // ALERT CLASS DEFINITION
  // ======================

  var dismiss = '[data-dismiss=\"alert\"]'
  var Alert   = function (el) {
    \$(el).on('click', dismiss, this.close)
  }

  Alert.prototype.close = function (e) {
    var \$this    = \$(this)
    var selector = \$this.attr('data-target')

    if (!selector) {
      selector = \$this.attr('href')
      selector = selector && selector.replace(/.*(?=#[^\\s]*\$)/, '') // strip for ie7
    }

    var \$parent = \$(selector)

    if (e) e.preventDefault()

    if (!\$parent.length) {
      \$parent = \$this.hasClass('alert') ? \$this : \$this.parent()
    }

    \$parent.trigger(e = \$.Event('close.bs.alert'))

    if (e.isDefaultPrevented()) return

    \$parent.removeClass('in')

    function removeElement() {
      \$parent.trigger('closed.bs.alert').remove()
    }

    \$.support.transition && \$parent.hasClass('fade') ?
      \$parent
        .one(\$.support.transition.end, removeElement)
        .emulateTransitionEnd(150) :
      removeElement()
  }


  // ALERT PLUGIN DEFINITION
  // =======================

  var old = \$.fn.alert

  \$.fn.alert = function (option) {
    return this.each(function () {
      var \$this = \$(this)
      var data  = \$this.data('bs.alert')

      if (!data) \$this.data('bs.alert', (data = new Alert(this)))
      if (typeof option == 'string') data[option].call(\$this)
    })
  }

  \$.fn.alert.Constructor = Alert


  // ALERT NO CONFLICT
  // =================

  \$.fn.alert.noConflict = function () {
    \$.fn.alert = old
    return this
  }


  // ALERT DATA-API
  // ==============

  \$(document).on('click.bs.alert.data-api', dismiss, Alert.prototype.close)

}(jQuery);
";
        
        $__internal_02ed996d641105c62fc93577ef63dcc737ef88fc3590ad46b7f1993f08626aef->leave($__internal_02ed996d641105c62fc93577ef63dcc737ef88fc3590ad46b7f1993f08626aef_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/bootstrap/js/alert.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/* ========================================================================
 * Bootstrap: alert.js v3.0.3
 * http://getbootstrap.com/javascript/#alerts
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

  // ALERT CLASS DEFINITION
  // ======================

  var dismiss = '[data-dismiss=\"alert\"]'
  var Alert   = function (el) {
    \$(el).on('click', dismiss, this.close)
  }

  Alert.prototype.close = function (e) {
    var \$this    = \$(this)
    var selector = \$this.attr('data-target')

    if (!selector) {
      selector = \$this.attr('href')
      selector = selector && selector.replace(/.*(?=#[^\\s]*\$)/, '') // strip for ie7
    }

    var \$parent = \$(selector)

    if (e) e.preventDefault()

    if (!\$parent.length) {
      \$parent = \$this.hasClass('alert') ? \$this : \$this.parent()
    }

    \$parent.trigger(e = \$.Event('close.bs.alert'))

    if (e.isDefaultPrevented()) return

    \$parent.removeClass('in')

    function removeElement() {
      \$parent.trigger('closed.bs.alert').remove()
    }

    \$.support.transition && \$parent.hasClass('fade') ?
      \$parent
        .one(\$.support.transition.end, removeElement)
        .emulateTransitionEnd(150) :
      removeElement()
  }


  // ALERT PLUGIN DEFINITION
  // =======================

  var old = \$.fn.alert

  \$.fn.alert = function (option) {
    return this.each(function () {
      var \$this = \$(this)
      var data  = \$this.data('bs.alert')

      if (!data) \$this.data('bs.alert', (data = new Alert(this)))
      if (typeof option == 'string') data[option].call(\$this)
    })
  }

  \$.fn.alert.Constructor = Alert


  // ALERT NO CONFLICT
  // =================

  \$.fn.alert.noConflict = function () {
    \$.fn.alert = old
    return this
  }


  // ALERT DATA-API
  // ==============

  \$(document).on('click.bs.alert.data-api', dismiss, Alert.prototype.close)

}(jQuery);
", "node_modules/parsleyjs/bower_components/bootstrap/js/alert.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/bootstrap/js/alert.js");
    }
}
