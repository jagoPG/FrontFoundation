<?php

/* node_modules/parsleyjs/bower_components/bootstrap/js/transition.js */
class __TwigTemplate_527769ead9c7cc61c6d045f8c8cec0cf91de3e6fb3de7177df96253dbb1a3da0 extends Twig_Template
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
        $__internal_1d4119c1721a67fed671d23816dcb3e0ad858f8c415be4d8fedbce149935adde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d4119c1721a67fed671d23816dcb3e0ad858f8c415be4d8fedbce149935adde->enter($__internal_1d4119c1721a67fed671d23816dcb3e0ad858f8c415be4d8fedbce149935adde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/bootstrap/js/transition.js"));

        // line 1
        echo "/* ========================================================================
 * Bootstrap: transition.js v3.0.3
 * http://getbootstrap.com/javascript/#transitions
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

  // CSS TRANSITION SUPPORT (Shoutout: http://www.modernizr.com/)
  // ============================================================

  function transitionEnd() {
    var el = document.createElement('bootstrap')

    var transEndEventNames = {
      'WebkitTransition' : 'webkitTransitionEnd'
    , 'MozTransition'    : 'transitionend'
    , 'OTransition'      : 'oTransitionEnd otransitionend'
    , 'transition'       : 'transitionend'
    }

    for (var name in transEndEventNames) {
      if (el.style[name] !== undefined) {
        return { end: transEndEventNames[name] }
      }
    }
  }

  // http://blog.alexmaccaw.com/css-transitions
  \$.fn.emulateTransitionEnd = function (duration) {
    var called = false, \$el = this
    \$(this).one(\$.support.transition.end, function () { called = true })
    var callback = function () { if (!called) \$(\$el).trigger(\$.support.transition.end) }
    setTimeout(callback, duration)
    return this
  }

  \$(function () {
    \$.support.transition = transitionEnd()
  })

}(jQuery);
";
        
        $__internal_1d4119c1721a67fed671d23816dcb3e0ad858f8c415be4d8fedbce149935adde->leave($__internal_1d4119c1721a67fed671d23816dcb3e0ad858f8c415be4d8fedbce149935adde_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/bootstrap/js/transition.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/* ========================================================================
 * Bootstrap: transition.js v3.0.3
 * http://getbootstrap.com/javascript/#transitions
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

  // CSS TRANSITION SUPPORT (Shoutout: http://www.modernizr.com/)
  // ============================================================

  function transitionEnd() {
    var el = document.createElement('bootstrap')

    var transEndEventNames = {
      'WebkitTransition' : 'webkitTransitionEnd'
    , 'MozTransition'    : 'transitionend'
    , 'OTransition'      : 'oTransitionEnd otransitionend'
    , 'transition'       : 'transitionend'
    }

    for (var name in transEndEventNames) {
      if (el.style[name] !== undefined) {
        return { end: transEndEventNames[name] }
      }
    }
  }

  // http://blog.alexmaccaw.com/css-transitions
  \$.fn.emulateTransitionEnd = function (duration) {
    var called = false, \$el = this
    \$(this).one(\$.support.transition.end, function () { called = true })
    var callback = function () { if (!called) \$(\$el).trigger(\$.support.transition.end) }
    setTimeout(callback, duration)
    return this
  }

  \$(function () {
    \$.support.transition = transitionEnd()
  })

}(jQuery);
", "node_modules/parsleyjs/bower_components/bootstrap/js/transition.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/bootstrap/js/transition.js");
    }
}
