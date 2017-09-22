<?php

/* node_modules/parsleyjs/bower_components/bootstrap/js/scrollspy.js */
class __TwigTemplate_0f221e8cb9528b97a10ae61fae7e6ecf8ea6aae53165aea242e5d6d3c61a2875 extends Twig_Template
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
        $__internal_79c13eb4593b8652db9dbb651c4df9503d9e821a41c224d286852efb36430d14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79c13eb4593b8652db9dbb651c4df9503d9e821a41c224d286852efb36430d14->enter($__internal_79c13eb4593b8652db9dbb651c4df9503d9e821a41c224d286852efb36430d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/bootstrap/js/scrollspy.js"));

        // line 1
        echo "/* ========================================================================
 * Bootstrap: scrollspy.js v3.0.3
 * http://getbootstrap.com/javascript/#scrollspy
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

  // SCROLLSPY CLASS DEFINITION
  // ==========================

  function ScrollSpy(element, options) {
    var href
    var process  = \$.proxy(this.process, this)

    this.\$element       = \$(element).is('body') ? \$(window) : \$(element)
    this.\$body          = \$('body')
    this.\$scrollElement = this.\$element.on('scroll.bs.scroll-spy.data-api', process)
    this.options        = \$.extend({}, ScrollSpy.DEFAULTS, options)
    this.selector       = (this.options.target
      || ((href = \$(element).attr('href')) && href.replace(/.*(?=#[^\\s]+\$)/, '')) //strip for ie7
      || '') + ' .nav li > a'
    this.offsets        = \$([])
    this.targets        = \$([])
    this.activeTarget   = null

    this.refresh()
    this.process()
  }

  ScrollSpy.DEFAULTS = {
    offset: 10
  }

  ScrollSpy.prototype.refresh = function () {
    var offsetMethod = this.\$element[0] == window ? 'offset' : 'position'

    this.offsets = \$([])
    this.targets = \$([])

    var self     = this
    var \$targets = this.\$body
      .find(this.selector)
      .map(function () {
        var \$el   = \$(this)
        var href  = \$el.data('target') || \$el.attr('href')
        var \$href = /^#\\w/.test(href) && \$(href)

        return (\$href
          && \$href.length
          && [[ \$href[offsetMethod]().top + (!\$.isWindow(self.\$scrollElement.get(0)) && self.\$scrollElement.scrollTop()), href ]]) || null
      })
      .sort(function (a, b) { return a[0] - b[0] })
      .each(function () {
        self.offsets.push(this[0])
        self.targets.push(this[1])
      })
  }

  ScrollSpy.prototype.process = function () {
    var scrollTop    = this.\$scrollElement.scrollTop() + this.options.offset
    var scrollHeight = this.\$scrollElement[0].scrollHeight || this.\$body[0].scrollHeight
    var maxScroll    = scrollHeight - this.\$scrollElement.height()
    var offsets      = this.offsets
    var targets      = this.targets
    var activeTarget = this.activeTarget
    var i

    if (scrollTop >= maxScroll) {
      return activeTarget != (i = targets.last()[0]) && this.activate(i)
    }

    for (i = offsets.length; i--;) {
      activeTarget != targets[i]
        && scrollTop >= offsets[i]
        && (!offsets[i + 1] || scrollTop <= offsets[i + 1])
        && this.activate( targets[i] )
    }
  }

  ScrollSpy.prototype.activate = function (target) {
    this.activeTarget = target

    \$(this.selector)
      .parents('.active')
      .removeClass('active')

    var selector = this.selector
      + '[data-target=\"' + target + '\"],'
      + this.selector + '[href=\"' + target + '\"]'

    var active = \$(selector)
      .parents('li')
      .addClass('active')

    if (active.parent('.dropdown-menu').length)  {
      active = active
        .closest('li.dropdown')
        .addClass('active')
    }

    active.trigger('activate.bs.scrollspy')
  }


  // SCROLLSPY PLUGIN DEFINITION
  // ===========================

  var old = \$.fn.scrollspy

  \$.fn.scrollspy = function (option) {
    return this.each(function () {
      var \$this   = \$(this)
      var data    = \$this.data('bs.scrollspy')
      var options = typeof option == 'object' && option

      if (!data) \$this.data('bs.scrollspy', (data = new ScrollSpy(this, options)))
      if (typeof option == 'string') data[option]()
    })
  }

  \$.fn.scrollspy.Constructor = ScrollSpy


  // SCROLLSPY NO CONFLICT
  // =====================

  \$.fn.scrollspy.noConflict = function () {
    \$.fn.scrollspy = old
    return this
  }


  // SCROLLSPY DATA-API
  // ==================

  \$(window).on('load', function () {
    \$('[data-spy=\"scroll\"]').each(function () {
      var \$spy = \$(this)
      \$spy.scrollspy(\$spy.data())
    })
  })

}(jQuery);
";
        
        $__internal_79c13eb4593b8652db9dbb651c4df9503d9e821a41c224d286852efb36430d14->leave($__internal_79c13eb4593b8652db9dbb651c4df9503d9e821a41c224d286852efb36430d14_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/bootstrap/js/scrollspy.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/* ========================================================================
 * Bootstrap: scrollspy.js v3.0.3
 * http://getbootstrap.com/javascript/#scrollspy
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

  // SCROLLSPY CLASS DEFINITION
  // ==========================

  function ScrollSpy(element, options) {
    var href
    var process  = \$.proxy(this.process, this)

    this.\$element       = \$(element).is('body') ? \$(window) : \$(element)
    this.\$body          = \$('body')
    this.\$scrollElement = this.\$element.on('scroll.bs.scroll-spy.data-api', process)
    this.options        = \$.extend({}, ScrollSpy.DEFAULTS, options)
    this.selector       = (this.options.target
      || ((href = \$(element).attr('href')) && href.replace(/.*(?=#[^\\s]+\$)/, '')) //strip for ie7
      || '') + ' .nav li > a'
    this.offsets        = \$([])
    this.targets        = \$([])
    this.activeTarget   = null

    this.refresh()
    this.process()
  }

  ScrollSpy.DEFAULTS = {
    offset: 10
  }

  ScrollSpy.prototype.refresh = function () {
    var offsetMethod = this.\$element[0] == window ? 'offset' : 'position'

    this.offsets = \$([])
    this.targets = \$([])

    var self     = this
    var \$targets = this.\$body
      .find(this.selector)
      .map(function () {
        var \$el   = \$(this)
        var href  = \$el.data('target') || \$el.attr('href')
        var \$href = /^#\\w/.test(href) && \$(href)

        return (\$href
          && \$href.length
          && [[ \$href[offsetMethod]().top + (!\$.isWindow(self.\$scrollElement.get(0)) && self.\$scrollElement.scrollTop()), href ]]) || null
      })
      .sort(function (a, b) { return a[0] - b[0] })
      .each(function () {
        self.offsets.push(this[0])
        self.targets.push(this[1])
      })
  }

  ScrollSpy.prototype.process = function () {
    var scrollTop    = this.\$scrollElement.scrollTop() + this.options.offset
    var scrollHeight = this.\$scrollElement[0].scrollHeight || this.\$body[0].scrollHeight
    var maxScroll    = scrollHeight - this.\$scrollElement.height()
    var offsets      = this.offsets
    var targets      = this.targets
    var activeTarget = this.activeTarget
    var i

    if (scrollTop >= maxScroll) {
      return activeTarget != (i = targets.last()[0]) && this.activate(i)
    }

    for (i = offsets.length; i--;) {
      activeTarget != targets[i]
        && scrollTop >= offsets[i]
        && (!offsets[i + 1] || scrollTop <= offsets[i + 1])
        && this.activate( targets[i] )
    }
  }

  ScrollSpy.prototype.activate = function (target) {
    this.activeTarget = target

    \$(this.selector)
      .parents('.active')
      .removeClass('active')

    var selector = this.selector
      + '[data-target=\"' + target + '\"],'
      + this.selector + '[href=\"' + target + '\"]'

    var active = \$(selector)
      .parents('li')
      .addClass('active')

    if (active.parent('.dropdown-menu').length)  {
      active = active
        .closest('li.dropdown')
        .addClass('active')
    }

    active.trigger('activate.bs.scrollspy')
  }


  // SCROLLSPY PLUGIN DEFINITION
  // ===========================

  var old = \$.fn.scrollspy

  \$.fn.scrollspy = function (option) {
    return this.each(function () {
      var \$this   = \$(this)
      var data    = \$this.data('bs.scrollspy')
      var options = typeof option == 'object' && option

      if (!data) \$this.data('bs.scrollspy', (data = new ScrollSpy(this, options)))
      if (typeof option == 'string') data[option]()
    })
  }

  \$.fn.scrollspy.Constructor = ScrollSpy


  // SCROLLSPY NO CONFLICT
  // =====================

  \$.fn.scrollspy.noConflict = function () {
    \$.fn.scrollspy = old
    return this
  }


  // SCROLLSPY DATA-API
  // ==================

  \$(window).on('load', function () {
    \$('[data-spy=\"scroll\"]').each(function () {
      var \$spy = \$(this)
      \$spy.scrollspy(\$spy.data())
    })
  })

}(jQuery);
", "node_modules/parsleyjs/bower_components/bootstrap/js/scrollspy.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/bootstrap/js/scrollspy.js");
    }
}
