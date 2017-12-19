<div class="sidebar-box significantother hidden-md visible-sm">

    <p class="sidebar-box-title">
        <strong>{{ trans('people.quick_nav') }}</strong>
    </p>

    <p class="sidebar-box-paragraph">
        <span class="needs-holiday-card">
            <a href="{{route('settings.users.needs_card', $contact)}}" class="text text-{{$contact->needs_card? 'success': 'danger'}}">
                @if($contact->needs_card)
                <i class="fa fa-check"></i>
                @else
                <i class="fa fa-times"></i>
                @endif
                @lang('people.needs_card')
            </a>
        </span>
        <br>
        <br>
        <ul class="list-group">
            <li class="list-group-item"><a href="#calls" class="action-link"><i class="fa fa-phone"></i> {{ trans('people.call_title') }}</a></li>
            <li class="list-group-item"><a href="#notes" class="action-link"><i class="fa fa-pencil"></i> {{ trans('people.notes_title') }}</a></li>
            <li class="list-group-item"><a href="#activities" class="action-link"><i class="fa fa-bicycle"></i> {{ trans('people.activity_title') }}</a></li>
            <li class="list-group-item"><a href="#reminders" class="action-link"><i class="fa fa-clock-o"></i> {{ trans('people.section_personal_reminders') }}</a></li>
            <li class="list-group-item"><a href="#task" class="action-link"><i class="fa fa-tasks"></i> {{ trans('people.section_personal_tasks') }}</a></li>
            <li class="list-group-item"><a href="#gifts" class="action-link"><i class="fa fa-gift"></i> {{ trans('people.section_personal_gifts') }}</a></li>
            <li class="list-group-item"><a href="#debt" class="action-link"><i class="fa fa-money"></i> {{ trans('people.debt_title') }}</a></li>
        </ul>
    </p>

</div>
