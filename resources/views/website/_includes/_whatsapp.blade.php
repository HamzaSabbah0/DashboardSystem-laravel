<div class="whatsapp-contact" style="{{ app()->getLocale() == 'ar' ? 'left:30px' : 'right: 30px' }}">
    @php
        $item = \App\Models\Setting::first();
    @endphp
    @if (isset($item))
        <a href="https://wa.me/{{ $item['whatsapp_number'] }}" target="_blank">
            <img src="{{ asset('website/assets/images/Whatsapp.svg') }}" alt="Whatsapp">
        </a>
    @endif
</div>
