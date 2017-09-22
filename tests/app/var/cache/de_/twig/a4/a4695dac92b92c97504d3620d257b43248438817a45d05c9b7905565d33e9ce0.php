<?php

/* node_modules/parsleyjs/doc/annotated-source/main.html */
class __TwigTemplate_b63e6b32239ecfa40a90721043505f9c9c6e936dda1e19f30edbb918867def05 extends Twig_Template
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
        $__internal_937b98b74c9952bcb3a6565e42dd8cee8fb97a0f046f0e823c12e4b426b2681e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_937b98b74c9952bcb3a6565e42dd8cee8fb97a0f046f0e823c12e4b426b2681e->enter($__internal_937b98b74c9952bcb3a6565e42dd8cee8fb97a0f046f0e823c12e4b426b2681e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/doc/annotated-source/main.html"));

        // line 1
        echo "<!DOCTYPE html>

<html>
<head>
  <title>main.js</title>
  <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, target-densitydpi=160dpi, initial-scale=1.0; maximum-scale=1.0; user-scalable=0;\">
  <link rel=\"stylesheet\" media=\"all\" href=\"docco.css\" />
</head>
<body>
  <div id=\"container\">
    <div id=\"background\"></div>
    
      <ul id=\"jump_to\">
        <li>
          <a class=\"large\" href=\"javascript:void(0);\">Jump To &hellip;</a>
          <a class=\"small\" href=\"javascript:void(0);\">+</a>
          <div id=\"jump_wrapper\">
          <div id=\"jump_page\"><a class=\"source\" href=\"../index.html\">&lt;&lt;&lt; back to documentation</a>
            
              
              <a class=\"source\" href=\"base.html\">
                base.js
              </a>
            
              
              <a class=\"source\" href=\"constraint.html\">
                constraint.js
              </a>
            
              
              <a class=\"source\" href=\"defaults.html\">
                defaults.js
              </a>
            
              
              <a class=\"source\" href=\"factory.html\">
                factory.js
              </a>
            
              
              <a class=\"source\" href=\"field.html\">
                field.js
              </a>
            
              
              <a class=\"source\" href=\"form.html\">
                form.js
              </a>
            
              
              <a class=\"source\" href=\"main.html\">
                main.js
              </a>
            
              
              <a class=\"source\" href=\"multiple.html\">
                multiple.js
              </a>
            
              
              <a class=\"source\" href=\"pubsub.html\">
                pubsub.js
              </a>
            
              
              <a class=\"source\" href=\"remote.html\">
                remote.js
              </a>
            
              
              <a class=\"source\" href=\"ui.html\">
                ui.js
              </a>
            
              
              <a class=\"source\" href=\"utils.html\">
                utils.js
              </a>
            
              
              <a class=\"source\" href=\"validator.html\">
                validator.js
              </a>
            
              
              <a class=\"source\" href=\"validator_registry.html\">
                validator_registry.js
              </a>
            
          </div>
        </li>
      </ul>
    
    <ul class=\"sections\">
        
          <li id=\"title\">
              <div class=\"annotation\">
                  <h1>main.js</h1>
              </div>
          </li>
        
        
        
        <li id=\"section-1\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-1\">&#182;</a>
              </div>
              
            </div>
            
            <div class=\"content\"><div class='highlight'><pre><span class=\"hljs-keyword\">import</span> \$ <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'jquery'</span>;
<span class=\"hljs-keyword\">import</span> Utils <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'./utils'</span>;
<span class=\"hljs-keyword\">import</span> Defaults <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'./defaults'</span>;
<span class=\"hljs-keyword\">import</span> Base <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'./base'</span>;
<span class=\"hljs-keyword\">import</span> ValidatorRegistry <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'./validator_registry'</span>;
<span class=\"hljs-keyword\">import</span> UI <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'./ui'</span>;
<span class=\"hljs-keyword\">import</span> Form <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'./form'</span>;
<span class=\"hljs-keyword\">import</span> Field <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'./field'</span>;
<span class=\"hljs-keyword\">import</span> Multiple <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'./multiple'</span>;
<span class=\"hljs-keyword\">import</span> Factory <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'./factory'</span>;

<span class=\"hljs-keyword\">var</span> vernums = \$.fn.jquery.split(<span class=\"hljs-string\">'.'</span>);
<span class=\"hljs-keyword\">if</span> (<span class=\"hljs-built_in\">parseInt</span>(vernums[<span class=\"hljs-number\">0</span>]) &lt;= <span class=\"hljs-number\">1</span> &amp;&amp; <span class=\"hljs-built_in\">parseInt</span>(vernums[<span class=\"hljs-number\">1</span>]) &lt; <span class=\"hljs-number\">8</span>) {
  <span class=\"hljs-keyword\">throw</span> <span class=\"hljs-string\">\"The loaded version of jQuery is too old. Please upgrade to 1.8.x or better.\"</span>;
}
<span class=\"hljs-keyword\">if</span> (!vernums.forEach) {
  Utils.warn(<span class=\"hljs-string\">'Parsley requires ES5 to run properly. Please include https://github.com/es-shims/es5-shim'</span>);
}</pre></div></div>
            
        </li>
        
        
        <li id=\"section-2\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-2\">&#182;</a>
              </div>
              <p>Inherit <code>on</code>, <code>off</code> &amp; <code>trigger</code> to Parsley:</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre><span class=\"hljs-keyword\">var</span> Parsley = <span class=\"hljs-built_in\">Object</span>.assign(<span class=\"hljs-keyword\">new</span> Base(), {
    <span class=\"hljs-attr\">element</span>: <span class=\"hljs-built_in\">document</span>,
    <span class=\"hljs-attr\">\$element</span>: \$(<span class=\"hljs-built_in\">document</span>),
    <span class=\"hljs-attr\">actualizeOptions</span>: <span class=\"hljs-literal\">null</span>,
    <span class=\"hljs-attr\">_resetOptions</span>: <span class=\"hljs-literal\">null</span>,
    <span class=\"hljs-attr\">Factory</span>: Factory,
    <span class=\"hljs-attr\">version</span>: <span class=\"hljs-string\">'@@version'</span>
  });</pre></div></div>
            
        </li>
        
        
        <li id=\"section-3\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-3\">&#182;</a>
              </div>
              <p>Supplement Field and Form with Base
This way, the constructors will have access to those methods</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre><span class=\"hljs-built_in\">Object</span>.assign(Field.prototype, UI.Field, Base.prototype);
<span class=\"hljs-built_in\">Object</span>.assign(Form.prototype, UI.Form, Base.prototype);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-4\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-4\">&#182;</a>
              </div>
              <p>Inherit actualizeOptions and _resetOptions:</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre><span class=\"hljs-built_in\">Object</span>.assign(Factory.prototype, Base.prototype);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-5\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-5\">&#182;</a>
              </div>
              <h3 id=\"jquery-api\">jQuery API</h3>
<p><code>\$(&#39;.elem&#39;).parsley(options)</code> or <code>\$(&#39;.elem&#39;).psly(options)</code></p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>\$.fn.parsley = \$.fn.psly = <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">options</span>) </span>{
  <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-keyword\">this</span>.length &gt; <span class=\"hljs-number\">1</span>) {
    <span class=\"hljs-keyword\">var</span> instances = [];

    <span class=\"hljs-keyword\">this</span>.each(<span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
      instances.push(\$(<span class=\"hljs-keyword\">this</span>).parsley(options));
    });

    <span class=\"hljs-keyword\">return</span> instances;
  }</pre></div></div>
            
        </li>
        
        
        <li id=\"section-6\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-6\">&#182;</a>
              </div>
              <p>Return undefined if applied to non existing DOM element</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  <span class=\"hljs-keyword\">if</span> (!\$(<span class=\"hljs-keyword\">this</span>).length) {
    Utils.warn(<span class=\"hljs-string\">'You must bind Parsley on an existing element.'</span>);

    <span class=\"hljs-keyword\">return</span>;
  }

  <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">new</span> Factory(<span class=\"hljs-keyword\">this</span>[<span class=\"hljs-number\">0</span>], options);
};</pre></div></div>
            
        </li>
        
        
        <li id=\"section-7\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-7\">&#182;</a>
              </div>
              <h3 id=\"field-and-form-extension\">Field and Form extension</h3>
<p>Ensure the extension is now defined if it wasn’t previously</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre><span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'undefined'</span> === <span class=\"hljs-keyword\">typeof</span> <span class=\"hljs-built_in\">window</span>.ParsleyExtend)
  <span class=\"hljs-built_in\">window</span>.ParsleyExtend = {};</pre></div></div>
            
        </li>
        
        
        <li id=\"section-8\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-8\">&#182;</a>
              </div>
              <h3 id=\"parsley-config\">Parsley config</h3>
<p>Inherit from ParsleyDefault, and copy over any existing values</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>Parsley.options = <span class=\"hljs-built_in\">Object</span>.assign(Utils.objectCreate(Defaults), <span class=\"hljs-built_in\">window</span>.ParsleyConfig);
<span class=\"hljs-built_in\">window</span>.ParsleyConfig = Parsley.options; <span class=\"hljs-comment\">// Old way of accessing global options</span></pre></div></div>
            
        </li>
        
        
        <li id=\"section-9\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-9\">&#182;</a>
              </div>
              <h3 id=\"globals\">Globals</h3>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre><span class=\"hljs-built_in\">window</span>.Parsley = <span class=\"hljs-built_in\">window</span>.psly = Parsley;
Parsley.Utils = Utils;
<span class=\"hljs-built_in\">window</span>.ParsleyUtils = {};
\$.each(Utils, (key, value) =&gt; {
  <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'function'</span> === <span class=\"hljs-keyword\">typeof</span> value) {
    <span class=\"hljs-built_in\">window</span>.ParsleyUtils[key] = <span class=\"hljs-function\">(<span class=\"hljs-params\">...args</span>) =&gt;</span> {
      Utils.warnOnce(<span class=\"hljs-string\">'Accessing `window.ParsleyUtils` is deprecated. Use `window.Parsley.Utils` instead.'</span>);
      <span class=\"hljs-keyword\">return</span> Utils[key](...args);
    };
  }
});</pre></div></div>
            
        </li>
        
        
        <li id=\"section-10\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-10\">&#182;</a>
              </div>
              <h3 id=\"define-methods-that-forward-to-the-registry-and-deprecate-all-access-except-through-window-parsley\">Define methods that forward to the registry, and deprecate all access except through window.Parsley</h3>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre><span class=\"hljs-keyword\">var</span> registry = <span class=\"hljs-built_in\">window</span>.Parsley._validatorRegistry = <span class=\"hljs-keyword\">new</span> ValidatorRegistry(<span class=\"hljs-built_in\">window</span>.ParsleyConfig.validators, <span class=\"hljs-built_in\">window</span>.ParsleyConfig.i18n);
<span class=\"hljs-built_in\">window</span>.ParsleyValidator = {};
\$.each(<span class=\"hljs-string\">'setLocale addCatalog addMessage addMessages getErrorMessage formatMessage addValidator updateValidator removeValidator'</span>.split(<span class=\"hljs-string\">' '</span>), <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">i, method</span>) </span>{
  <span class=\"hljs-built_in\">window</span>.Parsley[method] = <span class=\"hljs-function\">(<span class=\"hljs-params\">...args</span>) =&gt;</span> registry[method](...args);
  <span class=\"hljs-built_in\">window</span>.ParsleyValidator[method] = <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    Utils.warnOnce(<span class=\"hljs-string\">`Accessing the method '<span class=\"hljs-subst\">\${method}</span>' through Validator is deprecated. Simply call 'window.Parsley.<span class=\"hljs-subst\">\${method}</span>(...)'`</span>);
    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-built_in\">window</span>.Parsley[method](...arguments);
  };
});</pre></div></div>
            
        </li>
        
        
        <li id=\"section-11\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-11\">&#182;</a>
              </div>
              <h3 id=\"ui\">UI</h3>
<p>Deprecated global object</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre><span class=\"hljs-built_in\">window</span>.Parsley.UI = UI;
<span class=\"hljs-built_in\">window</span>.ParsleyUI = {
  <span class=\"hljs-attr\">removeError</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">instance, name, doNotUpdateClass</span>) </span>{
    <span class=\"hljs-keyword\">var</span> updateClass = <span class=\"hljs-literal\">true</span> !== doNotUpdateClass;
    Utils.warnOnce(<span class=\"hljs-string\">`Accessing UI is deprecated. Call 'removeError' on the instance directly. Please comment in issue 1073 as to your need to call this method.`</span>);
    <span class=\"hljs-keyword\">return</span> instance.removeError(name, {updateClass});
  },
  <span class=\"hljs-attr\">getErrorsMessages</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">instance</span>) </span>{
    Utils.warnOnce(<span class=\"hljs-string\">`Accessing UI is deprecated. Call 'getErrorsMessages' on the instance directly.`</span>);
    <span class=\"hljs-keyword\">return</span> instance.getErrorsMessages();
  }
};
\$.each(<span class=\"hljs-string\">'addError updateError'</span>.split(<span class=\"hljs-string\">' '</span>), <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">i, method</span>) </span>{
  <span class=\"hljs-built_in\">window</span>.ParsleyUI[method] = <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">instance, name, message, assert, doNotUpdateClass</span>) </span>{
    <span class=\"hljs-keyword\">var</span> updateClass = <span class=\"hljs-literal\">true</span> !== doNotUpdateClass;
    Utils.warnOnce(<span class=\"hljs-string\">`Accessing UI is deprecated. Call '<span class=\"hljs-subst\">\${method}</span>' on the instance directly. Please comment in issue 1073 as to your need to call this method.`</span>);
    <span class=\"hljs-keyword\">return</span> instance[method](name, {message, assert, updateClass});
  };
});</pre></div></div>
            
        </li>
        
        
        <li id=\"section-12\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-12\">&#182;</a>
              </div>
              <h3 id=\"parsley-auto-binding\">PARSLEY auto-binding</h3>
<p>Prevent it by setting <code>ParsleyConfig.autoBind</code> to <code>false</code></p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre><span class=\"hljs-keyword\">if</span> (<span class=\"hljs-literal\">false</span> !== <span class=\"hljs-built_in\">window</span>.ParsleyConfig.autoBind) {
  \$(<span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{</pre></div></div>
            
        </li>
        
        
        <li id=\"section-13\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-13\">&#182;</a>
              </div>
              <p>Works only on <code>data-parsley-validate</code>.</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (\$(<span class=\"hljs-string\">'[data-parsley-validate]'</span>).length)
      \$(<span class=\"hljs-string\">'[data-parsley-validate]'</span>).parsley();
  });
}

<span class=\"hljs-keyword\">export</span> <span class=\"hljs-keyword\">default</span> Parsley;</pre></div></div>
            
        </li>
        
    </ul>
  </div>
<script>var _gaq=_gaq||[];_gaq.push([\"_setAccount\",\"UA-37229467-1\"]);_gaq.push([\"_trackPageview\"]);(function(){var e=document.createElement(\"script\");e.type=\"text/javascript\";e.async=true;e.src=(\"https:\"==document.location.protocol?\"https://ssl\":\"http://www\")+\".google-analytics.com/ga.js\";var t=document.getElementsByTagName(\"script\")[0];t.parentNode.insertBefore(e,t)})();</script></body>
</html>
";
        
        $__internal_937b98b74c9952bcb3a6565e42dd8cee8fb97a0f046f0e823c12e4b426b2681e->leave($__internal_937b98b74c9952bcb3a6565e42dd8cee8fb97a0f046f0e823c12e4b426b2681e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/doc/annotated-source/main.html";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

<html>
<head>
  <title>main.js</title>
  <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, target-densitydpi=160dpi, initial-scale=1.0; maximum-scale=1.0; user-scalable=0;\">
  <link rel=\"stylesheet\" media=\"all\" href=\"docco.css\" />
</head>
<body>
  <div id=\"container\">
    <div id=\"background\"></div>
    
      <ul id=\"jump_to\">
        <li>
          <a class=\"large\" href=\"javascript:void(0);\">Jump To &hellip;</a>
          <a class=\"small\" href=\"javascript:void(0);\">+</a>
          <div id=\"jump_wrapper\">
          <div id=\"jump_page\"><a class=\"source\" href=\"../index.html\">&lt;&lt;&lt; back to documentation</a>
            
              
              <a class=\"source\" href=\"base.html\">
                base.js
              </a>
            
              
              <a class=\"source\" href=\"constraint.html\">
                constraint.js
              </a>
            
              
              <a class=\"source\" href=\"defaults.html\">
                defaults.js
              </a>
            
              
              <a class=\"source\" href=\"factory.html\">
                factory.js
              </a>
            
              
              <a class=\"source\" href=\"field.html\">
                field.js
              </a>
            
              
              <a class=\"source\" href=\"form.html\">
                form.js
              </a>
            
              
              <a class=\"source\" href=\"main.html\">
                main.js
              </a>
            
              
              <a class=\"source\" href=\"multiple.html\">
                multiple.js
              </a>
            
              
              <a class=\"source\" href=\"pubsub.html\">
                pubsub.js
              </a>
            
              
              <a class=\"source\" href=\"remote.html\">
                remote.js
              </a>
            
              
              <a class=\"source\" href=\"ui.html\">
                ui.js
              </a>
            
              
              <a class=\"source\" href=\"utils.html\">
                utils.js
              </a>
            
              
              <a class=\"source\" href=\"validator.html\">
                validator.js
              </a>
            
              
              <a class=\"source\" href=\"validator_registry.html\">
                validator_registry.js
              </a>
            
          </div>
        </li>
      </ul>
    
    <ul class=\"sections\">
        
          <li id=\"title\">
              <div class=\"annotation\">
                  <h1>main.js</h1>
              </div>
          </li>
        
        
        
        <li id=\"section-1\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-1\">&#182;</a>
              </div>
              
            </div>
            
            <div class=\"content\"><div class='highlight'><pre><span class=\"hljs-keyword\">import</span> \$ <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'jquery'</span>;
<span class=\"hljs-keyword\">import</span> Utils <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'./utils'</span>;
<span class=\"hljs-keyword\">import</span> Defaults <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'./defaults'</span>;
<span class=\"hljs-keyword\">import</span> Base <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'./base'</span>;
<span class=\"hljs-keyword\">import</span> ValidatorRegistry <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'./validator_registry'</span>;
<span class=\"hljs-keyword\">import</span> UI <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'./ui'</span>;
<span class=\"hljs-keyword\">import</span> Form <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'./form'</span>;
<span class=\"hljs-keyword\">import</span> Field <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'./field'</span>;
<span class=\"hljs-keyword\">import</span> Multiple <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'./multiple'</span>;
<span class=\"hljs-keyword\">import</span> Factory <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'./factory'</span>;

<span class=\"hljs-keyword\">var</span> vernums = \$.fn.jquery.split(<span class=\"hljs-string\">'.'</span>);
<span class=\"hljs-keyword\">if</span> (<span class=\"hljs-built_in\">parseInt</span>(vernums[<span class=\"hljs-number\">0</span>]) &lt;= <span class=\"hljs-number\">1</span> &amp;&amp; <span class=\"hljs-built_in\">parseInt</span>(vernums[<span class=\"hljs-number\">1</span>]) &lt; <span class=\"hljs-number\">8</span>) {
  <span class=\"hljs-keyword\">throw</span> <span class=\"hljs-string\">\"The loaded version of jQuery is too old. Please upgrade to 1.8.x or better.\"</span>;
}
<span class=\"hljs-keyword\">if</span> (!vernums.forEach) {
  Utils.warn(<span class=\"hljs-string\">'Parsley requires ES5 to run properly. Please include https://github.com/es-shims/es5-shim'</span>);
}</pre></div></div>
            
        </li>
        
        
        <li id=\"section-2\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-2\">&#182;</a>
              </div>
              <p>Inherit <code>on</code>, <code>off</code> &amp; <code>trigger</code> to Parsley:</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre><span class=\"hljs-keyword\">var</span> Parsley = <span class=\"hljs-built_in\">Object</span>.assign(<span class=\"hljs-keyword\">new</span> Base(), {
    <span class=\"hljs-attr\">element</span>: <span class=\"hljs-built_in\">document</span>,
    <span class=\"hljs-attr\">\$element</span>: \$(<span class=\"hljs-built_in\">document</span>),
    <span class=\"hljs-attr\">actualizeOptions</span>: <span class=\"hljs-literal\">null</span>,
    <span class=\"hljs-attr\">_resetOptions</span>: <span class=\"hljs-literal\">null</span>,
    <span class=\"hljs-attr\">Factory</span>: Factory,
    <span class=\"hljs-attr\">version</span>: <span class=\"hljs-string\">'@@version'</span>
  });</pre></div></div>
            
        </li>
        
        
        <li id=\"section-3\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-3\">&#182;</a>
              </div>
              <p>Supplement Field and Form with Base
This way, the constructors will have access to those methods</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre><span class=\"hljs-built_in\">Object</span>.assign(Field.prototype, UI.Field, Base.prototype);
<span class=\"hljs-built_in\">Object</span>.assign(Form.prototype, UI.Form, Base.prototype);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-4\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-4\">&#182;</a>
              </div>
              <p>Inherit actualizeOptions and _resetOptions:</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre><span class=\"hljs-built_in\">Object</span>.assign(Factory.prototype, Base.prototype);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-5\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-5\">&#182;</a>
              </div>
              <h3 id=\"jquery-api\">jQuery API</h3>
<p><code>\$(&#39;.elem&#39;).parsley(options)</code> or <code>\$(&#39;.elem&#39;).psly(options)</code></p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>\$.fn.parsley = \$.fn.psly = <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">options</span>) </span>{
  <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-keyword\">this</span>.length &gt; <span class=\"hljs-number\">1</span>) {
    <span class=\"hljs-keyword\">var</span> instances = [];

    <span class=\"hljs-keyword\">this</span>.each(<span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
      instances.push(\$(<span class=\"hljs-keyword\">this</span>).parsley(options));
    });

    <span class=\"hljs-keyword\">return</span> instances;
  }</pre></div></div>
            
        </li>
        
        
        <li id=\"section-6\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-6\">&#182;</a>
              </div>
              <p>Return undefined if applied to non existing DOM element</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  <span class=\"hljs-keyword\">if</span> (!\$(<span class=\"hljs-keyword\">this</span>).length) {
    Utils.warn(<span class=\"hljs-string\">'You must bind Parsley on an existing element.'</span>);

    <span class=\"hljs-keyword\">return</span>;
  }

  <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">new</span> Factory(<span class=\"hljs-keyword\">this</span>[<span class=\"hljs-number\">0</span>], options);
};</pre></div></div>
            
        </li>
        
        
        <li id=\"section-7\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-7\">&#182;</a>
              </div>
              <h3 id=\"field-and-form-extension\">Field and Form extension</h3>
<p>Ensure the extension is now defined if it wasn’t previously</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre><span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'undefined'</span> === <span class=\"hljs-keyword\">typeof</span> <span class=\"hljs-built_in\">window</span>.ParsleyExtend)
  <span class=\"hljs-built_in\">window</span>.ParsleyExtend = {};</pre></div></div>
            
        </li>
        
        
        <li id=\"section-8\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-8\">&#182;</a>
              </div>
              <h3 id=\"parsley-config\">Parsley config</h3>
<p>Inherit from ParsleyDefault, and copy over any existing values</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>Parsley.options = <span class=\"hljs-built_in\">Object</span>.assign(Utils.objectCreate(Defaults), <span class=\"hljs-built_in\">window</span>.ParsleyConfig);
<span class=\"hljs-built_in\">window</span>.ParsleyConfig = Parsley.options; <span class=\"hljs-comment\">// Old way of accessing global options</span></pre></div></div>
            
        </li>
        
        
        <li id=\"section-9\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-9\">&#182;</a>
              </div>
              <h3 id=\"globals\">Globals</h3>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre><span class=\"hljs-built_in\">window</span>.Parsley = <span class=\"hljs-built_in\">window</span>.psly = Parsley;
Parsley.Utils = Utils;
<span class=\"hljs-built_in\">window</span>.ParsleyUtils = {};
\$.each(Utils, (key, value) =&gt; {
  <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'function'</span> === <span class=\"hljs-keyword\">typeof</span> value) {
    <span class=\"hljs-built_in\">window</span>.ParsleyUtils[key] = <span class=\"hljs-function\">(<span class=\"hljs-params\">...args</span>) =&gt;</span> {
      Utils.warnOnce(<span class=\"hljs-string\">'Accessing `window.ParsleyUtils` is deprecated. Use `window.Parsley.Utils` instead.'</span>);
      <span class=\"hljs-keyword\">return</span> Utils[key](...args);
    };
  }
});</pre></div></div>
            
        </li>
        
        
        <li id=\"section-10\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-10\">&#182;</a>
              </div>
              <h3 id=\"define-methods-that-forward-to-the-registry-and-deprecate-all-access-except-through-window-parsley\">Define methods that forward to the registry, and deprecate all access except through window.Parsley</h3>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre><span class=\"hljs-keyword\">var</span> registry = <span class=\"hljs-built_in\">window</span>.Parsley._validatorRegistry = <span class=\"hljs-keyword\">new</span> ValidatorRegistry(<span class=\"hljs-built_in\">window</span>.ParsleyConfig.validators, <span class=\"hljs-built_in\">window</span>.ParsleyConfig.i18n);
<span class=\"hljs-built_in\">window</span>.ParsleyValidator = {};
\$.each(<span class=\"hljs-string\">'setLocale addCatalog addMessage addMessages getErrorMessage formatMessage addValidator updateValidator removeValidator'</span>.split(<span class=\"hljs-string\">' '</span>), <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">i, method</span>) </span>{
  <span class=\"hljs-built_in\">window</span>.Parsley[method] = <span class=\"hljs-function\">(<span class=\"hljs-params\">...args</span>) =&gt;</span> registry[method](...args);
  <span class=\"hljs-built_in\">window</span>.ParsleyValidator[method] = <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    Utils.warnOnce(<span class=\"hljs-string\">`Accessing the method '<span class=\"hljs-subst\">\${method}</span>' through Validator is deprecated. Simply call 'window.Parsley.<span class=\"hljs-subst\">\${method}</span>(...)'`</span>);
    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-built_in\">window</span>.Parsley[method](...arguments);
  };
});</pre></div></div>
            
        </li>
        
        
        <li id=\"section-11\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-11\">&#182;</a>
              </div>
              <h3 id=\"ui\">UI</h3>
<p>Deprecated global object</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre><span class=\"hljs-built_in\">window</span>.Parsley.UI = UI;
<span class=\"hljs-built_in\">window</span>.ParsleyUI = {
  <span class=\"hljs-attr\">removeError</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">instance, name, doNotUpdateClass</span>) </span>{
    <span class=\"hljs-keyword\">var</span> updateClass = <span class=\"hljs-literal\">true</span> !== doNotUpdateClass;
    Utils.warnOnce(<span class=\"hljs-string\">`Accessing UI is deprecated. Call 'removeError' on the instance directly. Please comment in issue 1073 as to your need to call this method.`</span>);
    <span class=\"hljs-keyword\">return</span> instance.removeError(name, {updateClass});
  },
  <span class=\"hljs-attr\">getErrorsMessages</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">instance</span>) </span>{
    Utils.warnOnce(<span class=\"hljs-string\">`Accessing UI is deprecated. Call 'getErrorsMessages' on the instance directly.`</span>);
    <span class=\"hljs-keyword\">return</span> instance.getErrorsMessages();
  }
};
\$.each(<span class=\"hljs-string\">'addError updateError'</span>.split(<span class=\"hljs-string\">' '</span>), <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">i, method</span>) </span>{
  <span class=\"hljs-built_in\">window</span>.ParsleyUI[method] = <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">instance, name, message, assert, doNotUpdateClass</span>) </span>{
    <span class=\"hljs-keyword\">var</span> updateClass = <span class=\"hljs-literal\">true</span> !== doNotUpdateClass;
    Utils.warnOnce(<span class=\"hljs-string\">`Accessing UI is deprecated. Call '<span class=\"hljs-subst\">\${method}</span>' on the instance directly. Please comment in issue 1073 as to your need to call this method.`</span>);
    <span class=\"hljs-keyword\">return</span> instance[method](name, {message, assert, updateClass});
  };
});</pre></div></div>
            
        </li>
        
        
        <li id=\"section-12\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-12\">&#182;</a>
              </div>
              <h3 id=\"parsley-auto-binding\">PARSLEY auto-binding</h3>
<p>Prevent it by setting <code>ParsleyConfig.autoBind</code> to <code>false</code></p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre><span class=\"hljs-keyword\">if</span> (<span class=\"hljs-literal\">false</span> !== <span class=\"hljs-built_in\">window</span>.ParsleyConfig.autoBind) {
  \$(<span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{</pre></div></div>
            
        </li>
        
        
        <li id=\"section-13\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-13\">&#182;</a>
              </div>
              <p>Works only on <code>data-parsley-validate</code>.</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (\$(<span class=\"hljs-string\">'[data-parsley-validate]'</span>).length)
      \$(<span class=\"hljs-string\">'[data-parsley-validate]'</span>).parsley();
  });
}

<span class=\"hljs-keyword\">export</span> <span class=\"hljs-keyword\">default</span> Parsley;</pre></div></div>
            
        </li>
        
    </ul>
  </div>
<script>var _gaq=_gaq||[];_gaq.push([\"_setAccount\",\"UA-37229467-1\"]);_gaq.push([\"_trackPageview\"]);(function(){var e=document.createElement(\"script\");e.type=\"text/javascript\";e.async=true;e.src=(\"https:\"==document.location.protocol?\"https://ssl\":\"http://www\")+\".google-analytics.com/ga.js\";var t=document.getElementsByTagName(\"script\")[0];t.parentNode.insertBefore(e,t)})();</script></body>
</html>
", "node_modules/parsleyjs/doc/annotated-source/main.html", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/doc/annotated-source/main.html");
    }
}