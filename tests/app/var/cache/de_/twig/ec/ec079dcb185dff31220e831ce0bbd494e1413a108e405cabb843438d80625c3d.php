<?php

/* node_modules/uglify-js/tools/props.html */
class __TwigTemplate_57b7a7580cff23f7d11b508a3b8239ae87fbb4c7fec251abdc9397e508a78ba1 extends Twig_Template
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
        $__internal_f9032985321ce972da633800366d93ee9e16c9bcee32a0c5bdde225b880385eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9032985321ce972da633800366d93ee9e16c9bcee32a0c5bdde225b880385eb->enter($__internal_f9032985321ce972da633800366d93ee9e16c9bcee32a0c5bdde225b880385eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/uglify-js/tools/props.html"));

        // line 1
        echo "<html>
  <head>
  </head>
  <body>
    <script>(function(){
      var props = {};

      function addObject(obj) {
        if (obj == null) return;
        try {
          Object.getOwnPropertyNames(obj).forEach(add);
        } catch(ex) {}
        if (obj.prototype) {
          Object.getOwnPropertyNames(obj.prototype).forEach(add);
        }
        if (typeof obj == \"function\") {
          try {
            Object.getOwnPropertyNames(new obj).forEach(add);
          } catch(ex) {}
        }
      }

      function add(name) {
        props[name] = true;
      }

      Object.getOwnPropertyNames(window).forEach(function(thing){
        addObject(window[thing]);
      });

      try {
        addObject(new Event(\"click\"));
        addObject(new Event(\"contextmenu\"));
        addObject(new Event(\"mouseup\"));
        addObject(new Event(\"mousedown\"));
        addObject(new Event(\"keydown\"));
        addObject(new Event(\"keypress\"));
        addObject(new Event(\"keyup\"));
      } catch(ex) {}

      var ta = document.createElement(\"textarea\");
      ta.style.width = \"100%\";
      ta.style.height = \"20em\";
      ta.style.boxSizing = \"border-box\";
      <!-- ta.value = Object.keys(props).sort(cmp).map(function(name){ -->
      <!--   return JSON.stringify(name); -->
      <!-- }).join(\",\\n\"); -->
      ta.value = JSON.stringify({
        vars: [],
        props: Object.keys(props).sort(cmp)
      }, null, 2);
      document.body.appendChild(ta);

      function cmp(a, b) {
        a = a.toLowerCase();
        b = b.toLowerCase();
        return a < b ? -1 : a > b ? 1 : 0;
      }
    })();</script>
  </body>
</html>
";
        
        $__internal_f9032985321ce972da633800366d93ee9e16c9bcee32a0c5bdde225b880385eb->leave($__internal_f9032985321ce972da633800366d93ee9e16c9bcee32a0c5bdde225b880385eb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/uglify-js/tools/props.html";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
  <head>
  </head>
  <body>
    <script>(function(){
      var props = {};

      function addObject(obj) {
        if (obj == null) return;
        try {
          Object.getOwnPropertyNames(obj).forEach(add);
        } catch(ex) {}
        if (obj.prototype) {
          Object.getOwnPropertyNames(obj.prototype).forEach(add);
        }
        if (typeof obj == \"function\") {
          try {
            Object.getOwnPropertyNames(new obj).forEach(add);
          } catch(ex) {}
        }
      }

      function add(name) {
        props[name] = true;
      }

      Object.getOwnPropertyNames(window).forEach(function(thing){
        addObject(window[thing]);
      });

      try {
        addObject(new Event(\"click\"));
        addObject(new Event(\"contextmenu\"));
        addObject(new Event(\"mouseup\"));
        addObject(new Event(\"mousedown\"));
        addObject(new Event(\"keydown\"));
        addObject(new Event(\"keypress\"));
        addObject(new Event(\"keyup\"));
      } catch(ex) {}

      var ta = document.createElement(\"textarea\");
      ta.style.width = \"100%\";
      ta.style.height = \"20em\";
      ta.style.boxSizing = \"border-box\";
      <!-- ta.value = Object.keys(props).sort(cmp).map(function(name){ -->
      <!--   return JSON.stringify(name); -->
      <!-- }).join(\",\\n\"); -->
      ta.value = JSON.stringify({
        vars: [],
        props: Object.keys(props).sort(cmp)
      }, null, 2);
      document.body.appendChild(ta);

      function cmp(a, b) {
        a = a.toLowerCase();
        b = b.toLowerCase();
        return a < b ? -1 : a > b ? 1 : 0;
      }
    })();</script>
  </body>
</html>
", "node_modules/uglify-js/tools/props.html", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/uglify-js/tools/props.html");
    }
}
