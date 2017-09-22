<?php

/* node_modules/parsleyjs/bower_components/bootstrap/js/tab.js */
class __TwigTemplate_ad25b786fb4ac98df9fbd3061a9b4d7f1503926062c3d317fb2296b1ed67e1d4 extends Twig_Template
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
        $__internal_2306e6b3864fc6ccfbc43a222da4a2392ab8f222c7ece614fe5a129c9ada03c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2306e6b3864fc6ccfbc43a222da4a2392ab8f222c7ece614fe5a129c9ada03c2->enter($__internal_2306e6b3864fc6ccfbc43a222da4a2392ab8f222c7ece614fe5a129c9ada03c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/bootstrap/js/tab.js"));

        // line 1
        echo "/* ========================================================================
 * Bootstrap: tab.js v3.0.3
 * http://getbootstrap.com/javascript/#tabs
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

  // TAB CLASS DEFINITION
  // ====================

  var Tab = function (element) {
    this.element = \$(element)
  }

  Tab.prototype.show = function () {
    var \$this    = this.element
    var \$ul      = \$this.closest('ul:not(.dropdown-menu)')
    var selector = \$this.data('target')

    if (!selector) {
      selector = \$this.attr('href')
      selector = selector && selector.replace(/.*(?=#[^\\s]*\$)/, '') //strip for ie7
    }

    if (\$this.parent('li').hasClass('active')) return

    var previous = \$ul.find('.active:last a')[0]
    var e        = \$.Event('show.bs.tab', {
      relatedTarget: previous
    })

    \$this.trigger(e)

    if (e.isDefaultPrevented()) return

    var \$target = \$(selector)

    this.activate(\$this.parent('li'), \$ul)
    this.activate(\$target, \$target.parent(), function () {
      \$this.trigger({
        type: 'shown.bs.tab'
      , relatedTarget: previous
      })
    })
  }

  Tab.prototype.activate = function (element, container, callback) {
    var \$active    = container.find('> .active')
    var transition = callback
      && \$.support.transition
      && \$active.hasClass('fade')

    function next() {
      \$active
        .removeClass('active')
        .find('> .dropdown-menu > .active')
        .removeClass('active')

      element.addClass('active')

      if (transition) {
        element[0].offsetWidth // reflow for transition
        element.addClass('in')
      } else {
        element.removeClass('fade')
      }

      if (element.parent('.dropdown-menu')) {
        element.closest('li.dropdown').addClass('active')
      }

      callback && callback()
    }

    transition ?
      \$active
        .one(\$.support.transition.end, next)
        .emulateTransitionEnd(150) :
      next()

    \$active.removeClass('in')
  }


  // TAB PLUGIN DEFINITION
  // =====================

  var old = \$.fn.tab

  \$.fn.tab = function ( option ) {
    return this.each(function () {
      var \$this = \$(this)
      var data  = \$this.data('bs.tab')

      if (!data) \$this.data('bs.tab', (data = new Tab(this)))
      if (typeof option == 'string') data[option]()
    })
  }

  \$.fn.tab.Constructor = Tab


  // TAB NO CONFLICT
  // ===============

  \$.fn.tab.noConflict = function () {
    \$.fn.tab = old
    return this
  }


  // TAB DATA-API
  // ============

  \$(document).on('click.bs.tab.data-api', '[data-toggle=\"tab\"], [data-toggle=\"pill\"]', function (e) {
    e.preventDefault()
    \$(this).tab('show')
  })

}(jQuery);
";
        
        $__internal_2306e6b3864fc6ccfbc43a222da4a2392ab8f222c7ece614fe5a129c9ada03c2->leave($__internal_2306e6b3864fc6ccfbc43a222da4a2392ab8f222c7ece614fe5a129c9ada03c2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/bootstrap/js/tab.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/* ========================================================================
 * Bootstrap: tab.js v3.0.3
 * http://getbootstrap.com/javascript/#tabs
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

  // TAB CLASS DEFINITION
  // ====================

  var Tab = function (element) {
    this.element = \$(element)
  }

  Tab.prototype.show = function () {
    var \$this    = this.element
    var \$ul      = \$this.closest('ul:not(.dropdown-menu)')
    var selector = \$this.data('target')

    if (!selector) {
      selector = \$this.attr('href')
      selector = selector && selector.replace(/.*(?=#[^\\s]*\$)/, '') //strip for ie7
    }

    if (\$this.parent('li').hasClass('active')) return

    var previous = \$ul.find('.active:last a')[0]
    var e        = \$.Event('show.bs.tab', {
      relatedTarget: previous
    })

    \$this.trigger(e)

    if (e.isDefaultPrevented()) return

    var \$target = \$(selector)

    this.activate(\$this.parent('li'), \$ul)
    this.activate(\$target, \$target.parent(), function () {
      \$this.trigger({
        type: 'shown.bs.tab'
      , relatedTarget: previous
      })
    })
  }

  Tab.prototype.activate = function (element, container, callback) {
    var \$active    = container.find('> .active')
    var transition = callback
      && \$.support.transition
      && \$active.hasClass('fade')

    function next() {
      \$active
        .removeClass('active')
        .find('> .dropdown-menu > .active')
        .removeClass('active')

      element.addClass('active')

      if (transition) {
        element[0].offsetWidth // reflow for transition
        element.addClass('in')
      } else {
        element.removeClass('fade')
      }

      if (element.parent('.dropdown-menu')) {
        element.closest('li.dropdown').addClass('active')
      }

      callback && callback()
    }

    transition ?
      \$active
        .one(\$.support.transition.end, next)
        .emulateTransitionEnd(150) :
      next()

    \$active.removeClass('in')
  }


  // TAB PLUGIN DEFINITION
  // =====================

  var old = \$.fn.tab

  \$.fn.tab = function ( option ) {
    return this.each(function () {
      var \$this = \$(this)
      var data  = \$this.data('bs.tab')

      if (!data) \$this.data('bs.tab', (data = new Tab(this)))
      if (typeof option == 'string') data[option]()
    })
  }

  \$.fn.tab.Constructor = Tab


  // TAB NO CONFLICT
  // ===============

  \$.fn.tab.noConflict = function () {
    \$.fn.tab = old
    return this
  }


  // TAB DATA-API
  // ============

  \$(document).on('click.bs.tab.data-api', '[data-toggle=\"tab\"], [data-toggle=\"pill\"]', function (e) {
    e.preventDefault()
    \$(this).tab('show')
  })

}(jQuery);
", "node_modules/parsleyjs/bower_components/bootstrap/js/tab.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/bootstrap/js/tab.js");
    }
}
