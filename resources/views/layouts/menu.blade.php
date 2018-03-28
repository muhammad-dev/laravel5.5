<li class="{{ Request::is('tellers*') ? 'active' : '' }}">
    <a href="{!! route('tellers.index') !!}"><i class="fa fa-edit"></i><span>Tellers</span></a>
</li>

<li class="{{ Request::is('tests*') ? 'active' : '' }}">
    <a href="{!! route('tests.index') !!}"><i class="fa fa-edit"></i><span>Tests</span></a>
</li>

