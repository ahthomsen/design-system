

<h1>Using buttons</h1>

<h3 class="mt-4">The default buttons</h3>
<p>When using buttons on most common pages - the main style to used is outlined below. The key is to consider which action is the next / most important action for the user and the use the primary button for that. The primary button should not be overused as it will loose its impact. As a rule - try and have 2-3x the number of secoundary buttons for each primary button.
</p> 
<p> The primary / call to action button:</p>

<blockquote>
    
    <button class="btn btn-pink">Pink Button</button>

</blockquote>

<pre>
	
	&lt;button class=&quot;btn btn-pink&quot;&gt;Pink Button&lt;/button&gt;

</pre>

<p>The secoundary / most commonly used:</p>
<blockquote>
    
    <button class="btn btn-purple">Purple Button</button>

</blockquote>

<pre>
	
	&lt;button class=&quot;btn btn-purple&quot;&gt;Purple Button&lt;/button&gt;

</pre>

<p class="mt-4">The green button</p>
<p>In some cases we need a green button for the UI e.g. adding a credit card or accepting certain terms etc.</p> 
<p>How it looks:</p>
<blockquote>
    
    <button class="btn btn-green">Green Green</button>

</blockquote>

<pre>
	
	&lt;button class=&quot;btn btn-green&quot;&gt;Green Button&lt;/button&gt;

</pre>

<h3 class="mt-8">The inverse buttons</h3>

<p>Sometimes we need to use the less attention driven button on a background color which is the same color as the button. For these cases we use the inverse buttons. However, we do not have a pink version of this button - only a purple and grey one.</p> 
<p>How they look:</p>
<blockquote class="bg-purple-darker">
    
    <button class="btn btn-purple-inverse">Purple Inverse Button</button>

</blockquote>

<pre>
	
	&lt;button class=&quot;btn btn-purple-inverse&quot;&gt;Purple Inverse Buttonn&lt;/button&gt;

</pre>

<blockquote class="bg-grey-light">
    
    <button class="btn btn-grey-inverse">Grey Inverse Button</button>

</blockquote>

<pre>
	
	&lt;button class=&quot;btn btn-grey-inverse&quot;&gt;Grey Inverse Buttonn&lt;/button&gt;

</pre>


<h3 class="mt-8">The dropdown buttons</h3>
<p>How they look:</p>
<blockquote>
<div class="dropdown">
<button onclick="ThisFunction()" class="btn btn-pink dropbtn">Dropdown Pink<i class="arrow arrow-down"></i></button>
  <div id="dropdown" class="dropdown-content contain-shadow mt-6 rounded ">
  		<i class="arrow arrow-up"></i>

    <a href="">Link</a>
    <a href="">Link</a>
    <a href="">Link</a>
    <a href="">Link</a>
  </div>
</div>
</blockquote>

<pre>
  &lt;div class=&quot;dropdown&quot;&gt;<br>
  &lt;button onclick=&quot;ThisFunction()&quot; class=&quot;btn btn-pink dropbtn&quot;&gt;Dropdown Pink&lt;i class=&quot;arrow arrow-down&quot;&gt;&lt;/i&gt;&lt;/button&gt;<br>
  &lt;div id=&quot;dropdown&quot; class=&quot;dropdown-content contain-shadow mt-6 rounded&quot;&gt;<br>
  &lt;i class=&quot;arrow arrow-up&quot;&gt;&lt;/i&gt;<br>
  &lt;a href=&quot;#link&quot;&gt;Link&lt;/a&gt;<br>
  &lt;a href=&quot;#link&quot;&gt;Link&lt;/a&gt;<br>
  &lt;a href=&quot;#link&quot;&gt;Link&lt;/a&gt;<br>
  &lt;a href=&quot;#link&quot;&gt;Link&lt;/a&gt;<br>
  &lt;/div&gt;<br>
  &lt;/div&gt;
</pre>


<blockquote class="bg-purple-darker">
    
    <div class="dropdown-purple">
<button onclick="ThisFunctionPurple()" class="btn btn-purple-inverse dropbtn-purple">Dropdown Purple<i class="arrow arrow-down"></i></button>
  <div id="dropdown-purple" class="dropdown-content-purple mt-6 rounded">
  	<i class="arrow arrow-up"></i>
    <a href="">Link</a>
    <a href="">Link</a>
    <a href="">Link</a>
    <a href="">Link</a>
  </div>
</div>

</blockquote>


<pre>
  &lt;div class=&quot;dropdown-purple&quot;&gt;<br>
  &lt;button onclick=&quot;ThisFunctionPurple()&quot; class=&quot;btn btn-purple-inverse dropbtn-purple&quot;&gt;Dropdown Purple&lt;i class=&quot;arrow arrow-down&quot;&gt;&lt;/i&gt;&lt;/button&gt;<br>
  &lt;div id=&quot;dropdown-purple&quot; class=&quot;dropdown-content contain-shadow mt-6 rounded&quot;&gt;<br>
  &lt;i class=&quot;arrow arrow-up&quot;&gt;&lt;/i&gt;<br>
  &lt;a href=&quot;#link&quot;&gt;Link&lt;/a&gt;<br>
  &lt;a href=&quot;#link&quot;&gt;Link&lt;/a&gt;<br>
  &lt;a href=&quot;#link&quot;&gt;Link&lt;/a&gt;<br>
  &lt;a href=&quot;#link&quot;&gt;Link&lt;/a&gt;<br>
  &lt;/div&gt;<br>
  &lt;/div&gt;
</pre>





<script>
function ThisFunction() {
    document.getElementById("dropdown").classList.toggle("show");
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>


<script>
function ThisFunctionPurple() {
    document.getElementById("dropdown-purple").classList.toggle("show");
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn-purple')) {
    var dropdowns = document.getElementsByClassName("dropdown-content-purple");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>