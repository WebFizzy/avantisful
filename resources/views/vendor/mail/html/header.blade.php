<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img class="mx-auto mw-100" src="{{ $message->embed(asset('/images/avantiswealth.png')) }}" alt="Avantis wealth">
<img src="{{ public_path('storage/images/avantiswealth.png') }}" class="logo" alt="{{ config('app.name') }}">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
