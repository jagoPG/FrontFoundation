<?php

/* node_modules/parsleyjs/doc/assets/docs.js */
class __TwigTemplate_29940ef02d66b34c4e1f323fea898d5bb87ae798f310e03bfa239c2ff86e046e extends Twig_Template
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
        $__internal_56348990257b91c94f4050de999e88f5f88d3f40543e16620f7044871f41cf18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56348990257b91c94f4050de999e88f5f88d3f40543e16620f7044871f41cf18->enter($__internal_56348990257b91c94f4050de999e88f5f88d3f40543e16620f7044871f41cf18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/doc/assets/docs.js"));

        // line 1
        echo "!function (\$) {

  \$(function () {

    var \$window = \$(window);
    var \$body   = \$(document.body);

    var navHeight = \$('.navbar').outerHeight(true) + 10;

    \$body.scrollspy({
      target: '.sidebar'
    });

    // analyse prefixed hash on load and redirect to right anchor
    \$window.on('load', function () {
      \$body.scrollspy('refresh');
      if (/^#psly-/i.test(window.location.hash)) {
        var h = window.location.hash.replace('psly-', '');

        if (\$(h).length)
          window.location.hash = h;
      }
    });

    // back to top hack with scrollipsy
    \$('.back-to-top').on('click', function () {
      \$('.sidebar .active').each(function () {
        \$(this).removeClass('active');
      });

      \$('.sidebar ul:first li:first').addClass('active');
    });

    // back to top
    setTimeout(function () {
      var \$sideBar = \$('.sidebar');

      \$sideBar.affix({
        offset: {
          top: function () {
            var offsetTop      = \$sideBar.offset().top;
            var sideBarMargin  = parseInt(\$sideBar.children(0).css('margin-top'), 10);
            var navOuterHeight = 10;

            return (this.top = offsetTop - navOuterHeight - sideBarMargin);
          },
          bottom: function () {
            return (this.bottom = \$('.footer').outerHeight(true));
          }
        }
      });
    }, 100);

    setTimeout(function () {
      \$('.top').affix();
    }, 100);
  });

}(window.jQuery);
";
        
        $__internal_56348990257b91c94f4050de999e88f5f88d3f40543e16620f7044871f41cf18->leave($__internal_56348990257b91c94f4050de999e88f5f88d3f40543e16620f7044871f41cf18_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/doc/assets/docs.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("!function (\$) {

  \$(function () {

    var \$window = \$(window);
    var \$body   = \$(document.body);

    var navHeight = \$('.navbar').outerHeight(true) + 10;

    \$body.scrollspy({
      target: '.sidebar'
    });

    // analyse prefixed hash on load and redirect to right anchor
    \$window.on('load', function () {
      \$body.scrollspy('refresh');
      if (/^#psly-/i.test(window.location.hash)) {
        var h = window.location.hash.replace('psly-', '');

        if (\$(h).length)
          window.location.hash = h;
      }
    });

    // back to top hack with scrollipsy
    \$('.back-to-top').on('click', function () {
      \$('.sidebar .active').each(function () {
        \$(this).removeClass('active');
      });

      \$('.sidebar ul:first li:first').addClass('active');
    });

    // back to top
    setTimeout(function () {
      var \$sideBar = \$('.sidebar');

      \$sideBar.affix({
        offset: {
          top: function () {
            var offsetTop      = \$sideBar.offset().top;
            var sideBarMargin  = parseInt(\$sideBar.children(0).css('margin-top'), 10);
            var navOuterHeight = 10;

            return (this.top = offsetTop - navOuterHeight - sideBarMargin);
          },
          bottom: function () {
            return (this.bottom = \$('.footer').outerHeight(true));
          }
        }
      });
    }, 100);

    setTimeout(function () {
      \$('.top').affix();
    }, 100);
  });

}(window.jQuery);
", "node_modules/parsleyjs/doc/assets/docs.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/doc/assets/docs.js");
    }
}
