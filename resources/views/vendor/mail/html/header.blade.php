@props(['url'])
<tr>
    <td class="header">
        <a href="{{ route('index') }}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
                <img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
            @else
                <img src="{{ asset('frontend/images/prefer-logo.png') }}" class="logo" style="width: 100% !important;" alt="Lodha Logo">
            @endif
        </a>
    </td>
</tr>
