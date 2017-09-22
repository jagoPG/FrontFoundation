<?php

/* node_modules/parsleyjs/bower_components/bootstrap/js/popover.js */
class __TwigTemplate_28d6e184ff3d2b83586ded149ed5373093c95a33461e0c8cf34db4cbc7d0fcaf extends Twig_Template
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
        $__internal_eb0319a8d8dd90cf52c003b58eb83d660b2173fb4a75aefab8fe2e2be2fe2d00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb0319a8d8dd90cf52c003b58eb83d660b2173fb4a75aefab8fe2e2be2fe2d00->enter($__internal_eb0319a8d8dd90cf52c003b58eb83d660b2173fb4a75aefab8fe2e2be2fe2d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/bootstrap/js/popover.js"));

        // line 1
        echo "/* ========================================================================
 * Bootstrap: popover.js v3.0.3
 * http://getbootstrap.com/javascript/#popovers
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

  // POPOVER PUBLIC CLASS DEFINITION
  // ===============================

  var Popover = function (element, options) {
    this.init('popover', element, options)
  }

  if (!\$.fn.tooltip) throw new Error('Popover requires tooltip.js')

  Popover.DEFAULTS = \$.extend({} , \$.fn.tooltip.Constructor.DEFAULTS, {
    placement: 'right'
  , trigger: 'click'
  , content: ''
  , template: '<div class=\"popover\"><div class=\"arrow\"></div><h3 class=\"popover-title\"></h3><div class=\"popover-content\"></div></div>'
  })


  // NOTE: POPOVER EXTENDS tooltip.js
  // ================================

  Popover.prototype = \$.extend({}, \$.fn.tooltip.Constructor.prototype)

  Popover.prototype.constructor = Popover

  Popover.prototype.getDefaults = function () {
    return Popover.DEFAULTS
  }

  Popover.prototype.setContent = function () {
    var \$tip    = this.tip()
    var title   = this.getTitle()
    var content = this.getContent()

    \$tip.find('.popover-title')[this.options.html ? 'html' : 'text'](title)
    \$tip.find('.popover-content')[this.options.html ? 'html' : 'text'](content)

    \$tip.removeClass('fade top bottom left right in')

    // IE8 doesn't accept hiding via the `:empty` pseudo selector, we have to do
    // this manually by checking the contents.
    if (!\$tip.find('.popover-title').html()) \$tip.find('.popover-title').hide()
  }

  Popover.prototype.hasContent = function () {
    return this.getTitle() || this.getContent()
  }

  Popover.prototype.getContent = function () {
    var \$e = this.\$element
    var o  = this.options

    return \$e.attr('data-content')
      || (typeof o.content == 'function' ?
            o.content.call(\$e[0]) :
            o.content)
  }

  Popover.prototype.arrow = function () {
    return this.\$arrow = this.\$arrow || this.tip().find('.arrow')
  }

  Popover.prototype.tip = function () {
    if (!this.\$tip) this.\$tip = \$(this.options.template)
    return this.\$tip
  }


  // POPOVER PLUGIN DEFINITION
  // =========================

  var old = \$.fn.popover

  \$.fn.popover = function (option) {
    return this.each(function () {
      var \$this   = \$(this)
      var data    = \$this.data('bs.popover')
      var options = typeof option == 'object' && option

      if (!data) \$this.data('bs.popover', (data = new Popover(this, options)))
      if (typeof option == 'string') data[option]()
    })
  }

  \$.fn.popover.Constructor = Popover


  // POPOVER NO CONFLICT
  // ===================

  \$.fn.popover.noConflict = function () {
    \$.fn.popover = old
    return this
  }

}(jQuery);
";
        
        $__internal_eb0319a8d8dd90cf52c003b58eb83d660b2173fb4a75aefab8fe2e2be2fe2d00->leave($__internal_eb0319a8d8dd90cf52c003b58eb83d660b2173fb4a75aefab8fe2e2be2fe2d00_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/bootstrap/js/popover.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/* ========================================================================
 * Bootstrap: popover.js v3.0.3
 * http://getbootstrap.com/javascript/#popovers
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

  // POPOVER PUBLIC CLASS DEFINITION
  // ===============================

  var Popover = function (element, options) {
    this.init('popover', element, options)
  }

  if (!\$.fn.tooltip) throw new Error('Popover requires tooltip.js')

  Popover.DEFAULTS = \$.extend({} , \$.fn.tooltip.Constructor.DEFAULTS, {
    placement: 'right'
  , trigger: 'click'
  , content: ''
  , template: '<div class=\"popover\"><div class=\"arrow\"></div><h3 class=\"popover-title\"></h3><div class=\"popover-content\"></div></div>'
  })


  // NOTE: POPOVER EXTENDS tooltip.js
  // ================================

  Popover.prototype = \$.extend({}, \$.fn.tooltip.Constructor.prototype)

  Popover.prototype.constructor = Popover

  Popover.prototype.getDefaults = function () {
    return Popover.DEFAULTS
  }

  Popover.prototype.setContent = function () {
    var \$tip    = this.tip()
    var title   = this.getTitle()
    var content = this.getContent()

    \$tip.find('.popover-title')[this.options.html ? 'html' : 'text'](title)
    \$tip.find('.popover-content')[this.options.html ? 'html' : 'text'](content)

    \$tip.removeClass('fade top bottom left right in')

    // IE8 doesn't accept hiding via the `:empty` pseudo selector, we have to do
    // this manually by checking the contents.
    if (!\$tip.find('.popover-title').html()) \$tip.find('.popover-title').hide()
  }

  Popover.prototype.hasContent = function () {
    return this.getTitle() || this.getContent()
  }

  Popover.prototype.getContent = function () {
    var \$e = this.\$element
    var o  = this.options

    return \$e.attr('data-content')
      || (typeof o.content == 'function' ?
            o.content.call(\$e[0]) :
            o.content)
  }

  Popover.prototype.arrow = function () {
    return this.\$arrow = this.\$arrow || this.tip().find('.arrow')
  }

  Popover.prototype.tip = function () {
    if (!this.\$tip) this.\$tip = \$(this.options.template)
    return this.\$tip
  }


  // POPOVER PLUGIN DEFINITION
  // =========================

  var old = \$.fn.popover

  \$.fn.popover = function (option) {
    return this.each(function () {
      var \$this   = \$(this)
      var data    = \$this.data('bs.popover')
      var options = typeof option == 'object' && option

      if (!data) \$this.data('bs.popover', (data = new Popover(this, options)))
      if (typeof option == 'string') data[option]()
    })
  }

  \$.fn.popover.Constructor = Popover


  // POPOVER NO CONFLICT
  // ===================

  \$.fn.popover.noConflict = function () {
    \$.fn.popover = old
    return this
  }

}(jQuery);
", "node_modules/parsleyjs/bower_components/bootstrap/js/popover.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/bootstrap/js/popover.js");
    }
}
