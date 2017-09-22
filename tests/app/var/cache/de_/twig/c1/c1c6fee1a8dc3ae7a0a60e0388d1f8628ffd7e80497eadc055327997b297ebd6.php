<?php

/* node_modules/parsleyjs/doc/annotated-source/field.html */
class __TwigTemplate_d34f9318b7132b5bd6185de1e47d9dc4ed20fe72d7e142d28fd01b5bed87d585 extends Twig_Template
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
        $__internal_24e7d510756d3a106c148e21b63d68860ba1c63f3b46fd5776bc012edaf61eba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24e7d510756d3a106c148e21b63d68860ba1c63f3b46fd5776bc012edaf61eba->enter($__internal_24e7d510756d3a106c148e21b63d68860ba1c63f3b46fd5776bc012edaf61eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/doc/annotated-source/field.html"));

        // line 1
        echo "<!DOCTYPE html>

<html>
<head>
  <title>field.js</title>
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
                  <h1>field.js</h1>
              </div>
          </li>
        
        
        
        <li id=\"section-1\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-1\">&#182;</a>
              </div>
              
            </div>
            
            <div class=\"content\"><div class='highlight'><pre><span class=\"hljs-keyword\">import</span> \$ <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'jquery'</span>;
<span class=\"hljs-keyword\">import</span> Constraint <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'./constraint'</span>;
<span class=\"hljs-keyword\">import</span> UI <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'./ui'</span>;
<span class=\"hljs-keyword\">import</span> Utils <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'./utils'</span>;

<span class=\"hljs-keyword\">var</span> Field = <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">field, domOptions, options, parsleyFormInstance</span>) </span>{
  <span class=\"hljs-keyword\">this</span>.__class__ = <span class=\"hljs-string\">'Field'</span>;

  <span class=\"hljs-keyword\">this</span>.element = field;
  <span class=\"hljs-keyword\">this</span>.\$element = \$(field);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-2\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-2\">&#182;</a>
              </div>
              <p>Set parent if we have one</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'undefined'</span> !== <span class=\"hljs-keyword\">typeof</span> parsleyFormInstance) {
    <span class=\"hljs-keyword\">this</span>.parent = parsleyFormInstance;
  }

  <span class=\"hljs-keyword\">this</span>.options = options;
  <span class=\"hljs-keyword\">this</span>.domOptions = domOptions;</pre></div></div>
            
        </li>
        
        
        <li id=\"section-3\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-3\">&#182;</a>
              </div>
              <p>Initialize some properties</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  <span class=\"hljs-keyword\">this</span>.constraints = [];
  <span class=\"hljs-keyword\">this</span>.constraintsByName = {};
  <span class=\"hljs-keyword\">this</span>.validationResult = <span class=\"hljs-literal\">true</span>;</pre></div></div>
            
        </li>
        
        
        <li id=\"section-4\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-4\">&#182;</a>
              </div>
              <p>Bind constraints</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  <span class=\"hljs-keyword\">this</span>._bindConstraints();
};

<span class=\"hljs-keyword\">var</span> statusMapping = {<span class=\"hljs-attr\">pending</span>: <span class=\"hljs-literal\">null</span>, <span class=\"hljs-attr\">resolved</span>: <span class=\"hljs-literal\">true</span>, <span class=\"hljs-attr\">rejected</span>: <span class=\"hljs-literal\">false</span>};

Field.prototype = {</pre></div></div>
            
        </li>
        
        
        <li id=\"section-5\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-5\">&#182;</a>
              </div>
              <h1 id=\"public-api\">Public API</h1>
<p>Validate field and trigger some events for mainly <code>UI</code>
@returns <code>true</code>, an array of the validators that failed, or
<code>null</code> if validation is not finished. Prefer using whenValidate</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  validate: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">options</span>) </span>{
    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-built_in\">arguments</span>.length &gt;= <span class=\"hljs-number\">1</span> &amp;&amp; !\$.isPlainObject(options)) {
      Utils.warnOnce(<span class=\"hljs-string\">'Calling validate on a parsley field without passing arguments as an object is deprecated.'</span>);
      options = {options};
    }
    <span class=\"hljs-keyword\">var</span> promise = <span class=\"hljs-keyword\">this</span>.whenValidate(options);
    <span class=\"hljs-keyword\">if</span> (!promise)  <span class=\"hljs-comment\">// If excluded with `group` option</span>
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-literal\">true</span>;
    <span class=\"hljs-keyword\">switch</span> (promise.state()) {
      <span class=\"hljs-keyword\">case</span> <span class=\"hljs-string\">'pending'</span>: <span class=\"hljs-keyword\">return</span> <span class=\"hljs-literal\">null</span>;
      <span class=\"hljs-keyword\">case</span> <span class=\"hljs-string\">'resolved'</span>: <span class=\"hljs-keyword\">return</span> <span class=\"hljs-literal\">true</span>;
      <span class=\"hljs-keyword\">case</span> <span class=\"hljs-string\">'rejected'</span>: <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>.validationResult;
    }
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-6\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-6\">&#182;</a>
              </div>
              <p>Validate field and trigger some events for mainly <code>UI</code>
@returns a promise that succeeds only when all validations do
or <code>undefined</code> if field is not in the given <code>group</code>.</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  whenValidate: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">{force, group} =  {}</span>) </span>{</pre></div></div>
            
        </li>
        
        
        <li id=\"section-7\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-7\">&#182;</a>
              </div>
              <p>do not validate a field if not the same as given validation group</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">this</span>.refreshConstraints();
    <span class=\"hljs-keyword\">if</span> (group &amp;&amp; !<span class=\"hljs-keyword\">this</span>._isInGroup(group))
      <span class=\"hljs-keyword\">return</span>;

    <span class=\"hljs-keyword\">this</span>.value = <span class=\"hljs-keyword\">this</span>.getValue();</pre></div></div>
            
        </li>
        
        
        <li id=\"section-8\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-8\">&#182;</a>
              </div>
              <p>Field Validate event. <code>this.value</code> could be altered for custom needs</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">this</span>._trigger(<span class=\"hljs-string\">'validate'</span>);

    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>.whenValid({force, <span class=\"hljs-attr\">value</span>: <span class=\"hljs-keyword\">this</span>.value, <span class=\"hljs-attr\">_refreshed</span>: <span class=\"hljs-literal\">true</span>})
      .always(<span class=\"hljs-function\"><span class=\"hljs-params\">()</span> =&gt;</span> { <span class=\"hljs-keyword\">this</span>._reflowUI(); })
      .done(<span class=\"hljs-function\"><span class=\"hljs-params\">()</span> =&gt;</span>   { <span class=\"hljs-keyword\">this</span>._trigger(<span class=\"hljs-string\">'success'</span>); })
      .fail(<span class=\"hljs-function\"><span class=\"hljs-params\">()</span> =&gt;</span>   { <span class=\"hljs-keyword\">this</span>._trigger(<span class=\"hljs-string\">'error'</span>); })
      .always(<span class=\"hljs-function\"><span class=\"hljs-params\">()</span> =&gt;</span> { <span class=\"hljs-keyword\">this</span>._trigger(<span class=\"hljs-string\">'validated'</span>); })
      .pipe(...this._pipeAccordingToValidationResult());
  },

  <span class=\"hljs-attr\">hasConstraints</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-number\">0</span> !== <span class=\"hljs-keyword\">this</span>.constraints.length;
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-9\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-9\">&#182;</a>
              </div>
              <p>An empty optional field does not need validation</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  needsValidation: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">value</span>) </span>{
    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'undefined'</span> === <span class=\"hljs-keyword\">typeof</span> value)
      value = <span class=\"hljs-keyword\">this</span>.getValue();</pre></div></div>
            
        </li>
        
        
        <li id=\"section-10\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-10\">&#182;</a>
              </div>
              <p>If a field is empty and not required, it is valid
Except if <code>data-parsley-validate-if-empty</code> explicitely added, useful for some custom validators</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (!value.length &amp;&amp; !<span class=\"hljs-keyword\">this</span>._isRequired() &amp;&amp; <span class=\"hljs-string\">'undefined'</span> === <span class=\"hljs-keyword\">typeof</span> <span class=\"hljs-keyword\">this</span>.options.validateIfEmpty)
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-literal\">false</span>;

    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-literal\">true</span>;
  },

  <span class=\"hljs-attr\">_isInGroup</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">group</span>) </span>{
    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-built_in\">Array</span>.isArray(<span class=\"hljs-keyword\">this</span>.options.group))
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-number\">-1</span> !== \$.inArray(group, <span class=\"hljs-keyword\">this</span>.options.group);
    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>.options.group === group;
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-11\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-11\">&#182;</a>
              </div>
              <p>Just validate field. Do not trigger any event.
Returns <code>true</code> iff all constraints pass, <code>false</code> if there are failures,
or <code>null</code> if the result can not be determined yet (depends on a promise)
See also <code>whenValid</code>.</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  isValid: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">options</span>) </span>{
    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-built_in\">arguments</span>.length &gt;= <span class=\"hljs-number\">1</span> &amp;&amp; !\$.isPlainObject(options)) {
      Utils.warnOnce(<span class=\"hljs-string\">'Calling isValid on a parsley field without passing arguments as an object is deprecated.'</span>);
      <span class=\"hljs-keyword\">var</span> [force, value] = <span class=\"hljs-built_in\">arguments</span>;
      options = {force, value};
    }
    <span class=\"hljs-keyword\">var</span> promise = <span class=\"hljs-keyword\">this</span>.whenValid(options);
    <span class=\"hljs-keyword\">if</span> (!promise) <span class=\"hljs-comment\">// Excluded via `group`</span>
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-literal\">true</span>;
    <span class=\"hljs-keyword\">return</span> statusMapping[promise.state()];
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-12\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-12\">&#182;</a>
              </div>
              <p>Just validate field. Do not trigger any event.
@returns a promise that succeeds only when all validations do
or <code>undefined</code> if the field is not in the given <code>group</code>.
The argument <code>force</code> will force validation of empty fields.
If a <code>value</code> is given, it will be validated instead of the value of the input.</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  whenValid: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">{force = false, value, group, _refreshed} = {}</span>) </span>{</pre></div></div>
            
        </li>
        
        
        <li id=\"section-13\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-13\">&#182;</a>
              </div>
              <p>Recompute options and rebind constraints to have latest changes</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (!_refreshed)
      <span class=\"hljs-keyword\">this</span>.refreshConstraints();</pre></div></div>
            
        </li>
        
        
        <li id=\"section-14\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-14\">&#182;</a>
              </div>
              <p>do not validate a field if not the same as given validation group</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (group &amp;&amp; !<span class=\"hljs-keyword\">this</span>._isInGroup(group))
      <span class=\"hljs-keyword\">return</span>;

    <span class=\"hljs-keyword\">this</span>.validationResult = <span class=\"hljs-literal\">true</span>;</pre></div></div>
            
        </li>
        
        
        <li id=\"section-15\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-15\">&#182;</a>
              </div>
              <p>A field without constraint is valid</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (!<span class=\"hljs-keyword\">this</span>.hasConstraints())
      <span class=\"hljs-keyword\">return</span> \$.when();</pre></div></div>
            
        </li>
        
        
        <li id=\"section-16\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-16\">&#182;</a>
              </div>
              <p>Value could be passed as argument, needed to add more power to ‘field:validate’</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'undefined'</span> === <span class=\"hljs-keyword\">typeof</span> value || <span class=\"hljs-literal\">null</span> === value)
      value = <span class=\"hljs-keyword\">this</span>.getValue();

    <span class=\"hljs-keyword\">if</span> (!<span class=\"hljs-keyword\">this</span>.needsValidation(value) &amp;&amp; <span class=\"hljs-literal\">true</span> !== force)
      <span class=\"hljs-keyword\">return</span> \$.when();

    <span class=\"hljs-keyword\">var</span> groupedConstraints = <span class=\"hljs-keyword\">this</span>._getGroupedConstraints();
    <span class=\"hljs-keyword\">var</span> promises = [];
    \$.each(groupedConstraints, (_, constraints) =&gt; {</pre></div></div>
            
        </li>
        
        
        <li id=\"section-17\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-17\">&#182;</a>
              </div>
              <p>Process one group of constraints at a time, we validate the constraints
and combine the promises together.</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>      <span class=\"hljs-keyword\">var</span> promise = Utils.all(
        \$.map(constraints, constraint =&gt; <span class=\"hljs-keyword\">this</span>._validateConstraint(value, constraint))
      );
      promises.push(promise);
      <span class=\"hljs-keyword\">if</span> (promise.state() === <span class=\"hljs-string\">'rejected'</span>)
        <span class=\"hljs-keyword\">return</span> <span class=\"hljs-literal\">false</span>; <span class=\"hljs-comment\">// Interrupt processing if a group has already failed</span>
    });
    <span class=\"hljs-keyword\">return</span> Utils.all(promises);
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-18\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-18\">&#182;</a>
              </div>
              <p>@returns a promise</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  _validateConstraint: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\">value, constraint</span>) </span>{
    <span class=\"hljs-keyword\">var</span> result = constraint.validate(value, <span class=\"hljs-keyword\">this</span>);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-19\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-19\">&#182;</a>
              </div>
              <p>Map false to a failed promise</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-literal\">false</span> === result)
      result = \$.Deferred().reject();</pre></div></div>
            
        </li>
        
        
        <li id=\"section-20\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-20\">&#182;</a>
              </div>
              <p>Make sure we return a promise and that we record failures</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">return</span> Utils.all([result]).fail(<span class=\"hljs-function\"><span class=\"hljs-params\">errorMessage</span> =&gt;</span> {
      <span class=\"hljs-keyword\">if</span> (!(<span class=\"hljs-keyword\">this</span>.validationResult <span class=\"hljs-keyword\">instanceof</span> <span class=\"hljs-built_in\">Array</span>))
        <span class=\"hljs-keyword\">this</span>.validationResult = [];
      <span class=\"hljs-keyword\">this</span>.validationResult.push({
        <span class=\"hljs-attr\">assert</span>: constraint,
        <span class=\"hljs-attr\">errorMessage</span>: <span class=\"hljs-string\">'string'</span> === <span class=\"hljs-keyword\">typeof</span> errorMessage &amp;&amp; errorMessage
      });
    });
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-21\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-21\">&#182;</a>
              </div>
              <p>@returns Parsley field computed value that could be overrided or configured in DOM</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  getValue: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">var</span> value;</pre></div></div>
            
        </li>
        
        
        <li id=\"section-22\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-22\">&#182;</a>
              </div>
              <p>Value could be overriden in DOM or with explicit options</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'function'</span> === <span class=\"hljs-keyword\">typeof</span> <span class=\"hljs-keyword\">this</span>.options.value)
      value = <span class=\"hljs-keyword\">this</span>.options.value(<span class=\"hljs-keyword\">this</span>);
    <span class=\"hljs-keyword\">else</span> <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'undefined'</span> !== <span class=\"hljs-keyword\">typeof</span> <span class=\"hljs-keyword\">this</span>.options.value)
      value = <span class=\"hljs-keyword\">this</span>.options.value;
    <span class=\"hljs-keyword\">else</span>
      value = <span class=\"hljs-keyword\">this</span>.\$element.val();</pre></div></div>
            
        </li>
        
        
        <li id=\"section-23\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-23\">&#182;</a>
              </div>
              <p>Handle wrong DOM or configurations</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'undefined'</span> === <span class=\"hljs-keyword\">typeof</span> value || <span class=\"hljs-literal\">null</span> === value)
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-string\">''</span>;

    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>._handleWhitespace(value);
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-24\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-24\">&#182;</a>
              </div>
              <p>Reset UI</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  reset: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">this</span>._resetUI();
    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>._trigger(<span class=\"hljs-string\">'reset'</span>);
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-25\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-25\">&#182;</a>
              </div>
              <p>Destroy Parsley instance (+ UI)</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  destroy: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{</pre></div></div>
            
        </li>
        
        
        <li id=\"section-26\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-26\">&#182;</a>
              </div>
              <p>Field case: emit destroy event to clean UI and then destroy stored instance</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">this</span>._destroyUI();
    <span class=\"hljs-keyword\">this</span>.\$element.removeData(<span class=\"hljs-string\">'Parsley'</span>);
    <span class=\"hljs-keyword\">this</span>.\$element.removeData(<span class=\"hljs-string\">'FieldMultiple'</span>);
    <span class=\"hljs-keyword\">this</span>._trigger(<span class=\"hljs-string\">'destroy'</span>);
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-27\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-27\">&#182;</a>
              </div>
              <p>Actualize options that could have change since previous validation
Re-bind accordingly constraints (could be some new, removed or updated)</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  refreshConstraints: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>.actualizeOptions()._bindConstraints();
  },

  <span class=\"hljs-comment\">/**
  * Add a new constraint to a field
  *
  * @param {String}   name
  * @param {Mixed}    requirements      optional
  * @param {Number}   priority          optional
  * @param {Boolean}  isDomConstraint   optional
  */</span>
  addConstraint: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">name, requirements, priority, isDomConstraint</span>) </span>{

    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-built_in\">window</span>.Parsley._validatorRegistry.validators[name]) {
      <span class=\"hljs-keyword\">var</span> constraint = <span class=\"hljs-keyword\">new</span> Constraint(<span class=\"hljs-keyword\">this</span>, name, requirements, priority, isDomConstraint);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-28\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-28\">&#182;</a>
              </div>
              <p>if constraint already exist, delete it and push new version</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>      <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'undefined'</span> !== <span class=\"hljs-keyword\">this</span>.constraintsByName[constraint.name])
        <span class=\"hljs-keyword\">this</span>.removeConstraint(constraint.name);

      <span class=\"hljs-keyword\">this</span>.constraints.push(constraint);
      <span class=\"hljs-keyword\">this</span>.constraintsByName[constraint.name] = constraint;
    }

    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>;
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-29\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-29\">&#182;</a>
              </div>
              <p>Remove a constraint</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  removeConstraint: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">name</span>) </span>{
    <span class=\"hljs-keyword\">for</span> (<span class=\"hljs-keyword\">var</span> i = <span class=\"hljs-number\">0</span>; i &lt; <span class=\"hljs-keyword\">this</span>.constraints.length; i++)
      <span class=\"hljs-keyword\">if</span> (name === <span class=\"hljs-keyword\">this</span>.constraints[i].name) {
        <span class=\"hljs-keyword\">this</span>.constraints.splice(i, <span class=\"hljs-number\">1</span>);
        <span class=\"hljs-keyword\">break</span>;
      }
    <span class=\"hljs-keyword\">delete</span> <span class=\"hljs-keyword\">this</span>.constraintsByName[name];
    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>;
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-30\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-30\">&#182;</a>
              </div>
              <p>Update a constraint (Remove + re-add)</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  updateConstraint: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">name, parameters, priority</span>) </span>{
    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>.removeConstraint(name)
      .addConstraint(name, parameters, priority);
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-31\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-31\">&#182;</a>
              </div>
              <h1 id=\"internals\">Internals</h1>

            </div>
            
        </li>
        
        
        <li id=\"section-32\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-32\">&#182;</a>
              </div>
              <p>Internal only.
Bind constraints from config + options + DOM</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  _bindConstraints: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">var</span> constraints = [];
    <span class=\"hljs-keyword\">var</span> constraintsByName = {};</pre></div></div>
            
        </li>
        
        
        <li id=\"section-33\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-33\">&#182;</a>
              </div>
              <p>clean all existing DOM constraints to only keep javascript user constraints</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">for</span> (<span class=\"hljs-keyword\">var</span> i = <span class=\"hljs-number\">0</span>; i &lt; <span class=\"hljs-keyword\">this</span>.constraints.length; i++)
      <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-literal\">false</span> === <span class=\"hljs-keyword\">this</span>.constraints[i].isDomConstraint) {
        constraints.push(<span class=\"hljs-keyword\">this</span>.constraints[i]);
        constraintsByName[<span class=\"hljs-keyword\">this</span>.constraints[i].name] = <span class=\"hljs-keyword\">this</span>.constraints[i];
      }

    <span class=\"hljs-keyword\">this</span>.constraints = constraints;
    <span class=\"hljs-keyword\">this</span>.constraintsByName = constraintsByName;</pre></div></div>
            
        </li>
        
        
        <li id=\"section-34\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-34\">&#182;</a>
              </div>
              <p>then re-add Parsley DOM-API constraints</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">for</span> (<span class=\"hljs-keyword\">var</span> name <span class=\"hljs-keyword\">in</span> <span class=\"hljs-keyword\">this</span>.options)
      <span class=\"hljs-keyword\">this</span>.addConstraint(name, <span class=\"hljs-keyword\">this</span>.options[name], <span class=\"hljs-literal\">undefined</span>, <span class=\"hljs-literal\">true</span>);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-35\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-35\">&#182;</a>
              </div>
              <p>finally, bind special HTML5 constraints</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>._bindHtml5Constraints();
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-36\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-36\">&#182;</a>
              </div>
              <p>Internal only.
Bind specific HTML5 constraints to be HTML5 compliant</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  _bindHtml5Constraints: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{</pre></div></div>
            
        </li>
        
        
        <li id=\"section-37\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-37\">&#182;</a>
              </div>
              <p>html5 required</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-literal\">null</span> !== <span class=\"hljs-keyword\">this</span>.element.getAttribute(<span class=\"hljs-string\">'required'</span>))
      <span class=\"hljs-keyword\">this</span>.addConstraint(<span class=\"hljs-string\">'required'</span>, <span class=\"hljs-literal\">true</span>, <span class=\"hljs-literal\">undefined</span>, <span class=\"hljs-literal\">true</span>);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-38\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-38\">&#182;</a>
              </div>
              <p>html5 pattern</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-literal\">null</span> !== <span class=\"hljs-keyword\">this</span>.element.getAttribute(<span class=\"hljs-string\">'pattern'</span>))
      <span class=\"hljs-keyword\">this</span>.addConstraint(<span class=\"hljs-string\">'pattern'</span>, <span class=\"hljs-keyword\">this</span>.element.getAttribute(<span class=\"hljs-string\">'pattern'</span>), <span class=\"hljs-literal\">undefined</span>, <span class=\"hljs-literal\">true</span>);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-39\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-39\">&#182;</a>
              </div>
              <p>range</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">let</span> min = <span class=\"hljs-keyword\">this</span>.element.getAttribute(<span class=\"hljs-string\">'min'</span>);
    <span class=\"hljs-keyword\">let</span> max = <span class=\"hljs-keyword\">this</span>.element.getAttribute(<span class=\"hljs-string\">'max'</span>);
    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-literal\">null</span> !== min &amp;&amp; <span class=\"hljs-literal\">null</span> !== max)
      <span class=\"hljs-keyword\">this</span>.addConstraint(<span class=\"hljs-string\">'range'</span>, [min, max], <span class=\"hljs-literal\">undefined</span>, <span class=\"hljs-literal\">true</span>);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-40\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-40\">&#182;</a>
              </div>
              <p>HTML5 min</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">else</span> <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-literal\">null</span> !== min)
      <span class=\"hljs-keyword\">this</span>.addConstraint(<span class=\"hljs-string\">'min'</span>, min, <span class=\"hljs-literal\">undefined</span>, <span class=\"hljs-literal\">true</span>);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-41\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-41\">&#182;</a>
              </div>
              <p>HTML5 max</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">else</span> <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-literal\">null</span> !== max)
      <span class=\"hljs-keyword\">this</span>.addConstraint(<span class=\"hljs-string\">'max'</span>, max, <span class=\"hljs-literal\">undefined</span>, <span class=\"hljs-literal\">true</span>);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-42\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-42\">&#182;</a>
              </div>
              <p>length</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-literal\">null</span> !== <span class=\"hljs-keyword\">this</span>.element.getAttribute(<span class=\"hljs-string\">'minlength'</span>) &amp;&amp; <span class=\"hljs-literal\">null</span> !== <span class=\"hljs-keyword\">this</span>.element.getAttribute(<span class=\"hljs-string\">'maxlength'</span>))
      <span class=\"hljs-keyword\">this</span>.addConstraint(<span class=\"hljs-string\">'length'</span>, [<span class=\"hljs-keyword\">this</span>.element.getAttribute(<span class=\"hljs-string\">'minlength'</span>), <span class=\"hljs-keyword\">this</span>.element.getAttribute(<span class=\"hljs-string\">'maxlength'</span>)], <span class=\"hljs-literal\">undefined</span>, <span class=\"hljs-literal\">true</span>);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-43\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-43\">&#182;</a>
              </div>
              <p>HTML5 minlength</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">else</span> <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-literal\">null</span> !== <span class=\"hljs-keyword\">this</span>.element.getAttribute(<span class=\"hljs-string\">'minlength'</span>))
      <span class=\"hljs-keyword\">this</span>.addConstraint(<span class=\"hljs-string\">'minlength'</span>, <span class=\"hljs-keyword\">this</span>.element.getAttribute(<span class=\"hljs-string\">'minlength'</span>), <span class=\"hljs-literal\">undefined</span>, <span class=\"hljs-literal\">true</span>);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-44\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-44\">&#182;</a>
              </div>
              <p>HTML5 maxlength</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">else</span> <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-literal\">null</span> !== <span class=\"hljs-keyword\">this</span>.element.getAttribute(<span class=\"hljs-string\">'maxlength'</span>))
      <span class=\"hljs-keyword\">this</span>.addConstraint(<span class=\"hljs-string\">'maxlength'</span>, <span class=\"hljs-keyword\">this</span>.element.getAttribute(<span class=\"hljs-string\">'maxlength'</span>), <span class=\"hljs-literal\">undefined</span>, <span class=\"hljs-literal\">true</span>);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-45\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-45\">&#182;</a>
              </div>
              <p>html5 types</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">var</span> type = <span class=\"hljs-keyword\">this</span>.element.type;</pre></div></div>
            
        </li>
        
        
        <li id=\"section-46\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-46\">&#182;</a>
              </div>
              <p>Small special case here for HTML5 number: integer validator if step attribute is undefined or an integer value, number otherwise</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'number'</span> === type) {
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>.addConstraint(<span class=\"hljs-string\">'type'</span>, [<span class=\"hljs-string\">'number'</span>, {
        <span class=\"hljs-attr\">step</span>: <span class=\"hljs-keyword\">this</span>.element.getAttribute(<span class=\"hljs-string\">'step'</span>) || <span class=\"hljs-string\">'1'</span>,
        <span class=\"hljs-attr\">base</span>: min || <span class=\"hljs-keyword\">this</span>.element.getAttribute(<span class=\"hljs-string\">'value'</span>)
      }], <span class=\"hljs-literal\">undefined</span>, <span class=\"hljs-literal\">true</span>);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-47\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-47\">&#182;</a>
              </div>
              <p>Regular other HTML5 supported types</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    } <span class=\"hljs-keyword\">else</span> <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-regexp\">/^(email|url|range|date)\$/i</span>.test(type)) {
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>.addConstraint(<span class=\"hljs-string\">'type'</span>, type, <span class=\"hljs-literal\">undefined</span>, <span class=\"hljs-literal\">true</span>);
    }
    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>;
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-48\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-48\">&#182;</a>
              </div>
              <p>Internal only.
Field is required if have required constraint without <code>false</code> value</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  _isRequired: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'undefined'</span> === <span class=\"hljs-keyword\">typeof</span> <span class=\"hljs-keyword\">this</span>.constraintsByName.required)
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-literal\">false</span>;

    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-literal\">false</span> !== <span class=\"hljs-keyword\">this</span>.constraintsByName.required.requirements;
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-49\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-49\">&#182;</a>
              </div>
              <p>Internal only.
Shortcut to trigger an event</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  _trigger: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">eventName</span>) </span>{
    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>.trigger(<span class=\"hljs-string\">'field:'</span> + eventName);
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-50\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-50\">&#182;</a>
              </div>
              <p>Internal only
Handles whitespace in a value
Use <code>data-parsley-whitespace=&quot;squish&quot;</code> to auto squish input value
Use <code>data-parsley-whitespace=&quot;trim&quot;</code> to auto trim input value</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  _handleWhitespace: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">value</span>) </span>{
    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-literal\">true</span> === <span class=\"hljs-keyword\">this</span>.options.trimValue)
      Utils.warnOnce(<span class=\"hljs-string\">'data-parsley-trim-value=\"true\" is deprecated, please use data-parsley-whitespace=\"trim\"'</span>);

    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'squish'</span> === <span class=\"hljs-keyword\">this</span>.options.whitespace)
      value = value.replace(<span class=\"hljs-regexp\">/\\s{2,}/g</span>, <span class=\"hljs-string\">' '</span>);

    <span class=\"hljs-keyword\">if</span> ((<span class=\"hljs-string\">'trim'</span> === <span class=\"hljs-keyword\">this</span>.options.whitespace) || (<span class=\"hljs-string\">'squish'</span> === <span class=\"hljs-keyword\">this</span>.options.whitespace) || (<span class=\"hljs-literal\">true</span> === <span class=\"hljs-keyword\">this</span>.options.trimValue))
      value = Utils.trimString(value);

    <span class=\"hljs-keyword\">return</span> value;
  },

  <span class=\"hljs-attr\">_isDateInput</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">var</span> c = <span class=\"hljs-keyword\">this</span>.constraintsByName.type;
    <span class=\"hljs-keyword\">return</span> c &amp;&amp; c.requirements === <span class=\"hljs-string\">'date'</span>;
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-51\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-51\">&#182;</a>
              </div>
              <p>Internal only.
Returns the constraints, grouped by descending priority.
The result is thus an array of arrays of constraints.</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  _getGroupedConstraints: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-literal\">false</span> === <span class=\"hljs-keyword\">this</span>.options.priorityEnabled)
      <span class=\"hljs-keyword\">return</span> [<span class=\"hljs-keyword\">this</span>.constraints];

    <span class=\"hljs-keyword\">var</span> groupedConstraints = [];
    <span class=\"hljs-keyword\">var</span> index = {};</pre></div></div>
            
        </li>
        
        
        <li id=\"section-52\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-52\">&#182;</a>
              </div>
              <p>Create array unique of priorities</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">for</span> (<span class=\"hljs-keyword\">var</span> i = <span class=\"hljs-number\">0</span>; i &lt; <span class=\"hljs-keyword\">this</span>.constraints.length; i++) {
      <span class=\"hljs-keyword\">var</span> p = <span class=\"hljs-keyword\">this</span>.constraints[i].priority;
      <span class=\"hljs-keyword\">if</span> (!index[p])
        groupedConstraints.push(index[p] = []);
      index[p].push(<span class=\"hljs-keyword\">this</span>.constraints[i]);
    }</pre></div></div>
            
        </li>
        
        
        <li id=\"section-53\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-53\">&#182;</a>
              </div>
              <p>Sort them by priority DESC</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    groupedConstraints.sort(<span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">a, b</span>) </span>{ <span class=\"hljs-keyword\">return</span> b[<span class=\"hljs-number\">0</span>].priority - a[<span class=\"hljs-number\">0</span>].priority; });

    <span class=\"hljs-keyword\">return</span> groupedConstraints;
  }

};

<span class=\"hljs-keyword\">export</span> <span class=\"hljs-keyword\">default</span> Field;</pre></div></div>
            
        </li>
        
    </ul>
  </div>
<script>var _gaq=_gaq||[];_gaq.push([\"_setAccount\",\"UA-37229467-1\"]);_gaq.push([\"_trackPageview\"]);(function(){var e=document.createElement(\"script\");e.type=\"text/javascript\";e.async=true;e.src=(\"https:\"==document.location.protocol?\"https://ssl\":\"http://www\")+\".google-analytics.com/ga.js\";var t=document.getElementsByTagName(\"script\")[0];t.parentNode.insertBefore(e,t)})();</script></body>
</html>
";
        
        $__internal_24e7d510756d3a106c148e21b63d68860ba1c63f3b46fd5776bc012edaf61eba->leave($__internal_24e7d510756d3a106c148e21b63d68860ba1c63f3b46fd5776bc012edaf61eba_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/doc/annotated-source/field.html";
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
  <title>field.js</title>
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
                  <h1>field.js</h1>
              </div>
          </li>
        
        
        
        <li id=\"section-1\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-1\">&#182;</a>
              </div>
              
            </div>
            
            <div class=\"content\"><div class='highlight'><pre><span class=\"hljs-keyword\">import</span> \$ <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'jquery'</span>;
<span class=\"hljs-keyword\">import</span> Constraint <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'./constraint'</span>;
<span class=\"hljs-keyword\">import</span> UI <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'./ui'</span>;
<span class=\"hljs-keyword\">import</span> Utils <span class=\"hljs-keyword\">from</span> <span class=\"hljs-string\">'./utils'</span>;

<span class=\"hljs-keyword\">var</span> Field = <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">field, domOptions, options, parsleyFormInstance</span>) </span>{
  <span class=\"hljs-keyword\">this</span>.__class__ = <span class=\"hljs-string\">'Field'</span>;

  <span class=\"hljs-keyword\">this</span>.element = field;
  <span class=\"hljs-keyword\">this</span>.\$element = \$(field);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-2\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-2\">&#182;</a>
              </div>
              <p>Set parent if we have one</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'undefined'</span> !== <span class=\"hljs-keyword\">typeof</span> parsleyFormInstance) {
    <span class=\"hljs-keyword\">this</span>.parent = parsleyFormInstance;
  }

  <span class=\"hljs-keyword\">this</span>.options = options;
  <span class=\"hljs-keyword\">this</span>.domOptions = domOptions;</pre></div></div>
            
        </li>
        
        
        <li id=\"section-3\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-3\">&#182;</a>
              </div>
              <p>Initialize some properties</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  <span class=\"hljs-keyword\">this</span>.constraints = [];
  <span class=\"hljs-keyword\">this</span>.constraintsByName = {};
  <span class=\"hljs-keyword\">this</span>.validationResult = <span class=\"hljs-literal\">true</span>;</pre></div></div>
            
        </li>
        
        
        <li id=\"section-4\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-4\">&#182;</a>
              </div>
              <p>Bind constraints</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  <span class=\"hljs-keyword\">this</span>._bindConstraints();
};

<span class=\"hljs-keyword\">var</span> statusMapping = {<span class=\"hljs-attr\">pending</span>: <span class=\"hljs-literal\">null</span>, <span class=\"hljs-attr\">resolved</span>: <span class=\"hljs-literal\">true</span>, <span class=\"hljs-attr\">rejected</span>: <span class=\"hljs-literal\">false</span>};

Field.prototype = {</pre></div></div>
            
        </li>
        
        
        <li id=\"section-5\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-5\">&#182;</a>
              </div>
              <h1 id=\"public-api\">Public API</h1>
<p>Validate field and trigger some events for mainly <code>UI</code>
@returns <code>true</code>, an array of the validators that failed, or
<code>null</code> if validation is not finished. Prefer using whenValidate</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  validate: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">options</span>) </span>{
    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-built_in\">arguments</span>.length &gt;= <span class=\"hljs-number\">1</span> &amp;&amp; !\$.isPlainObject(options)) {
      Utils.warnOnce(<span class=\"hljs-string\">'Calling validate on a parsley field without passing arguments as an object is deprecated.'</span>);
      options = {options};
    }
    <span class=\"hljs-keyword\">var</span> promise = <span class=\"hljs-keyword\">this</span>.whenValidate(options);
    <span class=\"hljs-keyword\">if</span> (!promise)  <span class=\"hljs-comment\">// If excluded with `group` option</span>
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-literal\">true</span>;
    <span class=\"hljs-keyword\">switch</span> (promise.state()) {
      <span class=\"hljs-keyword\">case</span> <span class=\"hljs-string\">'pending'</span>: <span class=\"hljs-keyword\">return</span> <span class=\"hljs-literal\">null</span>;
      <span class=\"hljs-keyword\">case</span> <span class=\"hljs-string\">'resolved'</span>: <span class=\"hljs-keyword\">return</span> <span class=\"hljs-literal\">true</span>;
      <span class=\"hljs-keyword\">case</span> <span class=\"hljs-string\">'rejected'</span>: <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>.validationResult;
    }
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-6\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-6\">&#182;</a>
              </div>
              <p>Validate field and trigger some events for mainly <code>UI</code>
@returns a promise that succeeds only when all validations do
or <code>undefined</code> if field is not in the given <code>group</code>.</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  whenValidate: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">{force, group} =  {}</span>) </span>{</pre></div></div>
            
        </li>
        
        
        <li id=\"section-7\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-7\">&#182;</a>
              </div>
              <p>do not validate a field if not the same as given validation group</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">this</span>.refreshConstraints();
    <span class=\"hljs-keyword\">if</span> (group &amp;&amp; !<span class=\"hljs-keyword\">this</span>._isInGroup(group))
      <span class=\"hljs-keyword\">return</span>;

    <span class=\"hljs-keyword\">this</span>.value = <span class=\"hljs-keyword\">this</span>.getValue();</pre></div></div>
            
        </li>
        
        
        <li id=\"section-8\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-8\">&#182;</a>
              </div>
              <p>Field Validate event. <code>this.value</code> could be altered for custom needs</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">this</span>._trigger(<span class=\"hljs-string\">'validate'</span>);

    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>.whenValid({force, <span class=\"hljs-attr\">value</span>: <span class=\"hljs-keyword\">this</span>.value, <span class=\"hljs-attr\">_refreshed</span>: <span class=\"hljs-literal\">true</span>})
      .always(<span class=\"hljs-function\"><span class=\"hljs-params\">()</span> =&gt;</span> { <span class=\"hljs-keyword\">this</span>._reflowUI(); })
      .done(<span class=\"hljs-function\"><span class=\"hljs-params\">()</span> =&gt;</span>   { <span class=\"hljs-keyword\">this</span>._trigger(<span class=\"hljs-string\">'success'</span>); })
      .fail(<span class=\"hljs-function\"><span class=\"hljs-params\">()</span> =&gt;</span>   { <span class=\"hljs-keyword\">this</span>._trigger(<span class=\"hljs-string\">'error'</span>); })
      .always(<span class=\"hljs-function\"><span class=\"hljs-params\">()</span> =&gt;</span> { <span class=\"hljs-keyword\">this</span>._trigger(<span class=\"hljs-string\">'validated'</span>); })
      .pipe(...this._pipeAccordingToValidationResult());
  },

  <span class=\"hljs-attr\">hasConstraints</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-number\">0</span> !== <span class=\"hljs-keyword\">this</span>.constraints.length;
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-9\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-9\">&#182;</a>
              </div>
              <p>An empty optional field does not need validation</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  needsValidation: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">value</span>) </span>{
    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'undefined'</span> === <span class=\"hljs-keyword\">typeof</span> value)
      value = <span class=\"hljs-keyword\">this</span>.getValue();</pre></div></div>
            
        </li>
        
        
        <li id=\"section-10\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-10\">&#182;</a>
              </div>
              <p>If a field is empty and not required, it is valid
Except if <code>data-parsley-validate-if-empty</code> explicitely added, useful for some custom validators</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (!value.length &amp;&amp; !<span class=\"hljs-keyword\">this</span>._isRequired() &amp;&amp; <span class=\"hljs-string\">'undefined'</span> === <span class=\"hljs-keyword\">typeof</span> <span class=\"hljs-keyword\">this</span>.options.validateIfEmpty)
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-literal\">false</span>;

    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-literal\">true</span>;
  },

  <span class=\"hljs-attr\">_isInGroup</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">group</span>) </span>{
    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-built_in\">Array</span>.isArray(<span class=\"hljs-keyword\">this</span>.options.group))
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-number\">-1</span> !== \$.inArray(group, <span class=\"hljs-keyword\">this</span>.options.group);
    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>.options.group === group;
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-11\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-11\">&#182;</a>
              </div>
              <p>Just validate field. Do not trigger any event.
Returns <code>true</code> iff all constraints pass, <code>false</code> if there are failures,
or <code>null</code> if the result can not be determined yet (depends on a promise)
See also <code>whenValid</code>.</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  isValid: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">options</span>) </span>{
    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-built_in\">arguments</span>.length &gt;= <span class=\"hljs-number\">1</span> &amp;&amp; !\$.isPlainObject(options)) {
      Utils.warnOnce(<span class=\"hljs-string\">'Calling isValid on a parsley field without passing arguments as an object is deprecated.'</span>);
      <span class=\"hljs-keyword\">var</span> [force, value] = <span class=\"hljs-built_in\">arguments</span>;
      options = {force, value};
    }
    <span class=\"hljs-keyword\">var</span> promise = <span class=\"hljs-keyword\">this</span>.whenValid(options);
    <span class=\"hljs-keyword\">if</span> (!promise) <span class=\"hljs-comment\">// Excluded via `group`</span>
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-literal\">true</span>;
    <span class=\"hljs-keyword\">return</span> statusMapping[promise.state()];
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-12\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-12\">&#182;</a>
              </div>
              <p>Just validate field. Do not trigger any event.
@returns a promise that succeeds only when all validations do
or <code>undefined</code> if the field is not in the given <code>group</code>.
The argument <code>force</code> will force validation of empty fields.
If a <code>value</code> is given, it will be validated instead of the value of the input.</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  whenValid: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">{force = false, value, group, _refreshed} = {}</span>) </span>{</pre></div></div>
            
        </li>
        
        
        <li id=\"section-13\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-13\">&#182;</a>
              </div>
              <p>Recompute options and rebind constraints to have latest changes</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (!_refreshed)
      <span class=\"hljs-keyword\">this</span>.refreshConstraints();</pre></div></div>
            
        </li>
        
        
        <li id=\"section-14\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-14\">&#182;</a>
              </div>
              <p>do not validate a field if not the same as given validation group</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (group &amp;&amp; !<span class=\"hljs-keyword\">this</span>._isInGroup(group))
      <span class=\"hljs-keyword\">return</span>;

    <span class=\"hljs-keyword\">this</span>.validationResult = <span class=\"hljs-literal\">true</span>;</pre></div></div>
            
        </li>
        
        
        <li id=\"section-15\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-15\">&#182;</a>
              </div>
              <p>A field without constraint is valid</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (!<span class=\"hljs-keyword\">this</span>.hasConstraints())
      <span class=\"hljs-keyword\">return</span> \$.when();</pre></div></div>
            
        </li>
        
        
        <li id=\"section-16\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-16\">&#182;</a>
              </div>
              <p>Value could be passed as argument, needed to add more power to ‘field:validate’</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'undefined'</span> === <span class=\"hljs-keyword\">typeof</span> value || <span class=\"hljs-literal\">null</span> === value)
      value = <span class=\"hljs-keyword\">this</span>.getValue();

    <span class=\"hljs-keyword\">if</span> (!<span class=\"hljs-keyword\">this</span>.needsValidation(value) &amp;&amp; <span class=\"hljs-literal\">true</span> !== force)
      <span class=\"hljs-keyword\">return</span> \$.when();

    <span class=\"hljs-keyword\">var</span> groupedConstraints = <span class=\"hljs-keyword\">this</span>._getGroupedConstraints();
    <span class=\"hljs-keyword\">var</span> promises = [];
    \$.each(groupedConstraints, (_, constraints) =&gt; {</pre></div></div>
            
        </li>
        
        
        <li id=\"section-17\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-17\">&#182;</a>
              </div>
              <p>Process one group of constraints at a time, we validate the constraints
and combine the promises together.</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>      <span class=\"hljs-keyword\">var</span> promise = Utils.all(
        \$.map(constraints, constraint =&gt; <span class=\"hljs-keyword\">this</span>._validateConstraint(value, constraint))
      );
      promises.push(promise);
      <span class=\"hljs-keyword\">if</span> (promise.state() === <span class=\"hljs-string\">'rejected'</span>)
        <span class=\"hljs-keyword\">return</span> <span class=\"hljs-literal\">false</span>; <span class=\"hljs-comment\">// Interrupt processing if a group has already failed</span>
    });
    <span class=\"hljs-keyword\">return</span> Utils.all(promises);
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-18\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-18\">&#182;</a>
              </div>
              <p>@returns a promise</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  _validateConstraint: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\">value, constraint</span>) </span>{
    <span class=\"hljs-keyword\">var</span> result = constraint.validate(value, <span class=\"hljs-keyword\">this</span>);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-19\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-19\">&#182;</a>
              </div>
              <p>Map false to a failed promise</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-literal\">false</span> === result)
      result = \$.Deferred().reject();</pre></div></div>
            
        </li>
        
        
        <li id=\"section-20\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-20\">&#182;</a>
              </div>
              <p>Make sure we return a promise and that we record failures</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">return</span> Utils.all([result]).fail(<span class=\"hljs-function\"><span class=\"hljs-params\">errorMessage</span> =&gt;</span> {
      <span class=\"hljs-keyword\">if</span> (!(<span class=\"hljs-keyword\">this</span>.validationResult <span class=\"hljs-keyword\">instanceof</span> <span class=\"hljs-built_in\">Array</span>))
        <span class=\"hljs-keyword\">this</span>.validationResult = [];
      <span class=\"hljs-keyword\">this</span>.validationResult.push({
        <span class=\"hljs-attr\">assert</span>: constraint,
        <span class=\"hljs-attr\">errorMessage</span>: <span class=\"hljs-string\">'string'</span> === <span class=\"hljs-keyword\">typeof</span> errorMessage &amp;&amp; errorMessage
      });
    });
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-21\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-21\">&#182;</a>
              </div>
              <p>@returns Parsley field computed value that could be overrided or configured in DOM</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  getValue: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">var</span> value;</pre></div></div>
            
        </li>
        
        
        <li id=\"section-22\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-22\">&#182;</a>
              </div>
              <p>Value could be overriden in DOM or with explicit options</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'function'</span> === <span class=\"hljs-keyword\">typeof</span> <span class=\"hljs-keyword\">this</span>.options.value)
      value = <span class=\"hljs-keyword\">this</span>.options.value(<span class=\"hljs-keyword\">this</span>);
    <span class=\"hljs-keyword\">else</span> <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'undefined'</span> !== <span class=\"hljs-keyword\">typeof</span> <span class=\"hljs-keyword\">this</span>.options.value)
      value = <span class=\"hljs-keyword\">this</span>.options.value;
    <span class=\"hljs-keyword\">else</span>
      value = <span class=\"hljs-keyword\">this</span>.\$element.val();</pre></div></div>
            
        </li>
        
        
        <li id=\"section-23\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-23\">&#182;</a>
              </div>
              <p>Handle wrong DOM or configurations</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'undefined'</span> === <span class=\"hljs-keyword\">typeof</span> value || <span class=\"hljs-literal\">null</span> === value)
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-string\">''</span>;

    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>._handleWhitespace(value);
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-24\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-24\">&#182;</a>
              </div>
              <p>Reset UI</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  reset: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">this</span>._resetUI();
    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>._trigger(<span class=\"hljs-string\">'reset'</span>);
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-25\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-25\">&#182;</a>
              </div>
              <p>Destroy Parsley instance (+ UI)</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  destroy: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{</pre></div></div>
            
        </li>
        
        
        <li id=\"section-26\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-26\">&#182;</a>
              </div>
              <p>Field case: emit destroy event to clean UI and then destroy stored instance</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">this</span>._destroyUI();
    <span class=\"hljs-keyword\">this</span>.\$element.removeData(<span class=\"hljs-string\">'Parsley'</span>);
    <span class=\"hljs-keyword\">this</span>.\$element.removeData(<span class=\"hljs-string\">'FieldMultiple'</span>);
    <span class=\"hljs-keyword\">this</span>._trigger(<span class=\"hljs-string\">'destroy'</span>);
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-27\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-27\">&#182;</a>
              </div>
              <p>Actualize options that could have change since previous validation
Re-bind accordingly constraints (could be some new, removed or updated)</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  refreshConstraints: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>.actualizeOptions()._bindConstraints();
  },

  <span class=\"hljs-comment\">/**
  * Add a new constraint to a field
  *
  * @param {String}   name
  * @param {Mixed}    requirements      optional
  * @param {Number}   priority          optional
  * @param {Boolean}  isDomConstraint   optional
  */</span>
  addConstraint: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">name, requirements, priority, isDomConstraint</span>) </span>{

    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-built_in\">window</span>.Parsley._validatorRegistry.validators[name]) {
      <span class=\"hljs-keyword\">var</span> constraint = <span class=\"hljs-keyword\">new</span> Constraint(<span class=\"hljs-keyword\">this</span>, name, requirements, priority, isDomConstraint);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-28\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-28\">&#182;</a>
              </div>
              <p>if constraint already exist, delete it and push new version</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>      <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'undefined'</span> !== <span class=\"hljs-keyword\">this</span>.constraintsByName[constraint.name])
        <span class=\"hljs-keyword\">this</span>.removeConstraint(constraint.name);

      <span class=\"hljs-keyword\">this</span>.constraints.push(constraint);
      <span class=\"hljs-keyword\">this</span>.constraintsByName[constraint.name] = constraint;
    }

    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>;
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-29\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-29\">&#182;</a>
              </div>
              <p>Remove a constraint</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  removeConstraint: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">name</span>) </span>{
    <span class=\"hljs-keyword\">for</span> (<span class=\"hljs-keyword\">var</span> i = <span class=\"hljs-number\">0</span>; i &lt; <span class=\"hljs-keyword\">this</span>.constraints.length; i++)
      <span class=\"hljs-keyword\">if</span> (name === <span class=\"hljs-keyword\">this</span>.constraints[i].name) {
        <span class=\"hljs-keyword\">this</span>.constraints.splice(i, <span class=\"hljs-number\">1</span>);
        <span class=\"hljs-keyword\">break</span>;
      }
    <span class=\"hljs-keyword\">delete</span> <span class=\"hljs-keyword\">this</span>.constraintsByName[name];
    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>;
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-30\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-30\">&#182;</a>
              </div>
              <p>Update a constraint (Remove + re-add)</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  updateConstraint: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">name, parameters, priority</span>) </span>{
    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>.removeConstraint(name)
      .addConstraint(name, parameters, priority);
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-31\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-31\">&#182;</a>
              </div>
              <h1 id=\"internals\">Internals</h1>

            </div>
            
        </li>
        
        
        <li id=\"section-32\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-32\">&#182;</a>
              </div>
              <p>Internal only.
Bind constraints from config + options + DOM</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  _bindConstraints: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">var</span> constraints = [];
    <span class=\"hljs-keyword\">var</span> constraintsByName = {};</pre></div></div>
            
        </li>
        
        
        <li id=\"section-33\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-33\">&#182;</a>
              </div>
              <p>clean all existing DOM constraints to only keep javascript user constraints</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">for</span> (<span class=\"hljs-keyword\">var</span> i = <span class=\"hljs-number\">0</span>; i &lt; <span class=\"hljs-keyword\">this</span>.constraints.length; i++)
      <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-literal\">false</span> === <span class=\"hljs-keyword\">this</span>.constraints[i].isDomConstraint) {
        constraints.push(<span class=\"hljs-keyword\">this</span>.constraints[i]);
        constraintsByName[<span class=\"hljs-keyword\">this</span>.constraints[i].name] = <span class=\"hljs-keyword\">this</span>.constraints[i];
      }

    <span class=\"hljs-keyword\">this</span>.constraints = constraints;
    <span class=\"hljs-keyword\">this</span>.constraintsByName = constraintsByName;</pre></div></div>
            
        </li>
        
        
        <li id=\"section-34\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-34\">&#182;</a>
              </div>
              <p>then re-add Parsley DOM-API constraints</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">for</span> (<span class=\"hljs-keyword\">var</span> name <span class=\"hljs-keyword\">in</span> <span class=\"hljs-keyword\">this</span>.options)
      <span class=\"hljs-keyword\">this</span>.addConstraint(name, <span class=\"hljs-keyword\">this</span>.options[name], <span class=\"hljs-literal\">undefined</span>, <span class=\"hljs-literal\">true</span>);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-35\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-35\">&#182;</a>
              </div>
              <p>finally, bind special HTML5 constraints</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>._bindHtml5Constraints();
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-36\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-36\">&#182;</a>
              </div>
              <p>Internal only.
Bind specific HTML5 constraints to be HTML5 compliant</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  _bindHtml5Constraints: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{</pre></div></div>
            
        </li>
        
        
        <li id=\"section-37\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-37\">&#182;</a>
              </div>
              <p>html5 required</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-literal\">null</span> !== <span class=\"hljs-keyword\">this</span>.element.getAttribute(<span class=\"hljs-string\">'required'</span>))
      <span class=\"hljs-keyword\">this</span>.addConstraint(<span class=\"hljs-string\">'required'</span>, <span class=\"hljs-literal\">true</span>, <span class=\"hljs-literal\">undefined</span>, <span class=\"hljs-literal\">true</span>);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-38\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-38\">&#182;</a>
              </div>
              <p>html5 pattern</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-literal\">null</span> !== <span class=\"hljs-keyword\">this</span>.element.getAttribute(<span class=\"hljs-string\">'pattern'</span>))
      <span class=\"hljs-keyword\">this</span>.addConstraint(<span class=\"hljs-string\">'pattern'</span>, <span class=\"hljs-keyword\">this</span>.element.getAttribute(<span class=\"hljs-string\">'pattern'</span>), <span class=\"hljs-literal\">undefined</span>, <span class=\"hljs-literal\">true</span>);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-39\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-39\">&#182;</a>
              </div>
              <p>range</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">let</span> min = <span class=\"hljs-keyword\">this</span>.element.getAttribute(<span class=\"hljs-string\">'min'</span>);
    <span class=\"hljs-keyword\">let</span> max = <span class=\"hljs-keyword\">this</span>.element.getAttribute(<span class=\"hljs-string\">'max'</span>);
    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-literal\">null</span> !== min &amp;&amp; <span class=\"hljs-literal\">null</span> !== max)
      <span class=\"hljs-keyword\">this</span>.addConstraint(<span class=\"hljs-string\">'range'</span>, [min, max], <span class=\"hljs-literal\">undefined</span>, <span class=\"hljs-literal\">true</span>);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-40\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-40\">&#182;</a>
              </div>
              <p>HTML5 min</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">else</span> <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-literal\">null</span> !== min)
      <span class=\"hljs-keyword\">this</span>.addConstraint(<span class=\"hljs-string\">'min'</span>, min, <span class=\"hljs-literal\">undefined</span>, <span class=\"hljs-literal\">true</span>);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-41\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-41\">&#182;</a>
              </div>
              <p>HTML5 max</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">else</span> <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-literal\">null</span> !== max)
      <span class=\"hljs-keyword\">this</span>.addConstraint(<span class=\"hljs-string\">'max'</span>, max, <span class=\"hljs-literal\">undefined</span>, <span class=\"hljs-literal\">true</span>);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-42\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-42\">&#182;</a>
              </div>
              <p>length</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-literal\">null</span> !== <span class=\"hljs-keyword\">this</span>.element.getAttribute(<span class=\"hljs-string\">'minlength'</span>) &amp;&amp; <span class=\"hljs-literal\">null</span> !== <span class=\"hljs-keyword\">this</span>.element.getAttribute(<span class=\"hljs-string\">'maxlength'</span>))
      <span class=\"hljs-keyword\">this</span>.addConstraint(<span class=\"hljs-string\">'length'</span>, [<span class=\"hljs-keyword\">this</span>.element.getAttribute(<span class=\"hljs-string\">'minlength'</span>), <span class=\"hljs-keyword\">this</span>.element.getAttribute(<span class=\"hljs-string\">'maxlength'</span>)], <span class=\"hljs-literal\">undefined</span>, <span class=\"hljs-literal\">true</span>);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-43\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-43\">&#182;</a>
              </div>
              <p>HTML5 minlength</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">else</span> <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-literal\">null</span> !== <span class=\"hljs-keyword\">this</span>.element.getAttribute(<span class=\"hljs-string\">'minlength'</span>))
      <span class=\"hljs-keyword\">this</span>.addConstraint(<span class=\"hljs-string\">'minlength'</span>, <span class=\"hljs-keyword\">this</span>.element.getAttribute(<span class=\"hljs-string\">'minlength'</span>), <span class=\"hljs-literal\">undefined</span>, <span class=\"hljs-literal\">true</span>);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-44\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-44\">&#182;</a>
              </div>
              <p>HTML5 maxlength</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">else</span> <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-literal\">null</span> !== <span class=\"hljs-keyword\">this</span>.element.getAttribute(<span class=\"hljs-string\">'maxlength'</span>))
      <span class=\"hljs-keyword\">this</span>.addConstraint(<span class=\"hljs-string\">'maxlength'</span>, <span class=\"hljs-keyword\">this</span>.element.getAttribute(<span class=\"hljs-string\">'maxlength'</span>), <span class=\"hljs-literal\">undefined</span>, <span class=\"hljs-literal\">true</span>);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-45\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-45\">&#182;</a>
              </div>
              <p>html5 types</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">var</span> type = <span class=\"hljs-keyword\">this</span>.element.type;</pre></div></div>
            
        </li>
        
        
        <li id=\"section-46\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-46\">&#182;</a>
              </div>
              <p>Small special case here for HTML5 number: integer validator if step attribute is undefined or an integer value, number otherwise</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'number'</span> === type) {
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>.addConstraint(<span class=\"hljs-string\">'type'</span>, [<span class=\"hljs-string\">'number'</span>, {
        <span class=\"hljs-attr\">step</span>: <span class=\"hljs-keyword\">this</span>.element.getAttribute(<span class=\"hljs-string\">'step'</span>) || <span class=\"hljs-string\">'1'</span>,
        <span class=\"hljs-attr\">base</span>: min || <span class=\"hljs-keyword\">this</span>.element.getAttribute(<span class=\"hljs-string\">'value'</span>)
      }], <span class=\"hljs-literal\">undefined</span>, <span class=\"hljs-literal\">true</span>);</pre></div></div>
            
        </li>
        
        
        <li id=\"section-47\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-47\">&#182;</a>
              </div>
              <p>Regular other HTML5 supported types</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    } <span class=\"hljs-keyword\">else</span> <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-regexp\">/^(email|url|range|date)\$/i</span>.test(type)) {
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>.addConstraint(<span class=\"hljs-string\">'type'</span>, type, <span class=\"hljs-literal\">undefined</span>, <span class=\"hljs-literal\">true</span>);
    }
    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>;
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-48\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-48\">&#182;</a>
              </div>
              <p>Internal only.
Field is required if have required constraint without <code>false</code> value</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  _isRequired: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'undefined'</span> === <span class=\"hljs-keyword\">typeof</span> <span class=\"hljs-keyword\">this</span>.constraintsByName.required)
      <span class=\"hljs-keyword\">return</span> <span class=\"hljs-literal\">false</span>;

    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-literal\">false</span> !== <span class=\"hljs-keyword\">this</span>.constraintsByName.required.requirements;
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-49\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-49\">&#182;</a>
              </div>
              <p>Internal only.
Shortcut to trigger an event</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  _trigger: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">eventName</span>) </span>{
    <span class=\"hljs-keyword\">return</span> <span class=\"hljs-keyword\">this</span>.trigger(<span class=\"hljs-string\">'field:'</span> + eventName);
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-50\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-50\">&#182;</a>
              </div>
              <p>Internal only
Handles whitespace in a value
Use <code>data-parsley-whitespace=&quot;squish&quot;</code> to auto squish input value
Use <code>data-parsley-whitespace=&quot;trim&quot;</code> to auto trim input value</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  _handleWhitespace: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">value</span>) </span>{
    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-literal\">true</span> === <span class=\"hljs-keyword\">this</span>.options.trimValue)
      Utils.warnOnce(<span class=\"hljs-string\">'data-parsley-trim-value=\"true\" is deprecated, please use data-parsley-whitespace=\"trim\"'</span>);

    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-string\">'squish'</span> === <span class=\"hljs-keyword\">this</span>.options.whitespace)
      value = value.replace(<span class=\"hljs-regexp\">/\\s{2,}/g</span>, <span class=\"hljs-string\">' '</span>);

    <span class=\"hljs-keyword\">if</span> ((<span class=\"hljs-string\">'trim'</span> === <span class=\"hljs-keyword\">this</span>.options.whitespace) || (<span class=\"hljs-string\">'squish'</span> === <span class=\"hljs-keyword\">this</span>.options.whitespace) || (<span class=\"hljs-literal\">true</span> === <span class=\"hljs-keyword\">this</span>.options.trimValue))
      value = Utils.trimString(value);

    <span class=\"hljs-keyword\">return</span> value;
  },

  <span class=\"hljs-attr\">_isDateInput</span>: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span>(<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">var</span> c = <span class=\"hljs-keyword\">this</span>.constraintsByName.type;
    <span class=\"hljs-keyword\">return</span> c &amp;&amp; c.requirements === <span class=\"hljs-string\">'date'</span>;
  },</pre></div></div>
            
        </li>
        
        
        <li id=\"section-51\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-51\">&#182;</a>
              </div>
              <p>Internal only.
Returns the constraints, grouped by descending priority.
The result is thus an array of arrays of constraints.</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>  _getGroupedConstraints: <span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\"></span>) </span>{
    <span class=\"hljs-keyword\">if</span> (<span class=\"hljs-literal\">false</span> === <span class=\"hljs-keyword\">this</span>.options.priorityEnabled)
      <span class=\"hljs-keyword\">return</span> [<span class=\"hljs-keyword\">this</span>.constraints];

    <span class=\"hljs-keyword\">var</span> groupedConstraints = [];
    <span class=\"hljs-keyword\">var</span> index = {};</pre></div></div>
            
        </li>
        
        
        <li id=\"section-52\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-52\">&#182;</a>
              </div>
              <p>Create array unique of priorities</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    <span class=\"hljs-keyword\">for</span> (<span class=\"hljs-keyword\">var</span> i = <span class=\"hljs-number\">0</span>; i &lt; <span class=\"hljs-keyword\">this</span>.constraints.length; i++) {
      <span class=\"hljs-keyword\">var</span> p = <span class=\"hljs-keyword\">this</span>.constraints[i].priority;
      <span class=\"hljs-keyword\">if</span> (!index[p])
        groupedConstraints.push(index[p] = []);
      index[p].push(<span class=\"hljs-keyword\">this</span>.constraints[i]);
    }</pre></div></div>
            
        </li>
        
        
        <li id=\"section-53\">
            <div class=\"annotation\">
              
              <div class=\"pilwrap \">
                <a class=\"pilcrow\" href=\"#section-53\">&#182;</a>
              </div>
              <p>Sort them by priority DESC</p>

            </div>
            
            <div class=\"content\"><div class='highlight'><pre>    groupedConstraints.sort(<span class=\"hljs-function\"><span class=\"hljs-keyword\">function</span> (<span class=\"hljs-params\">a, b</span>) </span>{ <span class=\"hljs-keyword\">return</span> b[<span class=\"hljs-number\">0</span>].priority - a[<span class=\"hljs-number\">0</span>].priority; });

    <span class=\"hljs-keyword\">return</span> groupedConstraints;
  }

};

<span class=\"hljs-keyword\">export</span> <span class=\"hljs-keyword\">default</span> Field;</pre></div></div>
            
        </li>
        
    </ul>
  </div>
<script>var _gaq=_gaq||[];_gaq.push([\"_setAccount\",\"UA-37229467-1\"]);_gaq.push([\"_trackPageview\"]);(function(){var e=document.createElement(\"script\");e.type=\"text/javascript\";e.async=true;e.src=(\"https:\"==document.location.protocol?\"https://ssl\":\"http://www\")+\".google-analytics.com/ga.js\";var t=document.getElementsByTagName(\"script\")[0];t.parentNode.insertBefore(e,t)})();</script></body>
</html>
", "node_modules/parsleyjs/doc/annotated-source/field.html", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/doc/annotated-source/field.html");
    }
}