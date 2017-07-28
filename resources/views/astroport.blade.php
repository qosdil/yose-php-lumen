<div id="astroport-name">
	astroport-name
</div>
@if(!empty($name))
<div id="gate-1" class="occupied">
@else
<div id="gate-1" class="free">
@endif
	<div id="ship-1">
		@if(!empty($name))
		{{ $name }}
		@else
		ship-1
		@endif
	</div>
</div>
<div id="gate-2">
	<div id="ship-2">ship-2</div>
</div>
<div id="gate-3">
	<div id="ship-3">ship-3</div>
</div>
<form method="post">
Ship <input id="ship" name="ship" type="text"> <button type="submit" id="dock">Dock</button>
</form>

@if(!empty($name))
<div id="info" class="">
	This ship has been docked at gate 1
</div>
@else
<div id="info" class="hidden">
	This ship has been docked at gate 1
</div>
@endif
<style>
.hidden {
	display:none;
}
.occupied {
	background: grey;
}
</style>