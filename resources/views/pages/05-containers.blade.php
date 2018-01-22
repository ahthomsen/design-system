	<h1>Standard containers</h1>

<p>Across the system we are using containers that contain various forms of content. These come in different sizes and styles, but they share a list of common properties that we describe here. </p>

<h3>The basic, neutral contain container</h3>
<p>To make the container visible we have added some basic content and given it grey background - however this is not part of the basic properties</p>

<blockquote>
    
    <div class="contain bg-grey-light">
    	<h3>Some heading</h3>
    	<p>Some loren ipsum like text that im just writing on the spot - so do not please focus on the grammer or the typose - cuz there will be many of them.</p>
    </div>

</blockquote>

<pre>
	
&lt;div class=&quot;contain bg-grey-light&quot;&gt;<br>
	&lt;h3&gt;Some heading&lt;/h3&gt;<br>
	&lt;p&gt;Some loren ipsum like text that im just writing on the spot - so do not please focus on the grammer or the typose - cuz there will be many of them.&lt;/p&gt;
&lt;/div&gt;

</pre>

<p>Note how the container is mobile responsive as default and will convert text to be center aligned and decrease margins when the view become below mobile view</p>

<h3 class="mt-8"> Drop-shadow container example</h3>

<p>In some we want to make a box / container standard out from the the rest of the elements. The way we do that is by adding a simple box shadow as illustrated in the example below. Note we have decided to make a separate class for the box shadow element as it should act slightly different on certain screen sizes:</p>

<blockquote>
    
    <div class="contain contain-shadow">
    	<h3>Some new heading</h3>
    	<p>Some loren ipsum like text that im just writing on the spot - so do not please focus on the grammer or the typose - cuz there will be many of them.</p>
    </div>

</blockquote>

<pre>
	
&lt;div class=&quot;contain contain-shadow&quot;&gt;<br>
	&lt;h3&gt;Some new heading&lt;/h3&gt;<br>
	&lt;p&gt;Some loren ipsum like text that im just writing on the spot - so do not please focus on the grammer or the typose - cuz there will be many of them.&lt;/p&gt;
&lt;/div&gt;

</pre>
