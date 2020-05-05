@if (Auth::guard('web')->check())
	<p class="text-success">
		You are Loged In as a <strong>User</strong>
		
	</p>
	@else
	<p class="text-danger">
		You are Loged out as a <strong>User</strong>
		
	</p>
	{{-- expr --}}
@endif
@if (Auth::guard('admin')->check())
	<p class="text-success">
		You are Loged In as a <strong>Admin</strong>
		
	</p>
	@else
	<p class="text-danger">
		You are Loged out as a <strong>Admin</strong>
		
	</p>
@endif