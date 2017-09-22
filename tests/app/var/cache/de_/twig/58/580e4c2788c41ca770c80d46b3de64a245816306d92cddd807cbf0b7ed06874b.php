<?php

/* node_modules/parsleyjs/bower_components/bootstrap/js/affix.js */
class __TwigTemplate_188227718ea4a0e5bc1b170bb51521ba429b93f9d953c368c9604aa9f23216a9 extends Twig_Template
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
        $__internal_150efa8aacbb4128e19f84f54aa2da1ff15e466484948b7a2d9fa75f142a5967 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_150efa8aacbb4128e19f84f54aa2da1ff15e466484948b7a2d9fa75f142a5967->enter($__internal_150efa8aacbb4128e19f84f54aa2da1ff15e466484948b7a2d9fa75f142a5967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/bootstrap/js/affix.js"));

        // line 1
        echo "/* ========================================================================
 * Bootstrap: affix.js v3.0.3
 * http://getbootstrap.com/javascript/#affix
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

  // AFFIX CLASS DEFINITION
  // ======================

  var Affix = function (element, options) {
    this.options = \$.extend({}, Affix.DEFAULTS, options)
    this.\$window = \$(window)
      .on('scroll.bs.affix.data-api', \$.proxy(this.checkPosition, this))
      .on('click.bs.affix.data-api',  \$.proxy(this.checkPositionWithEventLoop, this))

    this.\$element = \$(element)
    this.affixed  =
    this.unpin    = null

    this.checkPosition()
  }

  Affix.RESET = 'affix affix-top affix-bottom'

  Affix.DEFAULTS = {
    offset: 0
  }

  Affix.prototype.checkPositionWithEventLoop = function () {
    setTimeout(\$.proxy(this.checkPosition, this), 1)
  }

  Affix.prototype.checkPosition = function () {
    if (!this.\$element.is(':visible')) return

    var scrollHeight = \$(document).height()
    var scrollTop    = this.\$window.scrollTop()
    var position     = this.\$element.offset()
    var offset       = this.options.offset
    var offsetTop    = offset.top
    var offsetBottom = offset.bottom

    if (typeof offset != 'object')         offsetBottom = offsetTop = offset
    if (typeof offsetTop == 'function')    offsetTop    = offset.top()
    if (typeof offsetBottom == 'function') offsetBottom = offset.bottom()

    var affix = this.unpin   != null && (scrollTop + this.unpin <= position.top) ? false :
                offsetBottom != null && (position.top + this.\$element.height() >= scrollHeight - offsetBottom) ? 'bottom' :
                offsetTop    != null && (scrollTop <= offsetTop) ? 'top' : false

    if (this.affixed === affix) return
    if (this.unpin) this.\$element.css('top', '')

    this.affixed = affix
    this.unpin   = affix == 'bottom' ? position.top - scrollTop : null

    this.\$element.removeClass(Affix.RESET).addClass('affix' + (affix ? '-' + affix : ''))

    if (affix == 'bottom') {
      this.\$element.offset({ top: document.body.offsetHeight - offsetBottom - this.\$element.height() })
    }
  }


  // AFFIX PLUGIN DEFINITION
  // =======================

  var old = \$.fn.affix

  \$.fn.affix = function (option) {
    return this.each(function () {
      var \$this   = \$(this)
      var data    = \$this.data('bs.affix')
      var options = typeof option == 'object' && option

      if (!data) \$this.data('bs.affix', (data = new Affix(this, options)))
      if (typeof option == 'string') data[option]()
    })
  }

  \$.fn.affix.Constructor = Affix


  // AFFIX NO CONFLICT
  // =================

  \$.fn.affix.noConflict = function () {
    \$.fn.affix = old
    return this
  }


  // AFFIX DATA-API
  // ==============

  \$(window).on('load', function () {
    \$('[data-spy=\"affix\"]').each(function () {
      var \$spy = \$(this)
      var data = \$spy.data()

      data.offset = data.offset || {}

      if (data.offsetBottom) data.offset.bottom = data.offsetBottom
      if (data.offsetTop)    data.offset.top    = data.offsetTop

      \$spy.affix(data)
    })
  })

}(jQuery);
";
        
        $__internal_150efa8aacbb4128e19f84f54aa2da1ff15e466484948b7a2d9fa75f142a5967->leave($__internal_150efa8aacbb4128e19f84f54aa2da1ff15e466484948b7a2d9fa75f142a5967_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/bootstrap/js/affix.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/* ========================================================================
 * Bootstrap: affix.js v3.0.3
 * http://getbootstrap.com/javascript/#affix
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

  // AFFIX CLASS DEFINITION
  // ======================

  var Affix = function (element, options) {
    this.options = \$.extend({}, Affix.DEFAULTS, options)
    this.\$window = \$(window)
      .on('scroll.bs.affix.data-api', \$.proxy(this.checkPosition, this))
      .on('click.bs.affix.data-api',  \$.proxy(this.checkPositionWithEventLoop, this))

    this.\$element = \$(element)
    this.affixed  =
    this.unpin    = null

    this.checkPosition()
  }

  Affix.RESET = 'affix affix-top affix-bottom'

  Affix.DEFAULTS = {
    offset: 0
  }

  Affix.prototype.checkPositionWithEventLoop = function () {
    setTimeout(\$.proxy(this.checkPosition, this), 1)
  }

  Affix.prototype.checkPosition = function () {
    if (!this.\$element.is(':visible')) return

    var scrollHeight = \$(document).height()
    var scrollTop    = this.\$window.scrollTop()
    var position     = this.\$element.offset()
    var offset       = this.options.offset
    var offsetTop    = offset.top
    var offsetBottom = offset.bottom

    if (typeof offset != 'object')         offsetBottom = offsetTop = offset
    if (typeof offsetTop == 'function')    offsetTop    = offset.top()
    if (typeof offsetBottom == 'function') offsetBottom = offset.bottom()

    var affix = this.unpin   != null && (scrollTop + this.unpin <= position.top) ? false :
                offsetBottom != null && (position.top + this.\$element.height() >= scrollHeight - offsetBottom) ? 'bottom' :
                offsetTop    != null && (scrollTop <= offsetTop) ? 'top' : false

    if (this.affixed === affix) return
    if (this.unpin) this.\$element.css('top', '')

    this.affixed = affix
    this.unpin   = affix == 'bottom' ? position.top - scrollTop : null

    this.\$element.removeClass(Affix.RESET).addClass('affix' + (affix ? '-' + affix : ''))

    if (affix == 'bottom') {
      this.\$element.offset({ top: document.body.offsetHeight - offsetBottom - this.\$element.height() })
    }
  }


  // AFFIX PLUGIN DEFINITION
  // =======================

  var old = \$.fn.affix

  \$.fn.affix = function (option) {
    return this.each(function () {
      var \$this   = \$(this)
      var data    = \$this.data('bs.affix')
      var options = typeof option == 'object' && option

      if (!data) \$this.data('bs.affix', (data = new Affix(this, options)))
      if (typeof option == 'string') data[option]()
    })
  }

  \$.fn.affix.Constructor = Affix


  // AFFIX NO CONFLICT
  // =================

  \$.fn.affix.noConflict = function () {
    \$.fn.affix = old
    return this
  }


  // AFFIX DATA-API
  // ==============

  \$(window).on('load', function () {
    \$('[data-spy=\"affix\"]').each(function () {
      var \$spy = \$(this)
      var data = \$spy.data()

      data.offset = data.offset || {}

      if (data.offsetBottom) data.offset.bottom = data.offsetBottom
      if (data.offsetTop)    data.offset.top    = data.offsetTop

      \$spy.affix(data)
    })
  })

}(jQuery);
", "node_modules/parsleyjs/bower_components/bootstrap/js/affix.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/bootstrap/js/affix.js");
    }
}
