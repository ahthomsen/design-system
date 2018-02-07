<h1>Forms</h1><br>

<h3>Standard form structure</h3>
	<blockquote class="bg-grey-light">
	<div class="input-contain-shadow bg-white p-8 w-3/5 container mx-auto justify-center items-center ">
	<h2 class=" input-header w-5/6  font-extrabold p-4 mb-4">Log In</h2>
	<div class="input group">
    <input type="text" id="name" required="required"/>
    <label class="label text-grey" for="text">E-mail</label>
	</div>
    <div class="input group">
    <input type="password" id="name" required="required"/>
    <label class="text-grey label" for="password">Password</label>
    </div>
	<button class="input input-button mb-8 w-full">Log In</button>
	</div>
</blockquote>

<blockquote class="bg-grey-light">
	<div class="bg-purple-darker input-contain-shadow p-8 w-3/5 rounded  container mx-auto justify-center items-center">
	<h2 class=" input-header w-5/6  font-extrabold p-4 mb-4 text-grey-light ">Log In</h2>
	<div class="group input bg-white border-0">
    <input  type="text" id="name" required="required"/>
    <label class="text-grey label" for="text">E-mail</label>
    </div>
    <div class="input group bg-white border-0">
    <input type="password" id="name" required="required"/>
    <label class="text-grey label" for="password">Password</label>
    </div>
	<button class="input input-button mb-8 w-full">Log In</button>
	</div>
</blockquote>


<h3 class="mt-8">Standard input field</h3>
<p>How they look:</p>

<blockquote>
	<div class="group input bg-white input-contain-shadow border-0">
    <input  type="text" id="name" required="required"/>
    <label class="text-grey label" for="text">Name</label>
    </div>
</blockquote>

<pre>
	&lt;div class=&quot;group input bg-white input-contain-shadow border-0&quot;&gt;<br>
	&lt;input type=&quot;text&quot; id=&quot;name&quot; required=&quot;required&quot;/&gt;<br>
	&lt;label class=&quot;text-grey label&quot; for=&quot;text&quot;&gt;Name&lt;/label&gt;<br>
	&lt;/div&gt;<br>
</pre>


<blockquote class="bg-purple-darker">
	<div class="group input bg-white border-0">
    <input  type="text" id="name" required="required"/>
    <label class="text-grey label" for="text">Name</label>
    </div>
</blockquote>

<pre>
	&lt;div class=&quot;group input bg-white border-0&quot;&gt;<br>
	&lt;input type=&quot;text&quot; id=&quot;name&quot; required=&quot;required&quot;/&gt;<br>
	&lt;label class=&quot;text-grey label&quot; for=&quot;text&quot;&gt;Name&lt;/label&gt;<br>
	&lt;/div&gt;<br>
</pre>

<h3 class="mt-8">Standard button</h3>
<p><strong>NOTE:</strong>The width of the button must be the same width as the input fields</p>
<blockquote>
	<button class="input input-button w-1/3">Log In</button>
</blockquote>

<pre>
	&lt;button class=&quot;input input-button w-1/3&quot;&gt;Log In&lt;/button&gt;<br>
</pre>


