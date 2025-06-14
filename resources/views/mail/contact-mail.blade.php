@component('mail::message')
## Details

- **Name:** {{ $data->name }}
- **Phone No.:** +{{ $data->country_code . ' ' . $data->phone }}
- **Email:** {{ $data->email }}
- **Configuration Required:** {{ $data->configuration_required }}
@endcomponent
