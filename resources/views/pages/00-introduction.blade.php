<h1>Stuff you need to know</h1>

<p>Before we go into the content lets use a few lines to introduce this thing. Why we build it and how it is supposed to be used.</p>

<h3 class="mt-8">The purpose of our design system</h3>

<p>While we might be a relative small company for having such a system. The idea is that this system will help use our limited resources in more efficient way while also producing a higher quality product.</p>
<ol class="list list-ordered">
	<li class="list-item list-item-ordered"><strong>Consistency</strong> is one of core benefits of having a well-defined set of design rules and patterns. We simply cannot use time on making wrong, inconsistent versions of any of the work that we do.</li>
	<li class="list-item list-item-ordered"><strong>Speed</strong> in building new parts of our web universe is critical. By building a smart, distributed design system we are able to have one source for the majority of all design components that are to be used across out sites.</li>
	<li class="list-item list-item-ordered"><strong>Easier being </strong> a new employee - as we will have one page in which all the relevant informaiton is shared and which sets the standardard for all visual work that are to be developed.</li>
</ol>

<h3 class="mt-8">How we use the design system</h3>

<p>In short the design system is the collection of design decision that have been made throughout of journey of NoMore. It shows the current, unified selection of decisions.</p>
<p>The idea is that everytime we make a new design decision, about a new component or similar, we capture it here and distrbute it to the relevant systems. In this way we ensure that no components needs to be written twice.</p>

<p>The process works like this:</p>
<ol class="list list-ordered">
	<li class="list-item list-item-ordered">A need for new component is identified e.g. by a developer working on the no-more client side</li>
	<li class="list-item list-item-ordered">Someone designs the components in whatever way they like</li>
	<li class="list-item list-item-ordered">The components css (sass) code and markup is implement on this system</li>
	<li class="list-item list-item-ordered">The NPM package is updated and made available for users of the component</li>

</ol>

<h3 class="mt-8">Using components from the design system</h3>
<p>In urder to use the components from the design system (code) the system must use SASS and a precompresser e.g. Laravel mix.</p> 
<p>The steps are simple:</p>
<ol class="list list-ordered">
	<li class="list-item list-item-ordered">
		Install the NPM package into the system:
		<pre>npm install no-more-design-system@latest</pre>
	</li>
	<li class="list-item list-item-ordered">
		Include the relevant components into the respective sass file:
		<pre>
			@import "node_modules/no-more-design-system/typography";
		</pre>
	</li>
	<li class="list-item list-item-ordered">
		Make sure that the node_modules folder is being check e.g. add the following to your Laravel mix file:
		<pre>
			mix.sass('resources/assets/sass/app.scss', 'public/css', {

			 includePaths: ['node_modules']   })
		</pre>
	</li>
	<li class="list-item list-item-ordered">
		When you need to get new packages you simple need to run the following npm command and run then sass compiler: 
		<pre>npm update no-more-design-system</pre>
	</li>
</ol>