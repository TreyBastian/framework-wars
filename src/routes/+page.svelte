<script>
	let count = $state(5);

	let updateCount = () => count++;
</script>

<h1>Welcome to SvelteKit</h1>
<p>Visit <a href="https://svelte.dev/docs/kit">svelte.dev/docs/kit</a> to read the documentation</p>
<p>Hi Chat!</p>

<p>The count is {count}</p>
<button onclick={updateCount}>Click</button>
