@if(Auth::guard('web')->check())
	<p class="text-success">
		You are logged in as a user
	</p>
@else
	<p class="text-danger">
		You are logged out as a user
	</p>
@endif

@if(Auth::guard('admin')->check())
	<p class="text-success">
		You are logged in as admin
	</p>
@else
	<p class="text-danger">
		You are logged out as admin
	</p>
@endif

@if(Auth::guard('adviser')->check())
	<p class="text-success">
		You are logged in as adviser
	</p>
@else
	<p class="text-danger">
		You are logged out as adviser
	</p>
@endif

@if(Auth::guard('aposys')->check())
	<p class="text-success">
		You are logged in as aposys
	</p>
@else
	<p class="text-danger">
		You are logged out as aposys
	</p>
@endif

@if(Auth::guard('cashier')->check())
	<p class="text-success">
		You are logged in as cashier
	</p>
@else
	<p class="text-danger">
		You are logged out as cashier
	</p>
@endif

@if(Auth::guard('e2e_ojt')->check())
	<p class="text-success">
		You are logged in as ojt
	</p>
@else
	<p class="text-danger">
		You are logged out as ojt
	</p>
@endif

@if(Auth::guard('registrar')->check())
	<p class="text-success">
		You are logged in as registrar
	</p>
@else
	<p class="text-danger">
		You are logged out as registrar
	</p>
@endif

@if(Auth::guard('student_assistant')->check())
	<p class="text-success">
		You are logged in as student assistant
	</p>
@else
	<p class="text-danger">
		You are logged out as student assistant
	</p>
@endif