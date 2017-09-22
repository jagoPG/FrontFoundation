<?php

/* node_modules/parsleyjs/doc/annotated-source/multiple.html */
class __TwigTemplate_91f1016e6244d8d5502fefcad65406b5216bed773cccf407ba8b828c2d8f7230 extends Twig_Template
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
        $__internal_f29d2f442ae0487f15b1f78c26dda57279e69aacd0cfaf7af4d935b20cfbb91e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f29d2f442ae0487f15b1f78c26dda57279e69aacd0cfaf7af4d935b20cfbb91e->enter($__internal_f29d2f442ae0487f15b1f78c26dda57279e69aacd0cfaf7af4d935b20cfbb91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/doc/annotated-source/multiple.html"));

        // line 1
        echo "<!DOCTYPE html>

<html>
<head>
  <title>multiple.js</title>
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
                  <h1>multiple.js</h1>
              </div>
          </li>
        
        
        
        <li id=\"section-1\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-1\">&#182;</a>
              </div>
              
            </div>
            
            <div class=\"content\"><div class='highlight'><pre><span class=\"hljs-keyword\">import</span> \$ <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'jquery'</span>;

<span class=\"hljs-keyword\">var</span> Multiple = <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
  <span class=\"hljs-keyword\">this</span>.__class__ = <span class=\"hljs-string\">'FieldMultiple'</span>;
};

Multiple.prototype = {</pre></div></div>
            
        </li>
        
        
        <li id=\"section-2\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-2\">&#182;</a>
              </div>
              <p>Add new <code>\$element</code> sibling for multiple field</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  addElement: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">\$element</span>) </span>{
    <span class=\"hljs-keyword\">this</span>.\$elements.push(\$element);

    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>;
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-3\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-3\">&#182;</a>
              </div>
              <p>See <code>Field.refreshConstraints()</code></p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  refreshConstraints: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">var</span> fieldConstraints;

    <span class=\"hljs-keyword\">this</span>.constraints = [];</pre></div></div>
            
        </li>
        
        
        <li id=\"section-4\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-4\">&#182;</a>
              </div>
              <p>Select multiple special treatment</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-keyword\">this</span>.element.nodeName === <span class=\"hljs-string\">'SELECT'</span>) {
      <span class=\"hljs-keyword\">this</span>.actualizeOptions()._bindConstraints();

      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>;
    }</pre></div></div>
            
        </li>
        
        
        <li id=\"section-5\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-5\">&#182;</a>
              </div>
              <p>Gather all constraints for each input in the multiple group</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">for</span> (<span class=\"hljs-keyword\">var</span> i = <span class=\"hljs-number\">0</span>; i &lt; <span class=\"hljs-keyword\">this</span>.\$elements.length; i++) {</pre></div></div>
            
        </li>
        
        
        <li id=\"section-6\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-6\">&#182;</a>
              </div>
              <p>Check if element have not been dynamically removed since last binding</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>      <span class=\"hljs-keyword\">if</span> (!\$(<span class=\"hljs-string\">'html'</span>).has(<span class=\"hljs-keyword\">this</span>.\$elements[i]).length) {
        <span class=\"hljs-keyword\">this</span>.\$elements.splice(i, <span class=\"hljs-number\">1</span>);
        <span class=\"hljs-keyword\">continue</span>;
      }

      fieldConstraints = <span class=\"hljs-keyword\">this</span>.\$elements[i].data(<span class=\"hljs-string\">'FieldMultiple'</span>).refreshConstraints().constraints;

      <span class=\"hljs-keyword\">for</span> (<span class=\"hljs-keyword\">var</span> j = <span class=\"hljs-number\">0</span>; j &lt; fieldConstraints.length; j++)
        <span class=\"hljs-keyword\">this</span>.addConstraint(fieldConstraints[j].name, fieldConstraints[j].requirements, fieldConstraints[j].priority, fieldConstraints[j].isDomConstraint);
    }

    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>;
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-7\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-7\">&#182;</a>
              </div>
              <p>See <code>Field.getValue()</code></p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  getValue: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{</pre></div></div>
            
        </li>
        
        
        <li id=\"section-8\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-8\">&#182;</a>
              </div>
              <p>Value could be overriden in DOM</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'function'</span> === <span class=\"hljs-keyword\">typeof</span> <span class=\"hljs-keyword\">this</span>.options.value)
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>.options.value(<span class=\"hljs-keyword\">this</span>);
    <span class=\"hljs-keyword\">else</span> <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'undefined'</span> !== <span class=\"hljs-keyword\">typeof</span> <span class=\"hljs-keyword\">this</span>.options.value)
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>.options.value;</pre></div></div>
            
        </li>
        
        
        <li id=\"section-9\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-9\">&#182;</a>
              </div>
              <p>Radio input case</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-keyword\">this</span>.element.nodeName === <span class=\"hljs-string\">'INPUT'</span>) {
      <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-keyword\">this</span>.element.type === <span class=\"hljs-string\">'radio'</span>)
        <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>._findRelated().filter(<span class=\"hljs-string\">':checked'</span>).val() || <span class=\"hljs-string\">''</span>;</pre></div></div>
            
        </li>
        
        
        <li id=\"section-10\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-10\">&#182;</a>
              </div>
              <p>checkbox input case</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>      <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-keyword\">this</span>.element.type === <span class=\"hljs-string\">'checkbox'</span>) {
        <span class=\"hljs-keyword\">var</span> values = [];

        <span class=\"hljs-keyword\">this</span>._findRelated().filter(<span class=\"hljs-string\">':checked'</span>).each(<span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
          values.push(\$(<span class=\"hljs-keyword\">this</span>).val());
        });

        <span class=\"hljs-keyword\">return</span> values;
      }
    }</pre></div></div>
            
        </li>
        
        
        <li id=\"section-11\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-11\">&#182;</a>
              </div>
              <p>Select multiple case</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-keyword\">this</span>.element.nodeName === <span class=\"hljs-string\">'SELECT'</span> &amp;&amp; <span class=\"hljs-literal\">null</span> === <span class=\"hljs-keyword\">this</span>.\$element.val())
      <span class=\"hljs-keyword\">return</span> [];</pre></div></div>
            
        </li>
        
        
        <li id=\"section-12\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-12\">&#182;</a>
              </div>
              <p>Default case that should never happen</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>.\$element.val();
  },

  <span class=\"hljs-attr\">_init</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">this</span>.\$elements = [<span class=\"hljs-keyword\">this</span>.\$element];

    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>;
  }
};

<span class=\"hljs-keyword\">export</span> <span class=\"hljs-keyword\">default</span> Multiple;</pre></div></div>
            
        </li>
        
    </ul>
  </div>
<script>var _gaq=_gaq||[];_gaq.push([\"_setAccount\",\"UA-37229467-1\"]);_gaq.push([\"_trackPageview\"]);(function(){var e=document.createElement(\"script\");e.type=\"text/javascript\";e.async=true;e.src=(\"https:\"==document.location.protocol?\"https://ssl\":\"http://www\")+\".google-analytics.com/ga.js\";var t=document.getElementsByTagName(\"script\")[0];t.parentNode.insertBefore(e,t)})();</script></body>
</html>
";
        
        $__internal_f29d2f442ae0487f15b1f78c26dda57279e69aacd0cfaf7af4d935b20cfbb91e->leave($__internal_f29d2f442ae0487f15b1f78c26dda57279e69aacd0cfaf7af4d935b20cfbb91e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/doc/annotated-source/multiple.html";
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
  <title>multiple.js</title>
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
                  <h1>multiple.js</h1>
              </div>
          </li>
        
        
        
        <li id=\"section-1\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-1\">&#182;</a>
              </div>
              
            </div>
            
            <div class=\"content\"><div class='highlight'><pre><span class=\"hljs-keyword\">import</span> \$ <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'jquery'</span>;

<span class=\"hljs-keyword\">var</span> Multiple = <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
  <span class=\"hljs-keyword\">this</span>.__class__ = <span class=\"hljs-string\">'FieldMultiple'</span>;
};

Multiple.prototype = {</pre></div></div>
            
        </li>
        
        
        <li id=\"section-2\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-2\">&#182;</a>
              </div>
              <p>Add new <code>\$element</code> sibling for multiple field</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  addElement: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">\$element</span>) </span>{
    <span class=\"hljs-keyword\">this</span>.\$elements.push(\$element);

    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>;
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-3\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-3\">&#182;</a>
              </div>
              <p>See <code>Field.refreshConstraints()</code></p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  refreshConstraints: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">var</span> fieldConstraints;

    <span class=\"hljs-keyword\">this</span>.constraints = [];</pre></div></div>
            
        </li>
        
        
        <li id=\"section-4\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-4\">&#182;</a>
              </div>
              <p>Select multiple special treatment</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-keyword\">this</span>.element.nodeName === <span class=\"hljs-string\">'SELECT'</span>) {
      <span class=\"hljs-keyword\">this</span>.actualizeOptions()._bindConstraints();

      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>;
    }</pre></div></div>
            
        </li>
        
        
        <li id=\"section-5\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-5\">&#182;</a>
              </div>
              <p>Gather all constraints for each input in the multiple group</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">for</span> (<span class=\"hljs-keyword\">var</span> i = <span class=\"hljs-number\">0</span>; i &lt; <span class=\"hljs-keyword\">this</span>.\$elements.length; i++) {</pre></div></div>
            
        </li>
        
        
        <li id=\"section-6\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-6\">&#182;</a>
              </div>
              <p>Check if element have not been dynamically removed since last binding</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>      <span class=\"hljs-keyword\">if</span> (!\$(<span class=\"hljs-string\">'html'</span>).has(<span class=\"hljs-keyword\">this</span>.\$elements[i]).length) {
        <span class=\"hljs-keyword\">this</span>.\$elements.splice(i, <span class=\"hljs-number\">1</span>);
        <span class=\"hljs-keyword\">continue</span>;
      }

      fieldConstraints = <span class=\"hljs-keyword\">this</span>.\$elements[i].data(<span class=\"hljs-string\">'FieldMultiple'</span>).refreshConstraints().constraints;

      <span class=\"hljs-keyword\">for</span> (<span class=\"hljs-keyword\">var</span> j = <span class=\"hljs-number\">0</span>; j &lt; fieldConstraints.length; j++)
        <span class=\"hljs-keyword\">this</span>.addConstraint(fieldConstraints[j].name, fieldConstraints[j].requirements, fieldConstraints[j].priority, fieldConstraints[j].isDomConstraint);
    }

    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>;
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-7\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-7\">&#182;</a>
              </div>
              <p>See <code>Field.getValue()</code></p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  getValue: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{</pre></div></div>
            
        </li>
        
        
        <li id=\"section-8\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-8\">&#182;</a>
              </div>
              <p>Value could be overriden in DOM</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'function'</span> === <span class=\"hljs-keyword\">typeof</span> <span class=\"hljs-keyword\">this</span>.options.value)
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>.options.value(<span class=\"hljs-keyword\">this</span>);
    <span class=\"hljs-keyword\">else</span> <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'undefined'</span> !== <span class=\"hljs-keyword\">typeof</span> <span class=\"hljs-keyword\">this</span>.options.value)
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>.options.value;</pre></div></div>
            
        </li>
        
        
        <li id=\"section-9\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-9\">&#182;</a>
              </div>
              <p>Radio input case</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-keyword\">this</span>.element.nodeName === <span class=\"hljs-string\">'INPUT'</span>) {
      <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-keyword\">this</span>.element.type === <span class=\"hljs-string\">'radio'</span>)
        <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>._findRelated().filter(<span class=\"hljs-string\">':checked'</span>).val() || <span class=\"hljs-string\">''</span>;</pre></div></div>
            
        </li>
        
        
        <li id=\"section-10\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-10\">&#182;</a>
              </div>
              <p>checkbox input case</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>      <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-keyword\">this</span>.element.type === <span class=\"hljs-string\">'checkbox'</span>) {
        <span class=\"hljs-keyword\">var</span> values = [];

        <span class=\"hljs-keyword\">this</span>._findRelated().filter(<span class=\"hljs-string\">':checked'</span>).each(<span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
          values.push(\$(<span class=\"hljs-keyword\">this</span>).val());
        });

        <span class=\"hljs-keyword\">return</span> values;
      }
    }</pre></div></div>
            
        </li>
        
        
        <li id=\"section-11\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-11\">&#182;</a>
              </div>
              <p>Select multiple case</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-keyword\">this</span>.element.nodeName === <span class=\"hljs-string\">'SELECT'</span> &amp;&amp; <span class=\"hljs-literal\">null</span> === <span class=\"hljs-keyword\">this</span>.\$element.val())
      <span class=\"hljs-keyword\">return</span> [];</pre></div></div>
            
        </li>
        
        
        <li id=\"section-12\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-12\">&#182;</a>
              </div>
              <p>Default case that should never happen</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>.\$element.val();
  },

  <span class=\"hljs-attr\">_init</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">this</span>.\$elements = [<span class=\"hljs-keyword\">this</span>.\$element];

    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>;
  }
};

<span class=\"hljs-keyword\">export</span> <span class=\"hljs-keyword\">default</span> Multiple;</pre></div></div>
            
        </li>
        
    </ul>
  </div>
<script>var _gaq=_gaq||[];_gaq.push([\"_setAccount\",\"UA-37229467-1\"]);_gaq.push([\"_trackPageview\"]);(function(){var e=document.createElement(\"script\");e.type=\"text/javascript\";e.async=true;e.src=(\"https:\"==document.location.protocol?\"https://ssl\":\"http://www\")+\".google-analytics.com/ga.js\";var t=document.getElementsByTagName(\"script\")[0];t.parentNode.insertBefore(e,t)})();</script></body>
</html>
", "node_modules/parsleyjs/doc/annotated-source/multiple.html", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/doc/annotated-source/multiple.html");
    }
}
